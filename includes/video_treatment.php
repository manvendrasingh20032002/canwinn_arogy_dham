<!-- video treatment section -->
<section class="premium-journey">
    <div class="container">
        <div class="section-title text-center mb-2">
            <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-2">Our Workflow</span>
            <h2>Patient <span class="text-primary">Experience</span></h2>
        </div>

        <div class="row align-items-start g-5">
            <div class="col-lg-5 order-2 order-lg-1">
                <div class="steps-container">
                    
                    <div class="step-box active" data-vsrc="<?php echo BASE_URL; ?>assets/videos/8943635-hd_1920_1080_25fps.mp4">
                        <span class="step-number-big">Phase 01</span>
                        <div class="step-content">
                            <h4>Seamless Arrival</h4>
                            <p>Hamara staff apka swagat karega aur turant registration process complete karega bina kisi wait ke.</p>
                        </div>
                    </div>

                    <div class="step-box" data-vsrc="<?php echo BASE_URL; ?>assets/videos/440-136215609_small.mp4">
                        <span class="step-number-big">Phase 02</span>
                        <div class="step-content">
                            <h4>Specialist Review</h4>
                            <p>Experience doctors ke sath personal consultation jahan apki har problem ko dhyan se suna jayega.</p>
                        </div>
                    </div>

                    <div class="step-box" data-vsrc="<?php echo BASE_URL; ?>assets/videos/7584467-uhd_4096_2160_25fps.mp4">
                        <span class="step-number-big">Phase 03</span>
                        <div class="step-content">
                            <h4>Advanced Treatment</h4>
                            <p>Modern technology aur machine se behtareen care aur accurate diagnostics.</p>
                        </div>
                    </div>

                    <div class="step-box" data-vsrc="<?php echo BASE_URL; ?>assets/videos/12925557_1920_1080_24fps.mp4">
                        <span class="step-number-big">Phase 04</span>
                        <div class="step-content">
                            <h4>Smile Discharge</h4>
                            <p>Recovery ke baad proper checkup aur personalized medicine plan ke sath ghar wapsi.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 order-1 order-lg-2">
                <div class="video-card overflow-hidden rounded-4 shadow-lg bg-light" style="min-height: 400px; display: flex; align-items: center; justify-content: center;">
                    <video id="stepVideo" muted playsinline autoplay loop class="w-100 h-100 object-fit-cover">
                        <source src="<?php echo BASE_URL; ?>assets/videos/8943635-hd_1920_1080_25fps.mp4" type="video/mp4">
                    </video>
                    <!-- Fallback for missing videos -->
                    <div id="videoFallback" style="display:none; width: 100%;">
                        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1200&q=80" alt="Healthcare" class="img-fluid w-100">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.step-box');
    const video = document.getElementById('stepVideo');
    const videoSource = video.querySelector('source');
    let currentStep = 0;
    let autoPlayInterval;

    function changeStep(index) {
        // Remove active class from all
        steps.forEach(s => s.classList.remove('active'));
        
        // Add active class to current
        steps[index].classList.add('active');
        
        // Change video source
        const newSrc = steps[index].getAttribute('data-vsrc');
        if (videoSource.src !== newSrc) {
            videoSource.src = newSrc;
            video.load();
            
            // Show video, hide fallback initially
            video.style.display = 'block';
            document.getElementById('videoFallback').style.display = 'none';
            
            const playPromise = video.play();
            if (playPromise !== undefined) {
                playPromise.catch(error => {
                    console.log("Video missing or blocked: ", error);
                    video.style.display = 'none';
                    document.getElementById('videoFallback').style.display = 'block';
                });
            }
        }
        
        currentStep = index;
    }


    // Click event for manual change
    steps.forEach((step, index) => {
        step.addEventListener('click', () => {
            changeStep(index);
            resetAutoPlay();
        });
    });

    // Auto play logic
    function startAutoPlay() {
        autoPlayInterval = setInterval(() => {
            let nextStep = (currentStep + 1) % steps.length;
            changeStep(nextStep);
        }, 5000); // Change every 5 seconds
    }

    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }

    startAutoPlay();
});
</script>