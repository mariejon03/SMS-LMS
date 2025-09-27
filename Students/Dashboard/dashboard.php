<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS3</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <style>
    @import url("../../style.css");

    /* Make sidebar scrollable in landscape mode on mobile devices */
    @media (max-width: 768px) and (orientation: landscape) {
      .sidebar {
        max-height: 100vh;
        overflow-y: auto;
      }
    }
      /* Global Styles & Typography */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f0f2f5;
    }
    
    /* Main Content Area */
    .main-content {
      padding: 40px;
    }

    /* General Card Styling */
    .card {
      border: none;
      border-radius: 1rem;
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      border-radius: 1rem 1rem 0 0 !important;
      font-weight: 600;
      font-size: 1.1rem;
      padding: 1rem 1.5rem;
      border-bottom: none;
    }

    .card-body {
      padding: 1.5rem;
    }

    /* Specific Card Colors */
    .bg-primary { background-color: #007bff !important; }
    .bg-success { background-color: #28a745 !important; }
    .bg-info { background-color: #17a2b8 !important; }
    .bg-warning { background-color: #ffc107 !important; }

    /* Progress Bars */
    .progress {
      height: 8px;
      border-radius: 50px;
      background-color: #e9ecef;
    }
    .progress-bar {
      border-radius: 60px;
    }

    /* Badges */
    .badge {
      font-weight: 500;
      padding: 0.4em 0.8em;
      border-radius: 50px;
    }

    /* Alerts */
    .alert {
      border-radius: 0.75rem;
      border: 1px solid transparent;
    }

    .alert-primary {
      color: #004085;
      background-color: #cce5ff;
      border-color: #b8daff;
    }

    .alert-warning {
      color: #856404;
      background-color: #fff3cd;
      border-color: #ffeeba;
    }

    .alert-success {
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
    }

   /* 2. Layouts */
    .main-content {
      padding: 40px;
      flex-grow: 1;
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
               

       <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="mb-5">
            <h1 class="fw-bold text-dark"><i class="bi bi-speedometer2 text-primary me-3"></i>Student Dashboard</h1>
            <p class="text-muted fs-5">Quick access to your courses, deadlines, grades, and announcements.</p>
          </div>

          <div class="row g-4">
            <div class="col-lg-6">
              <div class="card h-100">
                <div class="card-header bg-primary text-white">
                  <i class="bi bi-journal-bookmark-fill me-2"></i> My Active Courses
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                    <div class="flex-grow-1">
                      <h6 class="fw-bold">CS101 – Introduction to Programming</h6>
                      <p class="text-muted small mb-0">Professor: Dr. Smith</p>
                    </div>
                    <div class="text-end">
                      <div class="progress" style="width: 200px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="text-muted mt-1 d-block">70% Complete</small>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                      <h6 class="fw-bold">MATH201 – Calculus II</h6>
                      <p class="text-muted small mb-0">Professor: Prof. Johnson</p>
                    </div>
                    <div class="text-end">
                      <div class="progress" style="width: 150px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="text-muted mt-1 d-block">45% Complete</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card h-100">
                <div class="card-header bg-warning">
                  <i class="bi bi-calendar-event-fill me-2"></i> Upcoming Deadlines
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <div>
                        <h6 class="mb-0">Homework 3 <small class="text-muted fw-normal">(CS101)</small></h6>
                        <small class="text-muted">Due Sep 15</small>
                      </div>
                      <span class="badge bg-danger">Not Started</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <div>
                        <h6 class="mb-0">Quiz 1 <small class="text-muted fw-normal">(MATH201)</small></h6>
                        <small class="text-muted">Due Sep 18</small>
                      </div>
                      <span class="badge bg-info">View Details</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <div>
                        <h6 class="mb-0">Project Proposal <small class="text-muted fw-normal">(ENG301)</small></h6>
                        <small class="text-muted">Due Sep 22</small>
                      </div>
                      <span class="badge bg-success">In Progress</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card h-100">
                <div class="card-header bg-success text-white">
                  <i class="bi bi-clipboard-check-fill me-2"></i> Recent Grades
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Homework 2 <small class="text-muted fw-normal">(CS101)</small></span>
                      <span class="badge bg-success fw-bold p-2">92%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Quiz 1 <small class="text-muted fw-normal">(MATH201)</small></span>
                      <span class="badge bg-danger fw-bold p-2">65%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Essay <small class="text-muted fw-normal">(ENG301)</small></span>
                      <span class="badge bg-success fw-bold p-2">88%</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card h-100">
                <div class="card-header bg-info text-white">
                  <i class="bi bi-megaphone-fill me-2"></i> Announcements
                </div>
                <div class="card-body">
                  <div class="alert alert-primary" role="alert">
                    <i class="bi bi-info-circle-fill me-2"></i> CS101 Midterm will be on Sep 30.
                  </div>
                  <div class="alert alert-warning" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i> Library hours are reduced next week.
                  </div>
                  <div class="alert alert-success" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i> MATH201 Quiz results have been posted.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-white py-4 mt-auto">
    <div class="container text-center">
      <p class="text-muted mb-0">© 2023 Your Company. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>