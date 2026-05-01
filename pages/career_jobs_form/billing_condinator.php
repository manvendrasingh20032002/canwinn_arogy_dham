<?php include_once('../../includes/header.php'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    :root {
        --can-teal: #2bb3a3;
        --can-purple: #7b52ab;
        --glass: rgba(255, 255, 255, 0.98);
        --bg-light: #f8fafc;
    }

    body { font-family: 'Poppins', sans-serif; background-color: var(--bg-light); overflow-x: hidden; }

    /* --- Split Screen Layout --- */
    .career-split-container { min-height: 100vh; display: flex; align-items: stretch; }

    /* Left Side: Content */
    .content-side {
        flex: 1; padding: 60px; background: white;
        border-right: 1px solid #edf2f7; overflow-y: auto;
    }

    /* Right Side: Form with Gradient Background */
    .form-side {
        flex: 1; background: linear-gradient(135deg, var(--can-purple) 0%, var(--can-teal) 100%);
        display: flex; align-items: center; justify-content: center; padding: 40px;
    }

    /* Typography & UI Elements */
    .status-badge {
        background: rgba(43, 179, 163, 0.1); color: var(--can-teal);
        padding: 5px 15px; border-radius: 50px; font-weight: 700; font-size: 12px;
        display: inline-block; margin-bottom: 20px;
    }

    .main-title { font-size: 3rem; font-weight: 800; color: #1a202c; line-height: 1.2; margin-bottom: 25px; }
    .main-title span { color: var(--can-teal); }

    .job-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 40px; }
    .meta-box { display: flex; align-items: center; gap: 12px; padding: 15px; background: #f7fafc; border-radius: 15px; }
    .meta-box i { color: var(--can-purple); font-size: 1.3rem; }

    .section-h { font-size: 18px; font-weight: 700; color: var(--can-purple); margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px; }
    
    .list-styled { list-style: none; padding: 0; }
    .list-styled li { margin-bottom: 15px; padding-left: 30px; position: relative; color: #4a5568; line-height: 1.6; }
    .list-styled li::before {
        content: "\f058"; font-family: "Font Awesome 6 Free"; font-weight: 900;
        position: absolute; left: 0; color: var(--can-teal); font-size: 18px;
    }

    /* --- Animated Form --- */
    .glass-form {
        background: var(--glass); padding: 50px; border-radius: 35px;
        width: 100%; max-width: 550px; box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .form-h3 { font-weight: 800; color: #2d3748; margin-bottom: 35px; text-align: center; }

    .form-group-pro { position: relative; margin-bottom: 30px; }
    .form-group-pro input, .form-group-pro textarea {
        width: 100%; padding: 12px 0; border: none; border-bottom: 2px solid #e2e8f0;
        background: transparent; outline: none; transition: 0.3s; font-size: 16px; color: #2d3748;
    }
    .form-group-pro label {
        position: absolute; left: 0; top: 12px; color: #a0aec0;
        transition: 0.3s ease all; pointer-events: none;
    }
    .form-group-pro input:focus ~ label, 
    .form-group-pro input:valid ~ label,
    .form-group-pro textarea:focus ~ label, 
    .form-group-pro textarea:valid ~ label {
        top: -20px; font-size: 13px; color: var(--can-purple); font-weight: 700;
    }
    .form-group-pro input:focus { border-bottom-color: var(--can-purple); }

    .upload-zone {
        border: 2px dashed #cbd5e0; border-radius: 20px; padding: 25px;
        text-align: center; margin-bottom: 30px; cursor: pointer; transition: 0.3s;
    }
    .upload-zone:hover { border-color: var(--can-teal); background: rgba(43,179,163,0.03); }

    .btn-submit {
        width: 100%; padding: 18px; border-radius: 50px; border: none;
        background: var(--can-purple); color: white; font-weight: 700;
        text-transform: uppercase; letter-spacing: 1.5px; transition: 0.4s;
        box-shadow: 0 10px 20px rgba(123, 82, 171, 0.3);
    }
    .btn-submit:hover { background: #5e3a8e; transform: translateY(-3px); box-shadow: 0 15px 30px rgba(123, 82, 171, 0.4); }

    @media (max-width: 991px) {
        .career-split-container { flex-direction: column; }
        .content-side, .form-side { flex: none; width: 100%; padding: 35px; }
    }
</style>

<div class="career-split-container">
    <div class="content-side" data-aos="fade-right">
        <span class="status-badge"><i class="fa fa-clock"></i> Full Time Opportunity</span>
        <h1 class="main-title">Billing Coordinator <br><span>(Male/Female)</span></h1>
        
        <div class="job-meta-grid">
            <div class="meta-box">
                <i class="fa fa-venus-mars"></i>
                <div><small class="d-block text-muted">Gender</small><strong>Male / Female</strong></div>
            </div>
            <div class="meta-box">
                <i class="fa fa-briefcase"></i>
                <div><small class="d-block text-muted">Category</small><strong>Hospital Billing</strong></div>
            </div>
        </div>

        <div class="mb-5">
            <h5 class="section-h">Job Description</h5>
            <ul class="list-styled">
                <li>Deep knowledge of Hospital Management Software (HMS).</li>
                <li>Strong communication, analytical, and coordination skills.</li>
                <li>Ensuring accurate billing for OPD and In-patient services.</li>
                <li>Handling insurance claims and patient billing queries.</li>
            </ul>
        </div>

        <div class="mb-5">
            <h5 class="section-h">Qualification & Exp</h5>
            <div class="meta-box mb-3">
                <i class="fa fa-graduation-cap"></i>
                <span>Minimum 10+2 or Graduate in any stream.</span>
            </div>
            <div class="meta-box">
                <i class="fa fa-clock"></i>
                <span>Experience: Minimum 6 Months - 1 Year.</span>
            </div>
        </div>

        <div>
            <h5 class="section-h">Work Schedule & Salary</h5>
            <div class="p-4 rounded-4" style="background:#f1f5f9; border-left:5px solid var(--can-teal)">
                <p class="mb-2"><strong><i class="fa fa-calendar-alt text-teal"></i> Shifts:</strong> Full Time, Rotational shifts including Night Duty.</p>
                <p class="mb-2"><strong><i class="fa fa-money-bill-wave text-teal"></i> Salary:</strong> Not Disclosed (Best in Industry).</p>
                <p class="m-0"><strong><i class="fa fa-map-marker-alt text-teal"></i> Location:</strong> Canwinn Arogya Dham, Gurugram.</p>
            </div>
        </div>
    </div>

    <div class="form-side">
        <div class="glass-form" data-aos="zoom-in">
            <h3 class="form-h3">Apply for this position</h3>
            
            <form action="career_submit_process.php" method="POST" enctype="multipart/form-data">
                <div class="form-group-pro">
                    <input type="text" name="fname" required>
                    <label>Full Name *</label>
                </div>

                <div class="form-group-pro">
                    <input type="email" name="email" required>
                    <label>Email Address *</label>
                </div>

                <div class="form-group-pro">
                    <input type="tel" name="phone" required minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" pattern="[0-9]{10}">
                    <label>Phone Number *</label>
                </div>

                <div class="form-group-pro">
                    <textarea name="cover_letter" rows="2" required></textarea>
                    <label>Short Cover Letter *</label>
                </div>

                <div class="upload-zone" onclick="document.getElementById('cv').click()">
                    <i class="fa fa-cloud-upload-alt fa-2x mb-2" style="color:var(--can-teal)"></i>
                    <p class="small m-0 text-muted">Click to Upload CV/Resume <br> (PDF, DOC, DOCX)</p>
                    <input type="file" id="cv" name="resume" hidden required>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="consent" required>
                    <label class="form-check-label small text-muted" for="consent">
                        I agree with the storage and handling of my data by this website.
                    </label>
                </div>

                <button type="submit" class="btn-submit">
                    Send Application <i class="fa fa-paper-plane ms-2"></i>
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