<style>
/* Full Screen Hero Slider - Clean Version */
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
    position: relative;
}

/* Dark Overlay for better image depth */
.slider-img::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.1); 
    z-index: 1;
}

/* Compact Mobile View */
@media (max-width: 768px) {
    .carousel,
    .carousel-inner,
    .carousel-item,
    .slider-img {
        height: auto !important;
        aspect-ratio: 16 / 11; /* Optimized for mobile */
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
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="slider-img"
                 style="background-image: url('<?php echo BASE_URL; ?>assets/images/Sector45_7-e1700821986247.jpg');">
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="slider-img"
                 style="background-image: url('<?php echo BASE_URL; ?>assets/images/Gemini_Generated_Image_r4hlacr4hlacr4hl.png');">
            </div>
        </div>

         <!-- Slide 4 -->
        <div class="carousel-item">
            <div class="slider-img"
                 style="background-image: url('<?php echo BASE_URL; ?>assets/images/canwinn-polyclinic-delhi-clinics-kccem392be.webp');">
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
