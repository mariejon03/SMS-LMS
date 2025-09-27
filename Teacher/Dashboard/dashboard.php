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
          <i class="bi bi-mortarboard-fill text-success fs-1 me-3"></i>
          <h3 class="mb-0 fw-bold">Teacher Dashboard</h3>
        </div>
        <a href="#" class="btn btn-success">
          <i class="bi bi-plus-circle me-2"></i> Create New Class
        </a>
      </div>

      <!-- Overview Cards -->
      <div class="row g-3 mb-4 text-center">
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-people-fill fs-2 text-primary"></i>
            <h5 class="fw-bold mt-2">120</h5>
            <p class="small text-muted mb-0">Active Students</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-journal-text fs-2 text-info"></i>
            <h5 class="fw-bold mt-2">15</h5>
            <p class="small text-muted mb-0">Uploaded Lessons</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-pencil-square fs-2 text-warning"></i>
            <h5 class="fw-bold mt-2">8</h5>
            <p class="small text-muted mb-0">Pending Quizzes</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-bar-chart-line-fill fs-2 text-danger"></i>
            <h5 class="fw-bold mt-2">76%</h5>
            <p class="small text-muted mb-0">Avg. Class Performance</p>
          </div>
        </div>
      </div>

      <!-- Quick Actions -->
      <h5 class="fw-bold mb-3">Quick Actions</h5>
      <div class="d-flex flex-wrap gap-2 mb-4">
        <a href="#" class="btn btn-outline-primary"><i class="bi bi-upload me-2"></i> Upload Materials</a>
        <a href="#" class="btn btn-outline-success"><i class="bi bi-pencil-square me-2"></i> Create Quiz</a>
        <a href="#" class="btn btn-outline-warning"><i class="bi bi-clipboard-check me-2"></i> Grade Submissions</a>
        <a href="#" class="btn btn-outline-info"><i class="bi bi-chat-left-text me-2"></i> Student Feedback</a>
      </div>

      <!-- Class Activity Table -->
      <h5 class="fw-bold mb-3">Recent Class Activities</h5>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-success">
            <tr>
              <th>Date</th>
              <th>Activity</th>
              <th>Class</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2025-08-16</td>
              <td><i class="bi bi-upload text-primary me-2"></i> Lesson Uploaded</td>
              <td>BSIT 3A – OOP</td>
              <td><span class="badge bg-info text-dark">Published</span></td>
            </tr>
            <tr>
              <td>2025-08-15</td>
              <td><i class="bi bi-pencil-fill text-warning me-2"></i> Quiz Created</td>
              <td>BSIT 2B – Web Dev</td>
              <td><span class="badge bg-success">Active</span></td>
            </tr>
            <tr>
              <td>2025-08-14</td>
              <td><i class="bi bi-clipboard-check text-success me-2"></i> Submissions Graded</td>
              <td>BSIT 1C – Networking</td>
              <td><span class="badge bg-primary">Completed</span></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Insights -->
      <div class="mt-4">
        <h6 class="fw-bold">Insights</h6>
        <ul class="list-unstyled text-muted">
          <li><i class="bi bi-lightbulb-fill text-info me-2"></i> Students are most active on Wednesdays and Fridays.</li>
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> 90% of students completed last week’s quiz.</li>
          <li><i class="bi bi-exclamation-circle-fill text-danger me-2"></i> Some classes show declining performance in Math.</li>
        </ul>
      </div>

    </div>
  </div>
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