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
              >
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center">
          <i class="bi bi-collection-play-fill text-purple fs-1 me-3"></i>
          <h3 class="mb-0 fw-bold">Multi-Media Support</h3>
        </div>
        <a href="#" class="btn btn-purple text-white" style="background-color:#6f42c1;">
          <i class="bi bi-upload me-2"></i> Upload Media
        </a>
      </div>

      <!-- Stats Overview -->
      <div class="row g-3 text-center mb-4">
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-camera-video-fill fs-2 text-danger"></i>
            <h5 class="fw-bold mt-2">45</h5>
            <p class="small text-muted mb-0">Videos Uploaded</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-file-earmark-music-fill fs-2 text-success"></i>
            <h5 class="fw-bold mt-2">28</h5>
            <p class="small text-muted mb-0">Audio Files</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-image-fill fs-2 text-warning"></i>
            <h5 class="fw-bold mt-2">60</h5>
            <p class="small text-muted mb-0">Images</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="border rounded-3 p-3 bg-light">
            <i class="bi bi-file-earmark-pdf-fill fs-2 text-primary"></i>
            <h5 class="fw-bold mt-2">35</h5>
            <p class="small text-muted mb-0">Documents</p>
          </div>
        </div>
      </div>

      <!-- Media Table -->
      <h5 class="fw-bold mb-3">Recent Media Uploads</h5>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-secondary">
            <tr>
              <th>Upload Date</th>
              <th>Title</th>
              <th>Type</th>
              <th>Uploaded By</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2025-08-09</td>
              <td>Algebra Basics Lesson</td>
              <td><span class="badge bg-danger">Video</span></td>
              <td>Mr. Santos</td>
              <td>
                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-download"></i></a>
              </td>
            </tr>
            <tr>
              <td>2025-08-08</td>
              <td>Science Quiz Review Audio</td>
              <td><span class="badge bg-success">Audio</span></td>
              <td>Ms. Garcia</td>
              <td>
                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-download"></i></a>
              </td>
            </tr>
            <tr>
              <td>2025-08-07</td>
              <td>Biology Infographic</td>
              <td><span class="badge bg-warning text-dark">Image</span></td>
              <td>Mr. Cruz</td>
              <td>
                <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></a>
                <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-download"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Insights -->
      <div class="mt-4">
        <h6 class="fw-bold">Insights</h6>
        <ul class="list-unstyled text-muted">
          <li><i class="bi bi-check-circle-fill text-success me-2"></i> Videos have the highest engagement among students.</li>
          <li><i class="bi bi-lightbulb-fill text-info me-2"></i> Consider adding more audio-based lessons for accessibility.</li>
          <li><i class="bi bi-exclamation-circle-fill text-warning me-2"></i> Ensure all PDFs are mobile-friendly for better student access.</li>
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