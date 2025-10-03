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
            --dark-bg: #f2f2f8ff; 
            --card-bg: #2a2d3a;
            --border-color: rgba(255, 255, 255, 0.1);
            --light-text: #ffffff;
            --muted-text: rgba(255, 255, 255, 0.6);
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
        .page-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.25rem;
        }

        .gradient-text {
            background: linear-gradient(45deg, var(--blue-gradient-start), var(--blue-gradient-end));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }

        /* --- 4. Components --- */
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
            background-color: #1a66d1;
            color: var(--light-text);
        }

        /* --- 5. Enhanced Quiz Card Styles --- */
        .quiz-card-enhanced {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 0.75rem;
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .quiz-card-enhanced:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .quiz-card-enhanced .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            padding: 1.5rem;
        }

        .quiz-icon-wrapper {
            width: 50px;
            height: 50px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(45deg, var(--blue-gradient-start), var(--blue-gradient-end));
            border-radius: 0.5rem;
        }

        .quiz-icon {
            font-size: 1.5rem;
            color: var(--light-text);
        }

        .quiz-card-enhanced .card-title {
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--light-text);
            margin-bottom: 0.75rem;
        }

        .quiz-meta {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            font-size: 0.875rem;
            color: var(--muted-text);
            margin-bottom: 1.5rem;
        }

        .quiz-meta i {
            margin-right: 0.25rem;
        }

        .quiz-status {
            margin-top: auto; /* Pushes the status to the bottom of the card body */
            padding-top: 1rem;
            border-top: 1px solid var(--border-color);
            font-size: 0.875rem;
            color: var(--muted-text);
        }

        .quiz-status i {
            margin-right: 0.5rem;
        }
        .quiz-status.status-available { color: #77A9EE; }
        .quiz-status.status-past-due { color: #e74c3c; }

        .quiz-card-enhanced.status-completed .quiz-status {
            color: #2ecc71;
        }
        .quiz-card-enhanced.status-completed .quiz-icon-wrapper {
            background: #2ecc71;
        }

        .quiz-card-enhanced.disabled {
            filter: grayscale(80%);
            opacity: 0.6;
        }
        .quiz-card-enhanced.disabled:hover {
            transform: none;
            box-shadow: none;
        }

        .quiz-card-enhanced .card-footer {
            background-color: transparent;
            border-top: none;
            padding: 0 1.5rem 1.5rem;
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
                
                

                  <header class="mb-5">
                    <h1 class="page-title gradient-text">Math Quizzes</h1>
                    <p class="text-muted">Select a quiz to begin. Deadlines are based on PST.</p>
                </header>

                <div class="row g-4">

                    <div class="col-md-6 col-lg-4">
                        <div class="card quiz-card-enhanced">
                            <div class="card-body">
                                <div class="quiz-icon-wrapper">
                                    <i class="bi bi-x-diamond quiz-icon"></i>
                                </div>
                                <h5 class="card-title">Algebra Basics</h5>
                                <div class="quiz-meta">
                                    <span><i class="bi bi-list-ol"></i> 10 Questions</span>
                                    <span><i class="bi bi-clock"></i> 20 mins</span>
                                    <span><i class="bi bi-bar-chart-line"></i> Easy</span>
                                </div>
                                <div class="quiz-status status-available">
                                    <i class="bi bi-calendar-event"></i>
                                    <strong>Deadline:</strong> Nov 15, 2025
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-solid-blue w-100">Start Quiz</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card quiz-card-enhanced">
                            <div class="card-body">
                                <div class="quiz-icon-wrapper">
                                    <i class="bi bi-triangle quiz-icon"></i>
                                </div>
                                <h5 class="card-title">Trigonometry Essentials</h5>
                                 <div class="quiz-meta">
                                    <span><i class="bi bi-list-ol"></i> 12 Questions</span>
                                    <span><i class="bi bi-clock"></i> 25 mins</span>
                                    <span><i class="bi bi-bar-chart-line"></i> Medium</span>
                                </div>
                                <div class="quiz-status status-available">
                                    <i class="bi bi-calendar-event"></i>
                                    <strong>Deadline:</strong> Nov 22, 2025
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-solid-blue w-100">Start Quiz</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card quiz-card-enhanced">
                            <div class="card-body">
                                <div class="quiz-icon-wrapper">
                                    <i class="bi bi-graph-up quiz-icon"></i>
                                </div>
                                <h5 class="card-title">Statistics & Probability</h5>
                                <div class="quiz-meta">
                                    <span><i class="bi bi-list-ol"></i> 18 Questions</span>
                                    <span><i class="bi bi-clock"></i> 40 mins</span>
                                    <span><i class="bi bi-bar-chart-line"></i> Medium</span>
                                </div>
                                <div class="quiz-status status-available">
                                    <i class="bi bi-calendar-event"></i>
                                    <strong>Deadline:</strong> Nov 30, 2025
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-solid-blue w-100">Start Quiz</a>
                            </div>
                        </div>
                    </div>

                </div> </div> </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>