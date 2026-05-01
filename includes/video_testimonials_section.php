<style>
    .video-testimonials-section {
        background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    .video-testimonials-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -10%;
        width: 600px;
        height: 600px;
        background: rgba(43, 179, 163, 0.08);
        border-radius: 50%;
        z-index: 1;
    }

    .video-testimonials-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }

    .video-testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 60px;
    }
</style>

<section class="video-testimonials-section" id="video-testimonials">
    <div class="video-testimonials-container">
        <!-- Header -->
        <div class="section-header-animated" data-aos="fade-up">
            <h2>Watch Patient <span>Success Stories</span></h2>
            <p>Real testimonials from patients who transformed their health at CanWinn</p>
        </div>

        <!-- Video Grid -->
        <div class="video-testimonials-grid">
            <!-- Video 1 -->
            <div class="video-testimonial-card" data-aos="fade-up" data-aos-delay="100" onclick="openVideoModal('https://www.youtube.com/embed/tgbNymZ7vqY')">
                <img src="https://img.youtube.com/vi/tgbNymZ7vqY/maxresdefault.jpg" alt="Patient Testimonial" class="video-testimonial-image" onerror="this.style.background='linear-gradient(135deg, #2bb3a3 0%, #1f8b7a 100%)'">
                <div class="video-play-overlay">
                    <div class="video-play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="video-testimonial-info">
                    <div class="video-testimonial-name">Cardiac Recovery Success</div>
                    <div class="video-testimonial-desc">Heart surgery patient shares remarkable recovery journey</div>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-testimonial-card" data-aos="fade-up" data-aos-delay="200" onclick="openVideoModal('https://www.youtube.com/embed/9bZkp7q19f0')">
                <img src="https://img.youtube.com/vi/9bZkp7q19f0/maxresdefault.jpg" alt="Patient Testimonial" class="video-testimonial-image" onerror="this.style.background='linear-gradient(135deg, #2bb3a3 0%, #1f8b7a 100%)'">
                <div class="video-play-overlay">
                    <div class="video-play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="video-testimonial-info">
                    <div class="video-testimonial-name">Orthopedic Miracle</div>
                    <div class="video-testimonial-desc">Athlete returns to sports after advanced knee surgery</div>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="video-testimonial-card" data-aos="fade-up" data-aos-delay="300" onclick="openVideoModal('https://www.youtube.com/embed/ZbzP0qpI5RU')">
                <img src="https://img.youtube.com/vi/ZbzP0qpI5RU/maxresdefault.jpg" alt="Patient Testimonial" class="video-testimonial-image" onerror="this.style.background='linear-gradient(135deg, #2bb3a3 0%, #1f8b7a 100%)'">
                <div class="video-play-overlay">
                    <div class="video-play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="video-testimonial-info">
                    <div class="video-testimonial-name">Maternal Excellence</div>
                    <div class="video-testimonial-desc">Mother shares beautiful journey of safe delivery and care</div>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="video-testimonial-card" data-aos="fade-up" data-aos-delay="400" onclick="openVideoModal('https://www.youtube.com/embed/dQw4w9WgXcQ')">
                <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" alt="Patient Testimonial" class="video-testimonial-image" onerror="this.style.background='linear-gradient(135deg, #2bb3a3 0%, #1f8b7a 100%)'">
                <div class="video-play-overlay">
                    <div class="video-play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="video-testimonial-info">
                    <div class="video-testimonial-name">Diabetes Management</div>
                    <div class="video-testimonial-desc">Patient testimonial on long-term disease management</div>
                </div>
            </div>

            <!-- Video 5 -->
            <div class="video-testimonial-card" data-aos="fade-up" data-aos-delay="500" onclick="openVideoModal('https://www.youtube.com/embed/rN4TuqBJpDQ')">
                <img src="https://img.youtube.com/vi/rN4TuqBJpDQ/maxresdefault.jpg" alt="Patient Testimonial" class="video-testimonial-image" onerror="this.style.background='linear-gradient(135deg, #2bb3a3 0%, #1f8b7a 100%)'">
                <div class="video-play-overlay">
                    <div class="video-play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="video-testimonial-info">
                    <div class="video-testimonial-name">Emergency Care Hero</div>
                    <div class="video-testimonial-desc">Emergency response team saves critical patient</div>
                </div>
            </div>

            <!-- Video 6 -->
            <div class="video-testimonial-card" data-aos="fade-up" data-aos-delay="600" onclick="openVideoModal('https://www.youtube.com/embed/6xm0aVXpWLo')">
                <img src="https://img.youtube.com/vi/6xm0aVXpWLo/maxresdefault.jpg" alt="Patient Testimonial" class="video-testimonial-image" onerror="this.style.background='linear-gradient(135deg, #2bb3a3 0%, #1f8b7a 100%)'">
                <div class="video-play-overlay">
                    <div class="video-play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="video-testimonial-info">
                    <div class="video-testimonial-name">Cancer Survivor</div>
                    <div class="video-testimonial-desc">Inspiring story of hope and recovery through expert care</div>
                </div>
            </div>
        </div>
    </div>
</section>
