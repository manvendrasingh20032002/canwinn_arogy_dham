<?php 
// 1. Header aur Config (BASE_URL check karein)
include_once('../../includes/header.php'); 
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --p: #7b52ab; --t: #2bb3a3; --y: #f1c40f; --glass: rgba(255, 255, 255, 0.95);
    }
    body { font-family: 'Montserrat', sans-serif; background-color: #f8fbfb; overflow-x: hidden; }

    /* --- 1. CLEAR HERO SECTION --- */
    .hero-pro {
        position: relative;
        background: url('<?= BASE_URL ?>assets/images/cf72b0aa-e0c0-4037-a45b-a416aada1e2b.png'); 
        background-size: cover; background-position: center; background-attachment: fixed;
        padding: 180px 0 220px; color: white; text-align: center;
        border-radius: 0 0 60px 60px; clip-path: ellipse(150% 100% at 50% 0%);
    }
    .hero-pro h1 { font-size: 5rem; font-weight: 800; color: #e4e015; text-shadow: 3px 3px 20px rgba(0,0,0,0.8); text-transform: uppercase; }
    .hero-pro p { font-size: 1.5rem; font-weight: 600; text-shadow: 2px 2px 10px rgba(0,0,0,0.9); }

    /* --- 2. FLOATING STATS --- */
    .stats-overlap { margin-top: -100px; position: relative; z-index: 10; }
    .stat-card {
        background: white; border-radius: 20px; padding: 30px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1); text-align: center;
        transition: 0.4s; border-bottom: 5px solid var(--t);
    }
    .stat-card h2 { font-size: 2.5rem; font-weight: 800; color: var(--p); margin: 0; }

    /* --- 3. ABOUT SECTION --- */
    .img-main-grid { width: 100%; border-radius: 30px; border: 8px solid white; box-shadow: 0 20px 50px rgba(0,0,0,0.1); }

    /* --- 4. SERVICES GRID --- */
    .service-card-premium {
        background: white; border-radius: 15px; padding: 35px; height: 100%;
        border-left: 6px solid var(--t); transition: 0.4s;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .service-icon { font-size: 45px; color: var(--t); margin-bottom: 20px; }

    /* --- 5. COMMITMENT & MISSION --- */
    .info-block-card {
        background: white; border-radius: 30px; padding: 50px; height: 100%;
        box-shadow: 0 15px 45px rgba(0,0,0,0.05); position: relative;
    }
    .info-block-card i { position: absolute; right: 30px; top: 30px; font-size: 60px; opacity: 0.1; color: var(--p); }

    /* --- 6. SCREENSHOT CONTENT (ANIMATED CARDS) --- */
    .screenshot-section { padding: 20px 0; background: #fff; }
    .detailed-item { margin-bottom: 30px; padding: 25px; border-radius: 20px; background: #fcfdfe; border: 1px solid #f0f0f0; transition: 0.4s; }
    .detailed-item:hover { transform: translateY(-10px); border-color: var(--t); box-shadow: 0 15px 30px rgba(43, 179, 163, 0.1); }
    .detailed-item h5 { font-weight: 800; color: #000; margin-bottom: 10px; }
    .detailed-item p { color: #555; line-height: 1.8; margin: 0; }

    .why-choose-card {
        background: #fff; border: 1px solid #eee; padding: 40px 30px;
        border-radius: 25px; transition: 0.4s; height: 100%; text-align: center;
    }
    .why-choose-card:hover { transform: scale(1.05); border-color: var(--p); box-shadow: 0 20px 40px rgba(123, 82, 171, 0.1); }
    .why-icon { font-size: 40px; color: var(--p); margin-bottom: 20px; }

    /* --- Health Centers Section --- */
    .health-centers-section {
        background-color: #f4f9f9;
        padding: 20px 0;
    }
    .health-centers-section h6 {
        color: #333;
        font-size: 1.2rem;
        letter-spacing: 1px;
    }
    .health-centers-section h2 {
        color: var(--t);
        font-weight: 800;
        font-size: 2.5rem;
    }
    .center-card {
        position: relative;
        border-radius: 25px;
        overflow: hidden;
        height: 350px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
    }
    .center-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 30px 60px rgba(0,0,0,0.2);
    }
    .center-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.8s ease;
    }
    .center-card:hover img {
        transform: scale(1.15);
    }
    .center-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 40px 30px;
        background: linear-gradient(transparent, rgba(0,0,0,0.9));
        color: white;
    }
    .center-overlay h4 {
        font-weight: 800;
        margin-bottom: 10px;
        font-size: 1.5rem;
    }
    .center-overlay p {
        margin: 0;
        font-size: 1.1rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .carousel-nav-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #e0fdfa;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 20px rgba(43, 179, 163, 0.15);
        color: var(--t);
        font-size: 24px;
        transition: 0.3s;
    }
    .carousel-nav-btn:hover {
        background: var(--t);
        color: white;
        transform: scale(1.1);
    }
    .carousel-nav-btn.active {
        background: #9efff3;
    }
    .centersSwiper {
        padding: 20px 10px 40px;
    }
    .swiper-slide {
        height: auto;
    }
</style>

<main>
    <section class="hero-pro" data-aos="zoom-out">
        <div class="container">
            <h1 data-aos="fade-down">RAJENDRA PARK</h1>
            <p class="lead mb-4 fw-bold" data-aos="fade-up" data-aos-delay="400">Affordable Healthcare Near You!</p>
        </div>
    </section>

    <section class="stats-overlap container">
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100"><div class="stat-card"><h2>14+</h2><p class="small fw-bold">Doctors</p></div></div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200"><div class="stat-card"><h2>₹100/-</h2><p class="small fw-bold">Consultation</p></div></div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300"><div class="stat-card"><h2>3.1L+</h2><p class="small fw-bold">Patients</p></div></div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400"><div class="stat-card"><h2>14+</h2><p class="small fw-bold">Specialities</p></div></div>
        </div>
    </section>

    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="display-5 fw-bold mb-4">Rajendra Park Polyclinic - <span class="text-primary">Canwinn Hospital</span></h2>
                    <p class="text-muted fs-5">Founded by Dr. D.P. Goyal in March 2019, CanWinn Foundation is dedicated to promoting public 
                        awareness and educating individuals about their health. In line with our commitment to a "Swasth Bharat (स्वस्थ भारत),
                        " we have established the Rajendra Park Polyclinic in Sector 45, Gurugram. This clinic stands as a testament to our
                         mission to address health challenges and contribute to the well-being of our community.</p>
                    <div class="d-flex gap-5 mt-4">
                        <div class="text-center"><h2>5+</h2><p class="small fw-bold">Years Exp.</p></div>
                        <div class="text-center"><h2>430+</h2><p class="small fw-bold">Team Members</p></div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="<?= BASE_URL ?>assets/images/Rajendra Park collgae.q-aspect-ratio-424-524.jpg" class="img-main-grid" alt="Clinic Image">
                </div>
            </div>
        </div>
    </section>

     <!-- Services -->
    <section class="py-2 bg-light">
        <div class="container">
            <h2 class="text-center mb-2" data-aos="fade-up">Our Services</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <i class="fas fa-hospital text-primary mb-3" style="font-size: 40px;"></i>
                        <h5>Indoor Consultation</h5>
                        <p class="text-muted">Specialists available for consultation</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <i class="fas fa-flask text-primary mb-3" style="font-size: 40px;"></i>
                        <h5>Laboratory</h5>
                        <p class="text-muted">Full range of diagnostic tests</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <i class="fas fa-waveform-lines text-primary mb-3" style="font-size: 40px;"></i>
                        <h5>ECG/EEG Services</h5>
                        <p class="text-muted">Cardiac and neurological testing</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <i class="fas fa-pills text-primary mb-3" style="font-size: 40px;"></i>
                        <h5>Pharmacy</h5>
                        <p class="text-muted">Quality medicines at affordable prices</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <i class="fas fa-images text-primary mb-3" style="font-size: 40px;"></i>
                        <h5>Imaging Center</h5>
                        <p class="text-muted">X-Ray, Ultrasound, CT Scan</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <i class="fas fa-user-nurse text-primary mb-3" style="font-size: 40px;"></i>
                        <h5>Nursing Care</h5>
                        <p class="text-muted">Home and clinical nursing services</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <i class="fas fa-heartbeat text-primary mb-3" style="font-size: 40px;"></i>
                        <h5>Health Monitoring</h5>
                        <p class="text-muted">Chronic disease management</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up">
                    <div class="service-card border-0 rounded p-4 h-100" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <i class="fas fa-shield-alt text-primary mb-3" style="font-size: 40px;"></i>
                        <h5>Insurance Support</h5>
                        <p class="text-muted">Cashless and insurance claims accepted</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="info-block-card" style="border-left: 6px solid var(--p);">
                        <i class="fa-solid fa-hands-holding-heart"></i>
                        <h3 class="fw-bold mb-2">Our <span style="color:var(--p)">Mission</span></h3>
                        <p class="text-muted">Rajendra Park Polyclinic, our mission is to provide accessible and comprehensive healthcare 
                        services to the community. We aim to create a healthier society by focusing on preventive care, early
                         diagnosis, and effective treatment. Through our Swasth Bharat initiative, we strive to empower individuals 
                         to take charge of their health and well-being.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="info-block-card" style="border-left: 6px solid var(--t);">
                        <i class="fa-solid fa-flag-checkered"></i>
                        <h3 class="fw-bold mb-2">Our Commitment to <span style="color:var(--t)">Your Health</span></h3>
                        <p class="text-muted">Rajendra Park Polyclinic is not just a healthcare facility; it’s a hub of comprehensive services designed to cater to the diverse health needs of our community. Our team of experienced and dedicated healthcare professionals is committed to delivering high-quality care across various medical specialties.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="screenshot-section bg-light">
        <div class="container ">
            <h2 class="fw-bold mb-3 text-center" data-aos="fade-up">Rajendra Park Polyclinic Services:</h2>
            <div class="row g-4 ">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="detailed-item"><h5>Primary Care:</h5><p>Our primary care services focus on preventive care, health screenings, and managing chronic conditions. Our physicians are here to guide you on your journey to optimal health.</p></div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="detailed-item"><h5>Specialized Care:</h5><p>From cardiology and orthopedics to gastroenterology and more, our specialized care services cover a wide range of medical disciplines with expert specialists.</p></div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="detailed-item"><h5>Diagnostic Services:</h5><p>Our diagnostic services include advanced imaging, laboratory testing, and diagnostic procedures to accurately assess your health and create personalized plans.</p></div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="detailed-item"><h5>Surgical Excellence:</h5><p>Our surgical team is skilled in a variety of surgical procedures, ranging from minimally invasive surgeries to complex interventions, prioritizing patient safety.</p></div>
                </div>
            </div>

            <div class="mt-2 pt-3 border-top">
                <h2 class="fw-bold mb-3 text-center" data-aos="fade-up">Why Choose Rajendra Park Polyclinic?</h2>
                <div class="row g-4">
                    <div class="col-lg-4" data-aos="zoom-in">
                        <div class="why-choose-card">
                            <i class="fas fa-user-friends why-icon"></i>
                            <h5>Patient-Centric Approach</h5>
                            <p class="text-muted">We prioritize your well-being and strive to create an environment where your comfort, concerns, and needs are our top priorities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="why-choose-card">
                            <i class="fas fa-check-circle why-icon"></i>
                            <h5>Quality Care</h5>
                            <p class="text-muted">Our commitment to quality care is reflected in our adherence to the highest medical standards and continuous improvement in delivery.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="why-choose-card">
                            <i class="fas fa-hands-helping why-icon"></i>
                            <h5>Community Engagement</h5>
                            <p class="text-muted">We believe in being an integral part of the community, contributing through outreach initiatives and health education programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
    .aarogya-dham-map-section {
        background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
        padding: 10px 0;
        position: relative;
        overflow: hidden;
    }

    .aarogya-dham-map-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 600px;
        height: 600px;
        background: rgba(43, 179, 163, 0.08);
        border-radius: 50%;
        z-index: 1;
    }

    .aarogya-dham-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }

    .aarogya-dham-header {
        text-align: center;
        margin-bottom: 20px;
        animation: fadeInDown 0.8s ease;
    }

    .aarogya-dham-header h2 {
        font-size: 45px;
        font-weight: 700;
        color: #222;
        margin-bottom: 10px;
        letter-spacing: -0.5px;
    }

    .aarogya-dham-header h2 span {
        color: #2bb3a3;
    }

    .aarogya-dham-header p {
        font-size: 18px;
        color: #666;
        margin-bottom: 0;
    }

    .aarogya-dham-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: stretch;
    }

    .map-container {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
        animation: slideInLeft 0.8s ease;
        min-height: 500px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        min-height: 500px;
        border: none;
    }

    .aarogya-dham-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        animation: slideInRight 0.8s ease;
    }

    .info-card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        margin-bottom: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border-left: 5px solid #2bb3a3;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .info-card h4 {
        color: #2bb3a3;
        font-weight: 700;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .info-card i {
        font-size: 24px;
    }

    .info-card p {
        color: #555;
        margin-bottom: 0;
        line-height: 1.6;
    }

    .info-card a {
        color: #2bb3a3;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .info-card a:hover {
        color: #1f8b7a;
    }

    .highlight-badge {
        display: inline-block;
        background: #2bb3a3;
        color: white;
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
        margin-top: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Animation Keyframes */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .aarogya-dham-map-section {
            padding: 60px 0;
        }

        .aarogya-dham-header h2 {
            font-size: 32px;
        }

        .aarogya-dham-content {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .map-container {
            min-height: 400px;
        }

        .map-container iframe {
            min-height: 400px;
        }

        .aarogya-dham-map-section::before {
            width: 400px;
            height: 400px;
            top: 50%;
            right: -20%;
        }
    }
</style>

    <section class="health-centers-section">
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-8" data-aos="fade-right">
                    <h6 class="fw-bold mb-1">CanWinn</h6>
                    <h2 class="mb-4">Health Centers</h2>
                    <p class="text-muted fs-5">Dr. D.P. Goyal founded the CanWinn Foundation in March 2019 with the goal of empowering people to overcome chronic diseases.</p>
                </div>
            </div>

            <div class="swiper centersSwiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <!-- Sector 45 -->
                    <div class="swiper-slide">
                        <div class="center-card" onclick="window.location.href='<?= BASE_URL ?>modules/polyclinic/sector45.php'">
                            <img src="<?= BASE_URL ?>assets/images/policlinic-3-01.jpg" alt="Sector 45">
                            <div class="center-overlay">
                                <h4>Sector 45, Gurugram</h4>
                                <p><i class="fas fa-phone"></i> 0124-7178135</p>
                            </div>
                        </div>
                    </div>
                    <!-- Ashok Vihar -->
                    <div class="swiper-slide">
                        <div class="center-card" onclick="window.location.href='<?= BASE_URL ?>modules/polyclinic/ashok_vihar.php'">
                            <img src="<?= BASE_URL ?>assets/images/policlinic-1-01.jpg" alt="Ashok Vihar">
                            <div class="center-overlay">
                                <h4>Ashok Vihar, Gurugram</h4>
                                <p><i class="fas fa-phone"></i> 0124-7178687</p>
                            </div>
                        </div>
                    </div>
                    <!-- 4/8 Marla -->
                    <div class="swiper-slide">
                        <div class="center-card" onclick="window.location.href='<?= BASE_URL ?>modules/polyclinic/marla_polyclinic.php'">
                            <img src="<?= BASE_URL ?>assets/images/canwinn-polyclinic-gurgaon-clinics-uap4pbppyc-1-aspect-ratio-838-634.jpg" alt="4/8 Marla">
                            <div class="center-overlay">
                                <h4>4/8 Marla, Gurugram</h4>
                                <p><i class="fas fa-phone"></i> 0124-5059560</p>
                            </div>
                        </div>
                    </div>
                    <!-- Rajendra Park -->
                    <div class="swiper-slide">
                        <div class="center-card" onclick="window.location.href='<?= BASE_URL ?>modules/polyclinic/rajendra_park.php'">
                            <img src="<?= BASE_URL ?>assets/images/policlinic-2-01.jpg" alt="Rajendra Park">
                            <div class="center-overlay">
                                <h4>Rajendra Park, Gurugram</h4>
                                <p><i class="fas fa-phone"></i> 0124-1234567</p>
                            </div>
                        </div>
                    </div>
                    <!-- Geeta Bhawan -->
                    <div class="swiper-slide">
                        <div class="center-card" onclick="window.location.href='<?= BASE_URL ?>modules/polyclinic/geeta_bhawan.php'">
                            <img src="<?= BASE_URL ?>assets/images/Geeta -Image-2024-05-20-at-11.34.46-AM-aspect-ratio-838-634.jpeg" alt="Geeta Bhawan">
                            <div class="center-overlay">
                                <h4>Geeta Bhawan, Gurugram</h4>
                                <p><i class="fas fa-phone"></i> 0124-7654321</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4" data-aos="fade-up">
                <button class="carousel-nav-btn prev-center"><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-nav-btn next-center active"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>


<section class="aarogya-dham-map-section" id="aarogya-dham-map">
    <div class="aarogya-dham-container">
        <!-- Header -->
        <div class="aarogya-dham-header">
            <h2>Visit CanWinn <span>Aarogya Dham</span></h2>
            <p>Our state-of-the-art healthcare facility in the heart of the city</p>
        </div>

        <!-- Map and Info Layout -->
        <div class="aarogya-dham-content">
            <!-- Map Section -->
            <div class="map-container" data-aos="fade-up" data-aos-delay="100">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.5868820079177!2d77.00690877528359!3d28.491985475741846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d17b92749be69%3A0x17833c16a9ab56c8!2sCanWinn%20Polyclinic%20-%20Rajendra%20Park!5e0!3m2!1sen!2sin!4v1777455571700!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <!-- Info Section -->
            <div class="aarogya-dham-info">
                <!-- Address Card -->
                <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                    <h4><i class="fas fa-map-marker-alt"></i> Address</h4>
                    <p>
                        CanWinn Aarogya Dham<br>
                        Sector 45, Gurugram<br>
                        Haryana 122003, India
                    </p>
                    <a href="https://maps.google.com/?q=28.45956831,77.03280232" target="_blank">
                        Get Directions →
                    </a>
                </div>

                <!-- Contact Card -->
                <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                    <h4><i class="fas fa-phone"></i> Contact Us</h4>
                    <p>
                        <strong>Emergency Hotline:</strong> +91-108<br>
                        <strong>Appointments:</strong> +91-11-XXXX-XXXX<br>
                        <strong>Email:</strong> <a href="mailto:info@canwinn.org">info@canwinn.org</a>
                    </p>
                    <span class="highlight-badge">Available 24/7</span>
                </div>

                <!-- Hours Card -->
                <div class="info-card" data-aos="fade-up" data-aos-delay="400">
                    <h4><i class="fas fa-clock"></i> Service Hours</h4>
                    <p>
                        <strong>OPD:</strong> 8:00 AM - 9:00 PM<br>
                        <strong>Emergency:</strong> 24 Hours<br>
                        <strong>Diagnostics:</strong> 7:00 AM - 8:00 PM
                    </p>
                    <span class="highlight-badge">Open All Days</span>
                </div>
            </div>
        </div>
    </div>
</section>


      <!-- CTA Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container text-center" data-aos="zoom-in">
            <h2 class="text-white mb-4">Your Health is Our Priority</h2>
            <p class="text-white-50 mb-4">Schedule your appointment with our healthcare experts</p>
            <a href="<?php echo BASE_URL; ?>modules/appointment/book.php" class="btn btn-light btn-lg">
                <i class="fas fa-calendar-alt me-2"></i> Book Appointment
            </a>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });

    var centersSwiper = new Swiper(".centersSwiper", {
        slidesPerView: 1,
        spaceBetween: 25,
        loop: true,
        navigation: {
            nextEl: ".next-center",
            prevEl: ".prev-center",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>

<?php include_once('../../includes/footer.php'); ?>