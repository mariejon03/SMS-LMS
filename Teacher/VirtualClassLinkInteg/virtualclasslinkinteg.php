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
            <i class="bi bi-camera-video-fill text-primary fs-1 me-3"></i>
            <h3 class="mb-0 fw-bold">Virtual Class Link Integration</h3>
          </div>
          <a href="#" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-2"></i> Back to Class Portal
          </a>
        </div>

        <!-- Create Virtual Class -->
        <h5 class="fw-bold mb-3">Create Virtual Class</h5>
        <form action="#" method="post" class="mb-5">
          <div class="row g-3">
            <!-- Class Title -->
            <div class="col-md-6">
              <label for="classTitle" class="form-label fw-bold">Class Title</label>
              <input type="text" id="classTitle" class="form-control" placeholder="Ex: Algebra Lecture" required>
            </div>

            <!-- Platform -->
            <div class="col-md-6">
              <label for="platform" class="form-label fw-bold">Platform</label>
              <select id="platform" class="form-select" required>
                <option value="" disabled selected>-- Select Platform --</option>
                <option>Zoom</option>
                <option>Google Meet</option>
                <option>Microsoft Teams</option>
                <option>Other</option>
              </select>
            </div>

            <!-- Link -->
            <div class="col-md-8">
              <label for="classLink" class="form-label fw-bold">Class Link</label>
              <input type="url" id="classLink" class="form-control" placeholder="https://example.com/class" required>
            </div>

            <!-- Schedule -->
            <div class="col-md-4">
              <label for="classSchedule" class="form-label fw-bold">Schedule</label>
              <input type="datetime-local" id="classSchedule" class="form-control" required>
            </div>
          </div>

          <!-- Submit -->
          <div class="mt-4 text-end">
            <button type="reset" class="btn btn-outline-secondary me-2">
              <i class="bi bi-x-circle me-1"></i> Clear
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-plus-circle me-1"></i> Add Virtual Class
            </button>
          </div>
        </form>

        <!-- Scheduled Classes -->
        <h5 class="fw-bold mb-3">Upcoming Virtual Classes</h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-primary">
              <tr>
                <th>Class Title</th>
                <th>Platform</th>
                <th>Schedule</th>
                <th>Link</th>
                <th>Attendance</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Algebra Lecture</td>
                <td>Zoom</td>
                <td>2025-08-25 09:00 AM</td>
                <td><a href="https://zoom.us/j/123456789" target="_blank" class="btn btn-sm btn-outline-info">Join</a></td>
                <td><span class="badge bg-success">45/50</span></td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
                  <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>Science Review</td>
                <td>Google Meet</td>
                <td>2025-08-26 01:00 PM</td>
                <td><a href="https://meet.google.com/xyz-abc" target="_blank" class="btn btn-sm btn-outline-info">Join</a></td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
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
             


  <footer class="mt-auto bg-light">
    <div class="container text-center">
      <p class="text-muted">© 2023 Your Company. All rights reserved.</p>
    </div>
  </footer>


  </style>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>