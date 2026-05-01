<?php include_once('admin_header.php'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Course Enrollments (Rojgar Sewa)</h3>
</div>

<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Student Name</th>
                        <th>Contact Info</th>
                        <th>Applied Course</th>
                        <th>Date</th>
                        <th class="pe-4 text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Check if table exists first (optional but good for development)
                    $checkTable = mysqli_query($conn, "SHOW TABLES LIKE 'enrollments'");
                    if (mysqli_num_rows($checkTable) > 0) {
                        $sql = "SELECT * FROM enrollments ORDER BY id DESC";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td class="ps-4 text-muted">#<?php echo $row['id']; ?></td>
                                    <td>
                                        <div class="fw-bold"><?php echo $row['name']; ?></div>
                                    </td>
                                    <td>
                                        <div><i class="fas fa-phone-alt me-2 small text-muted"></i><?php echo $row['phone']; ?></div>
                                        <div><i class="fas fa-envelope me-2 small text-muted"></i><?php echo $row['email']; ?></div>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary rounded-pill"><?php echo $row['course']; ?></span>
                                    </td>
                                    <td><?php echo date('d M Y, h:i A', strtotime($row['created_at'])); ?></td>
                                    <td class="pe-4 text-end">
                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center py-5 text-muted'>No enrollments found yet.</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center py-5 text-danger'>Table 'enrollments' does not exist. Please run the SQL migration.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once('admin_footer.php'); ?>
