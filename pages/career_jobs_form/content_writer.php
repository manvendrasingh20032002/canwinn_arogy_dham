<?php 
// Correct path from inside career_jobs_form folder
include_once('../../includes/header.php'); 
?>



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

    /* --- Half Screen Split Layout --- */
    .pro-career-section { min-height: 100vh; display: flex; align-items: stretch; }

    /* Left Side: Job Details Content */
    .job-content-side {
        flex: 1; padding: 60px; background: white;
        border-right: 1px solid #eee; overflow-y: auto;
    }

    /* Right Side: Animated Floating Form */
    .form-side {
        flex: 1; background: linear-gradient(135deg, var(--can-purple) 0%, var(--can-teal) 100%);
        display: flex; align-items: center; justify-content: center; padding: 40px;
        position: relative;
    }

    /* Modern Typography & Badges */
    .job-badge {
        background: rgba(123, 82, 171, 0.1); color: var(--can-purple);
        padding: 6px 15px; border-radius: 50px; font-weight: 700; font-size: 13px;
        display: inline-block; margin-bottom: 15px;
    }

    .job-title { font-size: 3rem; font-weight: 800; color: #222; line-height: 1.1; margin-bottom: 25px; }
    .job-title span { color: var(--can-teal); }

    .detail-item { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; color: #555; }
    .detail-item i { color: var(--can-teal); font-size: 1.2rem; }

    .content-block { margin-top: 40px; }
    .content-block h5 { font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px; color: var(--can-purple); border-left: 4px solid var(--can-teal); padding-left: 15px; }
    
    .resp-list li { margin-bottom: 15px; position: relative; padding-left: 30px; color: #444; line-height: 1.6; }
    .resp-list li::before {
        content: "\f058"; font-family: "Font Awesome 6 Free"; font-weight: 900;
        position: absolute; left: 0; color: var(--can-teal);
    }

    /* --- Animated Glass Form --- */
    .glass-form-container {
        background: var(--glass); padding: 50px; border-radius: 35px;
        width: 100%; max-width: 550px; box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        animation: slideUp 0.8s ease-out;
    }

    @keyframes slideUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .form-heading { font-weight: 800; color: #333; margin-bottom: 35px; text-align: center; }

    /* Pro-Level Inputs */
    .pro-input-group { position: relative; margin-bottom: 25px; }
    .pro-input-group input, .pro-input-group textarea {
        width: 100%; padding: 12px 0; border: none; border-bottom: 2px solid #ddd;
        background: transparent; outline: none; transition: 0.3s; font-size: 16px;
    }
    .pro-input-group label {
        position: absolute; left: 0; top: 12px; color: #999;
        transition: 0.3s ease all; pointer-events: none;
    }
    .pro-input-group input:focus ~ label, 
    .pro-input-group input:valid ~ label,
    .pro-input-group textarea:focus ~ label, 
    .pro-input-group textarea:valid ~ label {
        top: -20px; font-size: 12px; color: var(--can-purple); font-weight: 700;
    }
    .pro-input-group input:focus { border-bottom-color: var(--can-purple); }

    .btn-apply-now {
        width: 100%; padding: 18px; border-radius: 50px; border: none;
        background: var(--can-purple); color: white; font-weight: 700;
        text-transform: uppercase; letter-spacing: 1.5px; transition: 0.4s;
        box-shadow: 0 10px 20px rgba(123, 82, 171, 0.3);
    }
    .btn-apply-now:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(123, 82, 171, 0.4); }

    .file-zone {
        border: 2px dashed #cbd5e0; border-radius: 15px; padding: 20px;
        text-align: center; margin-bottom: 25px; cursor: pointer;
    }
    .file-zone:hover { border-color: var(--can-teal); background: rgba(43,179,163,0.05); }

    @media (max-width: 991px) {
        .pro-career-section { flex-direction: column; }
        .job-content-side, .form-side { flex: none; width: 100%; padding: 30px; }
    }
</style>

<div class="pro-career-section">
    <div class="job-content-side" data-aos="fade-right">
        <span class="job-badge"><i class="fa fa-pen-nib"></i> Creative Department</span>
        <h1 class="job-title">Content  <br><span>Writer</span></h1>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="detail-item">
                    <i class="fa fa-language"></i>
                    <div><small class="d-block text-muted">Language</small><strong>Hindi / English</strong></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-item">
                    <i class="fa fa-clock"></i>
                    <div><small class="d-block text-muted">Experience</small><strong>Minimum 3+ Years</strong></div>
                </div>
            </div>
        </div>

        <div class="content-block">
            <h5>Skills Required</h5>
            <p class="text-muted">Creativity, attention to detail, strong Hindi & English writing, and social media awareness. Mandatory knowledge of the medical field.</p>
        </div>

        <div class="content-block">
            <h5>Key Responsibilities</h5>
            <ul class="list-unstyled resp-list">
                <li><strong>Content Creation:</strong> Writing engaging scripts, posts, and messages in Hindi & English.</li>
                <li><strong>Proofreading:</strong> Ensure error-free, professional medical content.</li>
                <li><strong>Video Scripts:</strong> Creating scripts for our official channel and doctor videos.</li>
                <li><strong>Taglines:</strong> Create catchy taglines and attractive graphics ideas.</li>
                <li><strong>Research:</strong> Conduct research on social media trends and health content ideas.</li>
                <li><strong>Daily Planning:</strong> Plan tasks for the next day and get work approved by seniors.</li>
            </ul>
        </div>

        <div class="content-block">
            <h5>Work Schedule & Benefits</h5>
            <div class="p-4 rounded-4" style="background:#f1f5f9; border-left:5px solid var(--can-purple)">
                <p class="mb-2"><strong>Schedule:</strong> Full Time, Rotational shifts including night duty.</p>
                <p class="mb-2"><strong>Salary:</strong> Not Disclosed (Based on Interview).</p>
                <p class="m-0"><strong>Location:</strong> Canwinn Arogya Dham, Gurugram.</p>
            </div>
        </div>
    </div>

    <div class="form-side">
        <div class="glass-form-container" data-aos="zoom-in">
            <h3 class="form-heading">Join Our Team</h3>
            
            <form action="career_process.php" method="POST" enctype="multipart/form-data">
                <div class="pro-input-group">
                    <input type="text" name="name" required>
                    <label>Full Name *</label>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="pro-input-group">
                            <input type="email" name="email" required>
                            <label>Email Address *</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pro-input-group">
                            <input type="tel" name="phone" required minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" pattern="[0-9]{10}">
                            <label>Phone Number *</label>
                        </div>
                    </div>
                </div>

                <div class="pro-input-group">
                    <textarea name="cover_letter" rows="2" required></textarea>
                    <label>Briefly describe your writing style *</label>
                </div>

                <div class="file-zone" onclick="document.getElementById('cv').click()">
                    <i class="fa fa-file-pdf fa-2x text-muted mb-2"></i>
                    <p class="small m-0 text-muted">Upload Portfolio or Resume <br> (PDF/DOCX)</p>
                    <input type="file" id="cv" name="resume" hidden required>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="agree" required>
                    <label class="form-check-label small" for="agree">
                        I agree with the storage and handling of my data.
                    </label>
                </div>

                <button type="submit" class="btn-apply-now">
                    Submit Application <i class="fa fa-paper-plane ms-2"></i>
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