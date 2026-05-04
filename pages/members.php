<?php 
// 1. Path Fix: Includes folder tak pahunchne ke liye dynamic path
$header = dirname(__DIR__, 1) . '/includes/header.php';
$footer = dirname(__DIR__, 1) . '/includes/footer.php';

if (file_exists($header)) { 
    include_once($header); 
} else {
    // Agar folder structure zyada deep hai toh ye backup path kaam karega
    include_once('../../../includes/header.php');
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    :root { 
        --p-color: #7b52ab; 
        --t-color: #2bb3a3; 
        --bg-soft: #f4f7f6; 
    }
    body { background: var(--bg-soft); overflow-x: hidden; }

    .membership-section { padding: 80px 0; }

    /* --- Main Glassmorphism Card --- */
    .pro-main-card { 
        border-radius: 40px; 
        background: #fff; 
        overflow: hidden; 
        box-shadow: 0 40px 100px rgba(0,0,0,0.1); 
        border: none; 
    }

    /* --- Left Information Panel --- */
    .info-panel {
        background: linear-gradient(135deg, var(--p-color) 0%, var(--t-color) 100%);
        padding: 60px 45px; 
        color: white; 
        height: 100%; 
        display: flex;
        flex-direction: column; 
        justify-content: center;
    }

    .seva-icon-box {
        width: 90px; height: 90px; 
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px); 
        border-radius: 25px;
        display: flex; align-items: center; 
        justify-content: center;
        font-size: 45px; margin-bottom: 30px; 
        animation: floatIcon 4s infinite ease-in-out;
    }

    @keyframes floatIcon { 
        0%, 100% { transform: translateY(0); } 
        50% { transform: translateY(-15px); } 
    }

    /* --- Form Content Fix (Overlap Solution) --- */
    .form-wrapper { padding: 55px; }
    .form-h2 { font-weight: 800; color: var(--p-color); letter-spacing: -1px; }

    /* Modern Floating Input Style */
    .pro-floating-group {
        position: relative; margin-bottom: 1.8rem;
    }

    .pro-floating-group .form-control, 
    .pro-floating-group .form-select {
        height: 65px; 
        padding: 28px 20px 10px !important;
        border: 2px solid #f0f3f3 !important; 
        border-radius: 18px !important;
        background: #fcfdfe !important; 
        transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 15px;
        color: #333;
    }

    .pro-floating-group label {
        position: absolute; 
        top: 0; left: 0; 
        padding: 20px 20px;
        transition: 0.3s; 
        color: #999; 
        pointer-events: none;
    }

    /* Label Animation on Focus/Content */
    .pro-floating-group .form-control:focus ~ label,
    .pro-floating-group .form-control:not(:placeholder-shown) ~ label,
    .pro-floating-group .form-select:focus ~ label,
    .pro-floating-group .form-select:not([value=""]):valid ~ label {
        transform: translateY(-15px) scale(0.8);
        color: var(--t-color); 
        font-weight: 700;
        background: transparent;
    }

    .pro-floating-group .form-control:focus {
        border-color: var(--t-color) !important;
        background: #fff !important;
        box-shadow: 0 10px 25px rgba(43, 179, 163, 0.08) !important;
    }

    /* --- Member Photo Preview --- */
    .avatar-upload {
        width: 150px; height: 150px; 
        border: 3px dashed var(--t-color);
        border-radius: 50%; 
        margin: 0 auto 40px; 
        cursor: pointer;
        display: flex; align-items: center; 
        justify-content: center; 
        overflow: hidden;
        background: #fcfdfe;
        transition: 0.3s;
    }
    .avatar-upload:hover { transform: scale(1.05); background: rgba(43, 179, 163, 0.05); }
    .avatar-upload img { width: 100%; height: 100%; object-fit: cover; }

    /* --- Premium Submit Button --- */
    .btn-pro-member {
        background: linear-gradient(to right, var(--p-color), var(--t-color));
        color: white; border: none; padding: 20px; border-radius: 20px;
        font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px;
        width: 100%; transition: 0.4s;
        box-shadow: 0 15px 35px rgba(123, 82, 171, 0.3);
    }
    .btn-pro-member:hover { 
        transform: translateY(-5px); 
        box-shadow: 0 20px 45px rgba(123, 82, 171, 0.4); 
    }
</style>

