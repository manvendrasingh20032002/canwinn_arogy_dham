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

    /* --- 1. HERO SECTION --- */
    .hero-pro {
        position: relative;
        background: url('<?= BASE_URL ?>assets/images/Sector45_7-e1700821986247.jpg'); 
        background-size: cover; background-position: center; background-attachment: fixed;
        padding: 180px 0 220px; color: white; text-align: center;
        border-radius: 0 0 60px 60px; clip-path: ellipse(150% 100% at 50% 0%);
    }
    .hero-pro h1 { font-size: 5rem; font-weight: 800; color: #e4e015; text-shadow: 3px 3px 20px rgba(0,0,0,0.8); text-transform: uppercase; }
    .hero-pro p { font-size: 1.5rem; font-weight: 600; text-shadow: 2px 2px 10px rgba(0,0,0,0.9); }

    /* --- 2. STATS --- */
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

    /* --- 6. NEW ASHOK VIHAR CONTENT (FROM SCREENSHOT) --- */
    .ashok-content-section { padding: 20px 0; background: #fff; }
    .service-list-item { display: flex; align-items: flex-start; gap: 15px; margin-bottom: 25px; }
    .service-list-item i { color: var(--t); font-size: 20px; margin-top: 5px; }
    .service-list-item h6 { font-weight: 800; color: #000; margin-bottom: 5px; display: inline-block; }
    .service-list-item p { color: #555; line-height: 1.6; margin: 0; }

    .why-ashok-card {
        background: #fcfdfe; border: 1px solid #eee; padding: 30px;
        border-radius: 20px; transition: 0.4s; height: 100%;
    }
    .why-ashok-card:hover { transform: translateY(-10px); border-color: var(--p); box-shadow: 0 15px 30px rgba(123,82,171,0.1); }

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
            <h1 data-aos="fade-down">ASHOK VIHAR</h1>
            <p class="lead mb-4 fw-bold">Quality Healthcare, Caring Hands..!</p>
        </div>
    </section>

  <section class="stats-overlap container">
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-card"><h2>14+</h2><p class="small fw-bold">Doctors</p></div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-card"><h2>₹100/-</h2><p class="small fw-bold">Consultation</p></div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-card"><h2>3.1L+</h2><p class="small fw-bold">Patients</p></div>
            </div>
            <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-card"><h2>14+</h2><p class="small fw-bold">Specialities</p></div>
            </div>
        </div>
    </section>


    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="display-5 fw-bold mb-4">Ashok Vihar Polyclinic - <span class="text-primary">Canwinn Hospital</span></h2>
                    <p class="text-muted fs-5">At Ashok Vihar Polyclinic, we are committed to your health and well-being. Founded by Dr. D.P. Goyal, the CanWinn Foundation embarked on a mission in March 2019 to raise public awareness and educate individuals about their health.</p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="<?= BASE_URL ?>assets/images/Ashok vihar collgae.-22-aspect-ratio-424-524.jpg" class="img-main-grid" alt="Clinic Image">
                </div>
            </div>
        </div>
    </section>

 <!-- Services -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Our Services</h2>
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

    <section class="py-3 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="info-block-card" style="border-left: 6px solid var(--p);">
                        <i class="fa-solid fa-hands-holding-heart" style="position:absolute; right:20px; top:20px; font-size:50px; opacity:0.1; color:var(--p);"></i>
                        <h3 class="fw-bold mb-3">Our : <span style="color:var(--p)">Mission </span></h3>
                        <p class="text-muted">Dr. D.P. Goyal, a visionary in the field of healthcare, established the CanWinn
                             Foundation with the aim of making a positive impact on the health of our community.The cornerstone of our mission is to contribute to a healthier India by fostering 
                              awareness and providing accessible healthcare services. Now, we extend our commitment to health 
                              and well-being with the Ashok Vihar Polyclinic – Canwinn Hospital.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="info-block-card" style="border-left: 6px solid var(--t);">
                        <i class="fa-solid fa-flag-checkered" style="position:absolute; right:20px; top:20px; font-size:50px; opacity:0.1; color:var(--t);"></i>
                        <h3 class="fw-bold mb-3">Our <span style="color:var(--t)">Commitment</span></h3>
                        <p class="text-muted">Ashok Vihar Polyclinic, a part of Canwinn Hospital, is strategically located in Sector
                         45, Gurugram, to serve the healthcare needs of the community. Our state-of-the-art facility is equipped with 
                         modern medical infrastructure, a team of experienced healthcare professionals, and a patient-centric approach
                          to ensure the well-being of every individual who walks through our doors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ashok-content-section bg-light">
        <div class="container">
            <div class="text-center mb-3" data-aos="fade-up">
                <h2 class="fw-bold display-6">Services We Offer:</h2>
                <hr class="mx-auto" style="width: 70px; height: 5px; background: var(--t); opacity:1;">
            </div>

            <div class="row g-4">
                <div class="col-12 mb-4" data-aos="fade-up">
                    <div class="row text-center">
                        <div class="col-md-4 col-6 mb-3"><h6><i class="fas fa-chevron-right text-teal me-2"></i>General Health Check-ups</h6></div>
                        <div class="col-md-4 col-6 mb-3"><h6><i class="fas fa-chevron-right text-teal me-2"></i>Specialized Consultations</h6></div>
                        <div class="col-md-4 col-6 mb-3"><h6><i class="fas fa-chevron-right text-teal me-2"></i>Diagnostic Services</h6></div>
                        <div class="col-md-6 col-6"><h6><i class="fas fa-chevron-right text-teal me-2"></i>Preventive Healthcare Programs</h6></div>
                        <div class="col-md-6 col-12"><h6><i class="fas fa-chevron-right text-teal me-2"></i>Health Education Campaigns</h6></div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <p class="lead text-center text-muted mb-5">At Ashok Vihar Polyclinic, we pride ourselves on delivering a wide range of healthcare services to meet the diverse needs of our community.</p>
                    
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="service-list-item">
                                <i class="fas fa-angle-double-right"></i>
                                <div><h6>General Medicine:</h6><p>Experienced physicians are available to address your general health concerns and provide personalized care.</p></div>
                            </div>
                            <div class="service-list-item">
                                <i class="fas fa-angle-double-right"></i>
                                <div><h6>Preventive Healthcare:</h6><p>We believe in proactive measures to prevent illnesses. Our programs keep you and your family in the best of health.</p></div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left">
                            <div class="service-list-item">
                                <i class="fas fa-angle-double-right"></i>
                                <div><h6>Health Education:</h6><p>Knowledge is power. We offer health education programs to empower individuals with information needed for informed decisions.</p></div>
                            </div>
                            <div class="service-list-item">
                                <i class="fas fa-angle-double-right"></i>
                                <div><h6>Specialized Clinics:</h6><p>Our specialized clinics cater to specific health needs, ensuring that you receive expert care tailored to your requirements.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3 pt-3 border-top">
                <div class="text-center mb-3" data-aos="fade-up">
                    <h2 class="fw-bold">Why Choose Ashok Vihar Polyclinic – Canwinn Hospital?</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="why-ashok-card">
                            <i class="fas fa-hand-holding-heart mb-3 text-teal fs-3"></i>
                            <h6 class="fw-bold">Compassionate Care:</h6>
                            <p class="text-muted small">Our team of healthcare professionals is dedicated to providing compassionate and patient-centered care.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="why-ashok-card">
                            <i class="fas fa-hospital-user mb-3 text-teal fs-3"></i>
                            <h6 class="fw-bold">State-of-the-Art Facilities:</h6>
                            <p class="text-muted small">Equipped with modern facilities and technology, we strive to deliver the highest standard of medical services.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="why-ashok-card">
                            <i class="fas fa-users-cog mb-3 text-teal fs-3"></i>
                            <h6 class="fw-bold">Community Engagement:</h6>
                            <p class="text-muted small">We actively engage with the community to understand their health concerns and tailor our services to meet their needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.77949089272!2d77.01476138093058!3d28.48618671320495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1912dbd1194d%3A0x58ee94146de1996f!2sCanWinn%20Polyclinic%20-%20Ashok%20Vihar!5e0!3m2!1sen!2sin!4v1777455485046!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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