<style>
    :root {
        --teal-main: #2bb3a3;
        --teal-gradient: linear-gradient(135deg, #2bb3a380 0%, #17655cee 100%);
        --purple-gradient: linear-gradient(135deg, #7b52ab 0%, #5a3a8a 100%);
        --text-dark: #2d3436;
        --text-gray: #636e72;
        --shadow-premium: 0 15px 35px rgba(0,0,0,0.08);
    }

    .founders-section {
        padding: 20px 10px;
        background-color: #fafafa;
        font-family: 'Outfit', 'Segoe UI', sans-serif;
    }

    .founders-title {
        text-align: center;
        margin-bottom: 20px;
    }

    .founders-title h2 {
        font-size: 2.8rem;
        color: var(--text-dark);
        font-weight: 800;
        margin-bottom: 10px;
    }

    .founders-title .subtitle {
        color: var(--teal-main);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.9rem;
    }

    .founders-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        max-width: 1300px;
        margin: 0 auto;
    }

    .founder-card {
        background-color: transparent;
        width: 100%;
        height: 380px;
        perspective: 1000px;
        cursor: pointer;
    }

    .founder-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 3.0s cubic-bezier(0.4, 0, 0.2, 1);
        transform-style: preserve-3d;
    }

    .founder-card:hover .founder-card-inner {
        transform: rotateY(180deg);
    }

    .founder-front, .founder-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 35px 25px;
        box-shadow: var(--shadow-premium);
        border: 1px solid rgba(0,0,0,0.03);
    }

    .founder-front {
        background-color: #fff;
        color: var(--text-dark);
    }

    .founder-front img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid var(--teal-light);
        margin-bottom: 20px;
        padding: 5px;
        background: #fff;
        box-shadow: 0 10px 20px rgba(43, 179, 163, 0.2);
    }

    .founder-front h3 {
        font-size: 1.4rem;
        margin-bottom: 8px;
        color: var(--text-dark);
        font-weight: 800;
    }

    .founder-front p {
        color: var(--teal-main);
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .founder-back {
        background: var(--teal-gradient);
        color: white;
        transform: rotateY(180deg);
    }

    .founder-back p {
        font-size: 0.95rem;
        line-height: 1.6;
        font-style: italic;
        margin-bottom: 0;
    }

    .founder-back h4 {
        margin-top: 20px;
        font-size: 1.1rem;
        border-top: 2px solid rgba(255,255,255,0.2);
        padding-top: 15px;
        font-weight: 700;
        text-transform: uppercase;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .founders-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 650px) {
        .founders-grid {
            grid-template-columns: 1fr; /* Top-to-bottom stack */
            gap: 20px;
        }
        .founder-card {
            height: 350px;
        }
        .founders-title h2 { font-size: 2.2rem; }
    }
</style>

<section class="founders-section">
    <div class="founders-title" data-aos="fade-up">
      
        <h2>Founder's Message </h2>
    </div>

    <div class="founders-grid">
        <!-- Card 1 -->
        <div class="founder-card" data-aos="zoom-in" data-aos-delay="100">
            <div class="founder-card-inner">
                <div class="founder-front">
                    <img src="<?php echo BASE_URL; ?>assets/images/Dp-sir-01-01.png" alt="Dr. D.P. Goyal">
                    <h3>Dr. D.P. Goyal</h3>
                    <p>Founder</p>
                </div>
                <div class="founder-back">
                    <p>"During my mother's battle with cancer, we faced a painful truth – there was a 
                        lack of trustworthy platforms offering timely and accurate information. In those
                         critical moments, we struggled to find the right doctors and resources. This 
                         experience sparked the idea behind the CanWinn Foundation – a commitment to 
                         providing reliable support and guidance to those navigating similar challenges."</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="founder-card" data-aos="zoom-in" data-aos-delay="200">
            <div class="founder-card-inner">
                <div class="founder-front">
                    <img src="<?php echo BASE_URL; ?>assets/images/Naveen-sir-01.png" alt="Naveen Goyal">
                    <h3>Naveen Goyal</h3>
                    <p>Co-Founder</p>
                </div>
                <div class="founder-back">
                    <p>"Our mission is to enhance society's well-being by ensuring everyone has the chance 
                        to live a happy, healthy life. At CanWinn Foundation, we serve those in 
                        need—irrespective of community, caste, gender, or personal connection. Committed
                         to action over donations, our NGO focuses on lasting change through vital support
                          and resources for those who need it most."</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="founder-card" data-aos="zoom-in" data-aos-delay="300">
            <div class="founder-card-inner">
                <div class="founder-front">
                    <img src="<?php echo BASE_URL; ?>assets/images/Monika-Sangwan-.jpg" alt="Dr. Monika">
                    <h3>Dr. Monika Sangwan</h3>
                    <p>Managing Director</p>
                </div>
                <div class="founder-back">
                    <p>"As a doctor and Chief Managing Director of CanWinn Foundation, I understand the need 
                        for reliable healthcare resources and accurate information. Witnessing patients’ 
                        struggles, we aim to bridge this gap, offering care, compassion, and guidance.
                         Our mission empowers individuals to make informed health decisions and fosters 
                         a supportive, healthier community for everyone."</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="founder-card" data-aos="zoom-in" data-aos-delay="400">
            <div class="founder-card-inner">
                <div class="founder-front">
                    <img src="<?php echo BASE_URL; ?>assets/images/Screenshot-2024-12-30-150238.png" alt="Team Member">
                    <h3>Sandeep Dureja</h3>
                    <p>CEO</p>
                </div>
                <div class="founder-back">
                    <p>"As CFO of CanWinn Foundation, I focus on efficient use of resources to uphold our
                         mission. With transparency and sustainability as our priorities, we emphasize
                          impactful services over monetary donations. Our aim is to build a supportive 
                          community, ensuring access to vital resources for healthier lives. At CanWinn,
                           purpose guides us."</p>
                </div>
            </div>
        </div>
    </div>
</section>