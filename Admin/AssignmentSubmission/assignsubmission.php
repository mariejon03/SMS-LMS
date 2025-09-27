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

                                <!-- Header -->
                                <div class="container my-4">

                                    <div class="card-body p-4">
                                        <!-- Header -->
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-upload text-info fs-1 me-3"></i>
                                                <h3 class="mb-0 fw-bold">Assignment Submissions</h3>
                                            </div>
                                            <a href="#" class="btn btn-info text-white">
                                                <i class="bi bi-cloud-arrow-up me-2"></i> Create New Assignment
                                            </a>
                                        </div>

                                        <!-- Submission Overview -->
                                        <div class="row g-3 text-center mb-4">
                                            <div class="col-md-4">
                                                <div class="border rounded-3 p-3 bg-light">
                                                    <i class="bi bi-check-circle-fill fs-2 text-success"></i>
                                                    <h5 class="fw-bold mt-2">45</h5>
                                                    <p class="small text-muted mb-0">On-Time Submissions</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded-3 p-3 bg-light">
                                                    <i class="bi bi-clock-fill fs-2 text-warning"></i>
                                                    <h5 class="fw-bold mt-2">8</h5>
                                                    <p class="small text-muted mb-0">Late Submissions</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border rounded-3 p-3 bg-light">
                                                    <i class="bi bi-x-circle-fill fs-2 text-danger"></i>
                                                    <h5 class="fw-bold mt-2">5</h5>
                                                    <p class="small text-muted mb-0">Not Submitted</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Table of Submissions -->
                                        <h5 class="fw-bold mb-3">Recent Submissions</h5>
                                        <div class="table-responsive">
                                            <table class="table table-hover align-middle">
                                                <thead class="table-info">
                                                    <tr>
                                                        <th>Student Name</th>
                                                        <th>Assignment</th>
                                                        <th>Submitted On</th>
                                                        <th>Status</th>
                                                        <th>File</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Ana Cruz</td>
                                                        <td>Math Assignment 1</td>
                                                        <td>2025-08-08</td>
                                                        <td><span class="badge bg-success">On Time</span></td>
                                                        <td><a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i> Download</a></td>
                                                        <td><a href="#" class="btn btn-sm btn-success"><i class="bi bi-pencil"></i> Grade</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mark Santos</td>
                                                        <td>Math Assignment 1</td>
                                                        <td>2025-08-09</td>
                                                        <td><span class="badge bg-warning text-dark">Late</span></td>
                                                        <td><a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i> Download</a></td>
                                                        <td><a href="#" class="btn btn-sm btn-success"><i class="bi bi-pencil"></i> Grade</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Maria Lopez</td>
                                                        <td>Math Assignment 1</td>
                                                        <td>-</td>
                                                        <td><span class="badge bg-danger">Not Submitted</span></td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Insights -->
                                        <div class="mt-4">
                                            <h6 class="fw-bold">Insights</h6>
                                            <ul class="list-unstyled text-muted">
                                                <li><i class="bi bi-lightbulb-fill text-info me-2"></i> Most students submitted on time for this assignment.</li>
                                                <li><i class="bi bi-exclamation-triangle-fill text-warning me-2"></i> Late submissions increased compared to the last task.</li>
                                                <li><i class="bi bi-check2-circle text-success me-2"></i> Consider sending reminders to students before deadlines.</li>
                                            </ul>
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


    <footer class="mt-auto bg-light">
        <div class="container text-center">
            <p class="text-muted">© 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>


    </style>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>