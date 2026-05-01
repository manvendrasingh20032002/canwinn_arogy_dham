<?php
// 1. Header aur Config
include_once('../../includes/header.php');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<style>
    :root {
        --p: #7b52ab;
        --t: #2bb3a3;
        --y: #f1c40f;
        --dark: #1a1a1a;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f8fbfb;
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }

    /* --- 1. HERO SECTION --- */
    .hero-pro {
        position: relative;
        background: url('<?= BASE_URL ?>assets/images/Screenshot 2026-03-31 172853.png') no-repeat center center;
        background-size: cover;
        height: 80vh;
        min-height: 450px;
        border-radius: 0 0 60px 60px;
        z-index: 1;
    }

    /* --- COMMON STYLES --- */
    .highlight-yellow {
        color: #23dda8;
        font-weight: 800;
    }

    .dreams-main-img {
        width: 100%;
        max-width: 500px;
        border-radius: 30px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border: 8px solid white;
    }

    /* --- SERVICE CARDS (AS PER SCREENSHOT) --- */
    .service-section {
        padding: 30px 0;
        background: #5fbb9545;
    }

    .service-card {
        background: white;
        border-radius: 20px;
        padding: 40px 30px;
        height: 100%;
        text-align: left;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        border: 1px solid #f0f0f0;
        transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .service-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(43, 179, 163, 0.1);
        border-color: var(--t);
    }

    .service-icon {
        width: 70px;
        height: 70px;
        background: rgba(43, 179, 163, 0.1);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        font-size: 30px;
        color: var(--t);
    }

    .service-card h4 {
        font-weight: 800;
        color: var(--dark);
        margin-bottom: 15px;
    }

    .service-card p {
        color: #666;
        line-height: 1.6;
        font-size: 0.95rem;
        margin-bottom: 0;
    }

    .section-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .section-header h2 {
        font-weight: 800;
        font-size: 2.8rem;
        color: var(--dark);
    }

    .section-header hr {
        width: 80px;
        height: 5px;
        background: var(--t);
        margin: 20px auto;
        border-radius: 10px;
        opacity: 1;
    }
</style>

