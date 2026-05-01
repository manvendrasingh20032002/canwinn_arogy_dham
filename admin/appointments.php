<?php include_once('admin_header.php'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Manage Appointments</h3>
    <div class="btn-group">
        <button class="btn btn-outline-secondary btn-sm"><i class="fas fa-download"></i> Export CSV</button>
    </div>
</div>

<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Patient Details</th>
                        <th>Appointment</th>
                        <th>Doctor & Center</th>
                        <th>Contact</th>
                        <th>Created</th>
                        <th class="pe-4 text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM appointments ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td class="ps-4"><span class="badge bg-light text-dark"><?php echo $row['appointment_id']; ?></span></td>
                                <td>
                                    <div class="fw-bold"><?php echo $row['patient_name']; ?></div>
                                    <div class="small text-muted"><?php echo $row['age']; ?> Yrs, <?php echo $row['gender']; ?></div>
                                </td>
                                <td>
                                    <div class="text-primary fw-bold"><?php echo date('d M Y', strtotime($row['appointment_date'])); ?></div>
                                    <div class="small text-muted"><?php echo $row['appointment_time']; ?></div>
                                </td>
                                <td>
                                    <div><?php echo $row['doctor_name']; ?></div>
                                    <div class="small text-muted"><?php echo $row['polyclinic']; ?></div>
                                </td>
                                <td>
                                    <div><i class="fas fa-phone-alt me-2 small text-muted"></i><?php echo $row['phone']; ?></div>
                                    <div class="small text-muted"><?php echo $row['email']; ?></div>
                                </td>
                                <td><?php echo date('d/m/y', strtotime($row['created_at'])); ?></td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-light border" title="View Details"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center py-5 text-muted'>No appointments found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once('admin_footer.php'); ?>
