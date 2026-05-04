

<style>
    .testimonials-form-section {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 10px 20px;
        position: relative;
        overflow: hidden;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    .testimonials-form-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 600px;
        height: 600px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        z-index: 1;
    }

    .testimonials-form-section::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -5%;
        width: 500px;
        height: 500px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        z-index: 1;
    }

    .testimonials-form-container {
        max-width: 1400px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        width: 100%;
    }

    .section-title-main {
        text-align: center;
        margin-bottom: 20px;
        color: white;
    }

    .section-title-main h2 {
        font-size: 48px;
        font-weight: 900;
        margin-bottom: 15px;
        color: white;
    }

    .section-title-main h2 span {
        color: #ffd700;
    }

    .section-title-main p {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.9);
    }

    .video-form-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }

    /* REVIEWS SIDE (LEFT) */
    .video-side {
        display: flex;
        flex-direction: column;
        gap: 20px;
        max-height: 700px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .video-side::-webkit-scrollbar {
        width: 6px;
    }

    .video-side::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
    }

    .video-side::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
    }

    .video-side::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.5);
    }

    .review-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .review-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    .review-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 12px;
    }

    .reviewer-info {
        flex: 1;
    }

    .reviewer-name {
        font-weight: 800;
        color: #1a1a1a;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .review-service {
        font-size: 12px;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .review-rating {
        display: flex;
        gap: 4px;
    }

    .review-rating .star {
        color: #ffc107;
        font-size: 14px;
    }

    .review-text {
        color: #333;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    .review-date {
        font-size: 12px;
        color: #999;
    }

    /* FORM SIDE */
    .form-side {
        background: white;
        border-radius: 25px;
        padding: 50px 40px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(10px);
    }

    .form-title {
        text-align: center;
        margin-bottom: 35px;
    }

    .form-title h3 {
        font-size: 32px;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 8px;
    }

    .form-title p {
        font-size: 15px;
        color: #666;
    }

    .form-rows {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .form-group {
        grid-column: span 1;
    }

    .form-group.full {
        grid-column: span 2;
    }

    .form-group label {
        display: block;
        font-weight: 700;
        margin-bottom: 8px;
        color: #222;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #e5e5e5;
        border-radius: 12px;
        font-size: 15px;
        font-family: inherit;
        transition: all 0.3s ease;
        background: #f9f9f9;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #667eea;
        background: white;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 120px;
        grid-column: span 2;
    }

    .rating-group {
        grid-column: span 2;
    }

    .rating-label {
        display: block;
        font-weight: 700;
        margin-bottom: 15px;
        color: #222;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .star-container {
        display: flex;
        gap: 12px;
        justify-content: center;
    }

    .star-btn {
        width: 55px;
        height: 55px;
        border: 2px solid #e5e5e5;
        background: #f9f9f9;
        border-radius: 12px;
        font-size: 28px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .star-btn:hover {
        border-color: #ffc107;
        background: #fff8e1;
        transform: scale(1.1);
    }

    .star-btn.active {
        background: linear-gradient(135deg, #ffc107 0%, #ffb300 100%);
        border-color: #ff9800;
        color: white;
        box-shadow: 0 8px 20px rgba(255, 193, 7, 0.4);
    }

    .submit-btn {
        grid-column: span 2;
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        color: white;
        font-weight: 800;
        border-radius: 12px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-top: 15px;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(102, 126, 234, 0.5);
    }

    .submit-btn:active {
        transform: translateY(-1px);
    }

    .success-message {
        text-align: center;
        padding: 40px 20px;
    }

    .success-icon {
        font-size: 70px;
        margin-bottom: 20px;
        animation: bounce 0.8s ease-out;
    }

    .success-message h4 {
        font-size: 26px;
        font-weight: 800;
        color: #1a1a1a;
        margin-bottom: 10px;
    }

    .success-message p {
        color: #666;
        font-size: 15px;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-25px); }
    }

    @media (max-width: 992px) {
        .video-form-wrapper {
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .section-title-main h2 {
            font-size: 36px;
        }

        .form-side {
            padding: 40px 30px;
        }

        .testimonials-form-section {
            min-height: auto;
            padding: 50px 20px;
        }

        .video-thumbnails-group {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .video-form-wrapper {
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-rows {
            grid-template-columns: 1fr;
        }

        .form-group.full,
        .form-group textarea,
        .rating-group,
        .submit-btn {
            grid-column: span 1;
        }

        .form-side {
            padding: 25px 15px;
        }

        .form-title h3 {
            font-size: 22px;
        }

        .star-container {
            flex-wrap: wrap;
        }

        .video-player-main {
            border-radius: 15px;
        }

        .testimonials-form-section {
            padding: 40px 10px;
        }
    }

    @media (max-width: 576px) {
        .video-form-wrapper {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .form-side {
            padding: 20px 15px;
        }

        .section-title-main h2 {
            font-size: 28px;
        }

        .video-thumbnails-group {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<section class="testimonials-form-section" id="feedback-section">
    <div class="testimonials-form-container">
        <!-- Section Header -->
        <div class="section-title-main" data-aos="fade-up">
            <h2>Patient <span>Reviews & Feedback</span></h2>
            <p>See what our patients say and share your experience with us</p>
        </div>

        <!-- Video & Form Grid -->
        <div class="video-form-wrapper">
            <!-- LEFT SIDE: REVIEWS -->
            <div class="video-side">
                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="reviewer-name">Raj Kumar</div>
                            <div class="review-service">Cardiac Care</div>
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                    <div class="review-text">"Best hospital experience! Doctors are very professional and caring. Recovery ke baad proper follow-up aur guidance mila. Highly recommend Canwinn!"</div>
                    <div class="review-date">2 weeks ago</div>
                </div>

                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="reviewer-name">Priya Singh</div>
                            <div class="review-service">Orthopedic Surgery</div>
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                    <div class="review-text">"Knee surgery hua aur ab bilkul normal zindagi jee rahi hoon. Staff bahut friendly the. Fastest recovery experience kabhi nahi tha!"</div>
                    <div class="review-date">1 month ago</div>
                </div>

                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="reviewer-name">Vikram Sharma</div>
                            <div class="review-service">General Checkup</div>
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                    <div class="review-text">"Equipment modern aur doctors ko sab kuch pata hai. No unnecessary tests, sirf jo zaroori the. Very satisfied with the service quality."</div>
                    <div class="review-date">3 weeks ago</div>
                </div>

                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="reviewer-name">Anjali Patel</div>
                            <div class="review-service">OBS & GYNAE</div>
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                    <div class="review-text">"Pregnancy ke time sab treatment bahut professional aur compassionate tha. Dr. team ne har doubt clear kiya. Perfect hospital experience!"</div>
                    <div class="review-date">5 days ago</div>
                </div>

                <div class="review-card">
                    <div class="review-header">
                        <div class="reviewer-info">
                            <div class="reviewer-name">Arjun Desai</div>
                            <div class="review-service">Dental Care</div>
                        </div>
                        <div class="review-rating">
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                    <div class="review-text">"Tooth problem ke liye gaya tha aur painless procedure se sab theek ho gaya. Staff bahut attention de rahe the. Value for money best!"</div>
                    <div class="review-date">1 week ago</div>
                </div>
            </div>

            <!-- RIGHT SIDE: FORM -->
            <div class="form-side">
                <div class="form-title">
                    <h3>Share Your Review</h3>
                    <p>Tell us about your experience at CanWinn</p>
                </div>

                <form id="reviewForm" action="<?php echo BASE_URL; ?>backend/feedback_submit.php" method="POST">
                    <div class="form-rows">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="name" placeholder="Your name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="your@email.com" required>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" name="phone" placeholder="Your phone">
                        </div>
                        <div class="form-group">
                            <label>Service Type</label>
                            <input type="text" name="service" placeholder="Service you used">
                        </div>

                        <div class="form-group full">
                            <label class="rating-label">Rate Your Experience</label>
                            <div class="star-container">
                                <button type="button" class="star-btn" data-rating="1" onclick="setRating(1, event)">★</button>
                                <button type="button" class="star-btn" data-rating="2" onclick="setRating(2, event)">★</button>
                                <button type="button" class="star-btn" data-rating="3" onclick="setRating(3, event)">★</button>
                                <button type="button" class="star-btn" data-rating="4" onclick="setRating(4, event)">★</button>
                                <button type="button" class="star-btn" data-rating="5" onclick="setRating(5, event)">★</button>
                            </div>
                            <input type="hidden" name="rating" id="ratingValue" value="">
                        </div>

                        <div class="form-group full">
                            <label>Your Review</label>
                            <textarea name="message" placeholder="Share your experience and feedback..." required></textarea>
                        </div>

                        <input type="hidden" name="submit_feedback" value="1">
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-heart me-2"></i>Submit Review
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Set rating
    function setRating(rating, event) {
        event.preventDefault();
        document.getElementById('ratingValue').value = rating;
        
        document.querySelectorAll('.star-btn').forEach((btn, index) => {
            if (index < rating) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    // Form submission
    document.getElementById('reviewForm').addEventListener('submit', function(e) {
        e.preventDefault();

        if (!document.getElementById('ratingValue').value) {
            alert('Please select a rating!');
            return;
        }

        const formData = new FormData(this);
        
        fetch('<?php echo BASE_URL; ?>backend/feedback_submit.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            const formSide = document.querySelector('.form-side');
            formSide.innerHTML = `
                <div class="success-message">
                    <div class="success-icon">✨</div>
                    <h4>Thank You!</h4>
                    <p>Your review has been submitted successfully. We appreciate your feedback!</p>
                </div>
            `;

            // No reload needed, just show success
            setTimeout(() => {
                // Optionally reset the form or just let the success message stay
            }, 3000);

        })
        .catch(error => {
            alert('Error submitting review. Please try again.');
        });
    });
</script>


