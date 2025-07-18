document.addEventListener('DOMContentLoaded', function () {
  const galeriLinks = Array.from(document.querySelectorAll('[data-lightbox="galeri"]'));
  const images = galeriLinks.map(link => link.getAttribute('href'));

  galeriLinks.forEach((link, idx) => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      showLightbox(idx);
    });
  });

  function showLightbox(startIndex) {
    let currentIndex = startIndex;
    // Create overlay
    const overlay = document.createElement('div');
    overlay.className = 'galeri-lightbox-overlay';
    overlay.innerHTML = `
      <button class="galeri-lightbox-close" aria-label="Tutup">&times;</button>
      <button class="galeri-lightbox-nav galeri-lightbox-prev" aria-label="Sebelumnya">&#8592;</button>
      <button class="galeri-lightbox-nav galeri-lightbox-next" aria-label="Selanjutnya">&#8594;</button>
      <img src="${images[currentIndex]}" class="galeri-lightbox-img galeri-lightbox-anim" alt="Galeri Besar">
    `;
    document.body.appendChild(overlay);
    const img = overlay.querySelector('.galeri-lightbox-img');
    scaleUpFromThumb(galeriLinks[currentIndex], img);

    function updateImage(newIndex, direction) {
      if (newIndex < 0 || newIndex >= images.length) return;
      const oldImg = overlay.querySelector('.galeri-lightbox-img');
      oldImg.classList.add(direction === 'right' ? 'slide-left-out' : 'slide-right-out');
      oldImg.addEventListener('animationend', function handler() {
        oldImg.removeEventListener('animationend', handler);
        oldImg.remove();
        const newImg = document.createElement('img');
        newImg.src = images[newIndex];
        newImg.className = 'galeri-lightbox-img galeri-lightbox-anim ' + (direction === 'right' ? 'slide-right-in' : 'slide-left-in');
        newImg.alt = 'Galeri Besar';
        overlay.appendChild(newImg);
        setTimeout(() => {
          newImg.classList.remove('slide-right-in', 'slide-left-in');
        }, 400);
      });
      currentIndex = newIndex;
    }

    overlay.addEventListener('click', function (e) {
      if (e.target === overlay || e.target.classList.contains('galeri-lightbox-close')) {
        overlay.remove();
      }
    });
    overlay.querySelector('.galeri-lightbox-prev').addEventListener('click', function (e) {
      e.stopPropagation();
      if (currentIndex > 0) updateImage(currentIndex - 1, 'left');
    });
    overlay.querySelector('.galeri-lightbox-next').addEventListener('click', function (e) {
      e.stopPropagation();
      if (currentIndex < images.length - 1) updateImage(currentIndex + 1, 'right');
    });
  }

  function scaleUpFromThumb(link, img) {
    // Get bounding rect of thumbnail
    const thumb = link.querySelector('img');
    const rect = thumb.getBoundingClientRect();
    const viewportW = window.innerWidth;
    const viewportH = window.innerHeight;
    const scaleX = rect.width / (viewportW * 0.8);
    const scaleY = rect.height / (viewportH * 0.8);
    const translateX = rect.left + rect.width / 2 - viewportW / 2;
    const translateY = rect.top + rect.height / 2 - viewportH / 2;
    img.style.transform = `translate(${translateX}px, ${translateY}px) scale(${scaleX}, ${scaleY})`;
    img.style.transition = 'transform 0.4s cubic-bezier(.4,2,.6,1)';
    setTimeout(() => {
      img.style.transform = 'translate(0,0) scale(0.8,0.8)';
    }, 10);
    setTimeout(() => {
      img.style.transform = '';
      img.style.transition = '';
    }, 410);
  }
}); 