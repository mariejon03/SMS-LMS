<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS3</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
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
            --dark-bg: #fefeffff; /* A slightly darker, more modern background */
            --card-bg: #031350ff;
            --border-color: rgba(255, 255, 255, 0.1);
            --light-text: #ffffff;
            --muted-text: rgba(109, 151, 230, 0.6);
            --primary-blue: #1450A3;
            --blue-gradient-start: #77A9EE;
            --blue-gradient-end: #1C6FE3;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dark-bg);
            color: var(--light-text);
        }

        /* --- 2. Layout --- */
        .main-content {
            padding: 2.5rem;
        }

        .sidebar {
            background-color: #084d92ff;
            color: #fff;
        }

        /* --- 3. Typography --- */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            color: var(--light-text);
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.25rem;
        }

        .gradient-text {
            background: linear-gradient(45deg, var(--blue-gradient-start), var(--blue-gradient-end));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            /* FIX: Replaced non-standard 'text-fill-color' with standard 'color' */
            color: transparent;
        }

        /* --- 4. Components --- */

        /* Breadcrumb */
        .breadcrumb-item a {
            color: var(--muted-text);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .breadcrumb-item a:hover {
            color: var(--light-text);
        }

        .breadcrumb-item.active {
            color: var(--light-text);
            font-weight: 500;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: var(--muted-text);
        }

        /* Accordion */
        .accordion {
            --bs-accordion-border-color: var(--border-color);
            --bs-accordion-bg: transparent;
            --bs-accordion-color: var(--light-text);
        }

        .accordion-item {
            background-color: var(--card-bg);
            border-color: var(--border-color);
            margin-bottom: 1rem;
            border-radius: 0.75rem !important;
            border: none;
        }

        .accordion-button {
            background-color: var(--card-bg);
            color: var(--light-text);
            font-weight: 600;
            border-radius: 0.75rem;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--card-bg); /* Match collapsed state background */
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(20, 80, 163, 0.5);
            border-color: var(--primary-blue);
        }

        .accordion-button::after {
            --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .accordion-body {
            padding: 0.5rem 1.25rem 1rem;
        }

        /* List Group (Learning Materials) */
        .list-group {
            --bs-list-group-bg: transparent;
            --bs-list-group-border-color: var(--border-color);
            --bs-list-group-color: var(--light-text);
        }

        .list-group-item {
            background-color: transparent;
            padding: 1rem 0.25rem;
            border: none;
            border-top: 1px solid var(--border-color);
        }

        .list-group-item:first-child {
            border-top: none;
        }

        /* File Type Icons */
        .list-group-item i {
            font-size: 2rem;
            width: 40px;
            text-align: center;
        }
        .icon-pdf { color: #f40f02; }
        .icon-ppt { color: #d35400; }
        .icon-video { color: #c4302b; }
        .icon-doc { color: #2980b9; }

        /* Buttons */
        .btn-solid-blue {
            background-color: var(--primary-blue);
            color: var(--light-text);
            border: none;
            border-radius: 50px;
            font-weight: 600;
            padding: 0.6rem 1.5rem;
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .btn-solid-blue:hover {
            transform: translateY(-2px);
            background-color: #1a66d1; /* Slightly lighter blue on hover */
            color: var(--light-text);
        }
        /* Sidebar Placeholder */
        .sidebar { background-color: #084d92ff; }
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
                
                

                <header class="d-flex justify-content-between align-items-center mb-5">
                    <div>
                        <h1 class="page-title gradient-text">Modules & Materials</h1>
                       
                    </div>
                    <a href="../BigData/bigdata.php" class="btn btn-solid-blue fw-medium d-none d-md-block">
                        <i class="bi bi-arrow-left-circle me-2"></i> Back to Subject
                    </a>
                </header>

                <div class="accordion" id="learningMaterialsAccordion">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Week 1: Introduction to Big Data & Core Concepts
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#learningMaterialsAccordion">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="bi bi-file-earmark-ppt-fill icon-ppt"></i>
                                        <div class="ms-3 me-auto">
                                            <div class="fw-bold">Lecture 1 - The 5 V's of Big Data.pptx</div>
                                            <small class="text-muted">Uploaded: September 15, 2025 | 4.2 MB</small>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-outline-secondary me-2">View</a>
                                        <a href="#" class="btn btn-sm btn-solid-blue">Download</a>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="bi bi-file-earmark-pdf-fill icon-pdf"></i>
                                        <div class="ms-3 me-auto">
                                            <div class="fw-bold">Reading - Chapter 1: What is Big Data?.pdf</div>
                                            <small class="text-muted">Required Reading | 1.8 MB</small>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-outline-secondary me-2">View</a>
                                        <a href="#" class="btn btn-sm btn-solid-blue">Download</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Week 2: The Hadoop Ecosystem
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#learningMaterialsAccordion">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="bi bi-file-earmark-ppt-fill icon-ppt"></i>
                                        <div class="ms-3 me-auto">
                                            <div class="fw-bold">Lecture 2 - Introduction to HDFS and MapReduce.pptx</div>
                                            <small class="text-muted">Uploaded: September 22, 2025 | 5.1 MB</small>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-outline-secondary me-2">View</a>
                                        <a href="#" class="btn btn-sm btn-solid-blue">Download</a>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <i class="bi bi-youtube icon-video"></i>
                                        <div class="ms-3 me-auto">
                                            <div class="fw-bold">Video - How MapReduce Works (External Link)</div>
                                            <small class="text-muted">Optional Viewing | YouTube</small>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-solid-blue" target="_blank">Watch Video</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div> </div> </main> </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>