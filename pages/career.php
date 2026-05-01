<?php include_once('../includes/header.php'); ?>

<!-- Clean Bright Hero -->
<section class="hero-career position-relative d-flex align-items-center text-white" 
         style="background: url('https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=2000&q=90') center/cover no-repeat; 
                min-height: 95vh;">

    <div class="position-absolute inset-0 bg-black bg-opacity-40"></div>

    <div class="container position-relative z-3">
        <div class="row justify-content-center text-center">
            <div class="col-xl-9 col-lg-10">
                <div class="badge bg-white text-primary px-5 py-2 rounded-pill mb-4 fs-6 fw-medium shadow-sm">
                    CanWinn Hospital • Gurugram
                </div>
                
                <h1 class="display-2 fw-bold lh-1 mb-4">
                    Build a Meaningful<br>Career at <span class="text-primary">CanWinn</span>
                </h1>
                
                <p class="lead fs-3 mb-5 opacity-95 mx-auto" style="max-width: 740px;">
                    Join our compassionate team and help deliver world-class, accessible healthcare to communities across Haryana and India.
                </p>
                
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="#current-openings" 
                       class="btn btn-primary btn-lg px-5 py-3 rounded-pill fw-semibold shadow">
                        Browse Open Positions
                    </a>
                    <a href="mailto:hr@canwinn.com" 
                       class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-semibold">
                        Email Your Resume
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="position-absolute bottom-5 start-50 translate-middle-x text-white opacity-75">
        <i class="bi bi-chevron-down fs-3"></i>
    </div>
</section>

<!-- Current Openings -->
<section id="current-openings" class="py-7 bg-light">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-end mb-5">
            <div>
                <h2 class="display-5 fw-bold">Current Openings</h2>
                <p class="text-muted fs-4">Join our growing family of healthcare heroes</p>
            </div>
            <a href="mailto:hr@canwinn.com" class="text-primary fw-medium">Can't find your role? Apply speculatively →</a>
        </div>

        <!-- Filters -->
        <div class="row g-3 mb-5">
            <div class="col-lg-4">
                <div class="input-group shadow-sm">
                    <input type="text" id="jobSearch" class="form-control py-3 border-0" placeholder="Search jobs...">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <select class="form-select py-3 shadow-sm">
                    <option>All Categories</option>
                    <option>Clinical</option>
                    <option>Marketing</option>
                    <option>Administration</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-4">
                <select class="form-select py-3 shadow-sm">
                    <option>All Job Types</option>
                    <option>Full Time</option>
                    <option>Hybrid</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-4">
                <select class="form-select py-3 shadow-sm">
                    <option>All Locations</option>
                    <option>Canwinn Aarogya Dham, Gurugram</option>
                    <option>Delhi NCR</option>
                </select>
            </div>
        </div>

        <!-- Job Cards -->
        <div class="row g-4" id="jobListings">

            <div class="col-lg-4 col-md-6 job-card">
                <div class="card border-0 shadow-sm h-100 hover-lift rounded-4">
                    <div class="card-body p-5">
                        <h5 class="fw-bold">Optometrist</h5>
                        <p class="text-primary mb-1">Canwinn Aarogya Dham, Gurugram</p>
                        <p class="text-muted small">Full Time • Clinical</p>
                        <a href="../pages/career_jobs_form/optometrist.php" 
                           class="text-primary fw-medium mt-4 d-block">More Details →</a>
                    </div>
                </div>
            </div>

            <!-- ✅ Correct Link for Content Writer -->
            <div class="col-lg-4 col-md-6 job-card">
                <div class="card border-0 shadow-sm h-100 hover-lift rounded-4">
                    <div class="card-body p-5">
                        <h5 class="fw-bold">Content Writer</h5>
                        <p class="text-primary mb-1">Canwinn Aarogya Dham, Gurugram</p>
                        <p class="text-muted small">Full Time • Marketing & Communications</p>
                        <a href="../pages/career_jobs_form/content_writer.php" 
                           class="text-primary fw-medium mt-4 d-block">More Details →</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 job-card">
                <div class="card border-0 shadow-sm h-100 hover-lift rounded-4">
                    <div class="card-body p-5">
                        <h5 class="fw-bold">Billing Coordinator – (Male/Female)</h5>
                        <p class="text-primary mb-1">Canwinn Aarogya Dham, Gurugram</p>
                        <p class="text-muted small">Full Time • Administration</p>
                        <a href="../pages/career_jobs_form/billing_condinator.php" 
                           class="text-primary fw-medium mt-4 d-block">More Details →</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why a Career in Healthcare? -->
<section class="py-7 bg-white">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="display-5 fw-bold">Why a Career in Healthcare?</h2>
            <p class="lead text-muted">The sector is booming in India – and CanWinn is at the forefront.</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-4">
                <h4 class="text-primary fw-bold mb-3">Increasing Demand and Job Security</h4>
                <p class="text-muted">India's healthcare sector is projected to create <strong>2–2.5 million new jobs by 2030</strong>. Healthcare leads job creation with massive demand.</p>
            </div>
            <div class="col-lg-4">
                <h4 class="text-primary fw-bold mb-3">Positive Impact on Your Community</h4>
                <p class="text-muted">Working at CanWinn lets you make a real difference in people's lives in Gurugram and surrounding areas.</p>
            </div>
            <div class="col-lg-4">
                <h4 class="text-primary fw-bold mb-3">Opportunities for Advancement</h4>
                <p class="text-muted">Excellent career growth — move into leadership, specialized roles, or digital health.</p>
            </div>
        </div>

        <div class="row g-5 mt-5">
            <div class="col-lg-6">
                <h4 class="text-primary fw-bold mb-3">Professional Flexibility</h4>
                <p class="text-muted">Clinical, operations, community outreach, billing, content & digital, or administration — we support your growth.</p>
            </div>
            <div class="col-lg-6">
                <h4 class="text-primary fw-bold mb-3">Personal Fulfillment</h4>
                <p class="text-muted">Experience unmatched job satisfaction knowing you improve lives every day.</p>
            </div>
        </div>
    </div>
</section>

<!-- How to Apply -->
<section class="py-6 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h3 class="fw-bold mb-4">How to Apply</h3>
                <div class="bg-white rounded-4 shadow-sm p-5">
                    <ol class="list-group list-group-numbered fs-5 text-start mx-auto" style="max-width: 620px;">
                        <li class="list-group-item border-0 py-3">Prepare your updated resume and cover letter</li>
                        <li class="list-group-item border-0 py-3">Email to <strong>hr@canwinn.com</strong></li>
                        <li class="list-group-item border-0 py-3">Our HR team will contact shortlisted candidates shortly</li>
                    </ol>
                </div>
                <a href="mailto:hr@canwinn.com" class="btn btn-primary btn-lg px-5 py-3 rounded-pill mt-5 fw-semibold">
                    Send Your Resume Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once('../includes/footer.php'); ?>

<!-- Live Search -->
<script>
document.getElementById('jobSearch').addEventListener('keyup', function() {
    const term = this.value.toLowerCase();
    document.querySelectorAll('.job-card').forEach(card => {
        const title = card.querySelector('h5').textContent.toLowerCase();
        card.style.display = title.includes(term) ? 'block' : 'none';
    });
});
</script>

<style>
.hero-career {
    position: relative;
}
.hover-lift {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}
.hover-lift:hover {
    transform: translateY(-12px);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15) !important;
}
</style>