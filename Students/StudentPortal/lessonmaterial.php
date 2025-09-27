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
            <i class="bi bi-collection-play-fill text-info fs-1 me-3"></i>
            <div>
              <h3 class="mb-0 fw-bold">My Courses</h3>
              <p class="text-muted small mb-0">Access lecture notes, readings, and videos uploaded by your professor.</p>
            </div>
          </div>
          <a href="../ClassPortal/classportal.php" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-2"></i> Back to Class Portal
          </a>
        </div>

     

  <div class="row g-4">
    <!-- Lesson Card 1 -->
    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body">
          <h5 class="fw-bold">Lesson 1: Introduction to Programming</h5>
          <p class="text-muted small">Professor: Dr. Smith</p>
          <p class="small">Covers the basics of programming concepts, syntax, and logic.</p>
          <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-outline-primary btn-sm"><i class="bi bi-eye-fill me-1"></i> View</a>
            <a href="#" class="btn btn-outline-success btn-sm"><i class="bi bi-download me-1"></i> Download</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Lesson Card 2 -->
    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body">
          <h5 class="fw-bold">Lesson 2: Data Types & Variables</h5>
          <p class="text-muted small">Professor: Dr. Smith</p>
          <p class="small">Learn about data types, variable declarations, and assignments.</p>
          <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-outline-primary btn-sm"><i class="bi bi-eye-fill me-1"></i> View</a>
            <a href="#" class="btn btn-outline-success btn-sm"><i class="bi bi-download me-1"></i> Download</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Lesson Card 3 -->
    <div class="col-md-4">
      <div class="card shadow-sm border-0 h-100">
        <div class="card-body">
          <h5 class="fw-bold">Lesson 3: Control Structures</h5>
          <p class="text-muted small">Professor: Dr. Smith</p>
          <p class="small">Understanding if-else, loops, and decision-making in programming.</p>
          <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-outline-primary btn-sm"><i class="bi bi-eye-fill me-1"></i> View</a>
            <a href="#" class="btn btn-outline-success btn-sm"><i class="bi bi-download me-1"></i> Download</a>
          </div>
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