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
                <div class="container my-4">
  <div class="card shadow-lg border-0 rounded-4">
    <div class="card-body p-4">
    >
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center">
          <i class="bi bi-bar-chart-fill text-danger fs-1 me-3"></i>
          <h3 class="mb-0 fw-bold">View Analytics</h3>
        </div>
        <a href="#" class="btn btn-danger text-white">
          <i class="bi bi-download me-2"></i> Download Analytics Report
        </a>
      </div>

      <!-- Overview Stats -->
      <div class="row g-3 text-center mb-4">
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-people-fill fs-2 text-primary"></i>
            <h5 class="fw-bold mt-2">150</h5>
            <p class="small text-muted mb-0">Active Students</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-file-earmark-text-fill fs-2 text-success"></i>
            <h5 class="fw-bold mt-2">320</h5>
            <p class="small text-muted mb-0">Materials Accessed</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-pencil-square fs-2 text-warning"></i>
            <h5 class="fw-bold mt-2">85%</h5>
            <p class="small text-muted mb-0">Average Quiz Score</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-clock-history fs-2 text-danger"></i>
            <h5 class="fw-bold mt-2">12h</h5>
            <p class="small text-muted mb-0">Avg. Time Spent</p>
          </div>
        </div>
      </div>

      <!-- Data Table -->
      <h5 class="fw-bold mb-3">Recent Activity Overview</h5>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-danger">
            <tr>
              <th>Date</th>
              <th>Activity</th>
              <th>Details</th>
              <th>Users Involved</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2025-08-08</td>
              <td><i class="bi bi-upload me-2 text-info"></i>Material Uploaded</td>
              <td>Physics Module 2</td>
              <td>Mr. Reyes</td>
            </tr>
            <tr>
              <td>2025-08-08</td>
              <td><i class="bi bi-pencil-fill me-2 text-warning"></i>Quiz Submitted</td>
              <td>Math Quiz 3</td>
              <td>35 Students</td>
            </tr>
            <tr>
              <td>2025-08-07</td>
              <td><i class="bi bi-people-fill me-2 text-primary"></i>New Students Joined</td>
              <td>5 Enrollments</td>
              <td>Admin</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Summary Insights -->
      <div class="mt-4">
        <h6 class="fw-bold">Insights</h6>
        <ul class="list-unstyled text-muted">
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Student engagement is high this week.</li>
          <li><i class="bi bi-exclamation-circle-fill text-warning me-2"></i> Average quiz scores have slightly dropped compared to last month.</li>
          <li><i class="bi bi-lightbulb-fill text-info me-2"></i> Consider uploading more practice quizzes for Math and Science.</li>
        </ul>
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