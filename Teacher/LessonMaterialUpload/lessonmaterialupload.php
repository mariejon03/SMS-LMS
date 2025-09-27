<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS3</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <style>
    @import url("../../style.css");

    /* Make sidebar scrollable in landscape mode on mobile devices */
    @media (max-width: 768px) and (orientation: landscape) {
      .sidebar {
        max-height: 100vh;
        overflow-y: auto;
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
 
        
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="d-flex align-items-center">
            <i class="bi bi-upload text-primary fs-1 me-3"></i>
            <h3 class="mb-0 fw-bold">Upload Lesson Materials</h3>
          </div>
          <a href="#" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-2"></i> Back to Class Portal
          </a>
        </div>

        <!-- Upload Form -->
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="row g-3">
            
            <!-- Select Class -->
            <div class="col-md-6">
              <label for="classSelect" class="form-label fw-bold">Select Class</label>
              <select class="form-select" id="classSelect" required>
                <option value="" selected disabled>-- Choose Class --</option>
                <option value="math101">Math 101</option>
                <option value="sci202">Science 202</option>
                <option value="eng303">English 303</option>
              </select>
            </div>

            <!-- Lesson Title -->
            <div class="col-md-6">
              <label for="lessonTitle" class="form-label fw-bold">Lesson Title</label>
              <input type="text" class="form-control" id="lessonTitle" placeholder="Enter lesson title" required>
            </div>

            <!-- Description -->
            <div class="col-12">
              <label for="lessonDesc" class="form-label fw-bold">Description</label>
              <textarea class="form-control" id="lessonDesc" rows="3" placeholder="Short description of the lesson"></textarea>
            </div>

            <!-- Upload File -->
            <div class="col-md-6">
              <label for="uploadFile" class="form-label fw-bold">Upload File</label>
              <input class="form-control" type="file" id="uploadFile" multiple required>
              <small class="text-muted">Accepted: PDF, PPT, DOCX, MP4</small>
            </div>

            <!-- Tags / Category -->
            <div class="col-md-6">
              <label for="materialType" class="form-label fw-bold">Material Type</label>
              <select class="form-select" id="materialType" required>
                <option value="" selected disabled>-- Choose Type --</option>
                <option value="lecture">Lecture Notes</option>
                <option value="slides">Slides</option>
                <option value="video">Video</option>
                <option value="other">Other</option>
              </select>
            </div>

          </div>

          <!-- Submit -->
          <div class="mt-4 text-end">
            <button type="reset" class="btn btn-outline-secondary me-2">
              <i class="bi bi-x-circle me-1"></i> Clear
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-cloud-arrow-up me-1"></i> Upload Material
            </button>
          </div>
        </form>

        <!-- Uploaded Materials List -->
        <div class="mt-5">
          <h5 class="fw-bold mb-3">Recently Uploaded Materials</h5>
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="table-primary">
                <tr>
                  <th>Lesson Title</th>
                  <th>Class</th>
                  <th>Type</th>
                  <th>Date Uploaded</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Introduction to Algebra</td>
                  <td>Math 101</td>
                  <td>Lecture Notes</td>
                  <td>2025-08-21</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Photosynthesis Basics</td>
                  <td>Science 202</td>
                  <td>Slides</td>
                  <td>2025-08-20</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-eye"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

              


  <footer class="mt-auto bg-light">
    <div class="container text-center">
      <p class="text-muted">© 2023 Your Company. All rights reserved.</p>
    </div>
  </footer>


  </style>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>