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
        background: url('<?= BASE_URL ?>assets/images/Screenshot 2026-03-31 103604.png') no-repeat center center;
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
                    <h1>Aarogya Rath - <span class="highlight-yellow"> CanWinn Foundation</span></h1>
                    <p class="lead text-muted my-4">Aarogya Rath, we are committed to fostering a healthier society
                        through our parent organization, the CanWinn Foundation, established by Dr. D.P. Goyal in March
                        2019. Our mission
                        is to raise public awareness and educate individuals about their health, contributing to the
                        vision of a "Swasth
                        Bharat (स्वस्थ भारत)".!</p>
                </div>
                <div class="col-lg-5 text-center" data-aos="zoom-in">
                    <img src="<?= BASE_URL ?>assets/images/WhatsApp-Image-2020-06-16-at-12.00.32-PM.jpeg"
                        class="dreams-main-img">
                </div>
            </div>
        </div>
    </section>

    <section class="service-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Welcome to CanWinn <span style="color: var(--t);">Aarogya Rath</span></h2>
                <hr>
                <p class="text-muted col-lg-8 mx-auto">Bringing healthcare directly to you through mobile health units
                    equipped with modern medical facilities and staffed by professionals.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6 col-md-6" data-aos="fade-up">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-ambulance"></i></div>
                        <h4>Emergency Care</h4>
                        <p>Aarogya Rath is equipped to handle medical emergencies efficiently. Our skilled medical team
                            is ready to provide immediate care, whether it's a minor injury or a critical condition.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-user-md"></i></div>
                        <h4>Health Check-ups</h4>
                        <p>Prevention is key to a healthy life. Aarogya Rath offers comprehensive health check-up
                            services, making it convenient for you to prioritize your well-being and catch potential
                            issues early.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-shield-virus"></i></div>
                        <h4>Vaccination Drives</h4>
                        <p>Stay protected with our vaccination drives. Aarogya Rath brings essential vaccines to your
                            doorstep, ensuring that you and your community are shielded against preventable diseases.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon"><i class="fas fa-hospital"></i></div>
                        <h4>Specialized Clinics</h4>
                        <p>From diabetes screenings to women’s health clinics, our specialized Aarogya Rath units cater
                            to specific healthcare needs. We believe in addressing health concerns comprehensively.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

    <section class="map-section">
          <h1 style="text-align: center; font-size:40px;">Our <span style="color: #c53b99;">Location</span></h1>
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3342.962254535622!2d77.02505699999999!3d28.4683948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1987d28f50fd%3A0xb6e4dcaa411900a1!2sCanwinn%20Aarogya%20Dham%20(A%20unit%20of%20CanWinn%20Foundation)!5e1!3m2!1sen!2sin!4v1776407036671!5m2!1sen!2sin"
                width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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