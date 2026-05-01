<?php include_once('admin_header.php'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Foundation Members</h3>
</div>

<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">Photo</th>
                        <th>Member Name</th>
                        <th>Mobile & Email</th>
                        <th>Location</th>
                        <th>Plan Type</th>
                        <th>Joined On</th>
                        <th class="pe-4 text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM members ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $photo = !empty($row['photo_path']) ? BASE_URL . $row['photo_path'] : 'https://ui-avatars.com/api/?name=' . urlencode($row['name']);
                            ?>
                            <tr>
                                <td class="ps-4">
                                    <img src="<?php echo $photo; ?>" alt="Member" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                </td>
                                <td>
                                    <div class="fw-bold"><?php echo $row['name']; ?></div>
                                    <div class="small text-muted">S/o: <?php echo $row['guardian']; ?></div>
                                </td>
                                <td>
                                    <div><?php echo $row['mobile']; ?></div>
                                    <div class="small text-muted"><?php echo $row['email']; ?></div>
                                </td>
                                <td>
                                    <div><?php echo $row['city']; ?></div>
                                    <div class="small text-muted"><?php echo $row['state']; ?></div>
                                </td>
                                <td>
                                    <span class="badge bg-primary-subtle text-primary"><?php echo $row['plan_type']; ?></span>
                                </td>
                                <td><?php echo date('d M Y', strtotime($row['created_at'])); ?></td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-light border"><i class="fas fa-id-card"></i></button>
                                    <button class="btn btn-sm btn-light border"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center py-5 text-muted'>No members found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once('admin_footer.php'); ?>
