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
            <i class="bi bi-clipboard-check-fill text-success fs-1 me-3"></i>
            <h3 class="mb-0 fw-bold">Grading Integration Management</h3>
          </div>
          <a href="#" class="btn btn-success text-white">
            <i class="bi bi-download me-2"></i> Export Grade Reports
          </a>
        </div>

        <!-- Overview Stats -->
        <div class="row g-3 text-center mb-4">
          <div class="col-md-3">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-people-fill fs-2 text-primary"></i>
              <h5 class="fw-bold mt-2">2,350</h5>
              <p class="small text-muted mb-0">Students Graded</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-book fs-2 text-warning"></i>
              <h5 class="fw-bold mt-2">120</h5>
              <p class="small text-muted mb-0">Subjects Managed</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-bar-chart-line fs-2 text-success"></i>
              <h5 class="fw-bold mt-2">85%</h5>
              <p class="small text-muted mb-0">Passing Rate</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="border rounded-3 p-3 bg-light">
              <i class="bi bi-exclamation-triangle-fill fs-2 text-danger"></i>
              <h5 class="fw-bold mt-2">5%</h5>
              <p class="small text-muted mb-0">Grade Disputes</p>
            </div>
          </div>
        </div>

        <!-- Grading Table -->
        <h5 class="fw-bold mb-3">Grade Records Overview</h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-success">
              <tr>
                <th>Student Name</th>
                <th>Professor</th>
                <th>Subject</th>
                <th>Midterm</th>
                <th>Finals</th>
                <th>Final Grade</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Juan Dela Cruz</td>
                <td>Prof. Santos</td>
                <td>Algebra</td>
                <td>87</td>
                <td>90</td>
                <td><strong>89</strong></td>
                <td><span class="badge bg-success">Passed</span></td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>Maria Lopez</td>
                <td>Prof. Reyes</td>
                <td>Science</td>
                <td>72</td>
                <td>68</td>
                <td><strong>70</strong></td>
                <td><span class="badge bg-danger">Failed</span></td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>Pedro Cruz</td>
                <td>Prof. Cruz</td>
                <td>English</td>
                <td>85</td>
                <td>88</td>
                <td><strong>87</strong></td>
                <td><span class="badge bg-success">Passed</span></td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
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
            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Majority of students achieved a passing grade.</li>
            <li><i class="bi bi-lightbulb-fill text-info me-2"></i> Consider offering remedial classes for subjects with high fail rates.</li>
            <li><i class="bi bi-exclamation-circle-fill text-warning me-2"></i> 5% of students have grade disputes requiring admin attention.</li>
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