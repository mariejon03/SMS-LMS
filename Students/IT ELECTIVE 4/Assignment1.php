<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">
  
  <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">


  <style>
    @import url("../../style.css");

  :root {
       
        --light-bg: #f8f9fa;
        --card-shadow: 0 .5rem 1rem rgba(0,0,0,.075);
        --border-color: #dee2e6;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: var(--light-bg);
    }

    .main-content {
        padding: 2.5rem 0;
    }
    
    .page-header h1 {
        font-weight: 800;
    }

    .details-card, .submission-card {
        padding: 2.5rem;
        border: none;
        border-radius: 1rem;
        box-shadow: var(--card-shadow);
        background-color: #fff;
    }

    .details-list {
        list-style: none;
        padding: 0;
        margin: 2rem 0;
        border-top: 1px solid var(--border-color);
        border-bottom: 1px solid var(--border-color);
    }
    .details-list li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 0;
    }
    .details-list li + li {
        border-top: 1px solid var(--border-color);
    }
    .details-list .list-label {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-weight: 500;
        color: #495057;
    }
    .details-list .list-label i {
        color: var(--primary-color);
    }

    .attached-file {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: var(--light-bg);
        padding: 1rem;
        border-radius: 0.5rem;
    }
    .attached-file .info {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-weight: 500;
    }
    .attached-file .info i {
        font-size: 1.5rem;
    }
    
    .status-badge {
        font-weight: 600;
    }

    .file-uploader {
        border: 2px dashed var(--border-color);
        border-radius: 0.75rem;
        padding: 2.5rem;
        text-align: center;
        background-color: var(--light-bg);
        cursor: pointer;
        transition: background-color 0.2s ease;
    }
    .file-uploader:hover {
        background-color: #e2e6ea;
    }
    .file-uploader .upload-icon {
        font-size: 3rem;
        color: var(--primary-color);
        margin-bottom: 1rem;
    }

    .btn-submit-assignment {
        font-size: 1.1rem;
        font-weight: 600;
        padding: 0.75rem 2rem;
        border-radius: 50px;
    }
  </style>
</head>

<body>

  <?php include '../sidenav.php'; ?>

   <main class="main-content flex-grow-1">
            <div class="container">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../IT ELECTIVE 4/ITE.php">IT ELECTIVE 4</a></li>
                        <li class="breadcrumb-item"><a href="../IT ELECTIVE 4/Viewmodule1.php">Module 1</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Assignment</li>
                    </ol>
                </nav>

                <div class="page-header my-4">
                    <h1>Assignment 1: The 5 V's Analysis</h1>
                    <p class="lead text-muted">Apply your understanding of Big Data characteristics to a real-world case study.</p>
                </div>

                <div class="row g-4">
                    <!-- Left Column: Assignment Details -->
                    <div class="col-lg-7">
                        <div class="details-card">
                            <h3 class="fw-bold">Assignment Details</h3>
                            
                            <ul class="details-list">
                                <li>
                                    <span class="list-label"><i class="bi bi-calendar-check"></i> Due Date</span>
                                    <span class="fw-bold">October 17, 2025 at 11:59 PM</span>
                                </li>
                                <li>
                                    <span class="list-label"><i class="bi bi-award"></i> Points</span>
                                    <span class="fw-bold">100</span>
                                </li>
                            </ul>
                            
                            <h4 class="fw-bold mt-4">Instructions</h4>
                            <p class="text-muted">Download the attached case study on Netflix's data usage. Write a 2-page report analyzing how Netflix leverages each of the 5 V's of Big Data (Volume, Velocity, Variety, Veracity, and Value). Please ensure your report is well-structured, provides specific examples from the case study, and is submitted in PDF format.</p>
                            
                            <h4 class="fw-bold mt-4">Attached Files</h4>
                            <div class="attached-file">
                                <div class="info">
                                    <i class="bi bi-file-earmark-pdf-fill text-danger"></i>
                                    <span>Netflix_Case_Study.pdf</span>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm">Download</a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Submission Area -->
                    <div class="col-lg-5">
                        <div class="submission-card">
                            <h3 class="fw-bold mb-4">Submit Your Work</h3>
                            
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-bold">Status:</span>
                                <span class="badge text-bg-danger status-badge">Not Submitted</span>
                            </div>

                             <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="fw-bold">Grade:</span>
                                <span class="text-muted">Not Graded</span>
                            </div>

                            <div class="file-uploader mb-4">
                                <div class="upload-icon"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                                <p class="fw-bold mb-1">Drag & Drop your file here</p>
                                <p class="text-muted small mb-2">or</p>
                                <button class="btn btn-primary btn-sm">Browse Files</button>
                            </div>

                           

                            <div class="d-grid">
                                <button class="btn btn-primary btn-submit-assignment">Submit Assignment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

