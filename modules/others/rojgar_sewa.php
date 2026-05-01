<?php 
// 1. Header aur Config
include_once('../../includes/header.php'); 
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<style>
    :root { --p: #7b52ab; --t: #2bb3a3; --y: #f1c40f; --dark: #1a1a1a; }
    
    body { font-family: 'Montserrat', sans-serif; background-color: #f8fbfb; overflow-x: hidden; margin: 0; padding: 0; }

    /* --- 1. HERO SECTION --- */
    .hero-pro {
        position: relative;
        background: url('<?= BASE_URL ?>assets/images/IMG-20250318-WA0005-1562x588.jpg') no-repeat center center; 
        background-size: cover; height: 70vh; min-height: 450px; border-radius: 0 0 60px 60px; z-index: 1;
    }

    /* --- COMMON STYLES --- */
    .highlight-yellow { color: #23dda8; font-weight: 800; }
    .dreams-main-img { width: 100%; max-width: 500px; border-radius: 30px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); border: 8px solid white; }
    .info-block-card { background: white; border-radius: 30px; padding: 50px; height: 100%; box-shadow: 0 15px 45px rgba(0,0,0,0.05); position: relative; transition: 0.3s; }
    .info-block-card:hover { transform: translateY(-5px); }

    /* --- PREMIUM COURSE CARDS (PRO DESIGN) --- */
    .course-section { padding: 30px 0; background: #fff; }
    .section-title-wrapper { text-align: center; margin-bottom: 60px; }
    .section-title-wrapper h2 { font-size: 2.8rem; font-weight: 800; }
    .section-title-wrapper span { color: var(--p); }

    .course-card-pro {
        background: #fff; border-radius: 25px; padding: 40px 30px; height: 100%;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #f0f0f0;
        transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative; overflow: hidden;
    }
    .course-card-pro:hover { transform: translateY(-15px); border-color: var(--t); box-shadow: 0 20px 40px rgba(43, 179, 163, 0.1); }
    
    .course-card-pro::before {
        content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 5px;
        background: linear-gradient(to right, var(--p), var(--t));
    }

    .icon-box {
        width: 70px; height: 70px; background: rgba(123, 82, 171, 0.1);
        border-radius: 20px; display: flex; align-items: center; justify-content: center;
        font-size: 30px; color: var(--p); margin-bottom: 25px;
    }

    .course-card-pro h4 { font-weight: 800; color: #333; margin-bottom: 20px; min-height: 50px; }
    .course-card-pro ul { padding-left: 0; list-style: none; margin-bottom: 30px; }
    .course-card-pro ul li { margin-bottom: 12px; color: #666; display: flex; align-items: center; font-size: 0.95rem; }
    .course-card-pro ul li i { color: var(--t); margin-right: 10px; font-size: 14px; }

    .price-tag-pro {
        background: #f8f9fa; padding: 15px 20px; border-radius: 15px;
        border-left: 4px solid var(--y); display: flex; align-items: center; gap: 15px;
    }
    .price-tag-pro i { font-size: 24px; color: var(--p); }
    .price-tag-pro span { font-weight: 700; color: #444; font-size: 0.9rem; line-height: 1.4; }

    /* --- ENROLL SECTION --- */
    .form-wrapper { padding: 40px; border-radius: 25px; box-shadow: 0 20px 50px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; background: #fff; }
    .enroll-input { border: none; border-bottom: 2px solid #eee; width: 100%; padding: 12px 5px; margin-bottom: 25px; outline: none; transition: 0.3s; }
    .enroll-input:focus { border-color: var(--t); }
    .enroll-btn { background: var(--y); color: #333; font-weight: 800; padding: 15px; width: 100%; border-radius: 12px; border: none; cursor: pointer; transition: 0.3s; }
    .enroll-btn:hover { background: #e1b700; transform: scale(1.02); }

    /* --- FEEDBACK NEW STYLES (MP4 SUPPORT) --- */
    .feedback-section { padding: 80px 0; background: #fff; position: relative; }
    .feedback-slider-container { position: relative; padding: 0 50px; }
    .video-card-inner { 
        position: relative; border-radius: 25px; overflow: hidden; 
        box-shadow: 0 15px 35px rgba(0,0,0,0.1); cursor: pointer; 
        transition: 0.4s; background: #000; height: 400px; 
    }
    .video-card-inner video { width: 100%; height: 100%; object-fit: cover; opacity: 0.6; transition: 0.5s; }
    .video-card-inner:hover video { opacity: 1; transform: scale(1.05); }
    .video-card-inner:hover .play-btn-circle { transform: translate(-50%, -50%) scale(1.2); background: var(--t); }

    .play-btn-circle { 
        position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); 
        width: 70px; height: 70px; background: var(--p); border-radius: 50%; 
        display: flex; align-items: center; justify-content: center; color: #fff; 
        font-size: 25px; z-index: 2; transition: 0.4s; pointer-events: none;
    }
    .nav-btn { position: absolute; top: 50%; transform: translateY(-50%); width: 50px; height: 50px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(0,0,0,0.1); cursor: pointer; z-index: 10; color: var(--p); }
    #videoModal { display: none; position: fixed; z-index: 9999; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); align-items: center; justify-content: center; }
    #videoModal video { background: #000; box-shadow: 0 0 50px rgba(0,0,0,0.5); }
</style>

<main>
    <div class="hero-pro"></div><br><br>

    <section class="dreams-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1>CANWINN SKILL DEVELOPMENT <span class="highlight-yellow">TRAINING CENTER..!</span></h1>
                    <p class="lead text-muted my-4">Taking proactive steps toward your career is a smart move. CanWinn रोजगार सेवा केन्द्र offers a 100% placement trial guarantee. Gain valuable experience and get job-ready in just one month. Make this the turning point in your life—join today!</p>
                </div>
                <div class="col-lg-5 text-center" data-aos="zoom-in">
                    <img src="<?= BASE_URL ?>assets/images/download (2).jpg" class="dreams-main-img">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="info-block-card" style="border-left: 6px solid var(--p);">
                        <i class="fas fa-eye"></i>
                        <h3 class="fw-bold mb-2">Vision</h3>
                        <p class="text-muted">To empower young minds in India with the necessary skills and opportunities to secure meaningful employment and build fulfilling careers.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-block-card" style="border-left: 6px solid var(--t);">
                        <i class="fas fa-bullseye"></i>
                        <h3 class="fw-bold mb-2">Mission</h3>
                        <p class="text-muted">To bridge the gap between youth and job opportunities by providing accessible skill development and placement services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-section">
        <div class="container">
            <div class="section-title-wrapper" data-aos="fade-up">
                <h2>Join our Affordable & <span>Approachable Courses</span></h2>
                <p class="text-muted">Expert-led training programs designed for modern career needs.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="course-card-pro">
                        <div class="icon-box"><i class="fas fa-bullhorn"></i></div>
                        <h4>Digital Marketing (CDM)</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Website Design (WordPress)</li>
                            <li><i class="fas fa-check"></i> SEO & SMO</li>
                            <li><i class="fas fa-check"></i> Google Ads & Analytics</li>
                            <li><i class="fas fa-check"></i> Pay Per Click (PPC)</li>
                        </ul>
                        <div class="price-tag-pro">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Course Fee: ₹2000/mo <br>Duration: 6 Months</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="course-card-pro">
                        <div class="icon-box"><i class="fas fa-code"></i></div>
                        <h4>Software Development (CSD)</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Web Designing (HTML, CSS, JS)</li>
                            <li><i class="fas fa-check"></i> C & C++ Programming</li>
                            <li><i class="fas fa-check"></i> Data Structures</li>
                            <li><i class="fas fa-check"></i> Python Language</li>
                        </ul>
                        <div class="price-tag-pro">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Course Fee: ₹2000/mo <br>Duration: 6 Months</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="course-card-pro">
                        <div class="icon-box"><i class="fas fa-laptop"></i></div>
                        <h4>Skill Development (CSDT)</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Microsoft Excel & Outlook</li>
                            <li><i class="fas fa-check"></i> Powerpoint Presentation</li>
                            <li><i class="fas fa-check"></i> SEO Basics</li>
                            <li><i class="fas fa-check"></i> Social Media Marketing</li>
                        </ul>
                        <div class="price-tag-pro">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Course Fee: ₹350/mo <br>Duration: 1 Month</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="course-card-pro">
                        <div class="icon-box"><i class="fas fa-file-invoice-dollar"></i></div>
                        <h4>Finance & Accounts (CFA)</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> Advanced Excel & VBA</li>
                            <li><i class="fas fa-check"></i> Direct & Indirect Tax</li>
                            <li><i class="fas fa-check"></i> Tally Prime (Assignments)</li>
                            <li><i class="fas fa-check"></i> Portfolio Management</li>
                        </ul>
                        <div class="price-tag-pro">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Course Fee: ₹2000/mo <br>Duration: 6 Months</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="course-card-pro">
                        <div class="icon-box"><i class="fas fa-chart-line"></i></div>
                        <h4>Data Analytics (CDA)</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> MS SQL & Power BI</li>
                            <li><i class="fas fa-check"></i> Python (NumPy, Panda)</li>
                            <li><i class="fas fa-check"></i> ETL Techniques</li>
                            <li><i class="fas fa-check"></i> Data Visualization</li>
                        </ul>
                        <div class="price-tag-pro">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Course Fee: ₹2000/mo <br>Duration: 6 Months</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="course-card-pro">
                        <div class="icon-box"><i class="fas fa-user-graduate"></i></div>
                        <h4>Personality Dev (PDP)</h4>
                        <ul>
                            <li><i class="fas fa-check"></i> English Communication</li>
                            <li><i class="fas fa-check"></i> Phonetics & Accent Training</li>
                            <li><i class="fas fa-check"></i> Group Discussions & Roleplay</li>
                            <li><i class="fas fa-check"></i> Interview & Telephone Skills</li>
                        </ul>
                        <div class="price-tag-pro">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Course Fee: ₹2000/mo <br>Duration: 3 Months</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="<?= BASE_URL ?>assets/images/WhatsApp-Image-2024-03-21-at-14.07.15_be185ba2-1.jpg" style="width:100%; border-radius:30px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="form-wrapper">
                        <h3 class="fw-bold mb-4">Start Your Professional Journey</h3>
                        <form action="<?= BASE_URL ?>backend/enroll_submit.php" method="POST">
                            <input type="text" name="name" class="enroll-input" placeholder="Your Full Name*" required>
                            <input type="email" name="email" class="enroll-input" placeholder="Your Email*" required>
                            <input type="tel" name="phone" class="enroll-input" placeholder="Mobile Number*" required minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" pattern="[0-9]{10}">
                            <select name="course" class="enroll-input" required>
                                <option value="">Select Course*</option>
                                <option value="Digital Marketing (CDM)">Digital Marketing (CDM)</option>
                                <option value="Software Development (CSD)">Software Development (CSD)</option>
                                <option value="Finance & Accounts (CFA)">Finance & Accounts (CFA)</option>
                                <option value="Data Analytics (CDA)">Data Analytics (CDA)</option>
                            </select>
                            <button type="submit" class="enroll-btn mt-3">Apply Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback-section">
        <div class="container text-center">
            <h2 class="fw-bold mb-5" style="font-size: 2.8rem;">Student <span style="color: var(--p);">Feedback</span></h2>
            <div class="feedback-slider-container">
                <div class="nav-btn" id="prev-v" style="left:0;"><i class="fas fa-chevron-left"></i></div>
                <div class="nav-btn" id="next-v" style="right:0;"><i class="fas fa-chevron-right"></i></div>
                <div class="video-feedback-slider">
                    
                    <div class="px-2" onclick="openVideo('<?= BASE_URL ?>assets/videos/VID-20250520-WA0007.mp4')">
                        <div class="video-card-inner"><video muted><source src="<?= BASE_URL ?>assets/videos/VID-20250520-WA0007.mp4" type="video/mp4"></video><div class="play-btn-circle"><i class="fas fa-play"></i></div></div>
                    </div>

                    <div class="px-2" onclick="openVideo('<?= BASE_URL ?>assets/videos/VID-20250520-WA0006.mp4')">
                        <div class="video-card-inner"><video muted><source src="<?= BASE_URL ?>assets/videos/VID-20250520-WA0006.mp4" type="video/mp4"></video><div class="play-btn-circle"><i class="fas fa-play"></i></div></div>
                    </div>

                    <div class="px-2" onclick="openVideo('<?= BASE_URL ?>assets/videos/WhatsApp-Video-2025-05-20-at-17.53.59_911ba239.mp4')">
                        <div class="video-card-inner"><video muted><source src="<?= BASE_URL ?>assets/videos/WhatsApp-Video-2025-05-20-at-17.53.59_911ba239.mp4" type="video/mp4"></video><div class="play-btn-circle"><i class="fas fa-play"></i></div></div>
                    </div>

                    <div class="px-2" onclick="openVideo('<?= BASE_URL ?>assets/videos/WhatsApp-Video-2025-05-20-at-17.53.53_6f5010aa.mp4')">
                        <div class="video-card-inner"><video muted><source src="<?= BASE_URL ?>assets/videos/WhatsApp-Video-2025-05-20-at-17.53.53_6f5010aa.mp4" type="video/mp4"></video><div class="play-btn-circle"><i class="fas fa-play"></i></div></div>
                    </div>

                    <div class="px-2" onclick="openVideo('<?= BASE_URL ?>assets/videos/VID-20250520-WA0005.mp4')">
                        <div class="video-card-inner"><video muted><source src="<?= BASE_URL ?>assets/videos/VID-20250520-WA0005.mp4" type="video/mp4"></video><div class="play-btn-circle"><i class="fas fa-play"></i></div></div>
                    </div>

                    <div class="px-2" onclick="openVideo('<?= BASE_URL ?>assets/videos/VID-20250520-WA0004.mp4')">
                        <div class="video-card-inner"><video muted><source src="<?= BASE_URL ?>assets/videos/VID-20250520-WA0004.mp4" type="video/mp4"></video><div class="play-btn-circle"><i class="fas fa-play"></i></div></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<!-- Bootstrap Modal for Videos -->
<div class="modal fade" id="feedbackVideoModal" tabindex="-1" aria-hidden="true" style="background: rgba(0,0,0,0.85);">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 bg-transparent">
            <div class="modal-body p-0 position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close" style="filter: drop-shadow(0 2px 5px rgba(0,0,0,0.5));"></button>
                <div class="ratio ratio-16x9 shadow-lg rounded-4 overflow-hidden bg-black">
                    <video id="videoPlayer" controls playsinline style="background: #000;"></video>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    $(document).ready(function(){
        AOS.init({ duration: 1000, once: true });
        $('.video-feedback-slider').slick({
            slidesToShow: 3, slidesToScroll: 1, autoplay: true, arrows: true,
            prevArrow: $('#prev-v'), nextArrow: $('#next-v'),
            responsive: [{ breakpoint: 992, settings: { slidesToShow: 2 }}, { breakpoint: 768, settings: { slidesToShow: 1 }}]
        });

        // Hover par video chalu ho jaye (Muted)
        $('.video-card-inner').on('mouseenter', function() {
            var v = $(this).find('video')[0];
            if(v) v.play();
        }).on('mouseleave', function() {
            var v = $(this).find('video')[0];
            if(v) {
                v.pause();
                v.currentTime = 0; // Wapas start par
            }
        });

        // Modal band hone par video pause ho jaye
        var myModalEl = document.getElementById('feedbackVideoModal');
        myModalEl.addEventListener('hidden.bs.modal', function (event) {
            var player = document.getElementById('videoPlayer');
            player.pause();
            player.src = "";
            player.load();
        });
    });

    function openVideo(url) { 
        var player = document.getElementById('videoPlayer');
        var myModal = new bootstrap.Modal(document.getElementById('feedbackVideoModal'));
        
        player.src = url;
        player.load();
        
        myModal.show();

        // Modal load hone ke baad play karein
        document.getElementById('feedbackVideoModal').addEventListener('shown.bs.modal', function () {
            player.play().catch(function(e) {
                console.log("Auto-play blocked, wait for user click", e);
            });
        }, { once: true });
    }
</script>

<?php include_once('../../includes/footer.php'); ?>