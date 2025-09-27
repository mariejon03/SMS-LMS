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
          <i class="bi bi-card-checklist text-success fs-1 me-3"></i>
          <h3 class="mb-0 fw-bold">Grading Integration</h3>
        </div>
        <a href="#" class="btn btn-success text-white">
          <i class="bi bi-download me-2"></i> Export Grades
        </a>
      </div>

      <!-- Overview Stats -->
      <div class="row g-3 text-center mb-4">
        <div class="col-md-4">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-person-check-fill fs-2 text-primary"></i>
            <h5 class="fw-bold mt-2">120</h5>
            <p class="small text-muted mb-0">Students Graded</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-graph-up fs-2 text-warning"></i>
            <h5 class="fw-bold mt-2">85%</h5>
            <p class="small text-muted mb-0">Class Average</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-award-fill fs-2 text-danger"></i>
            <h5 class="fw-bold mt-2">12</h5>
            <p class="small text-muted mb-0">Top Performers</p>
          </div>
        </div>
      </div>

      <!-- Grades Table -->
      <h5 class="fw-bold mb-3">Grade Records</h5>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-success">
            <tr>
              <th>Student Name</th>
              <th>Quiz Average</th>
              <th>Assignment Average</th>
              <th>Exam Score</th>
              <th>Final Grade</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Juan Dela Cruz</td>
              <td>88%</td>
              <td>90%</td>
              <td>85%</td>
              <td>88%</td>
              <td><span class="badge bg-success">Passed</span></td>
              <td>
                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
              </td>
            </tr>
            <tr>
              <td>Maria Santos</td>
              <td>75%</td>
              <td>78%</td>
              <td>70%</td>
              <td>74%</td>
              <td><span class="badge bg-danger">Failed</span></td>
              <td>
                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Insights -->
      <div class="mt-4">
        <h6 class="fw-bold">Insights</h6>
        <ul class="list-unstyled text-muted">
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Majority of students passed the final grading period.</li>
          <li><i class="bi bi-exclamation-circle-fill text-warning me-2"></i> Science scores are below average — recommend remedial classes.</li>
          <li><i class="bi bi-lightbulb-fill text-info me-2"></i> Top performers excelled in both assignments and quizzes.</li>
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