<style>
    /* Page Transition Animation */
    .page-transition {
        animation: pageLoad 0.6s ease-out;
    }

    @keyframes pageLoad {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Video Modal Styles */
    .video-modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        z-index: 9999;
        animation: fadeIn 0.3s ease;
    }

    .video-modal-overlay.active {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .video-modal-content {
        position: relative;
        width: 90%;
        max-width: 900px;
        background: #000;
        border-radius: 20px;
        overflow: hidden;
        animation: slideUp 0.4s ease;
    }

    @keyframes slideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .video-modal-content iframe {
        display: block;
        width: 100%;
        aspect-ratio: 16/9;
        border: none;
    }

    .video-modal-close {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
        transition: all 0.3s ease;
    }

    .video-modal-close:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: scale(1.1);
    }

    /* Video Testimonial Cards */
    .video-testimonial-card {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        height: 100%;
        min-height: 300px;
        background: #000;
    }

    .video-testimonial-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 50px rgba(43, 179, 163, 0.2);
    }

    .video-testimonial-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .video-testimonial-card:hover .video-testimonial-image {
        transform: scale(1.05);
    }

    .video-play-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .video-testimonial-card:hover .video-play-overlay {
        opacity: 1;
    }

    .video-play-button {
        width: 80px;
        height: 80px;
        background: #2bb3a3;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 32px;
        transition: all 0.3s ease;
    }

    .video-testimonial-card:hover .video-play-button {
        background: #1f8b7a;
        transform: scale(1.1);
    }

    .video-testimonial-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
        padding: 30px 20px 20px;
        color: white;
    }

    .video-testimonial-name {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .video-testimonial-desc {
        font-size: 13px;
        color: #bbb;
        line-height: 1.4;
    }

    /* Animated Section Headers */
    .section-header-animated {
        position: relative;
        text-align: center;
        margin-bottom: 60px;
    }

    .section-header-animated h2 {
        font-size: 48px;
        font-weight: 800;
        color: #222;
        margin-bottom: 10px;
        letter-spacing: -0.5px;
        position: relative;
        display: inline-block;
    }

    .section-header-animated h2 span {
        color: #2bb3a3;
    }

    .section-header-animated::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #2bb3a3 0%, #1f8b7a 100%);
        margin: 15px auto 0;
        border-radius: 2px;
    }

    .section-header-animated p {
        font-size: 18px;
        color: #666;
        margin-top: 15px;
    }

    /* Page Link Cards */
    .page-link-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        text-decoration: none;
        color: inherit;
        display: block;
        height: 100%;
    }

    .page-link-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 50px rgba(43, 179, 163, 0.15);
        color: inherit;
    }

    .page-link-card i {
        font-size: 40px;
        color: #2bb3a3;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
    }

    .page-link-card:hover i {
        transform: scale(1.15);
    }

    .page-link-card h4 {
        color: #222;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .page-link-card p {
        color: #666;
        font-size: 14px;
        margin-bottom: 0;
    }

    /* Smooth Scroll Behavior */
    html {
        scroll-behavior: smooth;
    }

    /* Section Reveal Animation */
    .section-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .section-reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .video-modal-content {
            width: 95%;
            border-radius: 15px;
        }

        .section-header-animated h2 {
            font-size: 32px;
        }

        .video-play-button {
            width: 60px;
            height: 60px;
            font-size: 24px;
        }
    }
</style>

<!-- Video Testimonials Modal -->
<div class="video-modal-overlay" id="videoModal">
    <div class="video-modal-content">
        <button class="video-modal-close" onclick="closeVideoModal()">
            <i class="fas fa-times"></i>
        </button>
        <iframe 
            id="videoFrame" 
            src="" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
        </iframe>
    </div>
</div>

<script>
    // Video Modal Functions
    function openVideoModal(videoUrl) {
        const modal = document.getElementById('videoModal');
        const frame = document.getElementById('videoFrame');
        if (modal && frame) {
            frame.src = videoUrl;
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeVideoModal() {
        const modal = document.getElementById('videoModal');
        const frame = document.getElementById('videoFrame');
        if (modal && frame) {
            modal.classList.remove('active');
            frame.src = '';
            document.body.style.overflow = 'auto';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const videoModal = document.getElementById('videoModal');
        if (videoModal) {
            // Close video on overlay click
            videoModal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeVideoModal();
                }
            });
        }

        // Close video on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeVideoModal();
            }
        });
    });


    // Page Load Animation
    window.addEventListener('load', function() {
        document.body.classList.add('page-transition');
        
        // Animate sections on scroll
        const revealElements = document.querySelectorAll('.section-reveal');
        const revealOnScroll = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(el => revealOnScroll.observe(el));
    });
</script>
