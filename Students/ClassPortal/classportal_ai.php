
<?php
// ===== AI Smart Scheduling & Progress Monitoring Handler =====
// Drop-in: place this file on a PHP server with internet access.
// Set your OpenAI API key via environment variable OPENAI_API_KEY or define('OPENAI_API_KEY','sk-...');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ai_action'])) {
    header('Content-Type: application/json');
    $action = $_POST['ai_action'];
    $tasksJson = $_POST['tasks_json'] ?? '[]';
    $context = $_POST['context'] ?? '';
    $model = $_POST['ai_model'] ?? 'gpt-4o-mini';
    $now = date('c');

    // Basic validation
    $tasks = json_decode($tasksJson, true);
    if (!is_array($tasks)) { $tasks = []; }

    // Compose a system prompt
    $sys = "You are an assistant for an LMS. You build optimized study schedules, track progress, and flag risk. "
         . "Always return concise JSON following the given schema. Today: {$now}.";

    // Compose user prompt with schema
    $schema = [
        "type" => "object",
        "properties" => [
            "plan" => [
                "type" => "array",
                "items" => [
                    "type" => "object",
                    "properties" => [
                        "date" => ["type"=>"string", "description"=>"YYYY-MM-DD"],
                        "slots" => [
                            "type"=>"array",
                            "items"=>[
                                "type"=>"object",
                                "properties"=>[
                                    "taskId"=>["type"=>"string"],
                                    "taskTitle"=>["type"=>"string"],
                                    "course"=>["type"=>"string"],
                                    "start"=>["type"=>"string","description"=>"HH:MM 24h"],
                                    "end"=>["type"=>"string","description"=>"HH:MM 24h"],
                                    "focusNote"=>["type"=>"string"]
                                ],
                                "required"=>["taskId","taskTitle","start","end"]
                            ]
                        ]
                    ],
                    "required"=>["date","slots"]
                ]
            ],
            "progress_feedback" => ["type"=>"string"],
            "at_risk_tasks" => ["type"=>"array", "items"=>["type"=>"string"]],
            "tips" => ["type"=>"array", "items"=>["type"=>"string"]]
        ],
        "required"=>["plan","progress_feedback","at_risk_tasks","tips"]
    ];
    $prompt = [
        "role" => "user",
        "content" => "Given these tasks (JSON) and context, generate a 7-day study plan that balances workload, respects due dates, highlights at-risk tasks, and provides progress feedback and tips. "
                   . "Tasks JSON: ".json_encode($tasks).". "
                   . "Context: {$context}. Return JSON ONLY that conforms to this JSON Schema: ".json_encode($schema)."."
    ];

    // Helper: OpenAI chat call via curl (JSON mode). Uses beta 'response_format' for strict JSON if supported.
    function call_openai_json($model, $system_prompt, $user_prompt_array) {
        $apiKey = getenv('OPENAI_API_KEY');
        if (!$apiKey && defined('OPENAI_API_KEY')) { $apiKey = OPENAI_API_KEY; }

        if (!$apiKey) {
            return [false, "NO_API_KEY"];
        }

        $url = "https://api.openai.com/v1/chat/completions";
        $payload = [
            "model" => $model,
            "messages" => [
                ["role"=>"system","content"=>$system_prompt],
                $user_prompt_array
            ],
            "response_format" => ["type"=>"json_object"],
            "temperature" => 0.2
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Authorization: Bearer ".$apiKey
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        $res = curl_exec($ch);
        if (curl_errno($ch)) {
            $err = curl_error($ch);
            curl_close($ch);
            return [false, $err];
        }
        $status = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);

        if ($status >= 200 && $status < 300) {
            $data = json_decode($res, true);
            $content = $data["choices"][0]["message"]["content"] ?? "{}";
            return [true, $content];
        } else {
            return [false, $res];
        }
    }

    // If API key missing, do heuristic fallback
    if ($action === 'suggest_schedule' || $action === 'progress_feedback' || $action === 'predict_risk') {
        // Try OpenAI first
        [$ok, $jsonText] = call_openai_json($model, $sys, $prompt);
        if ($ok && $jsonText) {
            echo $jsonText;
            exit;
        }

        // Fallback: simple earliest-due-first scheduler & risk check
        // Expect each task: {id,title,course,dueDate,estimateHours,priority,progress(0-100)}
        usort($tasks, function($a,$b){
            return strcmp($a['dueDate'] ?? '9999-12-31', $b['dueDate'] ?? '9999-12-31');
        });
        $today = new DateTime();
        $plan = [];
        for ($d=0; $d<7; $d++) {
            $dateObj = (clone $today)->modify("+$d day");
            $date = $dateObj->format('Y-m-d');
            $slots = [];
            $remaining = 4; // 4h/day default cap
            foreach ($tasks as &$t) {
                $left = max(0, ($t['estimateHours'] ?? 1) * (1 - ($t['progress'] ?? 0)/100.0));
                if ($left <= 0) continue;
                if ($remaining <= 0) break;
                $alloc = min($left, $remaining, 2); // allocate in 2h chunks
                $startH = 16 + count($slots)*2; // start 4pm onwards for demo
                $endH = $startH + $alloc;
                $slots[] = [
                    "taskId" => (string)($t['id'] ?? uniqid('t_')),
                    "taskTitle" => $t['title'] ?? 'Task',
                    "course" => $t['course'] ?? '',
                    "start" => sprintf("%02d:00", $startH % 24),
                    "end" => sprintf("%02d:00", $endH % 24),
                    "focusNote" => "Focus on high-impact sub-tasks."
                ];
                // reduce
                $t['estimateHours'] = ($t['estimateHours'] ?? 1) - $alloc;
                $remaining -= $alloc;
            }
            $plan[] = ["date"=>$date, "slots"=>$slots];
        }
        // Risk: tasks due within 3 days with progress < 50
        $atRisk = [];
        foreach ($tasks as $t) {
            $due = isset($t['dueDate']) ? new DateTime($t['dueDate']) : null;
            if ($due) {
                $diff = $today->diff($due)->days;
                if ($due >= $today && $diff <= 3 && (($t['progress'] ?? 0) < 50)) {
                    $atRisk[] = (string)($t['id'] ?? $t['title'] ?? "task");
                }
            }
        }
        $resp = [
            "plan"=>$plan,
            "progress_feedback"=>"Fallback heuristic used. Prioritized earliest due dates and spread work ~4h/day.",
            "at_risk_tasks"=>$atRisk,
            "tips"=>[
                "Break tasks into 25–50 minute focus blocks with short breaks.",
                "Update progress after each session to improve future plans."
            ]
        ];
        echo json_encode($resp);
        exit;
    }

    echo json_encode(["error"=>"unknown ai_action"]);
    exit;
}
// ===== End AI Handler =====
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS3</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <style>
    @import url("../style.css");

    /* Make sidebar scrollable in landscape mode on mobile devices */
    @media (max-width: 768px) and (orientation: landscape) {
      .sidebar {
        max-height: 100vh;
        overflow-y: auto;
      }
    }
  </style>

