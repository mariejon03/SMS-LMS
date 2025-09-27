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
    @import url("../../style.css");

    /* Make sidebar scrollable in landscape mode on mobile devices */
    @media (max-width: 768px) and (orientation: landscape) {
      .sidebar {
        max-height: 100vh;
        overflow-y: auto;
      }
    }
     .sidebar {
      background-color: #084d92ff;
      color: #fff;
    }
    .sidebar .nav-link {
      color: #fff;
      transition: background-color 0.2s ease;
    }
    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background-color: #ffffffff;
    }
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
 
        

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex align-items-center">
            <i class="bi bi-journal-text text-primary fs-1 me-3"></i>
            <div>
              <h3 class="mb-0 fw-bold">Online Quizzes</h3>
              <p class="text-muted small mb-0">Choose a subject and start your quiz</p>
            </div>
          </div>
          <a href="../ClassPortal/classportal.php" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-2"></i> Back to Courses
          </a>
        </div>

        <!-- Subject Tabs -->
        <ul class="nav nav-tabs mb-4" id="quizTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="math-tab" data-bs-toggle="tab" data-bs-target="#math" type="button" role="tab">Math</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="science-tab" data-bs-toggle="tab" data-bs-target="#science" type="button" role="tab">Science</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="english-tab" data-bs-toggle="tab" data-bs-target="#english" type="button" role="tab">English</button>
          </li>
        </ul>

        <div class="tab-content" id="quizTabContent">
          <!-- Math Quizzes -->
          <div class="tab-pane fade show active" id="math" role="tabpanel">
            <h5 class="fw-bold mb-3">Math Quizzes</h5>
            <div class="row g-3">
              <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                    <i class="bi bi-calculator fs-1 text-primary mb-2"></i>
                    <h6 class="fw-bold">Algebra Basics</h6>
                    <p class="text-muted small mb-1">10 Questions | 20 mins</p>
                    <p class="small"><strong>Deadline:</strong> Aug 30, 2025</p>
                    <a href="#" class="btn btn-outline-primary btn-sm w-100">Start Quiz</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                    <i class="bi bi-graph-up fs-1 text-success mb-2"></i>
                    <h6 class="fw-bold">Geometry Basics</h6>
                    <p class="text-muted small mb-1">15 Questions | 25 mins</p>
                    <p class="small"><strong>Deadline:</strong> Sep 02, 2025</p>
                    <a href="#" class="btn btn-outline-success btn-sm w-100">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Science Quizzes -->
          <div class="tab-pane fade" id="science" role="tabpanel">
            <h5 class="fw-bold mb-3">Science Quizzes</h5>
            <div class="row g-3">
              <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                    <i class="bi bi-lightbulb-fill fs-1 text-warning mb-2"></i>
                    <h6 class="fw-bold">Physics Laws</h6>
                    <p class="text-muted small mb-1">12 Questions | 30 mins</p>
                    <p class="small"><strong>Deadline:</strong> Sep 05, 2025</p>
                    <a href="#" class="btn btn-outline-warning btn-sm w-100">Start Quiz</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                    <i class="bi bi-droplet-fill fs-1 text-info mb-2"></i>
                    <h6 class="fw-bold">Biology – Cells</h6>
                    <p class="text-muted small mb-1">8 Questions | 15 mins</p>
                    <p class="small"><strong>Deadline:</strong> Sep 06, 2025</p>
                    <a href="#" class="btn btn-outline-info btn-sm w-100">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- English Quizzes -->
          <div class="tab-pane fade" id="english" role="tabpanel">
            <h5 class="fw-bold mb-3">English Quizzes</h5>
            <div class="row g-3">
              <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                    <i class="bi bi-book-half fs-1 text-danger mb-2"></i>
                    <h6 class="fw-bold">Grammar Basics</h6>
                    <p class="text-muted small mb-1">10 Questions | 20 mins</p>
                    <p class="small"><strong>Deadline:</strong> Sep 08, 2025</p>
                    <a href="#" class="btn btn-outline-danger btn-sm w-100">Start Quiz</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                    <i class="bi bi-chat-left-text-fill fs-1 text-secondary mb-2"></i>
                    <h6 class="fw-bold">Reading Comprehension</h6>
                    <p class="text-muted small mb-1">20 Questions | 30 mins</p>
                    <p class="small"><strong>Deadline:</strong> Sep 10, 2025</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100">Start Quiz</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Quiz History -->
        <div class="mt-5">
          <h6 class="fw-bold mb-3">Previous Quiz Results</h6>
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="table-primary">
                <tr>
                  <th>Subject</th>
                  <th>Quiz</th>
                  <th>Date Taken</th>
                  <th>Score</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Math</td>
                  <td>Algebra Pre-Test</td>
                  <td>2025-08-15</td>
                  <td>8/10</td>
                  <td><span class="badge bg-success">Passed</span></td>
                </tr>
                <tr>
                  <td>Science</td>
                  <td>Basic Chemistry</td>
                  <td>2025-08-12</td>
                  <td>6/10</td>
                  <td><span class="badge bg-warning text-dark">Average</span></td>
                </tr>
                <tr>
                  <td>English</td>
                  <td>Vocabulary Test</td>
                  <td>2025-08-10</td>
                  <td>4/10</td>
                  <td><span class="badge bg-danger">Failed</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

  <footer class="mt-auto bg-light">
    <div class="container text-center">
      <p class="text-muted">© 2023 Your Company. All rights reserved.</p>
    </div>
  </footer>


  </style>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>