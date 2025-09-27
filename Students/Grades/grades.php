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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    @import url("../../style.css");

    /* Make sidebar scrollable in landscape mode on mobile devices */
    @media (max-width: 768px) and (orientation: landscape) {
      .sidebar {
        max-height: 100vh;
        overflow-y: auto;
      }
    }

     /* 1.  CUSTOM COLOR PALETTE & STYLING
        -   Professional Teal & Amber Theme
        -   Enhanced fonts and shadows for a modern look
    */
    :root {
     /* Colors from the provided image */
      --secondary-50: #D2E2F9;
      --secondary-100: #77A9EE;
      --secondary-200: #1C6FE3;
      --secondary-300: #1450A3; /* Base color for primary elements */
      --secondary-400: #114388;

      /* Colors from the provided image */
      --secondary-50: #D2E2F9;
      --secondary-100: #77A9EE;
      --secondary-200: #1C6FE3;
      --secondary-300: #1450A3;
      --secondary-400: #114388;

      /* Mapping to theme variables */
      --theme-primary: var(--secondary-300);
      --theme-success: #46d693ff;
      --theme-danger: #dc3545;
      --theme-warning: #eccc6aff;
      --theme-pending: #6c757d;

      --bg-main: #f8f9fa;
      --card-bg: #ffffff;
      --text-dark: #212529;
      --text-muted: #6c757d;
      --card-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.07);
      --card-border-radius: 0.75rem;
      --font-family-sans-serif: 'Poppins', sans-serif;
    }

    body {
      background-color: var(--bg-main);
      font-family: var(--font-family-sans-serif);
    }
    
    .main-content {
        padding: 2rem;
    }

    .card {
      border: none;
      border-radius: var(--card-border-radius);
      box-shadow: var(--card-shadow);
    }
    
    .card-header.theme-bg {
        background-color: var(--theme-primary);
        color: white;
        border-top-left-radius: var(--card-border-radius);
        border-top-right-radius: var(--card-border-radius);
    }

    /* Page Header */
    .page-header h2 {
      color: var(--theme-primary);
      font-weight: 700;
    }

    /* Table Styling */
    .table thead th {
        background-color: var(--bg-main);
        color: var(--theme-primary);
        font-weight: 600;
        border: none;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        font-size: 0.85rem;
    }
    .table tbody td {
        vertical-align: middle;
    }
    .table-hover tbody tr:hover {
        background-color: var(--secondary-50);
        color: var(--theme-primary);
    }
    .score {
        font-weight: 600;
        font-size: 1.05rem;
    }
    .text-not-submitted {
        color: var(--theme-danger);
        font-style: italic;
    }

    /* Status Badges */
    .badge.status-graded {
        background-color: var(--theme-success);
    }
    .badge.status-pending {
        background-color: var(--theme-warning);
        color: #000;
    }
    .badge.status-missing {
        background-color: var(--theme-danger);
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

    
    /* Responsive Sidebar Handling (from original code) */
     @media (max-width: 992px) {
        body {
            padding-left: 0;
        }
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
 
        
      

     <div class="main-content">
    <div class="container-fluid">
      
      <div class="page-header mb-4">
          <h2 class="display-6"><i class="bi bi-calendar-week me-3"></i>Weekly Scores</h2>
          <p class="text-muted">Automatically calculated scores for your assignments and quizzes.</p>
      </div>

      <div class="card">
          <div class="card-header theme-bg fw-bold">
              <i class="bi bi-check2-circle me-2"></i> CS101 – Introduction to Programming
          </div>
          <div class="card-body p-0">
              <div class="table-responsive">
                  <table class="table table-hover mb-0">
                      <thead class="text-center">
                          <tr>
                              <th class="text-start ps-3">Week</th>
                              <th>Assignment Score</th>
                              <th>Quiz Score</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody class="text-center">
                          <tr>
                              <td class="text-start ps-3 fw-bold">Week 1</td>
                              <td class="score text-success">95%</td>
                              <td class="score text-success">100%</td>
                              <td><span class="badge rounded-pill status-graded px-3">Graded</span></td>
                          </tr>
                          <tr>
                              <td class="text-start ps-3 fw-bold">Week 2</td>
                              <td class="score text-success">88%</td>
                              <td class="score text-warning">75%</td>
                              <td><span class="badge rounded-pill status-graded px-3">Graded</span></td>
                          </tr>
                           <tr>
                              <td class="text-start ps-3 fw-bold">Week 3</td>
                              <td class="score text-success">92%</td>
                              <td class="score text-danger">65%</td>
                              <td><span class="badge rounded-pill status-graded px-3">Graded</span></td>
                          </tr>
                          <tr>
                              <td class="text-start ps-3 fw-bold">Week 4</td>
                              <td class="score" style="color: var(--theme-pending);">--</td>
                              <td class="score" style="color: var(--theme-pending);">--</td>
                              <td><span class="badge rounded-pill status-pending px-3">Pending</span></td>
                          </tr>
                          <tr>
                              <td class="text-start ps-3 fw-bold">Week 5</td>
                              <td class="text-not-submitted">--</td>
                              <td class="text-not-submitted">--</td>
                              <td><span class="badge rounded-pill status-missing px-3">Not Submitted</span></td>
                          </tr>
                          <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 6</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                          <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 7</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                          <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 8</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                           <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 9</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                          <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 10</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                           <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 11</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                          <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 12</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                           <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 13</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                          <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 14</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                           <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 15</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                          <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 16</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                           <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 17</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                          <tr class="text-muted">
                              <td class="text-start ps-3 fw-bold">Week 18</td>
                              <td>--</td>
                              <td>--</td>
                              <td>--</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>