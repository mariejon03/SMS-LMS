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
            <i class="bi bi-question-circle-fill text-success fs-1 me-3"></i>
            <h3 class="mb-0 fw-bold">Online Quizzes</h3>
          </div>
          <a href="#" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-2"></i> Back to Class Portal
          </a>
        </div>

        <!-- Create Quiz -->
        <h5 class="fw-bold mb-3">Create New Quiz</h5>
        <form action="#" method="post" class="mb-5">
          <div class="row g-3">
            <!-- Quiz Title -->
            <div class="col-md-6">
              <label for="quizTitle" class="form-label fw-bold">Quiz Title</label>
              <input type="text" id="quizTitle" class="form-control" placeholder="Enter quiz title" required>
            </div>

            <!-- Subject/Class -->
            <div class="col-md-6">
              <label for="quizClass" class="form-label fw-bold">Class</label>
              <select id="quizClass" class="form-select" required>
                <option value="" disabled selected>-- Select Class --</option>
                <option>Math 101</option>
                <option>Science 202</option>
                <option>English 303</option>
              </select>
            </div>

            <!-- Deadline -->
            <div class="col-md-6">
              <label for="quizDeadline" class="form-label fw-bold">Deadline</label>
              <input type="datetime-local" id="quizDeadline" class="form-control" required>
            </div>

            <!-- Question Type -->
            <div class="col-md-6">
              <label for="quizType" class="form-label fw-bold">Question Type</label>
              <select id="quizType" class="form-select" required>
                <option value="" disabled selected>-- Select Type --</option>
                <option>Multiple Choice</option>
                <option>True/False</option>
                <option>Essay</option>
              </select>
            </div>
          </div>

          <!-- Submit -->
          <div class="mt-4 text-end">
            <button type="reset" class="btn btn-outline-secondary me-2">
              <i class="bi bi-x-circle me-1"></i> Clear
            </button>
            <button type="submit" class="btn btn-success">
              <i class="bi bi-plus-circle me-1"></i> Create Quiz
            </button>
          </div>
        </form>

        <!-- Quiz List -->
        <h5 class="fw-bold mb-3">Existing Quizzes</h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-success">
              <tr>
                <th>Quiz Title</th>
                <th>Class</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Submissions</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Algebra Basics</td>
                <td>Math 101</td>
                <td>2025-08-25</td>
                <td><span class="badge bg-warning text-dark">Open</span></td>
                <td>15/30</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i></a>
                  <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>Photosynthesis Quiz</td>
                <td>Science 202</td>
                <td>2025-08-22</td>
                <td><span class="badge bg-success">Closed</span></td>
                <td>28/28</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-bar-chart"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Student Performance -->
        <h5 class="fw-bold mt-5 mb-3">Student Performance (Latest Quiz)</h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th>Student Name</th>
                <th>Quiz</th>
                <th>Score</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Juan Dela Cruz</td>
                <td>Algebra Basics</td>
                <td>18/20</td>
                <td><span class="badge bg-success">Passed</span></td>
              </tr>
              <tr>
                <td>Maria Santos</td>
                <td>Algebra Basics</td>
                <td>10/20</td>
                <td><span class="badge bg-danger">Failed</span></td>
              </tr>
            </tbody>
          </table>
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