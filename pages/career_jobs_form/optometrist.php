<?php include_once('../../includes/header.php'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    :root {
        --can-teal: #2bb3a3;
        --can-purple: #7b52ab;
        --glass: rgba(255, 255, 255, 0.98);
        --bg-light: #f4f7fa;
    }

    body { font-family: 'Poppins', sans-serif; background-color: var(--bg-light); overflow-x: hidden; }

    /* --- Half Screen Layout Container --- */
    .pro-career-section { min-height: 100vh; display: flex; align-items: stretch; }

    /* Left Side: Job Content (Scrollable) */
    .job-content-side {
        flex: 1; padding: 60px; background: white;
        border-right: 1px solid #eee; overflow-y: auto;
    }

    /* Right Side: Animated Form (Sticky/Fixed style) */
    .form-side {
        flex: 1; background: linear-gradient(135deg, #7b52ab 0%, #2bb3a3 100%);
        display: flex; align-items: center; justify-content: center; padding: 40px;
        position: relative;
    }

    /* Floating Header Badge */
    .job-badge {
        background: rgba(43, 179, 163, 0.1); color: var(--can-teal);
        padding: 6px 15px; border-radius: 50px; font-weight: 700; font-size: 13px;
        display: inline-block; margin-bottom: 15px;
    }

    .job-title { font-size: 3rem; font-weight: 800; color: #222; line-height: 1.1; margin-bottom: 20px; }
    .job-title span { color: var(--can-teal); }

    .detail-item { display: flex; align-items: center; gap: 10px; margin-bottom: 20px; color: #555; }
    .detail-item i { color: var(--can-purple); font-size: 1.2rem; }

    .content-block { margin-top: 40px; }
    .content-block h5 { font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px; color: var(--can-purple); }
    
    .resp-list li { margin-bottom: 12px; position: relative; padding-left: 25px; color: #444; }
    .resp-list li::before {
        content: "\f058"; font-family: "Font Awesome 6 Free"; font-weight: 900;
        position: absolute; left: 0; color: var(--can-teal);
    }

    /* --- Animated Glass Form --- */
    .glass-form-container {
        background: var(--glass); padding: 50px; border-radius: 30px;
        width: 100%; max-width: 550px; box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        animation: slideIn 0.8s ease-out;
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateX(50px); }
        to { opacity: 1; transform: translateX(0); }
    }

    .form-heading { font-weight: 800; color: #333; margin-bottom: 30px; text-align: center; }

    /* Pro-Level Floating Inputs */
    .pro-input-group { position: relative; margin-bottom: 25px; }
    .pro-input-group input, .pro-input-group textarea {
        width: 100%; padding: 15px 0; border: none; border-bottom: 2px solid #ddd;
        background: transparent; outline: none; transition: 0.3s; font-size: 15px;
    }
    .pro-input-group label {
        position: absolute; left: 0; top: 15px; color: #999;
        transition: 0.3s ease all; pointer-events: none;
    }
    .pro-input-group input:focus ~ label, 
    .pro-input-group input:valid ~ label,
    .pro-input-group textarea:focus ~ label, 
    .pro-input-group textarea:valid ~ label {
        top: -15px; font-size: 12px; color: var(--can-purple); font-weight: 700;
    }
    .pro-input-group input:focus, .pro-input-group textarea:focus { border-bottom-color: var(--can-purple); }

    .btn-apply-now {
        width: 100%; padding: 18px; border-radius: 50px; border: none;
        background: var(--can-purple); color: white; font-weight: 700;
        text-transform: uppercase; letter-spacing: 1px; transition: 0.4s;
        box-shadow: 0 10px 20px rgba(123, 82, 171, 0.3);
    }
    .btn-apply-now:hover { background: #5e3a8e; transform: translateY(-3px); }

    .file-drop {
        border: 2px dashed #ddd; border-radius: 15px; padding: 20px;
        text-align: center; margin-bottom: 25px; transition: 0.3s;
    }
    .file-drop:hover { border-color: var(--can-teal); background: rgba(43,179,163,0.05); }

    @media (max-width: 991px) {
        .pro-career-section { flex-direction: column; }
        .job-content-side, .form-side { flex: none; width: 100%; padding: 30px; }
    }
</style>

<div class="pro-career-section">
    <div class="job-content-side" data-aos="fade-right">
        <span class="job-badge"><i class="fa fa-fire"></i> Urgent Opening</span>
        <h1 class="job-title">Career as <br><span>Optometrist</span></h1>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="detail-item">
                    <i class="fa fa-hospital"></i>
                    <div><small class="d-block text-muted">Department</small><strong>Ophthalmology</strong></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-item">
                    <i class="fa fa-user-md"></i>
                    <div><small class="d-block text-muted">Reporting to</small><strong>Ophthalmologist</strong></div>
                </div>
            </div>
        </div>

        <div class="content-block">
            <h5>Job Summary</h5>
            <p class="text-muted">You will be responsible for examining patients' eyes, diagnosing vision problems, and prescribing corrective lenses while supporting clinical procedures at Canwinn Arogya Dham.</p>
        </div>

        <div class="content-block">
            <h5>Key Responsibilities</h5>
            <ul class="list-unstyled resp-list">
                <li>Comprehensive eye examinations (Refraction, Binocular vision).</li>
                <li>Diagnose refractive errors & prescribe contact lenses.</li>
                <li>Preliminary screening for eye diseases.</li>
                <li>Assisting surgeons in OPD & Minor OT procedures.</li>
                <li>Handling & maintenance of modern ophthalmic equipment.</li>
                <li>Counseling patients on hygiene & lens usage.</li>
            </ul>
        </div>

        <div class="content-block">
            <h5>Requirements</h5>
            <div class="detail-item"><i class="fa fa-graduation-cap"></i> <span>Bachelor’s Degree / Diploma in Optometry</span></div>
            <div class="detail-item"><i class="fa fa-briefcase"></i> <span>Experience: 4 - 5 Years Minimum</span></div>
            <div class="detail-item"><i class="fa fa-map-marker-alt"></i> <span>Location: Sector-7, Gurugram</span></div>
        </div>
    </div>

    <div class="form-side">
        <div class="glass-form-container">
            <h3 class="form-heading">Send Application</h3>
            
            <form action="submit_career.php" method="POST" enctype="multipart/form-data">
                <div class="pro-input-group">
                    <input type="text" name="full_name" required>
                    <label>Full Name</label>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="pro-input-group">
                            <input type="email" name="email" required>
                            <label>Email Address</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pro-input-group">
                            <input type="tel" name="phone" required minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" pattern="[0-9]{10}">
                            <label>Phone Number</label>
                        </div>
                    </div>
                </div>

                <div class="pro-input-group">
                    <textarea name="message" rows="2" required></textarea>
                    <label>Why should we hire you?</label>
                </div>

                <div class="file-drop">
                    <i class="fa fa-cloud-upload-alt fa-2x text-muted mb-2"></i>
                    <p class="small m-0">Upload CV/Resume (PDF/DOCX)</p>
                    <input type="file" name="resume" class="form-control mt-2" required>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="terms" required>
                    <label class="form-check-label small" for="terms">I agree to the storage and processing of my data.</label>
                </div>

                <button type="submit" class="btn-apply-now">
                    Submit My Application <i class="fa fa-paper-plane ms-2"></i>
                </button>
            </form>
        </div>
    </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
</script>

<?php include_once('../../includes/footer.php'); ?>