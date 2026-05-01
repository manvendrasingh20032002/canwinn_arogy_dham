<?php include_once(__DIR__ . '/../includes/db.php'); ?>
<?php include_once(__DIR__ . '/../config/app.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CanWinn Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --sidebar-width: 250px;
            --primary-green: #2bb3a3;
            --dark-green: #00261a;
        }
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            background: var(--dark-green);
            color: #fff;
            transition: 0.3s;
            z-index: 1000;
        }
        .sidebar-header {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-header img {
            width: 180px;
            height: auto;
            object-fit: contain;
        }
        .nav-link {
            color: rgba(255,255,255,0.7);
            padding: 15px 25px;
            display: flex;
            align-items: center;
            transition: 0.3s;
        }
        .nav-link:hover, .nav-link.active {
            color: #fff;
            background: rgba(255,255,255,0.1);
            border-left: 4px solid var(--primary-green);
        }
        .nav-link i {
            margin-right: 15px;
            width: 20px;
            text-align: center;
        }
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 30px;
            min-height: 100vh;
        }
        .card-stats {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: 0.3s;
        }
        .card-stats:hover {
            transform: translateY(-5px);
        }
        .bg-gradient-teal {
            background: linear-gradient(135deg, #2bb3a3 0%, #1a8a7a 100%);
            color: #fff;
        }
        .bg-gradient-blue {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            color: #fff;
        }
        .bg-gradient-orange {
            background: linear-gradient(135deg, #f6c23e 0%, #dda20a 100%);
            color: #fff;
        }
        @media (max-width: 992px) {
            .sidebar { margin-left: -var(--sidebar-width); }
            .main-content { margin-left: 0; }
            .sidebar.active { margin-left: 0; }
        }
    </style>
</head>
<body>

<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <img src="<?php echo BASE_URL; ?>assets/images/Canwinn_logo.svg" alt="CanWinn Logo">
        <h5 class="mt-3">Admin Panel</h5>
    </div>
    <nav class="mt-4">
        <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="appointments.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'appointments.php' ? 'active' : ''; ?>">
            <i class="fas fa-calendar-check"></i> Appointments
        </a>
        <a href="members.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'members.php' ? 'active' : ''; ?>">
            <i class="fas fa-users"></i> Members
        </a>
        <a href="enrollments.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'enrollments.php' ? 'active' : ''; ?>">
            <i class="fas fa-user-graduate"></i> Enrollments
        </a>
        <hr class="mx-3 bg-white opacity-25">
        <a href="../index.php" class="nav-link">
            <i class="fas fa-external-link-alt"></i> Visit Site
        </a>
        <a href="logout.php" class="nav-link text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </nav>
</div>

<div class="main-content">
    <!-- Navbar for Mobile -->
    <nav class="navbar navbar-light bg-white mb-4 d-lg-none shadow-sm rounded">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" onclick="document.getElementById('sidebar').classList.toggle('active')">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="navbar-brand mb-0 h1">CanWinn Admin</span>
        </div>
    </nav>
