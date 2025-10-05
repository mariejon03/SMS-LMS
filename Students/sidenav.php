<?php
    // --- PHP DATA ---
    // In a real app, you'd get this from a user's login session.
    $user_full_name = "Joanna Marie Tindoc De Guzman";
    $user_email = "deguzmanjoana948@gmail.com";
    $user_initials = "JD";
    $active_page = "courses"; // To highlight the correct sidenav link
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses | BCP</title>
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    
</head>
<body>

    <div class="app-container">
        <aside class="sidenav">
            <div class="sidenav-logo">
                <img src="../../SMS3logo.jpg" alt="SMS 3 Logo">
            </div>
            <nav class="sidenav-nav">
                <ul>
                    <li class="<?php if ($active_page == 'home') echo 'active'; ?>">
                        <a href="../Dashboard/dashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a>
                    </li>
                    <li class="<?php if ($active_page == 'subjects') echo 'active'; ?>">
                        <a href="../ClassPortal/classportal.php"><i class="fa-solid fa-book"></i> Class Portal</a>
                    </li>
                    <li class="<?php if ($active_page == 'courses') echo 'active'; ?>">
                        <a href="../Performance/Performance.php"><i class="fa-solid fa-graduation-cap"></i> Performance</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <header class="header">
            <div style="display: flex; align-items: center;">
                 <button id="sidenav-toggle" aria-label="Toggle Sidenav">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <nav class="header-nav">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <div class="profile-dropdown">
                    <button class="profile-btn" id="profileBtn">
                        <?php echo htmlspecialchars($user_initials); ?>
                    </button>
                    <div class="dropdown-content" id="profileDropdown">
                        <div class="dropdown-profile-info">
                            <h4><?php echo htmlspecialchars($user_full_name); ?></h4>
                            <p><?php echo htmlspecialchars($user_email); ?></p>
                        </div>
                        <a href="../My_Profile/My_Profile.php">Profile</a>
                        <a href="#">Log out</a>
                    </div>
                </div>
            </div>
        </header>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const sidenavToggle = document.getElementById('sidenav-toggle');
        const appContainer = document.querySelector('.app-container');
        const profileBtn = document.getElementById('profileBtn');
        const profileDropdown = document.getElementById('profileDropdown');

        // --- Sidenav Toggle ---
        sidenavToggle.addEventListener('click', () => {
            appContainer.classList.toggle('sidenav-closed');
        });

        // --- Profile Dropdown ---
        profileBtn.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevents window click from closing it immediately
            profileDropdown.classList.toggle('show');
        });

        // Close dropdown if clicking outside of it
        window.addEventListener('click', function(event) {
            if (!profileBtn.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.remove('show');
            }
        });

        // --- DARK MODE SCRIPT REMOVED FROM HERE ---
    });
    </script>
</body>
</html>