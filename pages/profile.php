<?php 
require_once('../config/app.php');
include_once('../includes/header.php'); 

if (!isset($_SESSION['user_id'])) {
    header("Location: " . BASE_URL . "pages/login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM appointments WHERE user_id = '$user_id' OR phone = '" . $_SESSION['user_phone'] . "' ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<div class="container py-5 mt-5">
    <div class="row g-4">
        <!-- Profile Sidebar -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-body p-4 text-center">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px; font-size: 32px;">
                        <?php echo strtoupper(substr($_SESSION['user_name'], 0, 1)); ?>
                    </div>
                    <h4 class="fw-bold mb-1"><?php echo htmlspecialchars($_SESSION['user_name']); ?></h4>
                    <p class="text-muted small mb-3"><?php echo htmlspecialchars($_SESSION['user_phone']); ?></p>
                    <a href="<?php echo BASE_URL; ?>modules/appointment/book.php" class="btn btn-primary w-100 rounded-pill py-2">
                        <i class="fas fa-calendar-plus me-2"></i>Book New Appointment
                    </a>
                </div>
                <hr class="my-0 opacity-10">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action border-0 px-0 d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-history me-2"></i> My Appointments</span>
                            <span class="badge bg-light text-dark rounded-pill"><?php echo mysqli_num_rows($result); ?></span>
                        </a>
                        <a href="<?php echo BASE_URL; ?>backend/auth/logout.php" class="list-group-item list-group-item-action border-0 px-0 text-danger">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Appointments List -->
        <div class="col-lg-8">
            <h3 class="fw-bold mb-4">My Appointment History</h3>
            
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <div class="card border-0 shadow-sm rounded-4 mb-3 overflow-hidden border-start border-4 border-primary">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h5 class="fw-bold mb-1"><?php echo htmlspecialchars($row['speciality']); ?></h5>
                                    <p class="mb-0 text-muted">
                                        <i class="far fa-calendar-alt me-2"></i><?php echo date('d M, Y', strtotime($row['appointment_date'])); ?> 
                                        • <i class="far fa-clock ms-2 me-2"></i><?php echo $row['appointment_time']; ?>
                                    </p>
                                    <p class="small text-muted mb-0 mt-2">
                                        <i class="fas fa-hospital me-2"></i><?php echo htmlspecialchars($row['polyclinic']); ?>
                                    </p>
                                </div>
                                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                    <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Confirmed</span>
                                    <p class="small text-muted mt-2 mb-0">ID: <?php echo $row['appointment_id']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="card border-0 shadow-sm rounded-4 p-5 text-center">
                    <div class="display-1 text-light mb-3"><i class="fas fa-calendar-times"></i></div>
                    <h5>No Appointments Found</h5>
                    <p class="text-muted">You haven't booked any appointments yet.</p>
                    <a href="<?php echo BASE_URL; ?>modules/appointment/book.php" class="btn btn-outline-primary rounded-pill mt-2">Book Your First Visit</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include_once('../includes/footer.php'); ?>
