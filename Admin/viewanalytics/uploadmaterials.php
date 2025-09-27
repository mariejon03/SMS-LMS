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
                <div class="container my-4">
  <div class="card shadow-lg border-0 rounded-4">
    <div class="card-body p-4">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center">
          <i class="bi bi-upload text-info fs-1 me-3"></i>
          <h3 class="mb-0 fw-bold">Upload Materials</h3>
        </div>
        <a href="#" class="btn btn-info text-white">
          <i class="bi bi-plus-lg me-2"></i> New Upload
        </a>
      </div>

      <!-- Upload Form -->
      <form>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label fw-bold">Material Title</label>
            <input type="text" class="form-control" placeholder="Enter title">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-bold">Class / Subject</label>
            <select class="form-select">
              <option selected>Select class</option>
              <option>Class 1 - Math</option>
              <option>Class 2 - Science</option>
              <option>Class 3 - English</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label fw-bold">Description</label>
            <textarea class="form-control" rows="3" placeholder="Brief description of the material"></textarea>
          </div>
          <div class="col-12">
            <label class="form-label fw-bold">Upload File</label>
            <input type="file" class="form-control">
            <small class="text-muted">Accepted formats: PDF, DOCX, PPTX, MP4, JPG, PNG</small>
          </div>
          <div class="col-12 text-end">
            <button type="submit" class="btn btn-success mt-3">
              <i class="bi bi-cloud-upload me-2"></i> Upload Material
            </button>
          </div>
        </div>
      </form>

      <!-- Materials List -->
      <hr class="my-4">
      <h5 class="fw-bold mb-3">Uploaded Materials</h5>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-info">
            <tr>
              <th>Title</th>
              <th>Class</th>
              <th>Type</th>
              <th>Date Uploaded</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Algebra Basics</td>
              <td>Class 1 - Math</td>
              <td>PDF</td>
              <td>2025-08-05</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
              </td>
            </tr>
            <tr>
              <td>Photosynthesis Lesson</td>
              <td>Class 2 - Science</td>
              <td>MP4</td>
              <td>2025-08-06</td>
              <td class="text-center">
                <button class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
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
            </div>
          </div>
        </div>
      </div>
    </div>


  


  </style>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>