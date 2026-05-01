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

    /* --- 1. CLEAR HERO SECTION (Reverted Style) --- */
    .hero-pro {
        position: relative;
        background: url('<?= BASE_URL ?>assets/images/unnameddd.webp'); 
        background-size: cover; 
        background-position: center; 
        background-attachment: fixed;
        padding: 180px 0 220px; 
        color: white; 
        text-align: center;
        border-radius: 0 0 60px 60px; 
        clip-path: ellipse(150% 100% at 50% 0%);
    }
    .hero-pro h1 { 
        font-size: 4rem; 
        font-weight: 800; 
        color: #e7dd2a; 
        text-shadow: 3px 3px 20px rgba(0,0,0,0.8); 
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    @media (max-width: 768px) {
        .hero-pro { padding: 120px 0 150px; }
        .hero-pro h1 { font-size: 2.2rem; }
        .hero-pro p { font-size: 1.1rem; }
    }

    .hero-pro p {
        font-size: 1.5rem;
        font-weight: 600;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.9);
    }

    /* --- 2. FLOATING STATS --- */
    .stats-overlap { margin-top: -100px; position: relative; z-index: 10; }
    .stat-card {
        background: white; border-radius: 20px; padding: 30px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1); text-align: center;
        transition: 0.4s; border-bottom: 5px solid var(--t);
    }
    .stat-card:hover { transform: translateY(-10px); }
    .stat-card h2 { font-size: 2.5rem; font-weight: 800; color: var(--p); margin: 0; }
    .stat-card p { font-weight: 600; color: #666; font-size: 0.9rem; text-transform: uppercase; }

    /* --- 3. ABOUT SECTION --- */
    .img-main-grid { 
        width: 100%; border-radius: 30px; border: 8px solid white; 
        box-shadow: 0 20px 50px rgba(0,0,0,0.1); 
    }

    /* --- 4. SERVICES GRID --- */
    .service-card-premium {
        background: white; border-radius: 15px; padding: 35px; height: 100%;
        border-left: 6px solid var(--t); transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .service-card-premium:hover { transform: translateY(-10px); box-shadow: 0 20px 50px rgba(43, 179, 163, 0.2); }
    .service-icon { font-size: 45px; color: var(--t); margin-bottom: 20px; transition: 0.3s; }
    .service-card-premium:hover .service-icon { transform: scale(1.2) rotate(10deg); }
    .service-link { color: var(--t); text-decoration: none; font-weight: 700; transition: 0.3s; display: inline-flex; align-items: center; gap: 8px; }
    .service-link:hover { transform: translateX(5px); color: var(--p); }

    /* --- 5. COMMITMENT & MISSION --- */
    .info-block-card {
        background: white; border-radius: 30px; padding: 50px; h-100;
        box-shadow: 0 15px 45px rgba(0,0,0,0.05); position: relative;
    }
    .info-block-card i { position: absolute; right: 30px; top: 30px; font-size: 60px; opacity: 0.1; color: var(--p); }

    /* --- 6. DETAILED CONTENT SECTION --- */
    .screenshot-content-section { padding: 80px 0; background: #fff; }
    .detailed-service-item { margin-bottom: 35px; }
    .detailed-service-item h5 { font-weight: 800; color: #000; font-size: 1.1rem; display: inline; }
    .detailed-service-item p { display: inline; color: #555; line-height: 1.8; font-size: 1.05rem; }

    /* --- 7. WHY CHOOSE US (Upgraded) --- */
    .expertise-card {
        background: #fcfdfe; border: 1px solid #f0f0f0; padding: 40px 30px;
        border-radius: 25px; transition: 0.4s; height: 100%;
    }
    .expertise-card:hover { background: #fff; border-color: var(--p); transform: scale(1.03); box-shadow: 0 20px 40px rgba(0,0,0,0.05); }
    .expertise-icon-box {
        width: 70px; height: 70px; background: var(--p); color: white;
        display: flex; align-items: center; justify-content: center;
        font-size: 30px; border-radius: 20px; margin-bottom: 25px;
        box-shadow: 0 10px 20px rgba(123, 82, 171, 0.3);
    }
    .expertise-text h5 { font-weight: 700; color: #222; margin-bottom: 12px; }

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
            <h1 data-aos="fade-down">SECTOR 45</h1>
            <p class="lead mb-4 fw-bold" data-aos="fade-up" data-aos-delay="400">Your Health Matters.!</p>
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
                    <h2 class="display-5 fw-bold mb-4">CanWinn Seva Polyclinic - <span class="text-primary">Sector 45</span></h2>
                    <p class="text-muted fs-5">Founded by Dr. D.P. Goyal in March 2019, CanWinn Foundation is committed to enhancing 
                        public health awareness and educating individuals about their well-being. In pursuit of our mission for a 
                        Swasth Bharat (स्वस्थ भारत)," we have established the CanWinn Seva Polyclinic in the vibrant Sector 45 of Gurugram.</p>
                    <div class="d-flex gap-5 mt-4">
                        <div class="text-center"><h2>5+</h2><p class="small fw-bold">Years Exp.</p></div>
                        <div class="text-center"><h2>430+</h2><p class="small fw-bold">Team Members</p></div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="<?= BASE_URL ?>assets/images/collgae-aspect-ratio-424-524.jpg" class="img-main-grid" alt="Clinic Image">
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

    <section class="py-2">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="info-block-card" style="border-left: 6px solid var(--p);">
                        <i class="fa-solid fa-hands-holding-heart"></i>
                        <h3 class="fw-bold mb-2">About<span style="color:var(--p)"> CanWinn Foundation :</span></h3>
                        <p class="text-muted" style="line-height: 1.8;">CanWinn Foundation has always been a source of inspiration for the common 
                            man in Gurugram, and we have worked tirelessly to provide the highest quality health services at your doorstep.
                             Our primary goal is to provide access to affordable medical facilities at a reasonable cost. So,
                              on September 12, 2021, we put our idea into reality and celebrated the grand launch of CanWinn Seva Polylclinc in
                               Gurugram’s Geeta Bhawan. Our Seva polyclinic is a modest Hospital that offers a variety of services.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="info-block-card" style="border-left: 6px solid var(--t);">
                        <i class="fa-solid fa-flag-checkered"></i>
                        <h3 class="fw-bold mb-2">Our Mission: <span style="color:var(--t)">"Swasth Bharat (स्वस्थ भारत)"</span></h3>
                        <p class="text-muted" style="line-height: 1.8;">Dr. D.P. Goyal’s vision led to the creation of CanWinn Foundation with the
                             goal of addressing health challenges and fostering a healthier society.At CanWinn Seva Polyclinic, our primary mission is to contribute to a
                             “Swasth Bharat” by providing accessible and comprehensive healthcare services. We aim to create a healthier community
                              through awareness, education, and personalized medical care.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <style>
    :root {
        --p: #7b52ab; --t: #2bb3a3; --y: #f1c40f; 
    }
    body { font-family: 'Montserrat', sans-serif; background-color: #f8fbfb; overflow-x: hidden; }

    /* --- SECTION STYLING --- */
    .poly-section { padding: 20px 0; background: #fff; }
    
    .main-heading { 
        font-weight: 800; color: #1a1a1a; margin-bottom: 30px; 
        text-align: center; font-size: 2.2rem;
    }

    .intro-text {
        font-size: 1.1rem; color: #555; line-height: 1.8; text-align: center;
        max-width: 900px; margin: 0 auto 50px;
    }

    /* --- SERVICE ITEM STYLING --- */
    .service-box {
        margin-bottom: 25px; padding: 25px; border-radius: 20px;
        background: #fcfdfe; border: 1px solid #f0f0f0;
        transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .service-box:hover {
        transform: translateX(10px); border-color: var(--t);
        box-shadow: 0 15px 30px rgba(43, 179, 163, 0.1);
    }
    .service-box h6 { font-weight: 800; color: #000; display: inline; font-size: 1.1rem; }
    .service-box p { display: inline; color: #555; line-height: 1.7; margin-left: 5px; }
    .service-box i { color: var(--t); font-size: 1.2rem; margin-right: 15px; }

    /* --- WHY CHOOSE CARDS --- */
    .why-card {
        background: white; border-radius: 25px; padding: 40px 30px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.05); height: 100%;
        transition: 0.4s; border-top: 5px solid var(--p);
    }
    .why-card:hover { transform: translateY(-10px); box-shadow: 0 20px 50px rgba(123, 82, 171, 0.15); }
    .why-icon {
        width: 60px; height: 60px; background: rgba(123, 82, 171, 0.1);
        color: var(--p); display: flex; align-items: center; justify-content: center;
        border-radius: 15px; font-size: 25px; margin-bottom: 20px;
    }
    .why-card h6 { font-weight: 800; color: #222; margin-bottom: 15px; font-size: 1.2rem; }
</style>

<main>
    <section class="poly-section">
        <div class="container">
            <h2 class="main-heading" data-aos="fade-down">CanWinn Seva Polyclinic – Sector 45:</h2>
            <p class="intro-text" data-aos="fade-up">
                Our polyclinic in Sector 45, Gurugram, is a testament to our commitment to addressing health challenges at the grassroots level. 
                Equipped with state-of-the-art facilities and staffed by a team of experienced healthcare professionals, 
                CanWinn Seva Polyclinic is your trusted partner on your journey to better health.
            </p>

            <div class="row mt-2">
                <div class="col-lg-12">
                    <h4 class="fw-bold mb-4" data-aos="fade-right">At CanWinn Seva Polyclinic, we offer a comprehensive range of healthcare services, including:</h4>
                    
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-box">
                                <i class="fas fa-chevron-right"></i>
                                <h6>General Health Check-ups:</h6>
                                <p>Regular check-ups are essential for preventive care, and our clinic provides thorough health assessments to detect and address potential issues.</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-box">
                                <i class="fas fa-chevron-right"></i>
                                <h6>Specialized Consultations:</h6>
                                <p>Our team of expert doctors covers a wide range of specialties, ensuring that you receive personalized and top-notch medical advice.</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-box">
                                <i class="fas fa-chevron-right"></i>
                                <h6>Health Education Programs:</h6>
                                <p>We believe in empowering individuals with knowledge. Our health education programs aim to equip you with the information needed to make informed decisions about your well-being.</p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-box">
                                <i class="fas fa-chevron-right"></i>
                                <h6>Community Outreach:</h6>
                                <p>As part of our commitment to community health, we engage in various outreach programs to extend our services and knowledge to a broader audience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="poly-section bg-light">
        <div class="container">
            <h2 class="main-heading mb-3" data-aos="fade-down">Why Choose CanWinn Seva Polyclinic – Sector 45?</h2>
            
            <div class="row g-4">
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-user-md"></i></div>
                        <h6>Experienced Team:</h6>
                        <p class="text-muted">Our dedicated team of healthcare professionals is committed to providing compassionate and expert care.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-hospital-alt"></i></div>
                        <h6>Advanced Facilities:</h6>
                        <p class="text-muted">Equipped with modern medical technologies to ensure accurate diagnostics and effective treatments.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="why-card">
                        <div class="why-icon"><i class="fas fa-users-cog"></i></div>
                        <h6>Community-Centric Approach:</h6>
                        <p class="text-muted">We believe in actively engaging with the community to address unique health challenges and promote preventive care.</p>
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
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.138389481365!2d77.06521647528183!3d28.445244375767523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19c8c0763a6b%3A0xbed5bb3ef1870e70!2sCanWinn%20Polyclinic%20-%20Sector%2045%20Kanhai%20Village!5e0!3m2!1sen!2sin!4v1777455742201!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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