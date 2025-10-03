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

    <div class="container my-4">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
          <!-- Header -->
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
              <i class="bi bi-question-circle-fill text-primary fs-1 me-3"></i>
              <h3 class="mb-0 fw-bold">Online Quizzes</h3>
            </div>
            <a href="#" class="btn btn-primary text-white">
              <i class="bi bi-plus-circle me-2"></i> Create New Quiz
            </a>
          </div>

          <!-- Quiz Overview Stats -->
          <div class="row g-3 text-center mb-4">
            <div class="col-md-3">
              <div class="border rounded-3 p-3 bg-light">
                <i class="bi bi-journal-check fs-2 text-success"></i>
                <h5 class="fw-bold mt-2">12</h5>
                <p class="small text-muted mb-0">Quizzes Created</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="border rounded-3 p-3 bg-light">
                <i class="bi bi-people-fill fs-2 text-info"></i>
                <h5 class="fw-bold mt-2">320</h5>
                <p class="small text-muted mb-0">Total Attempts</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="border rounded-3 p-3 bg-light">
                <i class="bi bi-graph-up-arrow fs-2 text-warning"></i>
                <h5 class="fw-bold mt-2">78%</h5>
                <p class="small text-muted mb-0">Avg. Score</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="border rounded-3 p-3 bg-light">
                <i class="bi bi-clock-history fs-2 text-danger"></i>
                <h5 class="fw-bold mt-2">2d</h5>
                <p class="small text-muted mb-0">Avg. Time Taken</p>
              </div>
            </div>
          </div>

          <!-- Table of Quizzes -->
          <h5 class="fw-bold mb-3">Recent Quizzes</h5>
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="table-primary">
                <tr>
                  <th>Quiz Title</th>
                  <th>Created On</th>
                  <th>Attempts</th>
                  <th>Average Score</th>
                  <th>Deadline</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Math Quiz 3</td>
                  <td>2025-08-05</td>
                  <td>40</td>
                  <td>82%</td>
                  <td>2025-08-10</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Science Quiz 2</td>
                  <td>2025-08-02</td>
                  <td>35</td>
                  <td>76%</td>
                  <td>2025-08-07</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

        
        </div>
      </div>
    </div>
  </div>



 


  </style>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>