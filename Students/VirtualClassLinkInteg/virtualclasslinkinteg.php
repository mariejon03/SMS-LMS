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
     .sidebar {
      background-color: #084d92ff;
      color: #fff;
    }
    .sidebar .nav-link {
      color: #fff;
      transition: background-color 0.2s ease;
    }
    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background-color: #ffffffff;
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
            <i class="bi bi-camera-video-fill text-success fs-1 me-3"></i>
            <div>
              <h3 class="mb-0 fw-bold">Virtual Classes</h3>
              <p class="text-muted small mb-0">Access your online class links by subject</p>
            </div>
          </div>
          <a href="../ClassPortal/classportal.php" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-2"></i> Courses
          </a>
        </div>

        <!-- Subject Tabs -->
        <ul class="nav nav-tabs mb-4" id="classTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="math-tab" data-bs-toggle="tab" data-bs-target="#math" type="button" role="tab">Math</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="science-tab" data-bs-toggle="tab" data-bs-target="#science" type="button" role="tab">Science</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="english-tab" data-bs-toggle="tab" data-bs-target="#english" type="button" role="tab">English</button>
          </li>
        </ul>

        <div class="tab-content" id="classTabContent">
          <!-- Math Classes -->
          <div class="tab-pane fade show active" id="math" role="tabpanel">
            <h5 class="fw-bold mb-3">Math Virtual Classes</h5>
            <div class="table-responsive">
              <table class="table table-hover align-middle">
                <thead class="table-success">
                  <tr>
                    <th>Topic</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Professor</th>
                    <th>Platform</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Algebra Review</td>
                    <td>Aug 25, 2025</td>
                    <td>10:00 AM</td>
                    <td>Prof. Santos</td>
                    <td><span class="badge bg-primary">Zoom</span></td>
                    <td><a href="#" class="btn btn-success btn-sm"><i class="bi bi-box-arrow-in-right me-1"></i> Join</a></td>
                  </tr>
                  <tr>
                    <td>Geometry Basics</td>
                    <td>Aug 28, 2025</td>
                    <td>1:00 PM</td>
                    <td>Prof. Reyes</td>
                    <td><span class="badge bg-danger">Google Meet</span></td>
                    <td><a href="#" class="btn btn-success btn-sm"><i class="bi bi-box-arrow-in-right me-1"></i> Join</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Science Classes -->
          <div class="tab-pane fade" id="science" role="tabpanel">
            <h5 class="fw-bold mb-3">Science Virtual Classes</h5>
            <div class="table-responsive">
              <table class="table table-hover align-middle">
                <thead class="table-info">
                  <tr>
                    <th>Topic</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Professor</th>
                    <th>Platform</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Newton’s Laws</td>
                    <td>Aug 26, 2025</td>
                    <td>9:00 AM</td>
                    <td>Prof. Dela Cruz</td>
                    <td><span class="badge bg-primary">Zoom</span></td>
                    <td><a href="#" class="btn btn-success btn-sm"><i class="bi bi-box-arrow-in-right me-1"></i> Join</a></td>
                  </tr>
                  <tr>
                    <td>Biology – Cell Structures</td>
                    <td>Aug 29, 2025</td>
                    <td>2:00 PM</td>
                    <td>Prof. Mendoza</td>
                    <td><span class="badge bg-warning text-dark">MS Teams</span></td>
                    <td><a href="#" class="btn btn-success btn-sm"><i class="bi bi-box-arrow-in-right me-1"></i> Join</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- English Classes -->
          <div class="tab-pane fade" id="english" role="tabpanel">
            <h5 class="fw-bold mb-3">English Virtual Classes</h5>
            <div class="table-responsive">
              <table class="table table-hover align-middle">
                <thead class="table-warning">
                  <tr>
                    <th>Topic</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Professor</th>
                    <th>Platform</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Grammar Workshop</td>
                    <td>Aug 27, 2025</td>
                    <td>11:00 AM</td>
                    <td>Prof. Villanueva</td>
                    <td><span class="badge bg-danger">Google Meet</span></td>
                    <td><a href="#" class="btn btn-success btn-sm"><i class="bi bi-box-arrow-in-right me-1"></i> Join</a></td>
                  </tr>
                  <tr>
                    <td>Reading Comprehension</td>
                    <td>Sep 01, 2025</td>
                    <td>3:00 PM</td>
                    <td>Prof. Cruz</td>
                    <td><span class="badge bg-primary">Zoom</span></td>
                    <td><a href="#" class="btn btn-success btn-sm"><i class="bi bi-box-arrow-in-right me-1"></i> Join</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Notes -->
        <div class="mt-4 alert alert-secondary">
          <i class="bi bi-info-circle-fill me-2"></i> Please join at least <strong>5 minutes before class</strong>. Make sure your internet and audio are working.
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