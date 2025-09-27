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


    <!-- Header -->
    <div class="main-content flex-grow-1">
        <div class="container my-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <!-- Header -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-pencil-square text-success fs-1 me-3"></i>
                            <div>
                                <h3 class="mb-0 fw-bold">Assignment Submission</h3>
                                <p class="text-muted small mb-0">Submit your assignment files below</p>
                            </div>
                        </div>
                        <a href="../ClassPortal/classportal.php" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left me-2"></i> Back to Class Portal
                        </a>
                    </div>

                    <!-- Assignment Details -->
                    <div class="border rounded-3 p-3 bg-light mb-4">
                        <h5 class="fw-bold">Math Assignment 2 – Algebra Problems</h5>
                        <p class="mb-1"><strong>Deadline:</strong> August 28, 2025 – 11:59 PM</p>
                        <p class="mb-1"><strong>Status:</strong> <span class="badge bg-warning text-dark">Not Submitted</span></p>
                        <p class="text-muted small mb-0">
                            Instructions: Solve the attached set of algebra problems and upload your answers in PDF or DOCX format.
                        </p>
                    </div>

                    <!-- Submission Form -->
                    <form>
                        <div class="mb-3">
                            <label for="fileUpload" class="form-label fw-bold">Upload Your File</label>
                            <input class="form-control" type="file" id="fileUpload" required>
                            <small class="text-muted">Accepted formats: PDF, DOCX, PPTX (Max size: 10MB)</small>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-outline-secondary">
                                <i class="bi bi-x-circle me-2"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-upload me-2"></i> Submit Assignment
                            </button>
                        </div>
                    </form>

                    <!-- Submission History -->
                    <div class="mt-5">
                        <h6 class="fw-bold mb-3">Submission History</h6>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-success">
                                    <tr>
                                        <th>File Name</th>
                                        <th>Date Submitted</th>
                                        <th>Status</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Assignment1_Algebra.pdf</td>
                                        <td>2025-08-15 10:22 PM</td>
                                        <td><span class="badge bg-success">Graded</span></td>
                                        <td>Good work, but check #5</td>
                                    </tr>
                                    <tr>
                                        <td>Assignment1_Algebra_Draft.pdf</td>
                                        <td>2025-08-14 09:10 PM</td>
                                        <td><span class="badge bg-secondary">Revised</span></td>
                                        <td>Resubmit with corrections</td>
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