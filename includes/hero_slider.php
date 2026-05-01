<style>
/* Full Screen Hero Slider - Professional Version */
.carousel,
.carousel-inner,
.carousel-item {
    height: 80vh;
    width: 100%;
    margin: 0;
    padding: 0;
}

.slider-img {
    height: 80vh;
    width: 100%;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    position: relative;
}

/* Dark Overlay */
.slider-img::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.15); /* Very subtle to keep background clear */
    z-index: 1;
}

.carousel-item .container {
    height: 100%;
    display: flex;
    align-items: center;
    position: relative;
    z-index: 2;
}

/* Glass Content - Matching Screenshot Exactly */
.hero-content {
    background: rgba(234, 228, 228, 0.29);
    padding: 45px;
    border-radius: 25px;
    max-width: 600px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.4);
    text-align: left;
}

.hero-content h1 {
    font-size: 3.8rem;
    line-height: 1.1;
    margin-bottom: 15px;
    color: #222;
    font-weight: 800;
}

.hero-content h1 span {
    color: #007bff; /* Vibrant Blue from screenshot */
}

.hero-content p {
    color: #444;
    font-size: 1.25rem;
    line-height: 1.6;
    margin-bottom: 35px;
}

.hero-btn {
    background: #007bff;
    color: white;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
}

.hero-btn:hover {
    background: #0056b3;
    transform: translateY(-2px);
    color: white;
}

/* Compact Mobile View */
@media (max-width: 768px) {
    .carousel,
    .carousel-inner,
    .carousel-item,
    .slider-img {
        height: auto !important;
        aspect-ratio: 16 / 11; /* Keep it proportional */
    }
    
    .carousel-item .container {
        align-items: center; /* Center vertically on mobile */
        justify-content: center;
        padding-bottom: 0;
    }

    .hero-content {
        padding: 15px 20px; /* Small padding for small container */
        margin: 0 auto;
        max-width: 85%; /* Compact width */
        border-radius: 20px;
        text-align: center;
    }
    
    .hero-content h1 {
        font-size: 1.4rem !important;
        margin-bottom: 5px;
    }
    
    .hero-content p {
        font-size: 0.85rem !important;
        margin-bottom: 12px;
        line-height: 1.4;
    }

    .hero-btn {
        padding: 8px 20px;
        font-size: 0.85rem;
    }
}
</style>

<div id="heroSlider" class="carousel slide carousel-fade"
     data-bs-ride="carousel"
     data-bs-pause="false"
     data-bs-interval="4000">

    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="slider-img"
                 style="background-image: url('<?php echo BASE_URL; ?>assets/images/unnameddd.webp');">
                <div class="container">
                    <div class="hero-content">
                        <h1>Trusted <span>Healthcare</span></h1>
                        <p>Providing quality services with modern infrastructure for a healthier tomorrow.</p>
                        <a href="<?php echo BASE_URL; ?>modules/appointment/book.php" class="hero-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="slider-img"
                 style="background-image: url('<?php echo BASE_URL; ?>assets/images/Sector45_7-e1700821986247.jpg');">
                <div class="container">
                    <div class="hero-content">
                        <h1>Expert <span>Specialists</span></h1>
                        <p>Our team of highly qualified doctors is available 24/7 to provide personalized care.</p>
                        <a href="<?php echo BASE_URL; ?>pages/services.php" class="hero-btn">View Services</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="slider-img"
                 style="background-image: url('<?php echo BASE_URL; ?>assets/images/cf72b0aa-e0c0-4037-a45b-a416aada1e2b.png');">
                <div class="container">
                    <div class="hero-content">
                        <h1>Modern <span>Facilities</span></h1>
                        <p>Equipped with state-of-the-art medical technology to ensure accurate diagnostics.</p>
                        <a href="<?php echo BASE_URL; ?>pages/about.php" class="hero-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- JS Initialization -->
<script>
window.addEventListener('load', function () {
    let slider = document.querySelector('#heroSlider');
    if (slider) {
        new bootstrap.Carousel(slider, {
            interval: 4000,
            ride: 'carousel'
        });
    }
});
</script>
