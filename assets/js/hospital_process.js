
const stepBoxes = document.querySelectorAll('.step-box');
const mainVideo = document.getElementById('stepVideo');
let currentIndex = 0;

function autoRotate() {
    // Remove active class
    stepBoxes.forEach(box => box.classList.remove('active'));

    // Update Index
    currentIndex = (currentIndex + 1) % stepBoxes.length;

    // Add active class to new step
    const activeBox = stepBoxes[currentIndex];
    activeBox.classList.add('active');

    // Smooth Video Transition
    const newSrc = activeBox.getAttribute('data-vsrc');
    mainVideo.style.opacity = '0.5';

    setTimeout(() => {
        mainVideo.src = newSrc;
        mainVideo.load();
        mainVideo.play();
        mainVideo.style.opacity = '1';
    }, 300);
}

// Har 6 second mein change hoga
setInterval(autoRotate, 6000);

//----------------- Dr. details section ----------------- //
var swiper = new Swiper(".dr-slider", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: { delay: 3000 },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }, // Desktop par 3 dikhenge
        },
    });