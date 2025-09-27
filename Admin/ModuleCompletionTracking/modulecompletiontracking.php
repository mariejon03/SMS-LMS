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
          <i class="bi bi-journal-check text-info fs-1 me-3"></i>
          <h3 class="mb-0 fw-bold">Module Completion Tracking</h3>
        </div>
        <a href="#" class="btn btn-info text-white">
          <i class="bi bi-download me-2"></i> Export Completion Report
        </a>
      </div>

      <!-- Stats Overview -->
      <div class="row g-3 text-center mb-4">
        <div class="col-md-4">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-book-fill fs-2 text-primary"></i>
            <h5 class="fw-bold mt-2">15</h5>
            <p class="small text-muted mb-0">Total Modules</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-check2-circle fs-2 text-success"></i>
            <h5 class="fw-bold mt-2">85%</h5>
            <p class="small text-muted mb-0">Average Completion Rate</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-people-fill fs-2 text-warning"></i>
            <h5 class="fw-bold mt-2">120</h5>
            <p class="small text-muted mb-0">Active Students</p>
          </div>
        </div>
      </div>

      <!-- Progress Table -->
      <h5 class="fw-bold mb-3">Module Progress Overview</h5>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-info">
            <tr>
              <th>Module Title</th>
              <th>Completed</th>
              <th>In Progress</th>
              <th>Not Started</th>
              <th>Completion Rate</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mathematics - Algebra Basics</td>
              <td>100</td>
              <td>15</td>
              <td>5</td>
              <td>
                <div class="progress" style="height: 20px;">
                  <div class="progress-bar bg-success" style="width: 83%;">83%</div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Science - Introduction to Physics</td>
              <td>90</td>
              <td>20</td>
              <td>10</td>
              <td>
                <div class="progress" style="height: 20px;">
                  <div class="progress-bar bg-warning" style="width: 75%;">75%</div>
                </div>
              </td>
            </tr>
            <tr>
              <td>English - Grammar Essentials</td>
              <td>110</td>
              <td>8</td>
              <td>2</td>
              <td>
                <div class="progress" style="height: 20px;">
                  <div class="progress-bar bg-success" style="width: 92%;">92%</div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Insights -->
      <div class="mt-4">
        <h6 class="fw-bold">Insights</h6>
        <ul class="list-unstyled text-muted">
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Most students have completed the English module.</li>
          <li><i class="bi bi-exclamation-circle-fill text-warning me-2"></i> Physics module needs additional support materials.</li>
          <li><i class="bi bi-lightbulb-fill text-info me-2"></i> Encourage faster completion of Math modules by setting deadlines.</li>
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