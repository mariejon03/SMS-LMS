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
  /*
        =======================================
        SMS3 - Student Management System Styles
        =======================================
        */

        /* 1. Global Styles & Professional Dark Theme */
        :root {
            /* Blue Palette from your image */
            --secondary-100: #77A9EE;
            --secondary-300: #1450A3;
            --secondary-400: #114388;
            --purple-accent: #3d336b; /* For the OJT card gradient */

            /* Theme Colors */
            --dark-bg: #ffffffff;
            --light-text: #ffffff;
            --muted-text: rgba(255, 255, 255, 0.7);
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            --progress-bar-color: #20c997; /* A vibrant green for progress */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dark-bg);
            color: var(--light-text);
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            color: var(--light-text);
        }
        
        /* 2. Layout */
        .main-content {
            padding: 40px;
            flex-grow: 1;
        }

        /* Removing the main card wrapper's white background */
        .main-portal-card {
            background-color: transparent;
            box-shadow: none;
        }

        /* 3. Re-designed Components */

        /* Header Styling */
        .portal-header h2 {
            font-weight: 800; /* Bolder Title */
        }
        .portal-header p {
            color: var(--muted-text);
        }

        /* Solid Blue Button */
        .btn-solid-blue {
            background-color: var(--secondary-300);
            color: var(--light-text);
            border: none;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.6rem 1.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        /* No color change on hover, just a lift */
        .btn-solid-blue:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(28, 111, 227, 0.4);
            color: var(--light-text);
        }

        /* New Subject Card Design */
        .subject-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 1.5rem;
            border-radius: 1.25rem;
            min-height: 250px;
            text-decoration: none;
            color: var(--light-text);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: var(--card-shadow);
        }

        .subject-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            color: var(--light-text);
        }
        
        /* Background Gradients & Patterns */
        .card-bg-1 { background-image: linear-gradient(135deg, #1f2937, #111827); }
        .card-bg-2 { background-image: linear-gradient(135deg, var(--secondary-400), var(--secondary-300)); }
        .card-bg-3 { background-image: linear-gradient(135deg, #0d5c80, #1450a3); }
        .card-bg-4 { background-image: linear-gradient(135deg, var(--purple-accent), #2c2a5c); }

        .card-menu-icon {
            position: absolute;
            top: 1rem;
            right: 1rem;
            color: var(--muted-text);
            font-size: 1.25rem;
        }

        .subject-card .title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        .subject-card .subtitle {
            font-size: 0.9rem;
            color: var(--muted-text);
            margin-bottom: 1rem;
        }

        /* Progress Bar Section */
        .progress-section {
            margin-top: auto; /* Pushes to the bottom */
        }
        .progress-label {
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--muted-text);
            display: flex;
            align-items: center;
        }
        .progress-label i {
            margin-right: 0.5rem;
            color: var(--progress-bar-color);
        }
        .progress-custom {
            height: 6px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            overflow: hidden;
        }
        .progress-bar-custom {
            background-color: var(--progress-bar-color);
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
           

            
<div class="d-flex justify-content-between align-items-center mb-5 pb-3 border-bottom border-secondary portal-header">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-journal-bookmark-fill display-4 me-3"></i>
                            <div>
                                <h2 class="mb-0 fw-bold">Student Courses</h2>
                                <p class="mb-0">Your enrolled subjects for this semester</p>
                            </div>
                        </div>
                        <a href="../Dashboard/dashboard.php" class="btn btn-solid-blue fw-medium d-none d-md-block">
                            <i class="bi bi-arrow-left-circle me-2"></i> Back to Dashboard
                        </a>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <a href="../BigData/bigdata.php" class="subject-card card-bg-1">
                                <i class="bi bi-three-dots card-menu-icon"></i>
                                <div>
                                    <h5 class="title">Big Data Analysis</h5>
                                    <p class="subtitle">Bachelor of Science in IT</p>
                                </div>
                                <div class="progress-section">
                                    <p class="progress-label mb-1"><i class="bi bi-graph-up"></i>6% complete</p>
                                    <div class="progress progress-custom">
                                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 6%"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="#" class="subject-card card-bg-2">
                                <i class="bi bi-three-dots card-menu-icon"></i>
                                <div>
                                    <h5 class="title">Capstone Project 1</h5>
                                    <p class="subtitle">Bachelor of Science in IT</p>
                                </div>
                                <div class="progress-section">
                                    <p class="progress-label mb-1"><i class="bi bi-graph-up"></i>12% complete</p>
                                    <div class="progress progress-custom">
                                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 12%"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="#" class="subject-card card-bg-3">
                                <i class="bi bi-three-dots card-menu-icon"></i>
                                <div>
                                    <h5 class="title">IT Elective 4</h5>
                                    <p class="subtitle">System Integration</p>
                                </div>
                                <div class="progress-section">
                                    <p class="progress-label mb-1"><i class="bi bi-graph-up"></i>8% complete</p>
                                    <div class="progress progress-custom">
                                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 8%"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="#" class="subject-card card-bg-4">
                                <i class="bi bi-three-dots card-menu-icon"></i>
                                <div>
                                    <h5 class="title">OJT - Practicum 1</h5>
                                    <p class="subtitle">On-the-Job Training</p>
                                </div>
                                <div class="progress-section">
                                    <p class="progress-label mb-1"><i class="bi bi-graph-up"></i>2% complete</p>
                                    <div class="progress progress-custom">
                                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 2%"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>