<?php 
include_once('../includes/header.php'); 
?>

<style>
    .services-hero {
        background: linear-gradient(135deg, #2b6cb0 0%, #4c51bf 100%);
        padding: 120px 0;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .services-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 600px;
        height: 600px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    .services-hero h1 {
        font-size: 56px;
        font-weight: 800;
        margin-bottom: 20px;
        position: relative;
        z-index: 2;
        letter-spacing: -1px;
    }

    .services-hero p {
        font-size: 20px;
        color: rgba(255, 255, 255, 0.95);
        max-width: 600px;
        position: relative;
        z-index: 2;
    }

    .service-card-premium {
        background: white;
        border-radius: 15px;
        padding: 30px;
        height: 100%;
        border-left: 5px solid #2bb3a3;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
    }

    .service-card-premium::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(43, 179, 163, 0.1) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .service-card-premium:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 50px rgba(43, 179, 163, 0.2);
    }

    .service-card-premium:hover::before {
        opacity: 1;
    }

    .service-icon {
        font-size: 48px;
        color: #2bb3a3;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
    }

    .service-card-premium:hover .service-icon {
        transform: scale(1.15) translateY(-5px);
    }

    .service-card-premium h5 {
        font-weight: 700;
        color: #222;
        margin-bottom: 12px;
    }

    .service-card-premium p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .service-link {
        color: #2bb3a3;
        text-decoration: none;
        font-weight: 600;
        inline-size: auto;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .service-link:hover {
        color: #1f8b7a;
        transform: translateX(5px);
    }

    .section-divider {
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #2bb3a3 0%, #1f8b7a 100%);
        margin: 30px 0;
    }
</style>

<!-- Hero Section -->
<section class="services-hero">
    <div class="container">
        <div data-aos="fade-up">
            <h1>Our <span style="color: #2bb3a3;">Services</span></h1>
            <p>Complete healthcare solutions designed for families, individuals, and communities</p>
            <div style="margin-top: 30px;">
                <a href="<?php echo BASE_URL; ?>modules/appointment/book.php" class="btn btn-light btn-lg rounded-pill px-5">
                    <i class="fas fa-calendar-check me-2"></i>Book Service Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Services -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">What We Offer</h2>
            <div class="section-divider" style="margin-left: auto; margin-right: auto;"></div>
            <p class="lead text-muted">Comprehensive healthcare services for every stage of life</p>
        </div>

        <div class="row g-4">
            <!-- Emergency Care -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card-premium">
                    <div class="service-icon"><i class="fas fa-ambulance"></i></div>
                    <h5>Emergency Care</h5>
                    <p>24/7 emergency response with immediate critical care, ambulance service, and emergency stabilization.</p>
                    <a href="<?php echo BASE_URL; ?>pages/contact.php" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Cardiology -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-premium">
                    <div class="service-icon"><i class="fas fa-heart"></i></div>
                    <h5>Cardiology</h5>
                    <p>Advanced heart care with specialists, cardiac surgery, and comprehensive heart disease management.</p>
                    <a href="#" class="service-link" onclick="openVideoModal('https://www.youtube.com/embed/tgbNymZ7vqY')">
                        Watch Success Story <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>

            <!-- Orthopedics -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card-premium">
                    <div class="service-icon"><i class="fas fa-bone"></i></div>
                    <h5>Orthopedics</h5>
                    <p>Joint care, bone health, orthopedic surgery, physiotherapy, and sports medicine.</p>
                    <a href="#" class="service-link" onclick="openVideoModal('https://www.youtube.com/embed/9bZkp7q19f0')">
                        Watch Success Story <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>

            <!-- Family Care -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card-premium">
                    <div class="service-icon"><i class="fas fa-people-group"></i></div>
                    <h5>Family Care</h5>
                    <p>Preventive health checkups, family wellness programs, immunization, and health monitoring.</p>
                    <a href="<?php echo BASE_URL; ?>pages/members.php" class="service-link">
                        Join Membership <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Maternal Care -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card-premium">
                    <div class="service-icon"><i class="fas fa-person-pregnant"></i></div>
                    <h5>Maternal Care</h5>
                    <p>Antenatal care, safe delivery, postnatal care, and child health with experienced gynecologists.</p>
                    <a href="#" class="service-link" onclick="openVideoModal('https://www.youtube.com/embed/ZbzP0qpI5RU')">
                        Watch Success Story <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>

            <!-- Wellness Programs -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card-premium">
                    <div class="service-icon"><i class="fas fa-heart-pulse"></i></div>
                    <h5>Wellness Programs</h5>
                    <p>Health camps, vaccination drives, chronic disease screening, and community awareness.</p>
                    <a href="<?php echo BASE_URL; ?>modules/others/aarogya_rath.php" class="service-link">
                        Explore Aarogya Rath <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Specializations -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Medical <span style="color: #2bb3a3;">Specialities</span></h2>
            <div class="section-divider" style="margin-left: auto; margin-right: auto;"></div>
        </div>

        <div class="row g-3 text-center">
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-3 bg-white rounded-3 shadow-sm">
                    <strong>General Medicine</strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="p-3 bg-white rounded-3 shadow-sm">
                    <strong>Pediatrics</strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="p-3 bg-white rounded-3 shadow-sm">
                    <strong>Dermatology</strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                <div class="p-3 bg-white rounded-3 shadow-sm">
                    <strong>ENT</strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <div class="p-3 bg-white rounded-3 shadow-sm">
                    <strong>Ophthalmology</strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                <div class="p-3 bg-white rounded-3 shadow-sm">
                    <strong>Dentistry</strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                <div class="p-3 bg-white rounded-3 shadow-sm">
                    <strong>Psychiatry</strong>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                <div class="p-3 bg-white rounded-3 shadow-sm">
                    <strong>Pulmonology</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-4">Ready to Get <span style="color: #2bb3a3;">Better?</span></h2>
                <p class="lead text-muted mb-4">Book your appointment with our specialist doctors today and experience world-class healthcare.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="<?php echo BASE_URL; ?>modules/appointment/book.php" class="btn btn-primary btn-lg rounded-pill px-5">
                        <i class="fas fa-calendar-check me-2"></i>Book Appointment
                    </a>
                    <a href="<?php echo BASE_URL; ?>pages/contact.php" class="btn btn-outline-primary btn-lg rounded-pill px-5">
                        <i class="fas fa-phone me-2"></i>Contact Us
                    </a>
                </div>
            </div>
            <div class="col-lg-5 text-center" data-aos="fade-left">
                <div class="bg-light rounded-4 p-5" style="aspect-ratio: 1;">
                    <i class="fas fa-stethoscope" style="font-size: 100px; color: #2bb3a3; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
include_once('../includes/footer.php'); 
?>