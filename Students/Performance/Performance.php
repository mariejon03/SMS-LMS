<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS3</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
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

        /* 1. Global Styles & Professional Blue Palette */
        :root {
            /* Blue Palette */
            --primary-blue-dark: #084d92; /* Deeper blue for main accents, like the "Back to Dashboard" button */
            --primary-blue-medium: #1C6FE3; /* Vibrant blue for icons and main buttons */
            --primary-blue-light: #77A9EE; /* Lighter blue for card borders and subtle elements */
            --primary-blue-pale: #EAF2FF; /* Very pale blue for backgrounds within cards */
            --primary-blue-extra-pale: #F3F8FF; /* Even lighter for icon backgrounds */

            /* Neutral Colors */
            --light-bg: #f8ffFC; /* A very clean, slightly greenish-white background for freshness */
            --dark-text: #212529; /* Main text color */
            --muted-text: #6c757d; /* Secondary text color */
            --card-bg: #ffffff; /* White background for main portal card */
            --border-light: #e0e6ef; /* Light border color */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Inter', sans-serif;
            font-weight: 800; /* Made headings extra bold */
            color: var(--dark-text);
        }

        p {
            color: var(--muted-text);
        }

        /* 2. Layout */
        .main-content {
            padding: 40px;
            flex-grow: 1;
        }

        .footer {
            background-color: var(--card-bg);
            border-top: 1px solid var(--border-light);
        }

        /* 3. Reusable Components */

        /* Main Card Container on the Page */
        .main-portal-card {
            border-radius: 1.5rem; /* Slightly more rounded */
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.1); /* Stronger, softer shadow */
            border: none;
            overflow: hidden; /* Ensures rounded corners clip content */
        }

        /* Portal Header styling */
        .portal-header {
            color: var(--primary-blue-dark);
            font-weight: 800; /* Bold title */
        }

        /* Cards look like in the image */
        .tile-card {
            border: none;
            border-radius: 1.25rem; /* Slightly more rounded corners for the tiles */
            background-color: var(--card-bg); /* White background for elevation */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07); /* Initial subtle shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            border-top: 5px solid var(--primary-blue-light); /* Vibrant top border */
        }

        .tile-card:hover {
            transform: translateY(-10px); /* More pronounced lift */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15); /* Stronger shadow on hover */
        }

        .tile-card .card-body {
            padding: 2rem; /* More padding for spacious look */
            display: flex;
            flex-direction: column;
            align-items: center; /* Center content */
            text-align: center;
        }

        .icon-wrapper {
            background-color: var(--primary-blue-extra-pale); /* Pale blue circle background for icon */
            border-radius: 50%;
            width: 80px; /* Size of the circle */
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            box-shadow: inset 0 0 10px rgba(28, 111, 227, 0.05); /* Subtle inner shadow for depth */
        }
        
        .tile-card i {
            font-size: 2.8rem; /* Icon size slightly smaller to fit circle */
            color: var(--primary-blue-medium); /* Vibrant blue for icons */
            margin-bottom: 0; /* Remove default margin */
            line-height: 1; /* Ensure icon is vertically centered */
        }

        .tile-card h5 {
            color: var(--primary-blue-dark);
            font-weight: 700;
            margin-bottom: 0.75rem; /* Space below title */
        }

        .tile-card p {
            color: var(--muted-text); /* Muted text for descriptions */
            font-size: 0.95rem;
            line-height: 1.4;
            margin-bottom: 1.5rem; /* Space below description */
            flex-grow: 1; /* Allows paragraph to take available space */
        }

        /* Buttons (Solid Colored, No Hover Color Change) */
        .btn {
            border-radius: 50px;
            font-weight: 600;
            padding: 0.7rem 2rem; /* Larger padding for a more substantial button */
            transition: transform 0.2s ease, box-shadow 0.2s ease; /* Only transform and shadow on hover */
            border: none; /* Buttons are now solid color, no outline */
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        /* Hover effect for all buttons (lift and shadow) */
        .btn:hover {
            transform: translateY(-3px); /* More pronounced lift on hover */
            box-shadow: 0 7px 15px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
        }

        /* Tile card button styling */
        .tile-card .btn {
            background-color: var(--primary-blue-medium);
            color: white;
            box-shadow: 0 4px 10px rgba(28, 111, 227, 0.3); /* Subtle button shadow */
        }
        
        /* Main "Back to Dashboard" button */
        .btn-primary-themed {
            background-color: var(--primary-blue-dark);
            color: white;
            box-shadow: 0 4px 10px rgba(8, 77, 146, 0.3); /* Button shadow from dark blue */
        }

        /* Sidebar Placeholder (from your original code) */
        .sidebar {
            background-color: #084d92ff;
        }
        /* Make sidebar scrollable in landscape mode on mobile devices */
        @media (max-width: 768px) and (orientation: landscape) {
            .sidebar {
                max-height: 100vh;
                overflow-y: auto;
            }
        }

        /* 4. Responsive Design */
        @media (max-width: 767px) {
            .main-content {
                padding: 20px;
            }
            .main-portal-card {
                border-radius: 1rem;
            }
            .tile-card {
                border-radius: 0.75rem;
            }
            .tile-card .card-body {
                padding: 1.5rem;
            }
            .icon-wrapper {
                width: 60px;
                height: 60px;
            }
            .tile-card i {
                font-size: 2rem;
            }
            .btn {
                padding: 0.6rem 1.5rem;
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


        /* 4. Responsive Design */
        @media (max-width: 767px) {
            .main-content {
                padding: 20px;
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
           

    
 <div class="d-flex justify-content-between align-items-center mb-5 pb-3 border-bottom">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-journal-bookmark-fill display-4 me-3 portal-header"></i>
                            <div>
                                <h2 class="mb-0 portal-header">Student Portal</h2>
                                <p class="text-muted mb-0">Access your academic resources</p>
                            </div>
                        </div>
                        <a href="../Dashboard/dashboard.php" class="btn btn-primary-themed fw-medium d-none d-md-block">
                            <i class="bi bi-arrow-left-circle me-2"></i> Back to Dashboard
                        </a>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="tile-card h-100">
                                <div class="card-body">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-bar-chart-steps"></i>
                                    </div>
                                    <h5 class="fw-bold">Grades</h5>
                                    <p class="mb-4">View your academic performance and scores for all quizzes and assignments.</p>
                                    <a href="../grades/grades.php" class="btn mt-auto">View Grades</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="tile-card h-100">
                                <div class="card-body">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <h5 class="fw-bold">Progress Tracking</h5>
                                    <p class="mb-4">Monitor your learning journey and completion status of modules.</p>
                                    <a href="../ModuleCompletionTracking/modulecompletiontracking.php" class="btn mt-auto">View Progress</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="tile-card h-100">
                                <div class="card-body">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <h5 class="fw-bold">Feedback & Comments</h5>
                                    <p class="mb-4">Read important feedback from professors and interact with your peers.</p>
                                    <a href="../FeedbackandComments/feedbackandcomments.php" class="btn mt-auto">View Feedback</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <p class="text-muted small mb-0">© 2025 Student Management System. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>