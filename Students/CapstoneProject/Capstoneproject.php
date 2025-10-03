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


        :root {
            --dark-bg: #ffffffff;
            --card-bg: #2a2d3a;
            --border-color: rgba(255, 255, 255, 0.1);
            --light-text: #ffffff;
            --muted-text: rgba(255, 255, 255, 0.7);
            --secondary-300: #1450A3;
            --secondary-400: #114388;
            --progress-bar-color: #20c997;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dark-bg);
            color: var(--light-text);
        }
        .main-content { padding: 40px; }
        .main-portal-card { background-color: transparent; box-shadow: none; }

        /* Breadcrumb Styling */
        .breadcrumb { margin-bottom: 0; }
        .breadcrumb-item a { color: var(--muted-text); text-decoration: none; }
        .breadcrumb-item a:hover { color: var(--light-text); }
        .breadcrumb-item.active { color: var(--light-text); font-weight: 500; }
        .breadcrumb-item+.breadcrumb-item::before { color: var(--muted-text); }

        /* Subject Header Card */
        .subject-header-card {
            background-color: var(--card-bg);
            border-radius: 1rem;
            padding: 2rem;
            border: 1px solid var(--border-color);
        }

        /* Content Cards (for Quizzes, Assignments, etc.) */
        .content-card {
            display: flex;
            align-items: center;
            padding: 1.5rem;
            background-color: var(--card-bg);
            border-radius: 0.75rem;
            border: 1px solid var(--border-color);
            transition: background-color 0.3s ease;
        }
        .content-card:hover {
            background-color: #3a3e4c;
        }

        .content-icon {
            font-size: 2rem;
            margin-right: 1.5rem;
            color: var(--secondary-100, #77A9EE);
        }
        .content-details .title {
            font-weight: 600;
            margin-bottom: 0.1rem;
            color: var(--light-text);
        }
        .content-details .subtitle {
            margin-bottom: 0;
            color: var(--muted-text);
            font-size: 0.9rem;
        }

        .btn-solid-blue {
            background-color: var(--secondary-300);
            color: var(--light-text);
            border: none;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.6rem 1.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn-solid-blue:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(28, 111, 227, 0.4);
            color: var(--light-text);
        }

        /* Progress Bar (re-used from previous page) */
        .progress-section { margin-top: auto; }
        .progress-label { font-size: 0.8rem; font-weight: 500; color: var(--muted-text); display: flex; align-items: center; }
        .progress-label i { margin-right: 0.5rem; color: var(--progress-bar-color); }
        .progress-custom { height: 6px; background-color: rgba(255, 255, 255, 0.2); border-radius: 50px; overflow: hidden; }
        .progress-bar-custom { background-color: var(--progress-bar-color); }

   
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
      background-color: #baa9e2ff;
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
           
  <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Student Courses</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Capstone Project 1</li>
                        </ol>
                    </nav>

                    <div class="subject-header-card mb-5">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2 class="mb-1 fw-bold">Capstone</h2>
                                <p class="text-muted mb-2">Instructor: Dr. Evelyn Reed</p>
                                <div class="progress-section mt-3">
                                    <p class="progress-label mb-1"><i class="bi bi-graph-up"></i>6% complete</p>
                                    <div class="progress progress-custom">
                                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 6%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                <a href="../ClassPortal/classportal.php" class="btn btn-solid-blue fw-medium">
                                    <i class="bi bi-arrow-left-circle me-2"></i> Back to Courses
                                </a>
                            </div>
                        </div>
                    </div>


                     <div class="row g-4">
                        <div class="col-md-12">
                            <div class="content-card">
                                <div class="content-icon">
                                    <i class="bi bi-book-fill"></i>
                                </div>
                                <div class="content-details">
                                    <h5 class="title">Learning Materials</h5>
                                    <p class="subtitle">Assess your knowledge and prepare for exams.</p>
                                </div>
                                <a href="../CapstoneProject/learningmaterials.php" class="btn btn-solid-blue ms-auto">View Modules</a>
                            </div>
                        </div>

                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="content-card">
                                <div class="content-icon">
                                  <i class="bi bi-question-circle-fill"></i>
                                </div>
                                <div class="content-details">
                                    <h5 class="title">Quizzes</h5>
                                    <p class="subtitle">Assess your knowledge and prepare for exams.</p>
                                </div>
                                <a href="../CapstoneProject/onlinequiz.php" class="btn btn-solid-blue ms-auto">View Quizzes</a>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="content-card">
                                <div class="content-icon">
                                    <i class="bi bi-pencil-square"></i>
                                </div>
                                <div class="content-details">
                                    <h5 class="title">Assignments</h5>
                                    <p class="subtitle">Submit your homework and track upcoming deadlines.</p>
                                </div>
                                <a href="../Assignmentsubmission/assignsubmission.php" class="btn btn-solid-blue ms-auto">View Assignments</a>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="content-card">
                                <div class="content-icon">
                                    <i class="bi bi-camera-video-fill"></i>
                                </div>
                                <div class="content-details">
                                    <h5 class="title">Virtual Class</h5>
                                    <p class="subtitle">Join live lectures and discussions with your professor.</p>
                                </div>
                                <a href="../VirtualClassLinkInteg/virtualclasslinkinteg.php" class="btn btn-solid-blue ms-auto">Join Now</a>
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