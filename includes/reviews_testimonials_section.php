
<!-- Slick Carousel Assets -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    :root { --p: #7b52ab; --t: #2bb3a3; --y: #f1c40f; --dark: #1a1a1a; }

    .reviews-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e8ecf1 100%);
        padding: 20px 0;
        position: relative;
        overflow: hidden;
    }

    .reviews-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }

    .reviews-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .reviews-header h2 {
        font-size: 48px;
        font-weight: 800;
        color: #222;
        margin-bottom: 15px;
        letter-spacing: -0.5px;
    }

    .reviews-header h2 span {
        color: var(--t);
    }

    .reviews-header p {
        font-size: 18px;
        color: #666;
        max-width: 600px;
        margin: 0 auto;
    }

    /* --- PREMIUM PATIENT FEEDBACK SLIDER --- */
    .patient-feedback-slider-container { position: relative; padding: 0 40px; margin-top: 20px; }
    
    .video-card-inner-pro { 
        position: relative; border-radius: 25px; overflow: hidden; 
        box-shadow: 0 15px 35px rgba(0,0,0,0.1); cursor: pointer; 
        transition: 0.4s; background: #000; height: 450px; 
        margin: 15px 0;
    }
    
    .video-card-inner-pro video { width: 100%; height: 100%; object-fit: cover; opacity: 0.7; transition: 0.5s; }
    .video-card-inner-pro:hover video { opacity: 1; transform: scale(1.05); }
    
    .play-btn-circle-pro { 
        position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); 
        width: 70px; height: 70px; background: var(--p); border-radius: 50%; 
        display: flex; align-items: center; justify-content: center; color: #fff; 
        font-size: 25px; z-index: 2; transition: 0.4s; pointer-events: none;
    }
    
    .video-card-inner-pro:hover .play-btn-circle-pro { transform: translate(-50%, -50%) scale(1.2); background: var(--t); }

    .slider-nav-btn { 
        position: absolute; top: 50%; transform: translateY(-50%); 
        width: 55px; height: 55px; background: #fff; border-radius: 50%; 
        display: flex; align-items: center; justify-content: center; 
        box-shadow: 0 10px 25px rgba(0,0,0,0.1); cursor: pointer; 
        z-index: 10; color: var(--p); transition: 0.3s;
        border: none;
    }
    .slider-nav-btn:hover { background: var(--p); color: #fff; transform: translateY(-50%) scale(1.1); }

    .video-info-overlay-pro {
        position: absolute; bottom: 0; left: 0; width: 100%;
        padding: 40px 25px; background: linear-gradient(transparent, rgba(0,0,0,0.9));
        color: #fff; z-index: 3; text-align: left;
    }
    .video-info-overlay-pro h4 { font-weight: 700; margin-bottom: 8px; font-size: 1.25rem; color: #fff; }
    .video-info-overlay-pro p { font-size: 0.9rem; opacity: 0.9; margin: 0; color: #eee; }
    
    .video-rating-pro { margin-top: 10px; color: #ffc107; font-size: 14px; }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .reviews-header h2 { font-size: 32px; }
        .video-card-inner-pro { height: 400px; }
        .patient-feedback-slider-container { padding: 0 10px; }
        .slider-nav-btn { width: 45px; height: 45px; font-size: 18px; }
    }
</style>

<section class="reviews-section" id="reviews-section">
    <div class="reviews-container">
        <!-- Header -->
        <div class="reviews-header" data-aos="fade-up">
            <h2>Patient's <span style="color: var(--p);">Feedback</span></h2>
            <p>Real stories of healing and hope from our patients at CanWinn Foundation</p>
        </div>

        <!-- Video Testimonials Carousel -->
        <div class="patient-feedback-slider-container" data-aos="fade-up">
            <button class="slider-nav-btn" id="prev-patient" style="left:-20px;"><i class="fas fa-chevron-left"></i></button>
            <button class="slider-nav-btn" id="next-patient" style="right:-20px;"><i class="fas fa-chevron-right"></i></button>
            
            <div class="patient-feedback-slider">
                <?php
                $patient_videos = [
                    ['url' => 'https://canwinn.org/wp-content/uploads/2025/05/01.mp4', 'title' => 'Patient Recovery 01', 'desc' => 'Smooth treatment and professional care.'],
                    ['url' => 'https://canwinn.org/wp-content/uploads/2025/05/02.mp4', 'title' => 'Patient Recovery 02', 'desc' => 'Excellent healthcare services at Arogya Dham.'],
                    ['url' => 'https://canwinn.org/wp-content/uploads/2025/05/03.mp4', 'title' => 'Patient Recovery 03', 'desc' => 'Compassionate medical care for my family.'],
                    ['url' => 'https://canwinn.org/wp-content/uploads/2025/05/04.mp4', 'title' => 'Patient Recovery 04', 'desc' => 'A life-changing medical journey with CanWinn.'],
                    ['url' => 'https://canwinn.org/wp-content/uploads/2025/05/05.mp4', 'title' => 'Patient Recovery 05', 'desc' => 'Trusted healthcare that feels like home.'],
                    ['url' => 'https://canwinn.org/wp-content/uploads/2025/05/06.mp4', 'title' => 'Patient Recovery 06', 'desc' => 'Best in class facilities and dedicated staff.'],
                    ['url' => 'https://canwinn.org/wp-content/uploads/2025/05/07.mp4', 'title' => 'Patient Recovery 07', 'desc' => 'Highly recommended for specialized treatment.'],
                ];

                foreach ($patient_videos as $video):
                ?>
                <div class="px-3" onclick="openPatientVideoModal('<?php echo $video['url']; ?>')">
                    <div class="video-card-inner-pro">
                        <video muted loop playsinline>
                            <source src="<?php echo $video['url']; ?>" type="video/mp4">
                        </video>
                        <div class="play-btn-circle-pro"><i class="fas fa-play"></i></div>
                        <div class="video-info-overlay-pro">
                            <h4><?php echo $video['title']; ?></h4>
                            <p><?php echo $video['desc']; ?></p>
                            <div class="video-rating-pro">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Patient Video Modal -->
<div class="modal fade" id="patientVideoModal" tabindex="-1" aria-hidden="true" style="background: rgba(0,0,0,0.9); z-index: 10000;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 bg-transparent">
            <div class="modal-body p-0 position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close" style="filter: drop-shadow(0 2px 5px rgba(0,0,0,0.5));"></button>
                <div class="ratio ratio-16x9 shadow-lg rounded-4 overflow-hidden bg-black">
                    <video id="patientVideoPlayer" controls playsinline style="background: #000;"></video>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        // Initialize Slick Slider
        $('.patient-feedback-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            infinite: true,
            arrows: true,
            prevArrow: $('#prev-patient'),
            nextArrow: $('#next-patient'),
            responsive: [
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        // Hover to Play/Pause logic
        $('.video-card-inner-pro').on('mouseenter', function() {
            var v = $(this).find('video')[0];
            if(v) v.play();
        }).on('mouseleave', function() {
            var v = $(this).find('video')[0];
            if(v) {
                v.pause();
                v.currentTime = 0;
            }
        });

        // Bootstrap Modal Cleanup
        var patientModalEl = document.getElementById('patientVideoModal');
        if(patientModalEl) {
            patientModalEl.addEventListener('hidden.bs.modal', function () {
                var player = document.getElementById('patientVideoPlayer');
                player.pause();
                player.src = "";
                player.load();
            });
        }
    });

    function openPatientVideoModal(url) { 
        var player = document.getElementById('patientVideoPlayer');
        var modalElement = document.getElementById('patientVideoModal');
        var myModal = new bootstrap.Modal(modalElement);
        
        player.src = url;
        player.load();
        myModal.show();

        modalElement.addEventListener('shown.bs.modal', function () {
            player.play().catch(function(e) { console.log("Auto-play prevented", e); });
        }, { once: true });
    }
</script>
