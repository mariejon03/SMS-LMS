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
    @import url("../style.css");

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
            <i class="bi bi-journal-bookmark-fill text-primary fs-1 me-3"></i>
            <h3 class="mb-0 fw-bold">Professor Class Portal</h3>
          </div>
          <a href="#" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i> Create New Class
          </a>
        </div>

        <!-- Action Cards -->
        <div class="row g-4">
          <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 text-center">
              <div class="card-body">
                <i class="bi bi-upload text-info fs-1 mb-2"></i>
                <h6 class="fw-bold">Upload Materials</h6>
                <p class="text-muted small">Upload lecture files, slides, and videos.</p>
                <a href="#" class="btn btn-outline-info btn-sm">Go</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 text-center">
              <div class="card-body">
                <i class="bi bi-pencil-square text-success fs-1 mb-2"></i>
                <h6 class="fw-bold">Create Quizzes</h6>
                <p class="text-muted small">Add quizzes and assignments for students.</p>
                <a href="#" class="btn btn-outline-success btn-sm">Go</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 text-center">
              <div class="card-body">
                <i class="bi bi-people-fill text-warning fs-1 mb-2"></i>
                <h6 class="fw-bold">Manage Students</h6>
                <p class="text-muted small">View enrolled students and track progress.</p>
                <a href="#" class="btn btn-outline-warning btn-sm">Go</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 text-center">
              <div class="card-body">
                <i class="bi bi-clipboard-check-fill text-danger fs-1 mb-2"></i>
                <h6 class="fw-bold">Grading</h6>
                <p class="text-muted small">Review, grade, and release results.</p>
                <a href="#" class="btn btn-outline-danger btn-sm">Go</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-5">
          <h5 class="fw-bold mb-3">Quick Actions</h5>
          <div class="d-flex flex-wrap gap-2">
            <a href="#" class="btn btn-outline-primary"><i class="bi bi-chat-left-text me-2"></i>Post Announcement</a>
            <a href="#" class="btn btn-outline-success"><i class="bi bi-link-45deg me-2"></i>Virtual Class Link</a>
            <a href="#" class="btn btn-outline-dark"><i class="bi bi-graph-up-arrow me-2"></i>View Class Analytics</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

            </div> <!-- card-body -->
          </div> <!-- card -->
        </div> <!-- container my-5 -->
      </div> <!-- col -->
    </div> <!-- row -->
  </div> <!-- container -->
</div> <!-- main-content -->


  <footer class="mt-auto bg-light">
    <div class="container text-center">
      <p class="text-muted">© 2023 Your Company. All rights reserved.</p>
    </div>
  </footer>


  </style>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>