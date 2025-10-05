<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Virtual Class</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    @import url("../../style.css");

 :root {
        --dark-bg: #f7f7fdff;
        --card-bg: #2a2d3a;
        --border-color: rgba(255, 255, 255, 0.1);
        --light-text: #ffffff;
        --dark-text: #212529;
        --muted-text: rgba(255, 255, 255, 0.7);
        --dark-muted-text: #6c757d;
        --secondary-300: #1450A3;
    }
    body { font-family: 'Inter', sans-serif; background-color: var(--dark-bg); color: var(--dark-text); }
    .main-content { padding: 40px; }
    .breadcrumb-item a { color: var(--dark-muted-text); text-decoration: none; }
    .breadcrumb-item.active { color: var(--dark-text); font-weight: 500; }
    .vc-card {
        background: url('https://placehold.co/1200x600/2a2d3a/77A9EE?text=Big+Data+Class') no-repeat center center;
        background-size: cover;
        border-radius: 1rem;
        padding: 4rem;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .vc-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-color: rgba(42, 45, 58, 0.8);
        backdrop-filter: blur(5px);
    }
    .vc-content {
        position: relative;
        z-index: 2;
        color: var(--light-text);
    }
    .vc-content h1, .vc-content h5, .vc-content p { color: var(--light-text); }
    .vc-content .badge {
        font-size: 1rem;
        padding: 0.6em 1em;
        background-color: rgba(255,255,255,0.1) !important;
        border: 1px solid var(--border-color);
    }
    .btn-join {
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.25rem;
        padding: 0.8rem 2.5rem;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .btn-join:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(40, 167, 69, 0.4);
    }
  </style>
</head>

<body>

  <?php include '../sidenav.php'; ?>

  <div class="main-content flex-grow-1">
    <div class="container">
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4 p-md-5">

  <main class="main-content">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Big Data Analysis</a></li>
                    <li class="breadcrumb-item"><a href="#">Module 1</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Virtual Class</li>
                </ol>
            </nav>
            <div class="vc-card">
                <div class="vc-content">
                    <span class="badge rounded-pill mb-3">
                        <i class="bi bi-broadcast me-2"></i> Live Session
                    </span>
                    <h1 class="fw-bold display-4">Live Lecture: The 5 V's in Practice</h1>
                    <p class="fs-5 text-muted mb-4">with Dr. Anya Sharma</p>
                    <div class="row justify-content-center g-3 mb-5">
                        <div class="col-auto">
                            <h5><i class="bi bi-calendar-event me-2"></i> Oct 8, 2025</h5>
                        </div>
                        <div class="col-auto">
                            <h5><i class="bi bi-clock-fill me-2"></i> 2:00 PM - 3:00 PM</h5>
                        </div>
                    </div>
                    <a href="#" class="btn btn-join">
                        <i class="bi bi-camera-video-fill me-2"></i> Join Now
                    </a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>