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
                            <i class="bi bi-camera-video-fill text-danger fs-1 me-3"></i>
                            <h3 class="mb-0 fw-bold">Virtual Class Link Management</h3>
                        </div>
                        <a href="#" class="btn btn-danger text-white">
                            <i class="bi bi-download me-2"></i> Export Sessions Report
                        </a>
                    </div>

                    <!-- Overview Stats -->
                    <div class="row g-3 text-center mb-4">
                        <div class="col-md-3">
                            <div class="border rounded-3 p-3 bg-light">
                                <i class="bi bi-calendar-event fs-2 text-primary"></i>
                                <h5 class="fw-bold mt-2">120</h5>
                                <p class="small text-muted mb-0">Total Scheduled Classes</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="border rounded-3 p-3 bg-light">
                                <i class="bi bi-people-fill fs-2 text-success"></i>
                                <h5 class="fw-bold mt-2">2,350</h5>
                                <p class="small text-muted mb-0">Students Attended</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="border rounded-3 p-3 bg-light">
                                <i class="bi bi-camera-video fs-2 text-info"></i>
                                <h5 class="fw-bold mt-2">85%</h5>
                                <p class="small text-muted mb-0">Attendance Rate</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="border rounded-3 p-3 bg-light">
                                <i class="bi bi-bar-chart-fill fs-2 text-warning"></i>
                                <h5 class="fw-bold mt-2">15</h5>
                                <p class="small text-muted mb-0">Cancelled Sessions</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sessions Table -->
                    <h5 class="fw-bold mb-3">All Scheduled Virtual Classes</h5>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-danger">
                                <tr>
                                    <th>Class Title</th>
                                    <th>Professor</th>
                                    <th>Platform</th>
                                    <th>Schedule</th>
                                    <th>Link</th>
                                    <th>Attendance</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Algebra Lecture</td>
                                    <td>Prof. Santos</td>
                                    <td>Zoom</td>
                                    <td>2025-08-25 09:00 AM</td>
                                    <td><a href="https://zoom.us/j/123456789" target="_blank" class="btn btn-sm btn-outline-info">Join</a></td>
                                    <td>45/50</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Science Review</td>
                                    <td>Prof. Reyes</td>
                                    <td>Google Meet</td>
                                    <td>2025-08-26 01:00 PM</td>
                                    <td><a href="https://meet.google.com/xyz-abc" target="_blank" class="btn btn-sm btn-outline-info">Join</a></td>
                                    <td>60/65</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>English Grammar</td>
                                    <td>Prof. Cruz</td>
                                    <td>MS Teams</td>
                                    <td>2025-08-27 02:00 PM</td>
                                    <td><a href="https://teams.microsoft.com/12345" target="_blank" class="btn btn-sm btn-outline-info">Join</a></td>
                                    <td>30/40</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="bi bi-info-circle"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Insights -->
                    <div class="mt-4">
                        <h6 class="fw-bold">Insights</h6>
                        <ul class="list-unstyled text-muted">
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Most professors are using Zoom (70%).</li>
                            <li><i class="bi bi-lightbulb-fill text-info me-2"></i> Attendance rates are highest in Science classes.</li>
                            <li><i class="bi bi-exclamation-circle-fill text-warning me-2"></i> Some sessions were cancelled due to link errors.</li>
                        </ul>
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