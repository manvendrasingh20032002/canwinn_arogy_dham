<style>
    :root {
        --teal-main: #2bb3a3;
        --teal-light: #e6f7f5;
        --teal-gradient: linear-gradient(135deg, #2bb3a3 0%, #1e8579 100%);
        --text-dark: #2d3436;
        --text-gray: #636e72;
        --shadow-premium: 0 20px 40px rgba(0,0,0,0.08);
    }

    .stats-section {
        padding: 20px 0;
        background-color: #ffffff;
        font-family: 'Outfit', 'Segoe UI', sans-serif;
        position: relative;
    }

    .stats-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 60px;
    }

    /* Left Side Content */
    .stats-content {
        flex: 1;
        max-width: 500px;
    }

    .stats-content h6 {
        color: var(--teal-main);
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .stats-content h6::before {
        content: '';
        width: 30px;
        height: 2px;
        background: var(--teal-main);
    }

    .stats-content h2 {
        font-size: 3.5rem;
        color: var(--text-dark);
        line-height: 1.1;
        margin-bottom: 25px;
        font-weight: 800;
    }

    .stats-content p {
        color: var(--text-gray);
        font-size: 1.15rem;
        line-height: 1.8;
    }

    /* Right Side Grid */
    .stats-grid-wrapper {
        flex: 1.2;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }

    .stat-card {
        background: #fff;
        border-radius: 30px;
        padding: 40px 30px;
        text-align: center;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(0,0,0,0.03);
        box-shadow: var(--shadow-premium);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .stat-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(43, 179, 163, 0.15);
    }

    .stat-icon-box {
        width: 80px;
        height: 80px;
        background: var(--teal-light);
        border-radius: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        transition: all 0.4s ease;
    }

    .stat-icon-box i {
        font-size: 2.2rem;
        color: var(--teal-main);
        transition: all 0.4s ease;
    }

    .stat-card:hover .stat-icon-box {
        background: var(--teal-gradient);
        transform: scale(1.1);
    }

    .stat-card:hover .stat-icon-box i {
        color: #fff;
    }

    .stat-number {
        font-size: 2.8rem;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 5px;
        display: block;
        letter-spacing: -1px;
    }

    .stat-label {
        font-size: 1rem;
        font-weight: 600;
        color: var(--text-gray);
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .stats-container {
            flex-direction: column;
            text-align: center;
        }
        .stats-content { max-width: 100%; }
        .stats-content h6 { justify-content: center; }
        .stats-content h2 { font-size: 2.8rem; }
        .stats-grid-wrapper { width: 100%; }
    }

    @media (max-width: 600px) {
        .stats-grid {
            grid-template-columns: 1fr; /* Vertical Stack as requested */
            gap: 20px;
        }
        .stat-card {
            padding: 40px 20px;
        }
        .stats-content h2 { font-size: 2.2rem; }
    }
</style>

<section class="stats-section">
    <div class="stats-container">
        <!-- Content Side -->
        <div class="stats-content" data-aos="fade-up">
            <h6>Our Achievements</h6>
            <h2>Healthcare Excellence for Every Patient</h2>
            <p>Canwinn Aarogya Dham is committed to providing affordable, holistic, and professional healthcare. Our numbers reflect our dedication to the community.</p>
        </div>

        <!-- Grid Side -->
        <div class="stats-grid-wrapper">
            <div class="stats-grid">
                <!-- Stat 1 -->
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="stat-icon-box">
                        <i class="fa-solid fa-hospital"></i>
                    </div>
                    <span class="stat-number" data-target="76">0</span>
                    <span class="stat-label">Empanelled Hospitals</span>
                </div>
                
                <!-- Stat 2 -->
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="stat-icon-box">
                        <i class="fa-solid fa-handshake-angle"></i>
                    </div>
                    <span class="stat-number" data-target="317262">0</span>
                    <span class="stat-label">Satisfied Patients</span>
                </div>

                <!-- Stat 3 -->
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="stat-icon-box">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <span class="stat-number" data-target="5">0</span>
                    <span class="stat-label">Years of Experience</span>
                </div>

                <!-- Stat 4 -->
                <div class="stat-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="stat-icon-box">
                        <i class="fa-solid fa-users-medical"></i>
                    </div>
                    <span class="stat-number" data-target="430">0</span>
                    <span class="stat-label">Team Members</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200;

        const runCounters = () => {
            counters.forEach(counter => {
                const update = () => {
                    const target = +counter.getAttribute('data-target');
                    const current = parseInt(counter.innerText) || 0;
                    const increment = Math.max(1, target / speed);

                    if (current < target) {
                        counter.innerText = Math.ceil(current + increment);
                        requestAnimationFrame(update);
                    } else {
                        counter.innerText = target.toLocaleString() + "+";
                    }
                };
                update();
            });
        };

        const observer = new IntersectionObserver((entries) => {
            if(entries[0].isIntersecting) {
                runCounters();
                observer.unobserve(entries[0].target);
            }
        }, { threshold: 0.3 });

        if(document.querySelector('.stats-section')) {
            observer.observe(document.querySelector('.stats-section'));
        }
    });
</script>