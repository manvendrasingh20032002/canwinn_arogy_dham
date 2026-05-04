<?php 
include_once(__DIR__ . '/../config/app.php');
if (session_status() === PHP_SESSION_NONE) { session_start(); }

if (isset($_SESSION['user_id'])) {
    header("Location: " . BASE_URL . "pages/profile.php");
    exit;
}
include_once('../includes/header.php'); 
?>

<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0 fw-bold">Login / Register</h3>
                    <p class="mb-0 opacity-75">Access your health dashboard</p>
                </div>
                <div class="card-body p-5">
                    
                    <!-- Step 1: Phone Input -->
                    <div id="phoneSection">
                        <label class="form-label fw-semibold">Enter Mobile Number</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-light">+91</span>
                            <input type="tel" id="phone" class="form-control form-control-lg" placeholder="10-digit number" maxlength="10">
                        </div>
                        <button onclick="sendOTP()" class="btn btn-primary btn-lg w-100 rounded-pill py-3 fw-bold">
                            Send OTP <i class="fas fa-paper-plane ms-2"></i>
                        </button>
                    </div>

                    <!-- Step 2: OTP Input -->
                    <div id="otpSection" style="display: none;">
                        <label class="form-label fw-semibold">Enter 6-Digit OTP</label>
                        <input type="text" id="otp" class="form-control form-control-lg mb-3 text-center letter-spacing-5" placeholder="000000" maxlength="6">
                        <button onclick="verifyOTP()" class="btn btn-success btn-lg w-100 rounded-pill py-3 fw-bold">
                            Verify & Continue <i class="fas fa-check-circle ms-2"></i>
                        </button>
                        <p class="text-center mt-3 small text-muted">
                            Didn't receive? <a href="javascript:void(0)" onclick="sendOTP()" class="text-primary">Resend OTP</a>
                        </p>
                    </div>

                    <!-- Step 3: Registration (New Users Only) -->
                    <div id="registerSection" style="display: none;">
                        <h5 class="fw-bold mb-3">Complete Your Profile</h5>
                        <div class="mb-3">
                            <label class="form-label small">Full Name</label>
                            <input type="text" id="regName" class="form-control" placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small">Email Address (Optional)</label>
                            <input type="email" id="regEmail" class="form-control" placeholder="john@example.com">
                        </div>
                        <button onclick="registerUser()" class="btn btn-primary btn-lg w-100 rounded-pill py-3 fw-bold">
                            Save & Login <i class="fas fa-user-check ms-2"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
let userPhone = '';

async function sendOTP() {
    const phone = document.getElementById('phone').value;
    if (!/^[6-9]\d{9}$/.test(phone)) {
        alert('Please enter a valid 10-digit mobile number.');
        return;
    }

    const btn = document.querySelector('#phoneSection button');
    btn.disabled = true;
    btn.innerHTML = 'Sending... <i class="fas fa-spinner fa-spin ms-2"></i>';

    try {
        userPhone = phone;
        const response = await fetch('<?php echo BASE_URL; ?>backend/auth/send_otp.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `phone=${phone}`
        });

        if (!response.ok) throw new Error('Network response was not ok');
        
        const data = await response.json();
        if (data.success) {
            document.getElementById('phoneSection').style.display = 'none';
            document.getElementById('otpSection').style.display = 'block';
            alert('OTP Sent! (For testing, use: 123456)');
        } else {
            alert(data.message);
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Something went wrong. Please check your connection or try again later.');
    } finally {
        btn.disabled = false;
        btn.innerHTML = 'Send OTP <i class="fas fa-paper-plane ms-2"></i>';
    }
}


async function verifyOTP() {
    const otp = document.getElementById('otp').value;
    if (otp.length !== 6) {
        alert('Please enter a 6-digit OTP.');
        return;
    }

    const btn = document.querySelector('#otpSection button');
    btn.disabled = true;
    btn.innerHTML = 'Verifying... <i class="fas fa-spinner fa-spin ms-2"></i>';

    try {
        const response = await fetch('<?php echo BASE_URL; ?>backend/auth/verify_otp.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `phone=${userPhone}&otp=${otp}`
        });

        if (!response.ok) throw new Error('Network response was not ok');

        const data = await response.json();
        if (data.success) {
            if (data.is_new_user) {
                document.getElementById('otpSection').style.display = 'none';
                document.getElementById('registerSection').style.display = 'block';
            } else {
                window.location.href = '<?php echo BASE_URL; ?>pages/profile.php';
            }
        } else {
            alert(data.message);
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Verification failed. Please try again.');
    } finally {
        btn.disabled = false;
        btn.innerHTML = 'Verify & Continue <i class="fas fa-check-circle ms-2"></i>';
    }
}


async function registerUser() {
    const name = document.getElementById('regName').value;
    const email = document.getElementById('regEmail').value;

    if (!name) {
        alert('Please enter your name.');
        return;
    }

    const btn = document.querySelector('#registerSection button');
    btn.disabled = true;
    btn.innerHTML = 'Saving... <i class="fas fa-spinner fa-spin ms-2"></i>';

    try {
        const response = await fetch('<?php echo BASE_URL; ?>backend/auth/register_user.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}`
        });

        if (!response.ok) throw new Error('Network response was not ok');

        const data = await response.json();
        if (data.success) {
            window.location.href = '<?php echo BASE_URL; ?>pages/profile.php';
        } else {
            alert(data.message);
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Registration failed. Please try again.');
    } finally {
        btn.disabled = false;
        btn.innerHTML = 'Save & Login <i class="fas fa-user-check ms-2"></i>';
    }
}

</script>

<style>
.letter-spacing-5 { letter-spacing: 5px; }
</style>

<?php include_once('../includes/footer.php'); ?>
