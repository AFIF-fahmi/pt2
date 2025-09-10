document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.banner-slide');
    let current = 0;
    const fadeTime = 1000; // ms
    const interval = 4000; // ms

    function showSlide(idx) {
        slides.forEach((slide, i) => {
            if (i === idx) {
                slide.style.opacity = '1';
                slide.style.zIndex = '2';
            } else {
                slide.style.opacity = '0';
                slide.style.zIndex = '1';
            }
        });
    }

    function nextSlide() {
        current = (current + 1) % slides.length;
        showSlide(current);
    }

    showSlide(current);
    setInterval(nextSlide, interval);
});
