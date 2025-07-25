document.addEventListener("DOMContentLoaded", function () {
  const section = document.body.dataset.section;
  if (section) {
    const target = document.getElementById(section);
    if (target) {
      target.scrollIntoView({ behavior: "smooth" });
    }
  }
});

// Handle smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').slice(1);
        const section = document.getElementById(targetId);
        
        if (section) {
            const navbar = document.getElementById('navbar');
            const navbarHeight = navbar.offsetHeight;
            const topOffset = navbarHeight + 16; // Reduced padding for better accuracy
            const elementPosition = section.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - topOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });

            // Update URL without triggering scroll
            window.history.pushState({}, '', `#${targetId}`);
            
            // Update active section in navigation
            updateActiveSectionInNav(targetId);
        }
    });
});

// Handle section highlighting based on scroll position
function updateActiveSectionInNav(sectionId) {
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    navLinks.forEach(link => {
        const linkTarget = link.getAttribute('href').slice(1);
        if (linkTarget === sectionId) {
            link.classList.add('text-banner-top', 'font-semibold');
        } else {
            link.classList.remove('text-banner-top', 'font-semibold');
        }
    });
}

function handleScroll() {
    const sections = document.querySelectorAll('section[id]');
    const navbar = document.getElementById('navbar');
    const navbarHeight = navbar.offsetHeight;
    const scrollPosition = window.pageYOffset + navbarHeight + 32; // Adjusted offset

    let currentSection = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop - navbarHeight - 32; // Adjust for navbar
        const sectionHeight = section.offsetHeight;
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            currentSection = section.getAttribute('id');
        }
    });

    // Update active section in navigation
    if (currentSection) {
        updateActiveSectionInNav(currentSection);
    }
}

// Initialize scroll handling
document.addEventListener('DOMContentLoaded', () => {
    // Handle initial hash in URL
    if (window.location.hash) {
        const targetId = window.location.hash.slice(1);
        setTimeout(() => {
            const section = document.getElementById(targetId);
            if (section) {
                const navbar = document.getElementById('navbar');
                const navbarHeight = navbar.offsetHeight;
                const topOffset = navbarHeight + 16;
                const elementPosition = section.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - topOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                
                updateActiveSectionInNav(targetId);
            }
        }, 100);
    }

    // Add scroll event listener with throttling
    let isScrolling = false;
    window.addEventListener('scroll', () => {
        if (!isScrolling) {
            window.requestAnimationFrame(() => {
                handleScroll();
                isScrolling = false;
            });
            isScrolling = true;
        }
    });
});


