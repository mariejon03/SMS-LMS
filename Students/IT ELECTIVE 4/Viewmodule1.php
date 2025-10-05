<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Module</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    @import url("../../style.css");


             :root {
            --light-gray: #f8f9fa;
            --medium-gray: #e9ecef;
            --dark-gray: #6c757d;
            --text-color: #212529;
            --primary-accent: #0d6efd;
            --primary-accent-hover: #0a58ca;
        }

        body {
            background-color: var(--light-gray);
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
        }

        .main-content {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        /* Back Link */
        .back-link {
            display: inline-block;
            margin-bottom: 1.5rem;
            color: var(--dark-gray);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        .back-link:hover {
            color: var(--primary-accent);
        }

        /* Module Header */
        .module-header {
            background-color: #fff;
            padding: 2rem;
            border-radius: 1rem;
            margin-bottom: 2.5rem;
            border: 1px solid var(--medium-gray);
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }
        .module-header .icon-wrapper {
            font-size: 2rem;
            color: var(--primary-accent);
            background-color: #e7f1ff;
            height: 60px;
            width: 60px;
            display: grid;
            place-items: center;
            border-radius: 50%;
        }
        .module-header h1 {
            font-size: 2.25rem;
            font-weight: 700;
            margin: 0;
        }
        .module-header p {
            font-size: 1.1rem;
            color: var(--dark-gray);
            margin: 0.25rem 0 0;
        }

        /* Content Cards */
        .content-card {
            background-color: #fff;
            padding: 1.75rem;
            border-radius: 1rem;
            margin-bottom: 2rem;
            border: 1px solid var(--medium-gray);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.03);
        }
        .content-card h3 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        /* Learning Objectives Card */
        .objectives-list {
            list-style: none;
            padding-left: 0;
        }
        .objectives-list li {
            padding: 0.75rem 0;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            border-bottom: 1px solid var(--medium-gray);
        }
        .objectives-list li:last-child {
            border-bottom: none;
        }
        .objectives-list .bi-check-circle {
            color: #198754; /* Bootstrap success green */
            margin-top: 5px;
        }

        /* Resource List */
        .resource-list {
            list-style: none;
            padding: 0;
        }
        .resource-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid var(--medium-gray);
        }
        .resource-item:last-child {
            border-bottom: none;
        }
        .resource-item .info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .resource-item .info i {
            font-size: 1.5rem;
            color: var(--dark-gray);
        }

        /* Video Lecture Card */
        .video-thumbnail {
            position: relative;
            cursor: pointer;
            border-radius: 0.75rem;
            overflow: hidden;
            margin-bottom: 1rem;
        }
        .video-thumbnail img {
            width: 100%;
            display: block;
        }
        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.2s ease, color 0.2s ease;
        }
        .video-thumbnail:hover .play-icon {
            transform: translate(-50%, -50%) scale(1.1);
            color: #fff;
        }
        .video-info h4 {
            font-weight: 600;
            margin: 0;
        }
        .video-info p {
            color: var(--dark-gray);
            margin-bottom: 0;
        }

        /* Module Navigation */
        .module-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--medium-gray);
        }
        .module-navigation .btn {
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            border-radius: 0.5rem;
        }
            

    /* Custom styles for a cleaner look */
    body {
        background-color: #f8f9fa; /* Light gray background */
    }
    .main-content {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .card {
        transition: box-shadow 0.3s ease-in-out;
    }
    .card:hover {
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
    .feedback-item {
        border-bottom: 1px solid #dee2e6;
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
    }
    .feedback-item:last-child {
        border-bottom: none;
    }

    
  </style>
</head>

<body>

  <?php include '../sidenav.php'; ?>

 <div class="main-content flex-grow-1">
            <div class="container">
                <a href="../IT ELECTIVE 4/ITE.php" class="back-link"><i class="bi bi-arrow-left"></i> Back to All Modules</a>

                <div class="module-header">
                    <div class="icon-wrapper"><i class="bi bi-lightbulb-fill"></i></div>
                    <div>
                        <h1>Module 1: Introduction to Big Data</h1>
                        <p>Understand the core concepts, the 5 V's, and its importance.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Main Content Column -->
                    <div class="col-lg-8">
                        
                        <div class="content-card">
                            <h3><i class="bi bi-info-circle"></i> Module Overview</h3>
                            <p class="text-secondary">Welcome to the first module! This section provides a foundational understanding of Big Data. We will explore what constitutes "big data" and why it has become critically important in today's world. The key focus will be on the 5 V's (Volume, Velocity, Variety, Veracity, and Value), which are the core characteristics used to define and differentiate big data from traditional data.</p>
                            <p class="mb-0 text-secondary">By the end of this module, you'll be able to identify real-world applications and understand the main challenges associated with managing large-scale datasets.</p>
                        </div>

                        <div class="content-card">
                            <h3><i class="bi bi-book"></i> Reading Materials</h3>
                            <ul class="resource-list">
                                <li class="resource-item">
                                    <div class="info">
                                        <i class="bi bi-file-earmark-pdf-fill" style="color: #dc3545;"></i>
                                        <span>Chapter 1: The Dawn of the Data Age.pdf</span>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-outline-primary btn-sm">View</a>
                                        <a href="#" class="btn btn-outline-secondary btn-sm ms-2">Download</a>
                                    </div>
                                </li>
                                <li class="resource-item">
                                    <div class="info">
                                        <i class="bi bi-link-45deg" style="color: #0d6efd;"></i>
                                        <span>Article: What is Big Data? - O'Reilly</span>
                                    </div>
                                    <a href="#" class="btn btn-outline-secondary btn-sm" target="_blank">View Link</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="content-card">
                            <h3><i class="bi bi-camera-reels"></i> Video Lectures</h3>
                            <div class="video-thumbnail">
                                <img src="https://placehold.co/800x450/343a40/ffffff?text=Video+Lecture" alt="Video Thumbnail">
                                <i class="bi bi-play-circle-fill play-icon"></i>
                            </div>
                            <div class="video-info">
                                <h4>1.1 - Unpacking the 5 V's</h4>
                                <p>A deep dive into the core characteristics of Big Data. (15:32)</p>
                            </div>
                        </div>

                    </div>

                    <!-- Sidebar Column -->
                    <div class="col-lg-4">
                        <div class="content-card">
                            <h3><i class="bi bi-check2-square"></i> Learning Objectives</h3>
                            <ul class="objectives-list">
                                <li><i class="bi bi-check-circle"></i> <span>Define Big Data and its characteristics.</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Explain the 5 V's: Volume, Velocity, Variety, Veracity, and Value.</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Understand the importance and applications of Big Data.</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Identify key challenges in Big Data management.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="module-navigation">
                    <button class="btn btn-secondary" disabled>&larr; Previous Module</button>
                    <a href="/module/2" class="btn btn-primary">Next Module: The Hadoop Ecosystem &rarr;</a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

