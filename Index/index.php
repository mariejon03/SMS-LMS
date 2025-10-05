<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS:School Management System III</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    

  <style>
    
      :root {
        --primary-color: #0d6efd;
        --light-bg: #ffffff;
        --secondary-bg: #f8f9fa;
        --border-color: #dee2e6;
        --text-dark: #212529;
        --text-muted: #6c757d;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: var(--light-bg);
        color: var(--text-dark);
    }

    .section-padding {
        padding: 6rem 0;
    }

    /* Navigation Bar */
    .navbar-custom {
        background-color: rgba(10, 10, 10, 0.8);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    .navbar-brand {
        font-weight: 700;
        color: #fff !important;
    }
    .navbar-center-logo, .navbar-center-logo img{
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 50%;
        top: 0%;
        height: 50px;
    }

    /*
     * === STYLES FOR THE LOGO ===
     * These rules ensure the logo is a perfect circle and fits in the header.
    */
    .navbar-header-logo {
        width: 40px; /* Sets a fixed width */
        height: 40px; /* Sets a fixed height */
        border-radius: 80%; /* This is what makes the image round */
        object-fit: cover; /* Ensures the image fills the space without distortion */
    }
    
    /* Hero Section */
    .hero-section {
        height: 100vh;
        width: 100%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
        background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto-format&fit=crop');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 800px;
    }
    .hero-content h1 {
        font-weight: 800;
        font-size: 3.5rem;
    }
    .hero-content p {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.8);
    }
    .btn-explore {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        font-weight: 600;
        padding: 0.8rem 2.5rem;
        border-radius: 50px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .btn-explore:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    /* Features Section */
    .feature-card {
        background-color: #fff;
        padding: 2.5rem;
        border-radius: 1rem;
        border: 1px solid var(--border-color);
        text-align: center;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        height: 100%;
    }
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    }
    .feature-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        background-color: #e7f1ff;
        width: 80px;
        height: 80px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-bottom: 1.5rem;
    }
    .feature-card h5 {
        font-weight: 700;
        color: var(--text-dark);
    }
    .feature-card p {
        color: var(--text-muted);
    }

    /* Testimonials Section */
    .testimonials-section {
        background-color: var(--secondary-bg);
    }
    .testimonial-card {
        background-color: #fff;
        border: 1px solid var(--border-color);
        padding: 2rem;
        border-radius: 1rem;
        height: 100%;
    }
    .testimonial-card blockquote {
        font-style: italic;
        color: var(--text-muted);
        border-left: 4px solid var(--primary-color);
        padding-left: 1.5rem;
    }
    .testimonial-card .student-name {
        font-weight: 700;
        color: var(--text-dark);
    }
    
    /* Footer */
    footer {
        border-top: 1px solid var(--border-color);
    }
    
    @media (max-width: 991.98px) {
        .navbar-center-logo {
            display: none;
        }
    }
     @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 2.5rem;
        }
         .hero-content p {
            font-size: 1rem;
        }
    }

  </style>
</head>

<body>

   <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-book-half"></i> School Management System III</a>
            
           <img src="../SMS3logo.jpg" class="navbar-center-logo">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="../login/Log_in.html" class="btn btn-primary">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="hero-content px-3">
            <h1 class="display-4">Online Learning Management</h1>
            <p class="lead my-4">An intuitive, powerful platform designed to enhance your educational journey.</p>
            <a href="#features" class="btn btn-primary btn-lg btn-explore">Explore Features</a>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="section-padding">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-md-8 mx-auto">
                    <h2 class="fw-bold">Everything You Need to Succeed</h2>
                    <p class="text-muted-dark">Our platform is packed with features to support your learning goals.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-journal-code"></i></div>
                        <h5>Interactive Modules</h5>
                        <p>Engage with course materials, complete assignments, and take quizzes all in one place.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <h5>Track Your Progress</h5>
                        <p>Stay on top of your coursework with a clear overview of your grades and deadlines.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="bi bi-people-fill"></i></div>
                        <h5>Engage & Collaborate</h5>
                        <p>Join virtual classes and connect with instructors and peers to enhance learning.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="section-padding" style="background-color: #f3f2fdff;">
         <div class="container">
            <div class="row text-center mb-5">
                <div class="col-md-8 mx-auto">
                    <h2 class="fw-bold">From Our Students</h2>
                    <p class="text-muted-dark">See how our platform has helped students achieve their goals.</p>
                </div>
            </div>
             <div class="row g-4">
                 <div class="col-lg-6">
                     <div class="testimonial-card">
                         <blockquote class="mb-4">"This platform made managing my courses so much easier. The interface is clean and I always know what I need to do next. It's been a game-changer for my productivity."</blockquote>
                         <div class="d-flex align-items-center">
                            <img src="https://placehold.co/60x60/2a2a2a/FFFFFF?text=JS" class="rounded-circle" alt="Student photo">
                             <div class="ms-3">
                                 <p class="student-name mb-0">Jessica Miller</p>
                                 <p class="text-muted mb-0">Computer Science Major</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="testimonial-card">
                         <blockquote class="mb-4">"The virtual class feature is fantastic. Being able to interact with my professor and classmates in real-time has made a huge difference in my understanding of complex topics."</blockquote>
                          <div class="d-flex align-items-center">
                            <img src="https://placehold.co/60x60/2a2a2a/FFFFFF?text=DA" class="rounded-circle" alt="Student photo">
                             <div class="ms-3">
                                 <p class="student-name mb-0">David Anderson</p>
                                 <p class="text-muted mb-0">Business Administration</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4">
        <div class="container text-center">
            <p class="text-muted-dark mb-0">&copy; 2025 SMSOnlineLearning. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>