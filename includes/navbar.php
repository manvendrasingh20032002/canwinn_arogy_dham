<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?php echo BASE_URL; ?>">
            <img src="<?php echo BASE_URL; ?>assets/images/Canwinn_logo.svg" alt="CanWinn" height="38" class="me-2">
          
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item <?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>">Home</a>
                </li>
                <li class="nav-item <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>pages/about.php">About</a>
                </li>
                <li class="nav-item <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>pages/services.php">Services</a>
                </li>
                <li class="nav-item <?php echo ($currentPage == 'career.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>pages/career.php">Career</a>
                </li>
                <li class="nav-item <?php echo ($currentPage == 'reviews.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>pages/reviews.php">Reviews</a>
                </li>
                <li class="nav-item <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>pages/contact.php">Contact</a>
                </li>
                <li class="nav-item <?php echo ($currentPage == 'members.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>pages/members.php">Become a Member</a>
                </li>

                <li class="nav-item mt-3 mt-lg-0">
                    <a class="btn btn-success text-white rounded-pill px-4 me-2" href="<?php echo BASE_URL; ?>modules/appointment/book.php">
                        <i class="fas fa-calendar-plus me-1"></i>Book Doctor
                    </a>
                </li>
                
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item mt-3 mt-lg-0">
                        <a class="btn btn-outline-primary rounded-pill px-4 me-2" href="<?php echo BASE_URL; ?>pages/profile.php">
                            <i class="fas fa-user-circle me-1"></i> My Profile
                        </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item mt-3 mt-lg-0">
                        <a class="btn btn-outline-primary rounded-pill px-4 me-2" href="<?php echo BASE_URL; ?>pages/login.php">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                    </li>
                <?php endif; ?>

                <li class="nav-item mt-3 mt-lg-0">
                    <button class="btn btn-gradient text-white rounded-pill px-4" id="feedbackBtn" title="Share your feedback">
                        <i class="fas fa-heart me-1"></i>Feedback
                    </button>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Premium Feedback Slide Panel -->
