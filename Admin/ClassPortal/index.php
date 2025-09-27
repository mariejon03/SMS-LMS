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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        Enhanced Global Styles & Colors
        =======================================
        */
        :root {
            /* Main Palette */
            --secondary-color: #6c757d;
            --background-color: #f8f9fc;
            --card-bg: #e9f5fdff;
            --text-dark: #222b45;
            --text-light: #ffffffff;
            --border-color: #eef2f7;
            --shadow: 0 5px 25px rgba(0, 0, 0, 0.04);
            
            /* Theme Colors - Chosen for beauty and accessibility */
            --c-upload-main: #005f69;
            --c-upload-soft: #ddfff9ff;
            
            --c-virtual-main: #1e88e5;
            --c-virtual-soft: #d4ebfcff;

            --c-quizzes-main: #5e35b1;
            --c-quizzes-soft: #ede7f6;
            
            --c-assignments-main: #4a74ffff;
            --c-assignments-soft: #d1dff8ff;

            --c-multimedia-main: #4169E1;
            --c-multimedia-soft: #dfdbfcff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-dark);
        }

        /*
        =======================================
        Enhanced Main Layout & Header
        =======================================
        */
        .main-content-wrapper {
            padding: 2.5rem;
        }

        .dashboard-header {
            margin-bottom: 2.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid var(--border-color);
        }

        .dashboard-header h1 {
            font-weight: 700;
            font-size: 2.25rem;
        }
        
        .dashboard-header p {
            color: var(--secondary-color);
            font-size: 1.1rem;
        }

        .create-class-btn {
            background-image: linear-gradient(45deg, #0d6efd, #0dcaf0);
            border: none;
            padding: 0.75rem 1.75rem;
            border-radius: 50px;
            font-weight: 600;
            color: var(--text-light);
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .create-class-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3);
        }

        /*
        =======================================
        Enhanced Dashboard Cards
        =======================================
        */
        .card-tile {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 1rem;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-top-color 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border-top: 4px solid var(--border-color); /* Subtle top border */
        }
        
        /* Colored border appears on hover */
        .card-tile:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.07);
        }
        .card-upload:hover { border-top-color: var(--c-upload-main); }
        .card-virtual:hover { border-top-color: var(--c-virtual-main); }
        .card-quizzes:hover { border-top-color: var(--c-quizzes-main); }
        .card-assignments:hover { border-top-color: var(--c-assignments-main); }
        .card-multimedia:hover { border-top-color: var(--c-multimedia-main); }


        .card-tile .card-body {
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .icon-wrapper {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            margin-bottom: 1.25rem;
        }

        .icon-wrapper i {
            font-size: 1.75rem;
        }

        .card-tile h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .card-tile p {
            font-size: 0.9rem;
            color: var(--secondary-color);
            line-height: 1.6;
            flex-grow: 1;
            margin-bottom: 1.5rem;
        }
        
        .card-tile .btn {
            border-radius: 50px;
            font-weight: 500;
            padding: 0.6rem 1.35rem;
            align-self: flex-start;
            border: none;
            color: var(--text-light);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-tile .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Icon Wrapper & Button Color Variants (New Accessible Palette) */
        .icon-upload { background-color: var(--c-upload-soft); color: var(--c-upload-main); }
        .btn-upload { background-color: var(--c-upload-main); }

        .icon-virtual { background-color: var(--c-virtual-soft); color: var(--c-virtual-main); }
        .btn-virtual { background-color: var(--c-virtual-main); }

        .icon-quizzes { background-color: var(--c-quizzes-soft); color: var(--c-quizzes-main); }
        .btn-quizzes { background-color: var(--c-quizzes-main); }

        .icon-assignments { background-color: var(--c-assignments-soft); color: var(--c-assignments-main); }
        .btn-assignments { background-color: var(--c-assignments-main); }
        
        .icon-multimedia { background-color: var(--c-multimedia-soft); color: var(--c-multimedia-main); }
        .btn-multimedia { background-color: var(--c-multimedia-main); }

        @media (max-width: 991px) {
            .main-content-wrapper { padding: 1.5rem; }
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

                  
              <div class="main-content-wrapper">
        <div class="dashboard-header d-flex flex-wrap justify-content-between align-items-center">
            <div>
                <h1>Class Portal</h1>
                <p class="mb-0">Welcome Admin, manage your class resources and activities here.</p>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="btn create-class-btn">
                    <i class="bi bi-plus-lg me-2"></i> Create New Class
                </a>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card card-tile card-upload">
                    <div class="card-body">
                        <div class="icon-wrapper icon-upload">
                            <i class="bi bi-cloud-arrow-up-fill"></i>
                        </div>
                        <h5>Upload Materials</h5>
                        <p>Add and organize lesson files, documents, and videos for your students.</p>
                        <a href="../viewanalytics/uploadmaterials.php" class="btn btn-upload">Manage <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card card-tile card-virtual">
                    <div class="card-body">
                        <div class="icon-wrapper icon-virtual">
                            <i class="bi bi-camera-video-fill"></i>
                        </div>
                        <h5>Virtual Class</h5>
                        <p>Manage links for live virtual classrooms and online sessions.</p>
                        <a href="../VirtualClassLinkInteg/virtualclasslinkinteg.php" class="btn btn-virtual">Set Up <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card card-tile card-quizzes">
                    <div class="card-body">
                        <div class="icon-wrapper icon-quizzes">
                            <i class="bi bi-patch-question-fill"></i>
                        </div>
                        <h5>Quizzes</h5>
                        <p>Create, manage, and automatically grade online quizzes and exams.</p>
                        <a href="../OnlineQuizzes/onlinequizzes.php" class="btn btn-quizzes">Create <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card card-tile card-assignments">
                    <div class="card-body">
                        <div class="icon-wrapper icon-assignments">
                            <i class="bi bi-file-earmark-check-fill"></i>
                        </div>
                        <h5>Assignments</h5>
                        <p>Review and provide feedback on student assignment submissions.</p>
                        <a href="../AssignmentSubmission/assignsubmission.php" class="btn btn-assignments">View <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card card-tile card-multimedia">
                    <div class="card-body">
                        <div class="icon-wrapper icon-multimedia">
                            <i class="bi bi-collection-play-fill"></i>
                        </div>
                        <h5>Multimedia</h5>
                        <p>Upload and manage engaging rich media content for your lessons.</p>
                        <a href="../MultiMediaSupport/multimedsupp.php" class="btn btn-multimedia">Add Media <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>