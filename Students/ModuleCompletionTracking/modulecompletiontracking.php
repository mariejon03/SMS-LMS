<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS3</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts for a clean, readable typeface -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    @import url("../../style.css");

    /* Make sidebar scrollable in landscape mode on mobile devices */
    @media (max-width: 768px) and (orientation: landscape) {
      .sidebar {
        max-height: 100vh;
        overflow-y: auto;
      }
    }
     :root {
            --bs-body-bg-rgb: 248, 249, 250;
        }

        [data-bs-theme="dark"] {
            --bs-body-bg-rgb: 20, 24, 33;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: rgb(var(--bs-body-bg-rgb));
            transition: background-color 0.3s ease;
        }

        .progress-bar {
            transition: width 2s ease-out;
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

<body class="flex items-center justify-center min-h-screen">

  <!-- navbar -->

 <?php include '../sidenav.php'; ?>
  <div class="main-content flex-grow-1">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="container my-5">
            <div class="card shadow-lg border-0 rounded-4">
              <div class="card-body p-4">

   

        <!-- Module Tracker Card -->
        <div class="container-fluid">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-transparent p-4 p-md-5 border-0">
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center">
                        <div class="d-flex align-items-center mb-4 mb-sm-0">
                            <div class="bg-primary-subtle text-primary p-3 rounded-3 me-3">
                                <i class="bi bi-clipboard-check fs-2"></i>
                            </div>
                            <div>
                                <h1 class="h3 fw-bold text-body-emphasis mb-1">Module Completion</h1>
                                <p class="text-muted mb-0">Your academic progress at a glance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body p-4 p-md-5">
                    <div class="mb-5">
                        <h2 class="h4 fw-bold text-body-secondary mb-1">Big Data Analysis</h2>
                        <p class="text-muted small mb-3">Overall Progress</p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <p class="mb-0">Module 1: Introduction to Hadoop</p>
                                <div class="d-flex align-items-center">
                                    <span class="small fw-medium text-success me-2">Completed</span>
                                    <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                </div>
                            </div>
                             <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">Module 2: MapReduce Framework</p>
                                <div class="d-flex align-items-center">
                                    <span class="small fw-medium text-warning me-2">In Progress</span>
                                    <i class="bi bi-circle-half text-warning fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="my-5">

                    <div class="mb-5">
                        <h2 class="h4 fw-bold text-body-secondary mb-1">Capstone Project 1</h2>
                        <p class="text-muted small mb-3">Overall Progress</p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                         <div class="mt-4">
                             <div class="d-flex align-items-center justify-content-between mb-3">
                                <p class="mb-0">Phase 1: Project Proposal</p>
                                <div class="d-flex align-items-center">
                                    <span class="small fw-medium text-success me-2">Completed</span>
                                    <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <p class="mb-0">Phase 2: System Design</p>
                                 <div class="d-flex align-items-center">
                                    <span class="small fw-medium text-warning me-2">In Progress</span>
                                    <i class="bi bi-circle-half text-warning fs-5"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">Phase 3: Implementation</p>
                                <div class="d-flex align-items-center">
                                    <span class="small fw-medium text-muted me-2">Not Started</span>
                                    <i class="bi bi-circle text-muted fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="mb-5">
                        <h2 class="h4 fw-bold text-body-secondary mb-1">IT ELECTIVE 4</h2>
                        <p class="text-muted small mb-3">Overall Progress</p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                         <div class="mt-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">All Modules</p>
                                <div class="d-flex align-items-center">
                                    <span class="small fw-medium text-success me-2">Completed</span>
                                   <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div>
                        <h2 class="h4 fw-bold text-body-secondary mb-1">OJT- Practicum 1</h2>
                        <p class="text-muted small mb-3">Overall Progress</p>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                         <div class="mt-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">Hours Rendered</p>
                                <div class="d-flex align-items-center">
                                    <span class="small fw-medium text-muted me-2">Not Started</span>
                                    <i class="bi bi-circle text-muted fs-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="card-footer bg-body-tertiary p-4 border-0">
                     <div class="d-flex align-items-center">
                         <div class="bg-success-subtle text-success p-2 rounded-circle me-3">
                            <i class="bi bi-trophy"></i>
                         </div>
                         <p class="mb-0 text-body-secondary">
                            You're making great progress. Keep up the excellent work!
                         </p>
                     </div>
                </div>
            </div>
        </div>
    </div>
    
   
</body>
</html>
