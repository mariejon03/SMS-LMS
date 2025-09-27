<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Feedback</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    @import url("../../style.css");

    body {
      background-color: #f8f9fa; /* Lighter background for a softer look */
    }
    .main-content {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }
    .feedback-card {
      border: none;
      border-left: 4px solid #0d6efd; /* Accent border */
      transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
    }
    .feedback-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;
    }
    .student-avatar {
      width: 40px;
      height: 40px;
      background-color: #e9ecef;
      color: #495057;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      border-radius: 50%;
    }
  </style>
</head>

<body>

  <?php include '../sidenav.php'; ?>

  <div class="main-content flex-grow-1">
    <div class="container">
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4 p-md-5">

          <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div class="d-flex align-items-center mb-3 mb-md-0">
              <i class="bi bi-chat-left-dots-fill text-primary" style="font-size: 2.5rem;"></i>
              <div class="ms-3">
                <h2 class="mb-0 fw-bold">Student Feedback</h2>
                <p class="text-muted mb-0">Review comments and suggestions from students.</p>
              </div>
            </div>
            <a href="#" class="btn btn-primary">
              <i class="bi bi-download me-2"></i> Export All
            </a>
          </div>
          
          <div class="row g-2 mb-4">
            <div class="col-md-8">
              <input type="search" class="form-control" placeholder="Search by student or keyword...">
            </div>
            <div class="col-md-4">
              <select class="form-select">
                <option selected>Filter by Subject...</option>
                <option>Math</option>
                <option>Science</option>
                <option>English</option>
              </select>
            </div>
          </div>

          <div class="list-group">
            
            <div class="list-group-item p-3 mb-3 rounded-3 shadow-sm feedback-card">
              <div class="d-flex w-100 align-items-center">
                <div class="student-avatar me-3">JD</div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between">
                    <h6 class="mb-1 fw-bold">Juan Dela Cruz <span class="text-muted fw-normal ms-1">- Math</span></h6>
                    <small class="text-muted">September 24, 2025</small>
                  </div>
                  <p class="mb-1 mt-1">"The math module was clear and easy to follow."</p>
                </div>
                <div class="ms-3">
                  <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-reply-fill"></i> Reply</a>
                </div>
              </div>
            </div>

            <div class="list-group-item p-3 mb-3 rounded-3 shadow-sm feedback-card">
              <div class="d-flex w-100 align-items-center">
                <div class="student-avatar me-3">MS</div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between">
                    <h6 class="mb-1 fw-bold">Maria Santos <span class="text-muted fw-normal ms-1">- Science</span></h6>
                    <small class="text-muted">September 23, 2025</small>
                  </div>
                  <p class="mb-1 mt-1">"It would be better to have more examples in science lessons."</p>
                </div>
                <div class="ms-3">
                  <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-reply-fill"></i> Reply</a>
                </div>
              </div>
            </div>

            <div class="list-group-item p-3 mb-3 rounded-3 shadow-sm feedback-card">
              <div class="d-flex w-100 align-items-center">
                <div class="student-avatar me-3">PR</div>
                <div class="flex-grow-1">
                  <div class="d-flex justify-content-between">
                    <h6 class="mb-1 fw-bold">Pedro Reyes <span class="text-muted fw-normal ms-1">- English</span></h6>
                    <small class="text-muted">September 23, 2025</small>
                  </div>
                  <p class="mb-1 mt-1">"Some topics in the quiz were not discussed in class."</p>
                </div>
                <div class="ms-3">
                  <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-reply-fill"></i> Reply</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>