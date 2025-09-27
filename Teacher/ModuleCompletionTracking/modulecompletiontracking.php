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
            <i class="bi bi-journal-check text-primary fs-1 me-3"></i>
            <h3 class="mb-0 fw-bold">Module Completion Tracking</h3>
          </div>
          <a href="#" class="btn btn-primary text-white">
            <i class="bi bi-download me-2"></i> Export Progress Report
          </a>
        </div>

        <!-- Overview Stats -->
        <div class="row g-3 text-center mb-4">
          <div class="col-md-4">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-book-half fs-2 text-success"></i>
              <h5 class="fw-bold mt-2">8 / 10</h5>
              <p class="small text-muted mb-0">Modules Completed</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-people-fill fs-2 text-info"></i>
              <h5 class="fw-bold mt-2">85%</h5>
              <p class="small text-muted mb-0">Class Completion Rate</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-exclamation-triangle-fill fs-2 text-danger"></i>
              <h5 class="fw-bold mt-2">5 Students</h5>
              <p class="small text-muted mb-0">At Risk / Behind</p>
            </div>
          </div>
        </div>

        <!-- Module Progress Table -->
        <h5 class="fw-bold mb-3">Student Progress Overview</h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-primary">
              <tr>
                <th>Student Name</th>
                <th>Module</th>
                <th>Progress</th>
                <th>Status</th>
                <th>Last Activity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Juan Dela Cruz</td>
                <td>Module 5: Algebra</td>
                <td>
                  <div class="progress" style="height: 20px;">
                    <div class="progress-bar bg-success" style="width: 100%;">100%</div>
                  </div>
                </td>
                <td><span class="badge bg-success">Completed</span></td>
                <td>2025-08-20</td>
              </tr>
              <tr>
                <td>Maria Lopez</td>
                <td>Module 5: Algebra</td>
                <td>
                  <div class="progress" style="height: 20px;">
                    <div class="progress-bar bg-warning" style="width: 60%;">60%</div>
                  </div>
                </td>
                <td><span class="badge bg-warning text-dark">In Progress</span></td>
                <td>2025-08-21</td>
              </tr>
              <tr>
                <td>Pedro Cruz</td>
                <td>Module 5: Algebra</td>
                <td>
                  <div class="progress" style="height: 20px;">
                    <div class="progress-bar bg-danger" style="width: 20%;">20%</div>
                  </div>
                </td>
                <td><span class="badge bg-danger">Behind</span></td>
                <td>2025-08-19</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Insights -->
        <div class="mt-4">
          <h6 class="fw-bold">Insights</h6>
          <ul class="list-unstyled text-muted">
            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Majority of students are on track.</li>
            <li><i class="bi bi-lightbulb-fill text-info me-2"></i> Consider sending reminders to students behind schedule.</li>
            <li><i class="bi bi-exclamation-circle-fill text-warning me-2"></i> High-performing students completed modules earlier than expected.</li>
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