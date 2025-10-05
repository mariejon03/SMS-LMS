<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Feedback</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    @import url("../../style.css");

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
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4 p-md-5">

          <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div class="d-flex align-items-center mb-3 mb-md-0">
              <i class="bi bi-chat-quote-fill text-primary" style="font-size: 2.5rem;"></i>
              <div class="ms-3">
                <h2 class="mb-0 fw-bold">Give Feedback to Teachers</h2>
                <p class="text-muted mb-0">Submit feedback/comments on your professors by subject.</p>
              </div>
            </div>
            <a href="../Dashboard/dashboard.php" class="btn btn-outline-secondary">
              <i class="bi bi-arrow-left me-2"></i>Back to Dashboard
            </a>
          </div>

          <form class="mb-5">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="subjectSelect" class="form-label fw-bold">Subject</label>
                <select id="subjectSelect" class="form-select">
                  <option selected>Choose subject...</option>
                  <option>Big Data</option>
                  <option>IT ELECTIVE 4</option>
                  <option>Capstone Project 1</option>
                  <option>OJT - Practicum 1</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="professorSelect" class="form-label fw-bold">Professor</label>
                <select id="professorSelect" class="form-select">
                  <option selected>Choose professor...</option>
                  <option>Prof. Santos</option>
                  <option>Prof. Dela Cruz</option>
                  <option>Prof. Villanueva</option>
                </select>
              </div>
              <div class="col-12">
                <label for="feedbackText" class="form-label fw-bold">Your Feedback</label>
                <textarea id="feedbackText" class="form-control" rows="4" placeholder="Write your comments or suggestions..."></textarea>
              </div>
              <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary px-4">
                  <i class="bi bi-send-fill me-2"></i>Submit Feedback
                </button>
              </div>
            </div>
          </form>

          <hr>

          <div class="mt-4">
            <h4 class="fw-bold mb-3">My Submitted Feedback</h4>
            
            <div class="feedback-item">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <h6 class="fw-bold mb-1">Math – Prof. Santos</h6>
                  <small class="text-muted">Aug 20, 2025</small>
                </div>
                <span class="badge bg-success">Submitted</span>
              </div>
              <p class="mt-2 mb-0 fst-italic text-secondary">"I appreciate how clearly you explain Algebra topics. It helps me understand faster. Would love more examples in class."</p>
            </div>

            <div class="feedback-item">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <h6 class="fw-bold mb-1">Science – Prof. Dela Cruz</h6>
                  <small class="text-muted">Aug 18, 2025</small>
                </div>
                <span class="badge bg-info">Submitted</span>
              </div>
              <p class="mt-2 mb-0 fst-italic text-secondary">"The experiments are fun and engaging! Sometimes the instructions are a bit fast-paced, maybe slow down a little."</p>
            </div>

            <div class="feedback-item">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <h6 class="fw-bold mb-1">English – Prof. Villanueva</h6>
                  <small class="text-muted">Aug 15, 2025</small>
                </div>
                <span class="badge bg-warning text-dark">Pending Review</span>
              </div>
              <p class="mt-2 mb-0 fst-italic text-secondary">"I enjoy the reading activities. Could we have more group discussions to practice speaking?"</p>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>