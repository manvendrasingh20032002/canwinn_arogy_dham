<style>
    /* --- Partners Section Styling --- */
    .partners-wrapper {
        background-color: #222; /* Dark background as per image */
        padding: 80px 0;
        color: #ffffff;
        font-family: 'Segoe UI', Roboto, sans-serif;
        overflow: hidden;
        position: relative;
    }

    .partners-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        gap: 40px;
        padding: 0 20px;
    }

    /* Left Side Content */
    .partners-info {
        flex: 0 0 300px;
        z-index: 2;
    }

    .partners-info h2 {
        font-size: 35px;
        margin: 0 0 15px 0;
        font-weight: 700;
    }

    .partners-info h2 span {
        color: #2bb3a3; /* Teal Accent */
    }

    .partners-info p {
        font-size: 16px;
        color: #bbb;
        line-height: 1.6;
    }

    /* --- Slider Wrapper --- */
    .slider-viewport {
        flex: 1;
        overflow: hidden;
        position: relative;
        padding: 20px 0;
    }

    .slider-track {
        display: flex;
        gap: 20px;
        /* Animation: Constant scrolling */
        animation: scroll 20s linear infinite;
        width: calc(250px * 8); /* Adjust based on logo count */
    }

    /* Pause animation on hover */
    .slider-track:hover {
        animation-play-state: paused;
    }

    .logo-card {
        flex: 0 0 200px;
        background: #ffffff;
        height: 110px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        transition: transform 0.3s ease;
    }

    .logo-card:hover {
        transform: translateY(-10px) scale(1.05);
    }

    .logo-card img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        filter: grayscale(20%);
        transition: 0.3s;
    }

    .logo-card:hover img {
        filter: grayscale(0%);
    }

    /* Animation Keyframes */
    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-220px * 4)); } /* Logo width + gap * number of logos */
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .partners-container {
            flex-direction: column;
            text-align: center;
        }
        .partners-info {
            flex: none;
            max-width: 100%;
        }
        .slider-track {
            animation-duration: 15s;
        }
    }
</style>

<section class="partners-wrapper">
    <div class="partners-container">
        
        <div class="partners-info">
            <h2>Our <span>Partners</span></h2>
            <p>Meet the supporters that helped us on every path of our journey.</p>
        </div>

        <div class="slider-viewport">
            <div class="slider-track">
                <div class="logo-card"><img src="<?php echo BASE_URL; ?>assets/images/Healthians.jpg" alt="Partner"></div>
                <div class="logo-card"><img src="<?php echo BASE_URL; ?>assets/images/jain-Diagnostic.jpg" alt="Partner"></div>
                <div class="logo-card"><img src="<?php echo BASE_URL; ?>assets/images/Raghav-pathlab.jpg" alt="Partner"></div>
                <div class="logo-card"><img src="<?php echo BASE_URL; ?>assets/images/Prime-Lab.jpg" alt="Partner"></div>
                
                <div class="logo-card"><img src="<?php echo BASE_URL; ?>assets/images/Medanta-.jpg" alt="Partner"></div>
                <div class="logo-card"><img src="<?php echo BASE_URL; ?>assets/images/Rubiklab- (1).jpg" alt="Partner"></div>
                <div class="logo-card"><img src="<?php echo BASE_URL; ?>assets/images/Marengo-Asia.jpg" alt="Partner"></div>
                <div class="logo-card"><img src="<?php echo BASE_URL; ?>assets/images/Forties.jpg" alt="Partner"></div>
            </div>
        </div>

    </div>
</section>