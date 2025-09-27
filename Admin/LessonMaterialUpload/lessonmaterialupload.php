<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS3</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

  <?php include '../sidenav.php'; ?>

  <div class="main-content flex-grow-1">
    <div class="container my-5">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
              <i class="bi bi-upload text-info fs-1 me-3"></i>
              <h3 class="mb-0 fw-bold">Upload Materials</h3>
            </div>
            <a href="#" class="btn btn-info text-white">
              <i class="bi bi-plus-lg me-2"></i> New Upload
            </a>
          </div>

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
                <?php
                // --- DATABASE INTEGRATION STARTS HERE ---

                // **STEP 1: Connect to your database and fetch the data.**
                // This is placeholder code. Replace it with your actual database connection and query.
                // For example:
                // $db = new PDO('mysql:host=localhost;dbname=your_db', 'user', 'pass');
                // $stmt = $db->query('SELECT title, class_subject, file_type, upload_date FROM materials ORDER BY upload_date DESC');
                // $materials = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // For demonstration, here is a sample array of data.
                $materials = [
                  [
                    'title' => 'Algebra Basics',
                    'class' => 'Class 1 - Math',
                    'type' => 'PDF',
                    'date' => '2025-08-05'
                  ],
                  [
                    'title' => 'Photosynthesis Lesson',
                    'class' => 'Class 2 - Science',
                    'type' => 'MP4',
                    'date' => '2025-08-06'
                  ],
                  [
                    'title' => 'Introduction to Shakespeare',
                    'class' => 'Class 3 - English',
                    'type' => 'DOCX',
                    'date' => '2025-08-07'
                  ]
                ];


                // **STEP 2: Loop through the results and create a table row for each material.**
                foreach ($materials as $material) {
                  echo '<tr>';
                  echo '  <td>' . htmlspecialchars($material['title']) . '</td>';
                  echo '  <td>' . htmlspecialchars($material['class']) . '</td>';
                  echo '  <td>' . htmlspecialchars($material['type']) . '</td>';
                  echo '  <td>' . htmlspecialchars($material['date']) . '</td>';
                  echo '  <td class="text-center">';
                  echo '    <button class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></button>';
                  echo '    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>';
                  echo '    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>';
                  echo '  </td>';
                  echo '</tr>';
                }

                // --- DATABASE INTEGRATION ENDS HERE ---
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="mt-auto bg-light">
    <div class="container text-center py-3">
      <p class="text-muted mb-0">© 2025 Your Company. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>