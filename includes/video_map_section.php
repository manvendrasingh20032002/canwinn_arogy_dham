<style>
    .dual-card-section {
        padding: 20px 10px;
        background-color: #ffffff;
        font-family: 'Outfit', 'Segoe UI', sans-serif;
    }

    .dual-card-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .media-card {
        background: #fff;
        border-radius: 30px;
        padding: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border: 1px solid rgba(0,0,0,0.03);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .media-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(43, 179, 163, 0.15);
    }

    .media-wrapper {
        border-radius: 20px;
        overflow: hidden;
        width: 100%;
        height: 400px;
        background: #f0f0f0;
    }

    .media-wrapper iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .media-label {
        margin-top: 20px;
        padding: 0 10px 10px;
    }

    .media-label h4 {
        font-size: 1.3rem;
        font-weight: 800;
        color: #2d3436;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .media-label h4 i {
        color: #2bb3a3;
    }

    .media-label p {
        color: #636e72;
        font-size: 0.95rem;
        margin: 0;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .dual-card-container {
            grid-template-columns: 1fr; /* Top-to-bottom stack */
            max-width: 700px;
        }
        .media-wrapper {
            height: 350px;
        }
    }

    @media (max-width: 500px) {
        .media-wrapper {
            height: 250px;
        }
        .media-card {
            border-radius: 20px;
            padding: 15px;
        }
    }
</style>

<section class="dual-card-section" id="mediaSection">
    <div class="dual-card-container">
        <!-- Video Card -->
        <div class="media-card" data-aos="fade-up">
            <div class="media-wrapper">
                <iframe src="https://www.youtube.com/embed/_fpUD1pNdCc?si=-mH-5qks143WBWrU" title="CanWinn in Action" allowfullscreen></iframe>
            </div>
            <div class="media-label">
                <h4><i class="fa-solid fa-play-circle"></i> CanWinn in Action</h4>
                <p>Watch how we are transforming healthcare lives everyday.</p>
            </div>
        </div>

        <!-- Map Card -->
        <div class="media-card" data-aos="fade-up" data-aos-delay="200">
            <div class="media-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3342.962254535622!2d77.02505699999999!3d28.4683948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1987d28f50fd%3A0xb6e4dcaa411900a1!2sCanwinn%20Aarogya%20Dham%20(A%20unit%20of%20CanWinn%20Foundation)!5e1!3m2!1sen!2sin!4v1776407036671!5m2!1sen!2sin" loading="lazy"></iframe>
            </div>
            <div class="media-label">
                <h4><i class="fa-solid fa-location-dot"></i> Our Location</h4>
                <p>Visit us at Canwinn Aarogya Dham, Gurugram.</p>
            </div>
        </div>
    </div>
</section>