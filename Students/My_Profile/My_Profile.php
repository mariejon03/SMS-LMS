<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS3</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css?v=1.1">

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
    .sidebar {
      background-color: #084d92ff;
      color: #140d0dff;
    }
    .sidebar .nav-link {
      color: #fff;
      transition: background-color 0.2s ease;
    }
    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background-color: #ceccd3ff;
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
    <div class="container my-4">
  <!-- Header -->
  <div class="mb-4">
    <h3 class="fw-bold"><i class="bi bi-person-circle text-primary me-2"></i> My Profile</h3>
    <p class="text-muted">Manage your personal information and account details.</p>
  </div>

  <div class="row g-4">
    <!-- Profile Picture -->
    <div class="col-md-4 text-center">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <img src="../assets/profile-placeholder.png" class="rounded-circle mb-3" width="150" height="150" alt="Profile Picture">
          <h5 class="fw-bold">Joan De Guzman</h5>
          <p class="text-muted">BS Information Technology</p>
          <button class="btn btn-outline-primary btn-sm">
            <i class="bi bi-upload me-1"></i> Change Photo
          </button>
        </div>
      </div>
    </div>

    <!-- Profile Information -->
    <div class="col-md-8">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="fw-bold mb-3"><i class="bi bi-info-circle me-2"></i> Personal Information</h5>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label fw-bold">Full Name</label>
              <input type="text" class="form-control" value="John Doe" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-bold">Student ID</label>
              <input type="text" class="form-control" value="s2025-1235" readonly>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label fw-bold">Email</label>
              <input type="email" class="form-control" value="johndoe@email.com" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-bold">Course</label>
              <input type="text" class="form-control" value="BS Computer Science" readonly>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label fw-bold">Year Level</label>
              <input type="text" class="form-control" value="3rd Year" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-bold">Section</label>
              <input type="text" class="form-control" value="Section A" readonly>
            </div>
          </div>

          <div class="d-flex justify-content-end">
            <a href="edit_profile.php" class="btn btn-primary">
              <i class="bi bi-pencil-square me-1"></i> Edit Profile
            </a>
          </div>
        </div>
      </div>
    </div>
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