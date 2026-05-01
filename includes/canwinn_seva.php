<!-- Seva Polyclinic -->
 <section class="opd-section py-2">
    <div class="container">
        <h2 class="text-center fw-bold mb-3">CanWinn Seva <span class="text-primary">Polyclinic</span></h2>
        
        <div class="row align-items-center">
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
                <div class="opd-img-wrapper">
                    <img src="<?php echo BASE_URL; ?>assets/images/OPD.png" alt="OPD Treatment" class="main-opd-img">
                    <span class="badge-float opd-price">₹100 OPD</span>
                    <span class="badge-float dept-dentist">Dentistry</span>
                    <span class="badge-float dept-physio">Physio</span>
                    <span class="badge-float dept-ecg">ECG</span>
                    <span class="badge-float dept-med">Medicines</span>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1">
                <div class="opd-list-card shadow-lg p-4 p-md-5">
                    <h3 class="fw-bold mb-4">Our OPD Departments</h3>
                    <ul class="list-unstyled opd-features">
                        <li><i class="fas fa-check-circle"></i> General OPD – ₹100</li>
                        <li><i class="fas fa-check-circle"></i> Dentistry</li>
                        <li><i class="fas fa-check-circle"></i> Physiotherapy</li>
                        <li><i class="fas fa-check-circle"></i> ECG & Diagnostics</li>
                        <li><i class="fas fa-check-circle"></i> Specialist Consultation</li>
                    </ul>
                    <a href="<?php echo BASE_URL; ?>modules/appointment/book.php" class="btn btn-primary-custom w-100 mt-4 py-3">Book Slot Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery  -->
<section class="gallery-section">
    <div class="container-fluid px-0"> <div class="swiper gallerySwiper">
            <div class="swiper-wrapper">
                <?php
                // Aapki images ke exact naam
                $gallery_images = [
                    'Sector45_7-e1700821986247.jpg', 
                    'unnameddd.webp',
                    'canwinn-polyclinic-delhi-clinics-kccem392be.webp',
                    'unnamed.jpg',
                    '45e810bb-9430-4dee-a4c9-c04e978a928c.png',
                     'canwinn  (1).jpg', 
                    'download.jpg',
                    'IMG_9968-2048x1365.jpg', 
                    'Ashok vihar collgae.-22-aspect-ratio-424-524.jpg', 
                    'DSC_1693.jpg'
                ];

                foreach ($gallery_images as $img) { ?>
                    <div class="swiper-slide">
                        <div class="gallery-card mx-2">
                            <img src="<?php echo BASE_URL; ?>assets/images/<?php echo $img; ?>" 
                                 alt="CanWinn Gallery" 
                                 onerror="this.src='https://via.placeholder.com/400x300?text=Image+Not+Found'">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>