<main>
    <div class="hero-pro"></div><br><br>

    <section class="dreams-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1>Ambulance <span class="highlight-yellow"> Services</span></h1>
                    <p class="lead text-muted my-4">CanWinn Foundation, we understand that emergencies require swift and
                        decisive
                        action. That's why we take pride in providing comprehensive Emergency & Ambulance Services
                        designed to deliver
                        prompt and effective care when you need it the most.!</p>
                </div>
                <div class="col-lg-5 text-center" data-aos="zoom-in">
                    <img src="<?= BASE_URL ?>assets/images/AMBULANCE.png" class="dreams-main-img">
                </div>
            </div>
        </div>
    </section>
    <!-- Services Offered -->
    <section class="py-3 bg-light">
        <div class="container">
            <h2 class="text-center mb-2" data-aos="fade-up">Our Services</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100"
                        style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-top: 4px solid #e74c3c;">
                        <i class="fas fa-siren text-danger mb-3" style="font-size: 40px;"></i>
                        <h5>Emergency Response</h5>
                        <p class="text-muted">Rapid response to medical emergencies with trained paramedics</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100"
                        style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-top: 4px solid #e74c3c;">
                        <i class="fas fa-ambulance text-danger mb-3" style="font-size: 40px;"></i>
                        <h5>Patient Transportation</h5>
                        <p class="text-muted">Safe and comfortable medical transport to hospitals</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100"
                        style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-top: 4px solid #e74c3c;">
                        <i class="fas fa-heartbeat text-danger mb-3" style="font-size: 40px;"></i>
                        <h5>Life Support</h5>
                        <p class="text-muted">Advanced cardiac life support and medical intervention</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100"
                        style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-top: 4px solid #e74c3c;">
                        <i class="fas fa-road text-danger mb-3" style="font-size: 40px;"></i>
                        <h5>Road Accident Response</h5>
                        <p class="text-muted">Specialized trauma and accident victim response</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100"
                        style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-top: 4px solid #e74c3c;">
                        <i class="fas fa-pills text-danger mb-3" style="font-size: 40px;"></i>
                        <h5>Medication Support</h5>
                        <p class="text-muted">First aid medication and emergency medications</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100"
                        style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border-top: 4px solid #e74c3c;">
                        <i class="fas fa-phone-alt text-danger mb-3" style="font-size: 40px;"></i>
                        <h5>24/7 Availability</h5>
                        <p class="text-muted">Round-the-clock service, all days including holidays</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet & Equipment -->
    <section class="py-3">
        <div class="container">
            <h2 class="text-center mb-2" data-aos="fade-up">Our Fleet & Equipment</h2>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="equipment-box p-4 rounded text-center"
                        style="background: white; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <h3 style="color: #e74c3c; margin-bottom: 10px;">50+</h3>
                        <h5>Modern Ambulances</h5>
                        <p class="text-muted small">Latest model vehicles with advanced equipment</p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up">
                    <div class="equipment-box p-4 rounded text-center"
                        style="background: white; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <h3 style="color: #e74c3c; margin-bottom: 10px;">500+</h3>
                        <h5>Trained Paramedics</h5>
                        <p class="text-muted small">Certified and experienced medical professionals</p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up">
                    <div class="equipment-box p-4 rounded text-center"
                        style="background: white; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <h3 style="color: #e74c3c; margin-bottom: 10px;">100%</h3>
                        <h5>Coverage Area</h5>
                        <p class="text-muted small">Available throughout the city and nearby regions</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-2">
                <div class="col-lg-8 mx-auto">
                    <h5 class="mb-4" data-aos="fade-up">Equipment Includes:</h5>
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Defibrillators
                                    (AED/BIPHASIC)</li>
                                <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Oxygen Supply Systems</li>
                                <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Stretchers & Spinal Boards
                                </li>
                                <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Emergency Medications Kit
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6" data-aos="fade-up">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Cardiac Monitor</li>
                                <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>IV Administration Sets
                                </li>
                                <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>Trauma Kits</li>
                                <li class="mb-2"><i class="fas fa-check text-danger me-2"></i>First Aid Equipment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Response Time -->
    <section class="py-3 bg-light">
        <div class="container">
            <h2 class="text-center mb-2" data-aos="fade-up">Our Commitment to You</h2>
            <div class="row g-4">
                <div class="col-lg-4 mx-auto" data-aos="fade-up">
                    <div class="text-center">
                        <h5 class="mb-3">Average Response Time</h5>
                        <div
                            style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%); color: white; padding: 30px; border-radius: 10px; margin-bottom: 20px;">
                            <h1 style="margin: 0; font-size: 48px;">5-8</h1>
                            <p style="margin: 0;">Minutes Urban Area</p>
                        </div>
                        <p class="text-muted">Quick response times in both urban and semi-urban areas</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-2">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="commitment-box p-4 text-center">
                        <i class="fas fa-shield-alt text-danger mb-3" style="font-size: 40px;"></i>
                        <h5>Professional Excellence</h5>
                        <p class="text-muted small">Certified paramedics and advanced training</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <div class="commitment-box p-4 text-center">
                        <i class="fas fa-hand-holding-medical text-danger mb-3" style="font-size: 40px;"></i>
                        <h5>Compassionate Care</h5>
                        <p class="text-muted small">Treating every patient with dignity and respect</p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <div class="commitment-box p-4 text-center">
                        <i class="fas fa-clock text-danger mb-3" style="font-size: 40px;"></i>
                        <h5>Always Available</h5>
                        <p class="text-muted small">24/7 services on all days including holidays</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    $(document).ready(function () {
        AOS.init({ duration: 1000, once: true });
    });
</script>

<?php include_once('../../includes/footer.php'); ?>