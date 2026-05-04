<footer class="main-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 footer-column">
                <h4>CanWinn Foundation</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo BASE_URL; ?>pages/about.php">About</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/services.php">Services</a></li>
                    <li><a href="<?php echo BASE_URL; ?>modules/appointment/book.php">Book Doctor</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/career.php">Career</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/reviews.php">Reviews</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-column">
                <h4>CanWinn Polyclinics</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo BASE_URL; ?>modules/polyclinic/geeta_bhawan.php">Geeta Bhawan Polyclinic</a></li>
                    <li><a href="<?php echo BASE_URL; ?>modules/polyclinic/rajendra_park.php">Rajendra Park Polyclinic</a></li>
                    <li><a href="<?php echo BASE_URL; ?>modules/polyclinic/ashok_vihar.php">Ashok Vihar Polyclinic</a></li>
                    <li><a href="<?php echo BASE_URL; ?>modules/polyclinic/sector45.php">Sector 45 Polyclinic</a></li>
                    <li><a href="<?php echo BASE_URL; ?>modules/polyclinic/marla_polyclinic.php">4/8 Marla Polyclinic</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-column">
                <h4>Others Links</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo BASE_URL; ?>modules/others/mahila_kaushal.php">CanWinn Mahila Kaushal Vikas</a></li>
                    <li><a href="<?php echo BASE_URL; ?>modules/others/rojgar_sewa.php">CanWinn Rozgaar Sewa</a></li>
                    <li><a href="<?php echo BASE_URL; ?>modules/others/aarogya_rath.php">Aarogya Rath</a></li>
                    <li><a href="<?php echo BASE_URL; ?>modules/others/emergency_ambulance.php">Emergency & Ambulance</a></li>
                    <li><a href="<?php echo BASE_URL; ?>admin/index.php" style="color: #ffc107; font-weight: bold;"><i class="fas fa-user-shield me-2"></i>Admin Panel</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-column">
                <div class="footer-badges mb-4">
                    <img src="<?php echo BASE_URL; ?>assets/images/Canwinn_logo.svg" alt="NABH Accredited">
                    <img src="<?php echo BASE_URL; ?>assets/images/brand-footer-logo.png" alt="JCI Quality">
                </div>
                
                <div class="contact-info text-md-start">
                    <p><strong>Contact Us:</strong> <br> <i class="fas fa-phone-volume me-2"></i> 9654-000-098</p>
                    <p><strong>Email:</strong> <br> <i class="fas fa-envelope me-2"></i> info@canwinn.org</p>
                </div>

                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="copyright-bar text-center text-md-start d-md-flex justify-content-between">
            <p>&copy; 2026 Canwinn Healthcare | <a href="#">Privacy policy</a> | <a href="#">Terms and Conditions</a></p>
            <p><i class="fas fa-globe"></i> ENGLISH</p>
        </div>
    </div>
</footer>



<!---------------- Dr. Details Scrolling-------- -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".myDrSwiper", {
        // Desktop settings (Main Logic)
        slidesPerView: 3,        // Screen par 3 card dikhayega
        spaceBetween: 30,       // Cards ke beech ka gap
        loop: true,             // Infinite slide ke liye
        
        // Next/Prev Buttons
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        
        // Autoplay (Optional: Agar apne aap slide karwana ho)
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        // Mobile/Tablet ke liye adjustment
        breakpoints: {
            0: { slidesPerView: 1 },    // Mobile par sirf 1 card
            768: { slidesPerView: 2 },  // Tablet par 2 cards
            1024: { slidesPerView: 3 }  // Desktop par 3 cards fix
        }
    });
</script>


<!-------------- Gallery ----------->
<script>
    var gallerySwiper = new Swiper(".gallerySwiper", {
        slidesPerView: 2,
        spaceBetween: 10,
        loop: true,
        speed: 5000, // Scrolling ki raftar (jitna zyada, utna slow aur smooth)
        allowTouchMove: false, // User touch se scroll na bigade
        autoplay: {
            delay: 0, // Bina ruke chalne ke liye 0 delay
            disableOnInteraction: false,
        },
        breakpoints: {
            640: { slidesPerView: 3 },
            1024: { slidesPerView: 5 } // Desktop par 5 images ek sath
        }
    });
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include_once(__DIR__ . '/page_animations.php'); ?>
</body>

</html>