<style>
    .feedback-slide-panel {
        position: fixed;
        right: -450px;
        top: 0;
        width: 450px;
        height: 100vh;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        box-shadow: -10px 0 40px rgba(0, 0, 0, 0.3);
        z-index: 1050;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        overflow-y: auto;
        padding: 40px 25px;
        color: white;
        visibility: hidden;
        opacity: 0;
    }

    .feedback-slide-panel.active {
        right: 0;
        visibility: visible;
        opacity: 1;
    }

    .feedback-close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
        font-size: 24px;
    }

    .feedback-close-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: rotate(90deg);
    }

    .feedback-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 10px;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .feedback-subtitle {
        font-size: 14px;
        opacity: 0.9;
        margin-bottom: 30px;
    }

    .feedback-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .feedback-form-group {
        display: flex;
        flex-direction: column;
    }

    .feedback-form-group label {
        font-weight: 600;
        margin-bottom: 10px;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        opacity: 0.95;
    }

    .feedback-form-group input,
    .feedback-form-group textarea,
    .feedback-form-group select {
        padding: 12px 16px;
        border: none;
        border-radius: 8px;
        font-size: 14px;
        background: rgba(255, 255, 255, 0.95);
        color: #333;
        transition: all 0.3s;
        font-family: inherit;
    }

    .feedback-form-group input:focus,
    .feedback-form-group textarea:focus,
    .feedback-form-group select:focus {
        outline: none;
        background: white;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.2);
        transform: translateY(-2px);
    }

    .feedback-form-group input::placeholder {
        color: #999;
    }

    .feedback-rating-stars {
        display: flex;
        gap: 10px;
        margin-bottom: 10px;
    }

    .star-btn {
        background: rgba(255, 255, 255, 0.3);
        border: none;
        color: white;
        font-size: 28px;
        cursor: pointer;
        transition: all 0.3s;
        padding: 8px 12px;
        border-radius: 8px;
    }

    .star-btn:hover,
    .star-btn.active {
        background: #ffc107;
        color: white;
        transform: scale(1.2);
    }

    .feedback-category {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        margin-bottom: 10px;
    }

    .category-btn {
        background: rgba(255, 255, 255, 0.2);
        border: 2px solid transparent;
        color: white;
        padding: 10px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s;
        font-size: 13px;
        font-weight: 500;
    }

    .category-btn:hover,
    .category-btn.active {
        background: rgba(255, 255, 255, 0.3);
        border-color: white;
    }

    .submit-btn {
        background: linear-gradient(135deg, #ffc107, #ff9800);
        border: none;
        color: white;
        padding: 14px 28px;
        border-radius: 25px;
        font-weight: 700;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 4px 15px rgba(255, 152, 0, 0.4);
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(255, 152, 0, 0.6);
    }

    .submit-btn:active {
        transform: translateY(-1px);
    }

    .feedback-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1040;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s;
    }

    .feedback-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .feedback-success {
        text-align: center;
        padding: 40px 20px;
        animation: slideUp 0.6s ease-out;
    }

    .feedback-success-icon {
        font-size: 60px;
        margin-bottom: 20px;
        animation: bounce 0.6s ease-out;
    }

    .feedback-success h3 {
        font-size: 22px;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .feedback-success p {
        font-size: 14px;
        opacity: 0.9;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }

    .btn-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
    }

    .btn-gradient:hover {
        background: linear-gradient(135deg, #5568d3 0%, #6a3d94 100%);
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        color: white !important;
    }

    @media (max-width: 768px) {
        .feedback-slide-panel {
            width: 100%;
            right: -100%;
        }
    }
</style>

<div class="feedback-overlay" id="feedbackOverlay"></div>

<div class="feedback-slide-panel" id="feedbackPanel">
    <button class="feedback-close-btn" id="feedbackCloseBtn">&times;</button>
    
    <h2 class="feedback-title">Share Your<br>Experience</h2>
    <p class="feedback-subtitle">Your feedback helps us improve every day</p>

    <form class="feedback-form" id="premiumFeedbackForm" action="<?php echo BASE_URL; ?>backend/feedback_submit.php" method="POST">
        <!-- Category Selection -->
        <div class="feedback-form-group">
            <label>What's your feedback about?</label>
            <div class="feedback-category">
                <button type="button" class="category-btn active" data-category="service">
                    <i class="fas fa-heartbeat me-1"></i>Service
                </button>
                <button type="button" class="category-btn" data-category="staff">
                    <i class="fas fa-users me-1"></i>Staff
                </button>
                <button type="button" class="category-btn" data-category="facility">
                    <i class="fas fa-hospital me-1"></i>Facility
                </button>
                <button type="button" class="category-btn" data-category="other">
                    <i class="fas fa-comment me-1"></i>Other
                </button>
            </div>
            <input type="hidden" name="category" id="feedbackCategory" value="service">
        </div>

        <!-- Star Rating -->
        <div class="feedback-form-group">
            <label>How would you rate your experience?</label>
            <div class="feedback-rating-stars">
                <button type="button" class="star-btn" data-rating="1">★</button>
                <button type="button" class="star-btn" data-rating="2">★</button>
                <button type="button" class="star-btn" data-rating="3">★</button>
                <button type="button" class="star-btn" data-rating="4">★</button>
                <button type="button" class="star-btn" data-rating="5">★</button>
            </div>
            <input type="hidden" name="rating" id="feedbackRating" value="">
        </div>

        <!-- User Info -->
        <div class="feedback-form-group">
            <label>Your Name</label>
            <input type="text" name="name" placeholder="Full name" required>
        </div>

        <div class="feedback-form-group">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="your@email.com" required>
        </div>

        <div class="feedback-form-group">
            <label>Phone (Optional)</label>
            <input type="tel" name="phone" placeholder="Your phone number">
        </div>

        <!-- Feedback Message -->
        <div class="feedback-form-group">
            <label>Tell us more</label>
            <textarea name="message" placeholder="Share your thoughts, suggestions, or concerns..." rows="4" required></textarea>
        </div>

        <input type="hidden" name="submit_feedback" value="1">
        <button type="submit" class="submit-btn">
            <i class="fas fa-send me-2"></i>Send Feedback
        </button>
    </form>
</div>

<script>
    // Feedback Panel Controls
    const feedbackBtn = document.getElementById('feedbackBtn');
    const feedbackPanel = document.getElementById('feedbackPanel');
    const feedbackOverlay = document.getElementById('feedbackOverlay');
    const feedbackCloseBtn = document.getElementById('feedbackCloseBtn');
    const premiumFeedbackForm = document.getElementById('premiumFeedbackForm');

    // Open feedback panel
    feedbackBtn.addEventListener('click', () => {
        feedbackPanel.classList.add('active');
        feedbackOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    // Close feedback panel
    function closeFeedbackPanel() {
        feedbackPanel.classList.remove('active');
        feedbackOverlay.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    feedbackCloseBtn.addEventListener('click', closeFeedbackPanel);
    feedbackOverlay.addEventListener('click', closeFeedbackPanel);

    // Category Selection
    document.querySelectorAll('.category-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById('feedbackCategory').value = btn.dataset.category;
        });
    });

    // Star Rating
    document.querySelectorAll('.star-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const rating = btn.dataset.rating;
            document.getElementById('feedbackRating').value = rating;
            
            document.querySelectorAll('.star-btn').forEach((b, index) => {
                if (index < rating) {
                    b.classList.add('active');
                } else {
                    b.classList.remove('active');
                }
            });
        });

        btn.addEventListener('mouseenter', (e) => {
            const rating = btn.dataset.rating;
            document.querySelectorAll('.star-btn').forEach((b, index) => {
                if (index < rating) {
                    b.style.color = '#ffc107';
                } else {
                    b.style.color = 'white';
                }
            });
        });
    });

    // Reset hover effect
    document.querySelector('.feedback-rating-stars').addEventListener('mouseleave', () => {
        const activeRating = document.getElementById('feedbackRating').value;
        document.querySelectorAll('.star-btn').forEach((b, index) => {
            if (activeRating && index < activeRating) {
                b.style.color = 'white';
            }
        });
    });

    // Form Submission
    premiumFeedbackForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate rating
        if (!document.getElementById('feedbackRating').value) {
            alert('Please select a rating!');
            return;
        }

        // Create FormData
        const formData = new FormData(this);
        
        // Submit form
        fetch('<?php echo BASE_URL; ?>backend/feedback_submit.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Show success message
            const formContent = document.querySelector('.feedback-form');
            formContent.innerHTML = `
                <div class="feedback-success">
                    <div class="feedback-success-icon">✨</div>
                    <h3>Thank You!</h3>
                    <p>Your feedback has been received and will help us serve you better.</p>
                </div>
            `;
            
            // Close panel after 2 seconds
            setTimeout(closeFeedbackPanel, 2500);
            
            // Reset form after closing
            setTimeout(() => {
                premiumFeedbackForm.reset();
                formContent.innerHTML = premiumFeedbackForm.innerHTML;
            }, 2600);
        })
        .catch(error => {
            alert('Error submitting feedback. Please try again.');
            console.error('Error:', error);
        });
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && feedbackPanel.classList.contains('active')) {
            closeFeedbackPanel();
        }
    });
</script>