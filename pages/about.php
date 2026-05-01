<?php include_once('../includes/header.php'); ?>

<style>
    .about-hero {
        background: linear-gradient(135deg, #2b6cb0 0%, #4c51bf 100%);
        padding: 120px 0;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .about-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -10%;
        width: 600px;
        height: 600px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    .about-hero::after {
        content: '';
        position: absolute;
        bottom: -30%;
        right: -5%;
        width: 500px;
        height: 500px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
    }

    .about-hero h1 {
        font-size: 56px;
        font-weight: 800;
        margin-bottom: 20px;
        position: relative;
        z-index: 2;
        letter-spacing: -1px;
    }

    .about-hero p {
        font-size: 20px;
        color: rgba(255, 255, 255, 0.95);
        max-width: 700px;
        position: relative;
        z-index: 2;
    }

    .values-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        height: 100%;
        border-top: 4px solid #2bb3a3;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .values-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 50px rgba(43, 179, 163, 0.15);
    }

    .values-icon {
        font-size: 48px;
        color: #2bb3a3;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
    }

    .values-card:hover .values-icon {
        transform: scale(1.15);
    }

    .section-divider {
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #2bb3a3 0%, #1f8b7a 100%);
        margin: 20px 0;
    }

    .about-image-wrapper {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    .timeline {
        position: relative;
        padding: 30px 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 3px;
        height: 100%;
        background: linear-gradient(180deg, #2bb3a3 0%, #1f8b7a 100%);
    }

    .timeline-item {
        margin-bottom: 40px;
        position: relative;
    }

    .timeline-item:nth-child(odd) {
        text-align: right;
        padding-right: 52%;
    }

    .timeline-item:nth-child(even) {
        text-align: left;
        padding-left: 52%;
    }

    .timeline-dot {
        position: absolute;
        left: 50%;
        top: 20px;
        transform: translateX(-50%);
        width: 20px;
        height: 20px;
        background: white;
        border: 4px solid #2bb3a3;
        border-radius: 50%;
        z-index: 10;
    }

    .timeline-content {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .timeline-content h5 {
        color: #2bb3a3;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .timeline-content p {
        color: #666;
        margin-bottom: 0;
    }
</style>

<!-- Hero Section -->
<section class="about-hero">
    <div class="container">
        <div data-aos="fade-up">
            <h1>About <span style="color: #2bb3a3;">CanWinn</span></h1>
            <p>Pioneering quality healthcare with compassion, integrity, and modern innovation at every step of your healing journey.</p>
            <div style="margin-top: 30px;">
                <a href="<?php echo BASE_URL; ?>pages/contact.php" class="btn btn-light btn-lg rounded-pill px-5">
                    <i class="fas fa-phone me-2"></i>Get in Touch
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-3">Our <span style="color: #2bb3a3;">Story</span></h2>
                <div class="section-divider"></div>
                <p class="lead mb-4">CanWinn Aarogya Dham was founded with a singular vision: to make quality healthcare accessible, affordable, and compassionate for every family.</p>
                <p class="mb-4">We believe that healthcare is not a luxury—it's a fundamental right. Our team of expert doctors, nurses, and support staff work tirelessly to ensure that every patient receives personalized care with the highest standards of medical excellence.</p>
                <p class="text-muted">Today, we're trusted by thousands of families across the region, and we continue to expand our services to reach more communities in need.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80" 
                         alt="CanWinn Team" 
                         class="w-100" 
                         style="display: block; height: 400px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Mission & <span style="color: #2bb3a3;">Vision</span></h2>
            <div class="section-divider" style="margin-left: auto; margin-right: auto;"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                <div class="values-card">
                    <div class="values-icon"><i class="fas fa-bullseye"></i></div>
                    <h4 style="color: #2bb3a3;">Our Mission</h4>
                    <p>To provide affordable, accessible, and high-quality healthcare services that empower individuals and families to achieve optimal health and wellness in their communities.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                <div class="values-card">
                    <div class="values-icon"><i class="fas fa-eye"></i></div>
                    <h4 style="color: #2bb3a3;">Our Vision</h4>
                    <p>To be a trusted healthcare leader, known for compassionate care, medical excellence, and innovative solutions that transform the health landscape of our nation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Why Choose <span style="color: #2bb3a3;">CanWinn</span></h2>
            <div class="section-divider" style="margin-left: auto; margin-right: auto;"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="values-card">
                    <div class="values-icon"><i class="fas fa-heart"></i></div>
                    <h5 class="fw-bold">Compassionate Care</h5>
                    <p>We treat every patient with empathy, respect, and dignity, understanding that healing is not just physical but emotional as well.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="values-card">
                    <div class="values-icon"><i class="fas fa-flask"></i></div>
                    <h5 class="fw-bold">Medical Excellence</h5>
                    <p>Our team comprises certified specialists and experienced healthcare professionals committed to the highest standards of care.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="values-card">
                    <div class="values-icon"><i class="fas fa-shield-alt"></i></div>
                    <h5 class="fw-bold">Trust & Safety</h5>
                    <p>Your health data and personal information are protected with state-of-the-art security measures and strict privacy protocols.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="values-card">
                    <div class="values-icon"><i class="fas fa-rupee-sign"></i></div>
                    <h5 class="fw-bold">Affordable Pricing</h5>
                    <p>We believe quality healthcare shouldn't be expensive. Our transparent pricing ensures no hidden charges.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="values-card">
                    <div class="values-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h5 class="fw-bold">Digital Convenience</h5>
                    <p>Book appointments, access medical records, and consult doctors from the comfort of your home.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="values-card">
                    <div class="values-icon"><i class="fas fa-people-group"></i></div>
                    <h5 class="fw-bold">Community Focus</h5>
                    <p>We actively invest in community health programs, awareness campaigns, and health outreach initiatives.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Journey Timeline -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Our <span style="color: #2bb3a3;">Journey</span></h2>
            <div class="section-divider" style="margin-left: auto; margin-right: auto;"></div>
        </div>

        <div class="timeline">
            <div class="timeline-item" data-aos="fade-up">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h5>2015 - Foundation</h5>
                    <p>CanWinn was established with a mission to revolutionize healthcare accessibility.</p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-up">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h5>2016 - First Polyclinic</h5>
                    <p>Opened our first modern healthcare facility with comprehensive specialist services.</p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-up">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h5>2018 - Expansion</h5>
                    <p>Launched multiple polyclinics and introduced Aarogya Rath mobile health unit.</p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-up">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h5>2020 - Digital Initiative</h5>
                    <p>Introduced online consultation and digital appointment booking system.</p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-up">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h5>2023 - 1000+ Patients</h5>
                    <p>Celebrating milestone of serving over 1000 happy, healthy patients monthly.</p>
                </div>
            </div>

            <div class="timeline-item" data-aos="fade-up">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h5>2026 - Future Vision</h5>
                    <p>Continuing to innovate and expand healthcare access to every corner of the region.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-4">Join Thousands of Satisfied <span style="color: #2bb3a3;">Patients</span></h2>
            <p class="lead text-muted mb-5">Experience the CanWinn difference today</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="<?php echo BASE_URL; ?>modules/appointment/book.php" class="btn btn-primary btn-lg rounded-pill px-5">
                    <i class="fas fa-calendar-check me-2"></i>Book Appointment
                </a>
                <a href="<?php echo BASE_URL; ?>pages/contact.php" class="btn btn-outline-primary btn-lg rounded-pill px-5">
                    <i class="fas fa-envelope me-2"></i>Contact Us
                </a>
                <a href="<?php echo BASE_URL; ?>includes/reviews_testimonials_section.php" class="btn btn-outline-info btn-lg rounded-pill px-5">
                    <i class="fas fa-video me-2"></i>Watch Stories
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once('../includes/footer.php'); ?>