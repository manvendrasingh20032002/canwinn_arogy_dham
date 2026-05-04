<!----------- Dr. Details section ----------------- -->
<section class="dr-slider-section py-2">
    <div class="container">
        <h2 class="text-center mb-2 fw-bold">Meet Our <span class="text-primary">Expert Doctors</span></h2>

        <div class="swiper myDrSwiper">
            <div class="swiper-wrapper">
                <?php
                // Doctors Data Array - Sirf File Name rakhein
                $doctors = [
                    ['name' => 'Dr. Shubhash', 'specialty' => 'Cardiologist', 'info' => '15+ years experience', 'img' => '1-150x150.jpg'],
                    ['name' => 'Dr. Sanjeev Chaudhari', 'specialty' => 'Neurologist', 'info' => 'Expert in brain system', 'img' => '2-150x150.jpg'],
                    ['name' => 'Dr. Hitesh Garg', 'specialty' => 'Orthopedic Surgeon', 'info' => 'Fractures Specialist', 'img' => '3-150x150.jpg'],
                    ['name' => 'Dr. Monika Sangwan', 'specialty' => 'Chief Manager Director & HOD', 'info' => 'Dentist', 'img' => 'Monika-Sangwan-.jpg'],
                    ['name' => 'Dr. Arun Saroha', 'specialty' => 'Dermatologist', 'info' => 'Skin Expert', 'img' => '4-150x150.jpg'],
                    ['name' => 'Dr. Atul Thakran', 'specialty' => 'Cardiologist', 'info' => 'Deputy CMO', 'img' => 'DR.-ATUL-THAKRAN.png'],
                    ['name' => 'Dr. Himanshi Yadav', 'specialty' => 'ENT Specialist', 'info' => 'Dental Surgery', 'img' => 'Dr.-Himanshi-Yadav.png'],
                    ['name' => 'Dr. T. K. Prasad', 'specialty' => 'Dentist', 'info' => 'ENT', 'img' => 'Dr.-T.-K.-Prasad.png'],
                ];

                foreach ($doctors as $dr) { ?>
                    <div class="swiper-slide">
                        <div class="card dr-card border-0 shadow-sm text-center p-4" data-aos="fade-up">
                            <div class="dr-img-container mb-3">
                                <img src="<?php echo BASE_URL; ?>assets/images/<?php echo $dr['img']; ?>" alt="Dr Photo">
                            </div>
                            <h5 class="fw-bold"><?php echo $dr['name']; ?></h5>
                            <p class="text-primary fw-semibold mb-2"><?php echo $dr['specialty']; ?></p>
                            <p class="text-muted small"><?php echo $dr['info']; ?></p>
                            <div class="stars mb-3 text-warning">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <a href="<?php echo BASE_URL; ?>modules/appointment/book.php" class="btn btn-primary rounded-pill px-4">Book Appointment</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>