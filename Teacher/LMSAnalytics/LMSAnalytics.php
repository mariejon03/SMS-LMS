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
            <i class="bi bi-graph-up-arrow text-primary fs-1 me-3"></i>
            <h3 class="mb-0 fw-bold">LMS Analytics – Professor View</h3>
          </div>
          <a href="#" class="btn btn-primary text-white">
            <i class="bi bi-download me-2"></i> Export Analytics
          </a>
        </div>

        <!-- Overview Stats -->
        <div class="row g-3 text-center mb-4">
          <div class="col-md-3">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-people-fill fs-2 text-success"></i>
              <h5 class="fw-bold mt-2">150</h5>
              <p class="small text-muted mb-0">Active Students</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-journal-check fs-2 text-warning"></i>
              <h5 class="fw-bold mt-2">78%</h5>
              <p class="small text-muted mb-0">Module Completion Rate</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-pencil-square fs-2 text-info"></i>
              <h5 class="fw-bold mt-2">82%</h5>
              <p class="small text-muted mb-0">Avg. Quiz Scores</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-clock-history fs-2 text-danger"></i>
              <h5 class="fw-bold mt-2">10h</h5>
              <p class="small text-muted mb-0">Avg. Time Spent</p>
            </div>
          </div>
        </div>

        <!-- Class Performance Table -->
        <h5 class="fw-bold mb-3">Class Performance Overview</h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-primary">
              <tr>
                <th>Student Name</th>
                <th>Modules Completed</th>
                <th>Avg. Quiz Score</th>
                <th>Time Spent</th>
                <th>Engagement Level</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Juan Dela Cruz</td>
                <td>9 / 10</td>
                <td>92%</td>
                <td>14h</td>
                <td><span class="badge bg-success">High</span></td>
              </tr>
              <tr>
                <td>Maria Lopez</td>
                <td>6 / 10</td>
                <td>75%</td>
                <td>8h</td>
                <td><span class="badge bg-warning text-dark">Medium</span></td>
              </tr>
              <tr>
                <td>Pedro Cruz</td>
                <td>3 / 10</td>
                <td>58%</td>
                <td>4h</td>
                <td><span class="badge bg-danger">Low</span></td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Insights -->
        <div class="mt-4">
          <h6 class="fw-bold">Insights</h6>
          <ul class="list-unstyled text-muted">
            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Students with high engagement show better quiz performance.</li>
            <li><i class="bi bi-lightbulb-fill text-info me-2"></i> Medium-engagement students may need more interactive content.</li>
            <li><i class="bi bi-exclamation-circle-fill text-warning me-2"></i> At-risk students identified with low module completion and time spent.</li>
          </ul>
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