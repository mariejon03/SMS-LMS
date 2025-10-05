<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz</title>

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
        --card-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
        --card-hover-shadow: 0 .5rem 1.5rem rgba(0,0,0,.15);
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: var(--light-bg);
    }

    .main-content {
        padding: 2.5rem 0;
    }
    
    .page-header {
        margin-bottom: 2.5rem;
    }
    .page-header h1 {
        font-weight: 800;
    }

    .details-card {
        padding: 2.5rem;
        border: none;
        border-radius: 1rem;
        box-shadow: var(--card-shadow);
        transition: box-shadow 0.3s ease;
    }
    .details-card:hover {
        box-shadow: var(--card-hover-shadow);
    }

    .details-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 1.5rem;
        margin: 2rem 0;
        padding-bottom: 2rem;
        border-bottom: 1px solid #dee2e6;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .detail-item .icon {
        font-size: 1.75rem;
        color: var(--primary-color);
        width: 40px;
    }

    .detail-item strong {
        display: block;
        color: #495057;
    }
    .detail-item span {
        font-size: 0.9rem;
        color: #6c757d;
    }

    .instructions-box {
        background-color: #e9ecef;
        padding: 1.5rem;
        border-radius: 0.75rem;
        margin-bottom: 2rem;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }
    .instructions-box .icon {
        font-size: 1.5rem;
        color: #495057;
        margin-top: 0.25rem;
    }
    .instructions-box h5 {
        font-weight: 600;
    }

    .btn-start-quiz {
        font-size: 1.2rem;
        font-weight: 600;
        padding: 0.8rem 2.5rem;
        border-radius: 50px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .btn-start-quiz:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(13, 110, 253, 0.3);
    }

    .history-card .table {
        margin-bottom: 0;
    }
    .history-card .card-footer {
        background-color: #e9ecef;
        text-align: center;
        font-weight: 500;
        color: #495057;
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

  <?php include '../sidenav.php'; ?>

  <main class="main-content flex-grow-1">
            <div class="container">

               <main class="main-content flex-grow-1">
            <div class="container">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../IT ELECTIVE 4/ITE.php">ITE ELECTIVE 4</a></li>
                        <li class="breadcrumb-item"><a href="../IT ELECTIVE 4/Viewmodule1.php">Module 1</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quiz</li>
                    </ol>
                </nav>

                <div class="page-header">
                    <h1>Quiz: Module 1 Fundamentals</h1>
                    
                </div>

                <div class="row justify-content-center g-4">
                    <!-- Quiz Details Column -->
                    <div class="col-lg-10">
                        <div class="card details-card">
                            <h3 class="fw-bold">Quiz Instructions & Details</h3>
                            <div class="details-grid">
                                <div class="detail-item">
                                    <i class="bi bi-list-ol icon"></i>
                                    <div>
                                        <strong>Questions</strong>
                                        <span>20 Multiple Choice</span>
                                    </div>
                                </div>
                                <div class="detail-item">
                                    <i class="bi bi-clock icon"></i>
                                    <div>
                                        <strong>Time Limit</strong>
                                        <span>30 Minutes</span>
                                    </div>
                                </div>
                                <div class="detail-item">
                                    <i class="bi bi-arrow-repeat icon"></i>
                                    <div>
                                        <strong>Attempts Allowed</strong>
                                        <span>1</span>
                                    </div>
                                </div>
                                <div class="detail-item">
                                    <i class="bi bi-calendar-check icon"></i>
                                    <div>
                                        <strong>Due Date</strong>
                                        <span>October 10, 2025</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="instructions-box">
                                <i class="bi bi-info-circle-fill icon"></i>
                                <div>
                                    <h5>Before you begin:</h5>
                                    <p class="mb-0 text-muted">This is a timed quiz. Once you start, the timer will not stop, even if you close the browser. You have only one attempt. Please ensure you have a stable internet connection. Good luck!</p>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button class="btn btn-primary btn-start-quiz">Start Quiz Now</button>
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

