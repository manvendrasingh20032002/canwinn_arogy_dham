<?php 
// 1. Header aur Config
include_once('../../includes/header.php'); 
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<style>
    :root { --p: #7b52ab; --t: #2bb3a3; --y: #f1c40f; --dark: #1a1a1a; }
    
    /* Global Scroll Fix */
    body { 
        font-family: 'Montserrat', sans-serif; 
        background-color: #f8fbfb; 
        overflow-x: hidden; 
        margin: 0; padding: 0;
    }

    /* --- HERO SECTION --- */
    .hero-pro {
        position: relative;
        background: url('<?= BASE_URL ?>assets/images/s-1-1562x588.png') no-repeat center center; 
        background-size: cover;
        height: 80vh;
        min-height: 450px;
        border-radius: 0 0 60px 60px;
        z-index: 1;
    }

    /* --- SKILL SECTION --- */
    .dreams-section { padding: 30px 0; background: #fff; }
    .dreams-content h2 { font-size: 3.2rem; font-weight: 900; line-height: 1.1; color: var(--dark); }
    .highlight-yellow { color: #1dd9b1; font-weight: 800; }
    .dreams-main-img { width: 100%; max-width: 500px; border-radius: 30px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); border: 8px solid white; }

    /* --- PROGRAMS --- */
    .program-card { background: white; border-radius: 20px; padding: 30px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-bottom: 5px solid var(--t); text-align: center; }

    /* --- GALLERY (Premium Slider) --- */
    .gallery-container { padding: 30px 0; background: #f0f4f4; }
    .gal-card { border-radius: 20px; overflow: hidden; border: 5px solid white; box-shadow: 0 10px 20px rgba(0,0,0,0.1); margin: 10px; }
    .gal-card img { width: 100%; height: 300px; object-fit: cover; }

    /* --- LAST SECTION (INSTANT LOAD) --- */
    .enroll-section { padding: 30px 0; background: #fff; }
    .enroll-img { width: 100%; border-radius: 30px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
    .enroll-form-card { padding: 40px; background: #fff; border-radius: 25px; box-shadow: 0 20px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; }
    .enroll-input { border: none; border-bottom: 2px solid #eee; width: 100%; padding: 12px 5px; margin-bottom: 25px; font-weight: 600; outline: none; }
    .enroll-input:focus { border-color: var(--t); }
    .enroll-btn { background: var(--y); color: #333; font-weight: 800; padding: 16px; width: 100%; border-radius: 12px; border: none; text-transform: uppercase; cursor: pointer; }
</style>

<main>
    <div class="hero-pro"></div>

    <section class="dreams-section">
        <div class="container">
             <h1 style="text-align: center;"><b>Canwinn Mahila Kaushal  </b><span class="highlight-yellow">Vikas Kender</span></h1>
             <p style="text-align: center;">A Canwin Foundation initiative for women's empowerments</p>
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h1>Good news for <span class="highlight-yellow">women!</span></h1>
                    <p class="lead text-muted my-4">Professional training in <b>Nail Art, Stitching, and Makeup</b>. Start your journey of independence with CanWinn skill centers.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="<?= BASE_URL ?>assets/images/Group-83.png" class="dreams-main-img">
                </div>
            </div>
        </div>
    </section>

    <section class="py-2" style="background:#f8fbfb;">
        <div class="container">
            <h2 class="text-center mb-2 fw-bold">Trainig Programs</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <i class="fas fa-cut fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold">Tailoring & Stitching</h5>
                        <p class="text-muted small">Basic to advanced tailoring course
                             where you learn cutting, stitching, and garment design. Perfect 
                             for starting your own boutique or working in the garment industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <i class="fas fa-paint-brush fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold">Beauty & Nail Art</h5>
                        <p class="text-muted small">Learn professional makeup techniques, 
                            intricate nail art designs, and complete skin-care treatments. 
                            Conducted by industry experts to give you hands-on experience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <i class="fas fa-laptop-code fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold">Digital Literacy</h5>
                        <p class="text-muted small">Essential IT skills for the modern workplace.
                             Learn basic computer operations, internet usage, and office productivity
                              tools to become tech-savvy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-container">
        <div class="container">
            <h2 class="text-center fw-bold mb-2">Skill Center Gallery</h2>
            <div class="gallery-slider">
                <div><div class="gal-card"><img src="<?= BASE_URL ?>assets/images/DSC_5528-1920x1080.jpg"></div></div>
                <div><div class="gal-card"><img src="<?= BASE_URL ?>assets/images/DSC_1692.jpg"></div></div>
                <div><div class="gal-card"><img src="<?= BASE_URL ?>assets/images/DSC_1684.jpg"></div></div>
                <div><div class="gal-card"><img src="<?= BASE_URL ?>assets/images/vlcsnap-2024-08-03-12h46m19s273-1-1920x1080.png"></div></div>
                 <div><div class="gal-card"><img src="<?= BASE_URL ?>assets/images/vlcsnap-2024-08-03-12h49m51s198-2-1920x1080.png"></div></div>
                <div><div class="gal-card"><img src="<?= BASE_URL ?>assets/images/gettyimages-1279972948-612x612.jpg"></div></div>
                <div><div class="gal-card"><img src="<?= BASE_URL ?>assets/images/gettyimages-2165098487-612x612.jpg"></div></div>
            </div>
        </div>
    </section>

    <section class="enroll-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img src="<?= BASE_URL ?>assets/images/WhatsApp-Image-2025-01-07-at-11.42.05_e6ef7e70s.jpg" class="enroll-img">
                </div>
                <div class="col-lg-6">
                    <div class="enroll-form-card">
                        <h3 class="fw-bold mb-2">Get In Touch</h3>
                        <p class="text-muted mb-4 small">An initiative by CanWinn Foundation for women's empowerment.</p>
                        <form action="#" method="POST">
                            <input type="text" class="enroll-input" placeholder="Your Name*" required>
                            <input type="email" class="enroll-input" placeholder="Your Email*" required>
                            <input type="tel" class="enroll-input" placeholder="Mobile Number*" required minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" pattern="[0-9]{10}">
                            <select class="enroll-input" required>
                                <option value="">Select Center*</option>
                                <option>Sector 45</option>
                                <option>Rajendra Park</option>
                            </select>
                            <button type="submit" class="enroll-btn mt-2">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('.gallery-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: true,
            responsive: [
                { breakpoint: 992, settings: { slidesToShow: 2 } },
                { breakpoint: 768, settings: { slidesToShow: 1 } }
            ]
        });
    });
</script>

<?php include_once('../../includes/footer.php'); ?>