<!-- AI Smart Scheduler Assets -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
  .ai-card { border-radius: 1rem; }
  .pill { display:inline-block; padding:4px 10px; border-radius:999px; background:#eef; margin:2px; font-size:12px; }
  .ai-badge { padding:2px 8px; border-radius:999px; background:#e8fff3; color:#0a7f45; font-size:12px; border:1px solid #b8f0d0;}
  .ai-risk { background:#fff0f0; color:#b00020; border:1px solid #ffc4c4;}
  .scroll-x { overflow-x:auto; white-space:nowrap; }
  .slot { border:1px dashed #ccd; border-radius:10px; padding:8px; margin:6px 0; }
</style>

</head>

<body>

  <!-- navbar -->

  <?php include '../sidenav.php'; ?>
  <div class="main-content flex-grow-1">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="container my-5">
          <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">
           

        <!-- Class Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex align-items-center">
            <i class="bi bi-journal-bookmark-fill text-primary fs-1 me-3"></i>
            <div>
              <h3 class="mb-0 fw-bold">Algebra 101 – Class Portal</h3>
              <p class="text-muted small mb-0">Professor: Dr. Juan Dela Cruz</p>
            </div>
          </div>
          <a href="#" class="btn btn-outline-primary">
            <i class="bi bi-box-arrow-left me-2"></i> Back to Dashboard
          </a>
        </div>

        <!-- Sections Grid -->
        <div class="row g-4">

          <!-- Lesson Materials -->
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <div class="card-body text-center">
                <i class="bi bi-upload text-info fs-1 mb-2"></i>
                <h6 class="fw-bold">Lesson Materials</h6>
                <p class="text-muted small">Access files, readings, and videos shared by your professor.</p>
                <a href="#" class="btn btn-outline-info btn-sm">View Materials</a>
              </div>
            </div>
          </div>

          <!-- Assignments -->
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <div class="card-body text-center">
                <i class="bi bi-pencil-square text-success fs-1 mb-2"></i>
                <h6 class="fw-bold">Assignments</h6>
                <p class="text-muted small">Submit homework and track deadlines easily.</p>
                <a href="#" class="btn btn-outline-success btn-sm">View Assignments</a>
              </div>
            </div>
          </div>

          <!-- Online Quizzes -->
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <div class="card-body text-center">
                <i class="bi bi-question-circle-fill text-warning fs-1 mb-2"></i>
                <h6 class="fw-bold">Online Quizzes</h6>
                <p class="text-muted small">Take quizzes and review your scores.</p>
                <a href="#" class="btn btn-outline-warning btn-sm">Start Quiz</a>
              </div>
            </div>
          </div>

          <!-- Virtual Class -->
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <div class="card-body text-center">
                <i class="bi bi-camera-video-fill text-danger fs-1 mb-2"></i>
                <h6 class="fw-bold">Virtual Class</h6>
                <p class="text-muted small">Join live lectures and discussions via Zoom/Meet.</p>
                <a href="#" class="btn btn-outline-danger btn-sm">Join Now</a>
              </div>
            </div>
          </div>

          <!-- Progress Tracking -->
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <div class="card-body text-center">
                <i class="bi bi-bar-chart-fill text-primary fs-1 mb-2"></i>
                <h6 class="fw-bold">Progress Tracking</h6>
                <p class="text-muted small">Monitor your learning progress and completion.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">View Progress</a>
              </div>
            </div>
          </div>

          <!-- Feedback & Comments -->
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
              <div class="card-body text-center">
                <i class="bi bi-chat-dots-fill text-secondary fs-1 mb-2"></i>
                <h6 class="fw-bold">Feedback & Comments</h6>
                <p class="text-muted small">Read feedback from professors and interact with peers.</p>
                <a href="#" class="btn btn-outline-secondary btn-sm">View Feedback</a>
              </div>
            </div>
          </div>

        </div> <!-- end row -->

      </div>
    </div>
  </div>
</div>

            </div> <!-- card-body -->
          </div> <!-- card -->
        </div> <!-- container my-5 -->
      </div> <!-- col -->
    </div> <!-- row -->
  </div> <!-- container -->
</div> <!-- main-content -->


  <footer class="mt-auto bg-light">
    <div class="container text-center">
      <p class="text-muted">© 2023 Your Company. All rights reserved.</p>
    </div>
  </footer>


  </style>

<!-- ========== AI: Smart Task Scheduling & Progress Monitoring ========== -->
<section class="container my-4">
  <div class="card ai-card shadow-lg">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-between flex-wrap">
        <h3 class="mb-0">🤖 AI Smart Scheduler & Progress Monitor</h3>
        <span class="ai-badge">Beta</span>
      </div>
      <p class="text-muted mb-3">Enter tasks and let AI create a 7‑day plan, track progress, and flag risks.</p>

      <div class="row g-3">
        <div class="col-lg-5">
          <div class="card h-100">
            <div class="card-header fw-semibold">Tasks</div>
            <div class="card-body">
              <form id="taskForm" class="row g-2">
                <div class="col-12">
                  <label class="form-label">Title</label>
                  <input class="form-control" id="t_title" placeholder="e.g., Module 3 Quiz" required>
                </div>
                <div class="col-6">
                  <label class="form-label">Course</label>
                  <input class="form-control" id="t_course" placeholder="e.g., IT 301">
                </div>
                <div class="col-6">
                  <label class="form-label">Due Date</label>
                  <input type="date" class="form-control" id="t_due" required>
                </div>
                <div class="col-6">
                  <label class="form-label">Estimate Hours</label>
                  <input type="number" min="0.5" step="0.5" class="form-control" id="t_hours" value="2">
                </div>
                <div class="col-6">
                  <label class="form-label">Priority</label>
                  <select class="form-select" id="t_priority">
                    <option>High</option>
                    <option selected>Medium</option>
                    <option>Low</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Progress (%)</label>
                  <input type="range" class="form-range" id="t_progress" min="0" max="100" value="0" oninput="document.getElementById('t_progress_val').innerText=this.value+'%'">
                  <div class="text-end small"><span id="t_progress_val">0%</span></div>
                </div>
                <div class="col-12 d-grid">
                  <button class="btn btn-primary" type="submit">Add Task</button>
                </div>
              </form>

              <hr>
              <div id="taskList" class="small"></div>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="card h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
              <span class="fw-semibold">Plan & Insights</span>
              <div>
                <button class="btn btn-sm btn-outline-secondary" id="btnGenerate">Generate Plan</button>
                <button class="btn btn-sm btn-outline-success" id="btnSavePlan">Save</button>
              </div>
            </div>
            <div class="card-body">
              <div class="mb-2">
                <label class="form-label">Context (optional)</label>
                <input class="form-control" id="context" placeholder="e.g., I’m free 6–10pm on weekdays; prefer math before coding.">
              </div>
              <div id="riskPanel" class="mb-2"></div>
              <div class="scroll-x" id="planView"></div>
              <canvas id="progressChart" class="mt-3"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
(function(){
  const tasks = JSON.parse(localStorage.getItem('ai_tasks')||'[]');
  let planResp = null;

  function uid(){ return 't_'+Math.random().toString(36).slice(2,9); }

  function renderTasks(){
    const wrap = document.getElementById('taskList');
    if(!tasks.length){ wrap.innerHTML = '<em>No tasks yet.</em>'; return; }
    wrap.innerHTML = tasks.map(t => `
      <div class="border rounded p-2 mb-2">
        <div class="d-flex justify-content-between">
          <div>
            <div class="fw-semibold">${t.title} <span class="pill">${t.course||''}</span></div>
            <div>Due: <strong>${t.dueDate}</strong> • Est: ${t.estimateHours}h • Priority: ${t.priority} • Progress: ${t.progress}%</div>
          </div>
          <div>
            <button class="btn btn-sm btn-outline-primary me-1" onclick="updateProgress('${t.id}',10)">+10%</button>
            <button class="btn btn-sm btn-outline-danger" onclick="removeTask('${t.id}')">Remove</button>
          </div>
        </div>
      </div>
    `).join('');
    localStorage.setItem('ai_tasks', JSON.stringify(tasks));
  }

  function removeTask(id){
    const idx = tasks.findIndex(t=>t.id===id);
    if(idx>-1){ tasks.splice(idx,1); renderTasks(); drawChart(); }
  }

  window.updateProgress = function(id, inc){
    const t = tasks.find(t=>t.id===id);
    if(!t) return;
    t.progress = Math.min(100, (t.progress||0)+inc);
    renderTasks(); drawChart();
  }

  document.getElementById('taskForm').addEventListener('submit', (e)=>{
    e.preventDefault();
    const t = {
      id: uid(),
      title: document.getElementById('t_title').value.trim(),
      course: document.getElementById('t_course').value.trim(),
      dueDate: document.getElementById('t_due').value,
      estimateHours: parseFloat(document.getElementById('t_hours').value||'1'),
      priority: document.getElementById('t_priority').value,
      progress: parseInt(document.getElementById('t_progress').value||'0',10)
    };
    tasks.push(t);
    e.target.reset();
    document.getElementById('t_progress_val').innerText = '0%';
    renderTasks(); drawChart();
  });

  async function generatePlan(){
    const fd = new FormData();
    fd.append('ai_action','suggest_schedule');
    fd.append('tasks_json', JSON.stringify(tasks));
    fd.append('context', document.getElementById('context').value || '');
    fd.append('ai_model','gpt-4o-mini'); // change if needed

    const res = await fetch(location.href, { method:'POST', body: fd });
    let data = null;
    try { data = await res.json(); } catch(e){ console.error('Bad JSON', e); }
    if(!data){ alert('AI failed. Using fallback.'); return; }
    planResp = data;
    renderPlan(data);
    renderRisk(data);
    drawChart(data);
    localStorage.setItem('ai_last_plan', JSON.stringify(data));
  }

  function renderRisk(data){
    const panel = document.getElementById('riskPanel');
    const atRisk = data?.at_risk_tasks || [];
    const tips = data?.tips || [];
    panel.innerHTML = `
      <div class="d-flex flex-wrap align-items-center mb-2">
        <span class="ai-badge ${atRisk.length?'ai-risk':''}">At risk: ${atRisk.length}</span>
        ${atRisk.map(id=>`<span class="pill">${id}</span>`).join('')}
      </div>
      <div class="small text-muted">${data?.progress_feedback || ''}</div>
      <ul class="small mt-2">${tips.map(t=>`<li>${t}</li>`).join('')}</ul>
    `;
  }

  function renderPlan(data){
    const view = document.getElementById('planView');
    const plan = data?.plan || [];
    view.innerHTML = plan.map(day => `
      <div class="d-inline-block align-top border rounded p-2 m-1" style="min-width:240px;">
        <div class="fw-semibold">${day.date}</div>
        ${day.slots && day.slots.length ? day.slots.map(s => `
          <div class="slot">
            <div>${s.start}–${s.end}</div>
            <div class="fw-semibold">${s.taskTitle}</div>
            <div class="small text-muted">${s.course||''}</div>
            <div class="small">${s.focusNote||''}</div>
          </div>
        `).join('') : '<div class="text-muted">No slots</div>'}
      </div>
    `).join('');
  }

  let chart;
  function drawChart(data){
    const ctx = document.getElementById('progressChart').getContext('2d');
    const labels = tasks.map(t=>t.title);
    const vals = tasks.map(t=>t.progress||0);
    if(chart){ chart.destroy(); }
    chart = new Chart(ctx, {
      type: 'bar',
      data: { labels, datasets: [{ label:'Progress %', data: vals }]},
      options: { scales: { y: { beginAtZero:true, max:100 } } }
    });
  }

  // Buttons
  document.getElementById('btnGenerate').addEventListener('click', generatePlan);
  document.getElementById('btnSavePlan').addEventListener('click', ()=>{
    alert('Saved locally. Connect to DB to persist.');
  });

  // Init
  renderTasks();
  const last = localStorage.getItem('ai_last_plan');
  if(last){ try { renderPlan(JSON.parse(last)); } catch(_){} }
  drawChart();
})();
</script>
<!-- ========== /AI Section ========== -->

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>