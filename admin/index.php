<?php 
include_once('admin_header.php'); 

// Get counts for dashboard stats
$contact_count = 0;
$member_count = 0;
$appointment_count = 0;
$enroll_count = 0;

// Use global $conn from db.php (included in admin_header.php)
$res_contacts = mysqli_query($conn, "SHOW TABLES LIKE 'contacts'");
if($res_contacts && mysqli_num_rows($res_contacts) > 0) {
    $contact_count = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM contacts"))[0] ?? 0;
}

$res_members = mysqli_query($conn, "SHOW TABLES LIKE 'members'");
if($res_members && mysqli_num_rows($res_members) > 0) {
    $member_count = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM members"))[0] ?? 0;
}

$res_appointments = mysqli_query($conn, "SHOW TABLES LIKE 'appointments'");
if($res_appointments && mysqli_num_rows($res_appointments) > 0) {
    $appointment_count = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM appointments"))[0] ?? 0;
}

$res_enrollments = mysqli_query($conn, "SHOW TABLES LIKE 'enrollments'");
if($res_enrollments && mysqli_num_rows($res_enrollments) > 0) {
    $enroll_count = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM enrollments"))[0] ?? 0;
}
?>

<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card card-stats bg-gradient-teal h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1" style="font-size: 0.8rem;">Members</h6>
                        <h2 class="mb-0"><?php echo $member_count; ?></h2>
                    </div>
                    <i class="fas fa-users fa-2x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stats bg-gradient-blue h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1" style="font-size: 0.8rem;">Appointments</h6>
                        <h2 class="mb-0"><?php echo $appointment_count; ?></h2>
                    </div>
                    <i class="fas fa-calendar-check fa-2x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stats bg-gradient-orange h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1" style="font-size: 0.8rem;">Inquiries</h6>
                        <h2 class="mb-0"><?php echo $contact_count; ?></h2>
                    </div>
                    <i class="fas fa-envelope fa-2x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stats bg-primary h-100" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
            <div class="card-body text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1" style="font-size: 0.8rem;">Enrollments</h6>
                        <h2 class="mb-0"><?php echo $enroll_count; ?></h2>
                    </div>
                    <i class="fas fa-user-graduate fa-2x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Recent Appointments -->
    <div class="col-lg-8">
        <div class="card shadow-sm border-0 rounded-4 mb-4">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0">Recent Appointments</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Patient</th>
                                <th>Doctor</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $res_app_table = mysqli_query($conn, "SHOW TABLES LIKE 'appointments'");
                            if(mysqli_num_rows($res_app_table) > 0) {
                                $res = mysqli_query($conn, "SELECT * FROM appointments ORDER BY id DESC LIMIT 5");
                                if(mysqli_num_rows($res) > 0) {
                                    while($row = mysqli_fetch_assoc($res)) {
                                        echo "<tr>";
                                        echo "<td><b>{$row['patient_name']}</b><br><small class='text-muted'>{$row['phone']}</small></td>";
                                        echo "<td>{$row['doctor_name']}</td>";
                                        echo "<td>".date('d M Y', strtotime($row['appointment_date']))."</td>";
                                        echo "<td><span class='badge bg-success-subtle text-success'>Scheduled</span></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='4' class='text-center'>No appointments found</td></tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4' class='text-center text-danger'>Appointments table missing</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-end mt-3">
                    <a href="appointments.php" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Members -->
    <div class="col-lg-4">
        <div class="card shadow-sm border-0 rounded-4 mb-4">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0">New Members</h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <?php
                    $res_mem_table = mysqli_query($conn, "SHOW TABLES LIKE 'members'");
                    if(mysqli_num_rows($res_mem_table) > 0) {
                        $res = mysqli_query($conn, "SELECT * FROM members ORDER BY id DESC LIMIT 5");
                        if(mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_assoc($res)) {
                                echo "<div class='list-group-item px-0 py-3'>";
                                echo "<div class='d-flex align-items-center'>";
                                echo "<div class='avatar-sm bg-primary-subtle text-primary rounded-circle me-3 p-2'><i class='fas fa-user'></i></div>";
                                echo "<div><h6 class='mb-0'>{$row['name']}</h6><small class='text-muted'>{$row['city']}</small></div>";
                                echo "<div class='ms-auto small text-muted'>".date('d M', strtotime($row['created_at']))."</div>";
                                echo "</div></div>";
                            }
                        } else {
                            echo "<p class='text-center py-3'>No new members</p>";
                        }
                    } else {
                        echo "<p class='text-center py-3 text-danger'>Members table missing</p>";
                    }
                    ?>
                </div>
                <div class="text-center mt-3">
                    <a href="members.php" class="btn btn-sm btn-link text-decoration-none">See all members</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('admin_footer.php'); ?>