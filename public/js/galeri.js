
// Lightbox galeri baru, modern dan smooth
document.addEventListener('DOMContentLoaded', function () {
  const galeriLinks = Array.from(document.querySelectorAll('[data-lightbox="galeri"]'));
  const images = galeriLinks.map(link => link.getAttribute('href'));

  galeriLinks.forEach((link, idx) => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      openLightbox(idx);
    });
  });

  function openLightbox(startIndex) {
    let currentIndex = startIndex;
    const overlay = document.createElement('div');
    overlay.className = 'galeri-lightbox-overlay';
    overlay.innerHTML = `
      <button class="galeri-lightbox-close" aria-label="Tutup">&times;</button>
      <div class="galeri-lightbox-img-wrap">
        <img src="${images[currentIndex]}" class="galeri-lightbox-img" alt="Galeri Besar">
      </div>
    `;
    document.body.appendChild(overlay);
    const imgWrap = overlay.querySelector('.galeri-lightbox-img-wrap');
    const img = imgWrap.querySelector('img');
    setTimeout(() => {
      img.classList.add('show');
    }, 10);

    function updateImage(newIndex) {
      if (newIndex < 0 || newIndex >= images.length) return;
      img.classList.remove('show');
      img.classList.add('hide');
      img.addEventListener('transitionend', function handler() {
        img.removeEventListener('transitionend', handler);
        img.src = images[newIndex];
        img.classList.remove('hide');
        setTimeout(() => {
          img.classList.add('show');
        }, 10);
      });
      currentIndex = newIndex;
    }

    overlay.querySelector('.galeri-lightbox-close').addEventListener('click', function () {
      img.classList.remove('show');
      img.classList.add('hide');
      img.addEventListener('transitionend', function handler() {
        img.removeEventListener('transitionend', handler);
        overlay.remove();
      });
    });
    overlay.querySelector('.galeri-lightbox-prev').addEventListener('click', function (e) {
      e.stopPropagation();
      if (currentIndex > 0) updateImage(currentIndex - 1);
    });
    overlay.querySelector('.galeri-lightbox-next').addEventListener('click', function (e) {
      e.stopPropagation();
      if (currentIndex < images.length - 1) updateImage(currentIndex + 1);
    });
    overlay.addEventListener('click', function (e) {
      if (e.target === overlay) {
        img.classList.remove('show');
        img.classList.add('hide');
        img.addEventListener('transitionend', function handler() {
          img.removeEventListener('transitionend', handler);
          overlay.remove();
        });
      }
    });
  }
});