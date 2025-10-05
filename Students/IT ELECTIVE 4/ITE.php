<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ITE</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
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
        --dark-bg: #f7f7fdff;
        --card-bg: #2a2d3a;
        --border-color: rgba(255, 255, 255, 0.1);
        --light-text: #ffffff;
        --dark-text: #212529; /* For light backgrounds */
        --muted-text: rgba(255, 255, 255, 0.7);
        --dark-muted-text: #6c757d; /* For light backgrounds */
        --secondary-300: #1450A3;
        --secondary-400: #114388;
        --progress-bar-color: #20c997;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: var(--dark-bg);
        color: var(--dark-text); /* Default text color is now dark for readability */
    }

    /* --- 2. Layout & Main Components --- */
    .main-content { 
        padding: 40px; 
    }

    /* Breadcrumb Styling for Visibility */
    .breadcrumb-item a { 
        color: var(--dark-muted-text); 
        text-decoration: none; 
        transition: color 0.2s ease;
    }
    .breadcrumb-item a:hover {
        color: var(--dark-text);
    }
    .breadcrumb-item.active { 
        color: var(--dark-text); 
        font-weight: 500; 
    }
    .breadcrumb-item+.breadcrumb-item::before {
        color: var(--dark-muted-text);
    }

    /* Subject Header Card */
    .subject-header-card {
        background-color: var(--card-bg);
        border-radius: 1rem;
        padding: 2rem;
        border: 1px solid var(--border-color);
        color: var(--light-text); /* Ensure text inside this card is light */
    }
    .subject-header-card h2 {
        color: var(--light-text);
    }
    .subject-header-card p {
        color: var(--muted-text) !important;
    }


    /* Content Cards (for Modules) */
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
        color: #77A9EE;
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

    /* Progress Bar */
    .progress-section { 
        margin-top: 1.5rem; /* Adjusted margin */
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

    /* --- 3. Custom Dropdown Styles --- */
    .dropdown-menu {
        background-color: #3a3e4c;
        border: 1px solid var(--border-color);
        border-radius: 0.5rem;
        padding: 0.5rem 0;
    }
    .dropdown-item {
        color: var(--muted-text);
        padding: 0.5rem 1.25rem;
    }
    .dropdown-item:hover, .dropdown-item:focus {
        background-color: var(--secondary-400);
        color: var(--light-text);
    }
    .dropdown-item i {
        margin-right: 0.75rem;
        width: 16px; /* Align icons */
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
    <div class="container-fluid">
           
  <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../ClassPortal/classportal.php">Student Courses</a></li>
                            <li class="breadcrumb-item active" aria-current="page">IT ELECTIVE 4</li>
                        </ol>
                    </nav>

                    <div class="subject-header-card mb-5">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="mb-1 fw-bold">IT ELECTIVE 4</h2>
                            <p class="text-muted mb-0">Instructor: Dr. Anya Sharma</p>
                           
                        </div>
                    </div>
                </div>

                <!-- Modules List -->
                <h4 class="mb-4">Course Modules</h4>
                <div class="row g-3">
                    <!-- Module 1 -->
                    <div class="col-md-12">
                        <div class="content-card">
                            <div class="content-icon"><i class="bi bi-lightbulb-fill"></i></div>
                            <div class="content-details">
                                <h5 class="title">Module 1: Introduction to Big Data</h5>
                                <p class="subtitle">Understand the core concepts, the 5 V's, and its importance.</p>
                            </div>
                            <div class="dropdown ms-auto">
                                <button class="btn btn-solid-blue dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="../IT ELECTIVE 4/Viewmodule1.php"><i class="bi bi-book-fill"></i> View Module 1</a></li>
                                    <li><a class="dropdown-item" href="../IT ELECTIVE 4/Quiz1.php"><i class="bi bi-question-circle-fill"></i> Quiz</a></li>
                                    <li><a class="dropdown-item" href="../IT ELECTIVE 4/Assignment1.php"><i class="bi bi-pencil-square"></i> Assignment</a></li>
                                    <li><a class="dropdown-item" href="../IT ELECTIVE 4/Virtualclass1.php"><i class="bi bi-camera-video-fill"></i> Virtual Class</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Module 2 -->
                    <div class="col-md-12">
                        <div class="content-card">
                            <div class="content-icon"><i class="bi bi-hdd-stack-fill"></i></div>
                            <div class="content-details">
                                <h5 class="title">Module 2: The Hadoop Ecosystem</h5>
                                <p class="subtitle">Explore HDFS, MapReduce, YARN, and other key components.</p>
                            </div>
                            <div class="dropdown ms-auto">
                                <button class="btn btn-solid-blue dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-book-fill"></i> View Module 2</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle-fill"></i> Quiz</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square"></i> Assignment</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-camera-video-fill"></i> Virtual Class</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Module 3 -->
                    <div class="col-md-12">
                        <div class="content-card">
                            <div class="content-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                            <div class="content-details">
                                <h5 class="title">Module 3: Data Processing with Spark</h5>
                                <p class="subtitle">Learn about fast, in-memory data processing and Spark's architecture.</p>
                            </div>
                            <div class="dropdown ms-auto">
                                <button class="btn btn-solid-blue dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-book-fill"></i> View Module 3</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle-fill"></i> Quiz</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square"></i> Assignment</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-camera-video-fill"></i> Virtual Class</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Module 4 -->
                    <div class="col-md-12">
                        <div class="content-card">
                            <div class="content-icon"><i class="bi bi-database-fill-gear"></i></div>
                            <div class="content-details">
                                <h5 class="title">Module 4: NoSQL Databases</h5>
                                <p class="subtitle">Dive into different types of NoSQL databases like HBase and Cassandra.</p>
                            </div>
                            <div class="dropdown ms-auto">
                                <button class="btn btn-solid-blue dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-book-fill"></i> View Module 4</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle-fill"></i> Quiz</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square"></i> Assignment</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-camera-video-fill"></i> Virtual Class</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Module 5 -->
                    <div class="col-md-12">
                        <div class="content-card">
                            <div class="content-icon"><i class="bi bi-bar-chart-line-fill"></i></div>
                            <div class="content-details">
                                <h5 class="title">Module 5: Big Data Analytics & Visualization</h5>
                                <p class="subtitle">Analyze large datasets and present findings with tools like Tableau.</p>
                            </div>
                           <div class="dropdown ms-auto">
                                <button class="btn btn-solid-blue dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-book-fill"></i> View Module 5</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle-fill"></i> Quiz</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square"></i> Assignment</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-camera-video-fill"></i> Virtual Class</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- /row -->
            </div> <!-- /container -->
        </main> <!-- /main-content -->
    </div> <!-- /d-flex -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