<section class="membership-section">
    <div class="container">
        <div class="pro-main-card" data-aos="fade-up">
            <div class="row g-0">
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="info-panel">
                        <div class="seva-icon-box">
                            <i class="fa-solid fa-id-card-clip"></i>
                        </div>
                        <h2 class="fw-bold mb-4">Seva Suvidha Card</h2>
                        <p class="opacity-75 mb-5">Digital membership lekar payein healthcare suvidhaon mein vishesh chhoot aur priority care.</p>
                        
                        <div class="benefits-list">
                            <div class="d-flex align-items-center mb-4">
                                <i class="fa-solid fa-circle-check me-3 fs-5"></i>
                                <span>Instant Card Generation</span>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fa-solid fa-circle-check me-3 fs-5"></i>
                                <span>17% Discount on Pharmacy</span>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fa-solid fa-circle-check me-3 fs-5"></i>
                                <span>Emergency Health Support</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-circle-check me-3 fs-5"></i>
                                <span>Special Health Camp Alerts</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="form-wrapper">
                        <div class="text-center mb-5">
                            <?php if(isset($_GET['status'])): ?>
                                <?php if($_GET['status'] == 'success'): ?>
                                    <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4" data-aos="fade-down">
                                        <i class="fa-solid fa-circle-check me-2"></i> <strong>Congratulations!</strong> Your membership has been registered successfully.
                                    </div>
                                <?php elseif($_GET['status'] == 'error'): ?>
                                    <div class="alert alert-danger border-0 shadow-sm rounded-4 mb-4" data-aos="fade-down">
                                        <i class="fa-solid fa-circle-exclamation me-2"></i> <strong>Error!</strong> <?php echo htmlspecialchars($_GET['message'] ?? 'Something went wrong.'); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                            <h2 class="form-h2">Registration Form</h2>
                            <p class="text-muted">Fill your official details for membership validation.</p>
                        </div>

                        <form action="<?= BASE_URL; ?>backend/save_member.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="avatar-upload" onclick="document.getElementById('m_photo').click()">
                                <i class="fa-solid fa-camera-retro fa-2x text-muted" id="cam_icon"></i>
                                <img id="preview_img" style="display: none;">
                            </div>
                            <input type="file" id="m_photo" name="photo" accept="image/*" hidden onchange="imagePreview(event)">

                            <div class="row">
                                <div class="col-md-6 pro-floating-group">
                                    <input type="text" class="form-control" name="name" placeholder=" " required>
                                    <label>Full Name *</label>
                                </div>
                                
                                <div class="col-md-6 pro-floating-group">
                                    <input type="text" class="form-control" name="guardian" placeholder=" " required>
                                    <label>Father's / Husband's Name</label>
                                </div>

                                <div class="col-md-4 pro-floating-group">
                                    <input type="date" class="form-control" name="dob" required>
                                    <label>Date of Birth *</label>
                                </div>
                                <div class="col-md-4 pro-floating-group">
                                    <select class="form-select" name="gender" required>
                                        <option value="" disabled selected></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <label>Gender</label>
                                </div>
                                <div class="col-md-4 pro-floating-group">
                                    <select class="form-select" name="blood_group" required>
                                        <option value="" disabled selected></option>
                                        <option value="A+">A+</option><option value="B+">B+</option><option value="O+">O+</option>
                                        <option value="AB+">AB+</option><option value="O-">O-</option>
                                    </select>
                                    <label>Blood Group</label>
                                </div>

                                <div class="col-md-6 pro-floating-group">
                                    <input type="tel" class="form-control" name="mobile" placeholder=" " required minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" pattern="[0-9]{10}">
                                    <label>Mobile Number *</label>
                                </div>
                                <div class="col-md-6 pro-floating-group">
                                    <input type="email" class="form-control" name="email" placeholder=" ">
                                    <label>Email Address</label>
                                </div>

                                <div class="col-md-6 pro-floating-group">
                                    <select class="form-select" name="id_proof_type" required>
                                        <option value="" disabled selected></option>
                                        <option value="Aadhaar Card">Aadhaar Card</option>
                                        <option value="Voter ID">Voter ID</option>
                                        <option value="PAN Card">PAN Card</option>
                                    </select>
                                    <label>ID Proof Type</label>
                                </div>
                                <div class="col-md-6 pro-floating-group">
                                    <input type="text" class="form-control" name="id_proof_number" placeholder=" " required>
                                    <label>ID Proof Number *</label>
                                </div>

                                <div class="col-12 pro-floating-group">
                                    <textarea class="form-control" name="address" style="height: 110px;" placeholder=" " required></textarea>
                                    <label>Full Permanent Address *</label>
                                </div>

                                <div class="col-md-4 pro-floating-group">
                                    <input type="text" class="form-control" name="city" placeholder=" " required>
                                    <label>City *</label>
                                </div>
                                <div class="col-md-4 pro-floating-group">
                                    <input type="text" class="form-control" name="state" placeholder=" " required>
                                    <label>State *</label>
                                </div>
                                <div class="col-md-4 pro-floating-group">
                                    <input type="text" class="form-control" name="pin_code" placeholder=" " required>
                                    <label>Pin Code *</label>
                                </div>

                                <div class="col-12 pro-floating-group">
                                    <select class="form-select" name="plan_type" required>
                                        <option value="" disabled selected></option>
                                        <option value="Basic Member">Basic Member (Free)</option>
                                        <option value="Annual Member">Annual Member (₹500/year)</option>
                                        <option value="Lifetime Member">Lifetime Member (₹5000)</option>
                                    </select>
                                    <label>Membership Plan *</label>
                                </div>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label small text-muted" for="terms">
                                    I confirm that all provided information is accurate and I agree to CanWinn's terms.
                                </label>
                            </div>

                            <button type="submit" class="btn-pro-member">
                                Generate Membership Card <i class="fa-solid fa-wand-magic-sparkles ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Image Preview Logic
    function imagePreview(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview_img');
            output.src = reader.result;
            output.style.display = 'block';
            document.getElementById('cam_icon').style.display = 'none';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<?php 
// 2. Footer Fix: Sahi path se footer include karein
if (file_exists($footer)) { 
    include_once($footer); 
} else {
    include_once('../../../includes/footer.php');
}
?>