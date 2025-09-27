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
            <i class="bi bi-clipboard-check text-primary fs-1 me-3"></i>
            <h3 class="mb-0 fw-bold">Assignment Management</h3>
          </div>
          <a href="#" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-2"></i> Back to Class Portal
          </a>
        </div>

        <!-- Create Assignment Form -->
        <h5 class="fw-bold mb-3">Create New Assignment</h5>
        <form action="#" method="post" enctype="multipart/form-data" class="mb-5">
          <div class="row g-3">

            <!-- Title -->
            <div class="col-md-6">
              <label for="assignmentTitle" class="form-label fw-bold">Assignment Title</label>
              <input type="text" id="assignmentTitle" class="form-control" placeholder="Enter assignment title" required>
            </div>

            <!-- Deadline -->
            <div class="col-md-6">
              <label for="deadline" class="form-label fw-bold">Deadline</label>
              <input type="datetime-local" id="deadline" class="form-control" required>
            </div>

            <!-- Description -->
            <div class="col-12">
              <label for="assignmentDesc" class="form-label fw-bold">Description</label>
              <textarea id="assignmentDesc" rows="3" class="form-control" placeholder="Assignment details or instructions"></textarea>
            </div>

            <!-- File Upload -->
            <div class="col-md-6">
              <label for="assignmentFile" class="form-label fw-bold">Attach File</label>
              <input type="file" id="assignmentFile" class="form-control">
              <small class="text-muted">Optional: Upload PDF, DOCX, or reference materials.</small>
            </div>

          </div>

          <!-- Submit -->
          <div class="mt-4 text-end">
            <button type="reset" class="btn btn-outline-secondary me-2">
              <i class="bi bi-x-circle me-1"></i> Clear
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-plus-circle me-1"></i> Create Assignment
            </button>
          </div>
        </form>

        <!-- Submissions Table -->
        <h5 class="fw-bold mb-3">Student Submissions</h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-primary">
              <tr>
                <th>Student Name</th>
                <th>Assignment</th>
                <th>Submission Date</th>
                <th>Status</th>
                <th>Grade</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Juan Dela Cruz</td>
                <td>Math Assignment 1</td>
                <td>2025-08-20</td>
                <td><span class="badge bg-success">Submitted</span></td>
                <td>--</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i></a>
                  <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-check2-square"></i></a>
                </td>
              </tr>
              <tr>
                <td>Maria Santos</td>
                <td>Math Assignment 1</td>
                <td>--</td>
                <td><span class="badge bg-danger">Missing</span></td>
                <td>--</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-secondary disabled"><i class="bi bi-eye"></i></a>
                </td>
              </tr>
              <tr>
                <td>Carlos Reyes</td>
                <td>Math Assignment 1</td>
                <td>2025-08-21</td>
                <td><span class="badge bg-warning text-dark">Late</span></td>
                <td>--</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i></a>
                  <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-check2-square"></i></a>
                </td>
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