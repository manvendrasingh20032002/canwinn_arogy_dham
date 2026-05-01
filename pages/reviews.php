<?php include_once('../includes/header.php'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    :root {
        --p: #7b52ab; --t: #2bb3a3; --glow: rgba(43, 179, 163, 0.2);
    }
    body { font-family: 'Poppins', sans-serif; background: #fcfdfe; }

    .review-wrapper { padding: 80px 0; overflow: hidden; }
    
    .sec-title h2 { font-weight: 800; color: #333; margin-bottom: 10px; }
    .sec-title p { color: var(--t); font-weight: 600; text-transform: uppercase; letter-spacing: 2px; }

    /* Swiper Container Padding */
    .swiper { width: 100%; padding: 60px 0 90px 0; }
    
    /* Card Styling */
    .review-pro-card {
        background: #fff;
        border-radius: 25px;
        padding: 45px 30px;
        text-align: center;
        border: 1px solid #f1f1f1;
        transition: 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        position: relative;
        height: 100%;
        margin: 10px;
    }

    .review-pro-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 50px var(--glow);
        border-color: var(--t);
    }

    /* Top Quote Icon */
    .review-pro-card::before {
        content: "\f10d"; font-family: "Font Awesome 6 Free"; font-weight: 900;
        position: absolute; top: 20px; left: 30px; font-size: 35px;
        color: var(--t); opacity: 0.1;
    }

    .user-avatar {
        width: 85px; height: 85px; border-radius: 50%;
        margin: 0 auto 20px; padding: 4px;
        border: 2px dashed var(--t); transition: 0.4s;
    }
    .review-pro-card:hover .user-avatar { border-style: solid; transform: rotate(360deg); }
    .user-avatar img { width: 100%; height: 100%; border-radius: 50%; object-fit: cover; }

    .stars-rating { color: #f1c40f; margin-bottom: 15px; font-size: 13px; }
    .review-content { font-style: italic; color: #555; line-height: 1.7; font-size: 0.95rem; }
    .user-info h6 { font-weight: 700; color: var(--p); margin-top: 15px; margin-bottom: 2px; }
    .user-info span { font-size: 12px; color: #aaa; font-weight: 500; }
    
    /* Pagination Style */
    .swiper-pagination-bullet-active { background: var(--p) !important; width: 35px !important; border-radius: 10px !important; }
</style>

<main class="review-wrapper">
    <div class="container">
        <div class="sec-title text-center" data-aos="fade-up">
            <p>Our Success Stories</p>
            <h2>Patient Testimonials</h2>
        </div>

        <div class="swiper myReviewSlider" data-aos="zoom-in">
            <div class="swiper-wrapper">
                
                <?php
                // Array for 10 unique reviews
                $reviews = [
                    ['name' => 'Rahul Sharma', 'img' => '1', 'txt' => 'Best clinic in Gurugram! The doctors are very professional and the fee is very affordable.'],
                    ['name' => 'Anjali Singh', 'img' => '2', 'txt' => 'Maine Seva Card banwaya aur mujhe medicines par 17% discount mila. Highly recommend!'],
                    ['name' => 'Vikram Gohil', 'img' => '3', 'txt' => 'The Physiotherapy department is amazing. My back pain is gone in just 4 sessions.'],
                    ['name' => 'Suman Devi', 'img' => '4', 'txt' => 'Labs are high-tech and reports are very fast. Cleaning and hygiene is very well maintained.'],
                    ['name' => 'Pankaj Yadav', 'img' => '5', 'txt' => '₹100 consultation fee is a blessing for poor people. CanWinn is doing great work.'],
                    ['name' => 'Sneha Kapoor', 'img' => '6', 'txt' => 'Very polite staff and minimal waiting time. The environment is very positive here.'],
                    ['name' => 'Mohit Verma', 'img' => '7', 'txt' => 'Best experience with Dental department. Very painless treatment at low cost.'],
                    ['name' => 'Kiran Mehra', 'img' => '8', 'txt' => 'Online card generation process is very smooth. I got my digital card in 2 minutes.'],
                    ['name' => 'Rajesh Kumar', 'img' => '9', 'txt' => 'General Physician is very experienced. They listen to your problems very carefully.'],
                    ['name' => 'Pooja Gupta', 'img' => '10', 'txt' => 'Excellent service and 24/7 support. Geeta Bhawan is the best place for family health.']
                ];

                foreach($reviews as $r): ?>
                <div class="swiper-slide">
                    <div class="review-pro-card">
                        <div class="user-avatar">
                            <img src="https://i.pravatar.cc/150?u=<?= $r['img'] ?>" alt="<?= $r['name'] ?>">
                        </div>
                        <div class="stars-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="review-content">"<?= $r['txt'] ?>"</p>
                        <div class="user-info">
                            <h6><?= $r['name'] ?></h6>
                            <span>Verified Patient</span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".myReviewSlider", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        centeredSlides: false,
        autoplay: {
            delay: 3000, // 3 seconds per slide
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // Desktop par 3 cards, Mobile par 1
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });
</script>

<?php include_once('../includes/footer.php'); ?>