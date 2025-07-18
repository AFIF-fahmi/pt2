// Navbar scroll behavior
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    const topBanner = document.getElementById('topBanner');
    const navbarSpacer = document.getElementById('navbarSpacer');
    const bannerHeight = topBanner.offsetHeight;
    
    if (window.scrollY > bannerHeight) {
        // Hide banner and adjust navbar position
        topBanner.style.transform = `translateY(-${bannerHeight}px)`;
        navbar.style.position = 'fixed';
        navbar.style.top = '0';
        navbar.classList.add('scrolled');
        navbarSpacer.style.height = '64px'; // 16 * 4 = 64px (h-16)
    } else {
        // Show banner and reset navbar position
        topBanner.style.transform = 'translateY(0)';
        navbar.style.position = 'relative';
        navbar.classList.remove('scrolled');
        navbarSpacer.style.height = '0px';
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const topBanner = document.getElementById('topBanner');
    const navbarSpacer = document.getElementById('navbarSpacer');
    let lastScroll = 0;
    
    function updateNavbar() {
        const currentScroll = window.pageYOffset;
        const bannerHeight = topBanner.offsetHeight;
        
        // Add/remove scrolled class and handle navbar position
        if (currentScroll > bannerHeight) {
            navbar.classList.add('scrolled');
            navbarSpacer.style.height = navbar.offsetHeight + 'px';
            
            if (currentScroll > lastScroll && currentScroll > bannerHeight + 100) {
                // Scrolling down - hide banner
                topBanner.style.transform = 'translateY(-100%)';
                navbar.style.transform = 'translateY(0)';
            } else {
                // Scrolling up - show banner if at top
                if (currentScroll <= bannerHeight) {
                    topBanner.style.transform = 'translateY(0)';
                }
                navbar.style.transform = 'translateY(0)';
            }
        } else {
            navbar.classList.remove('scrolled');
            navbarSpacer.style.height = '0px';
            topBanner.style.transform = 'translateY(0)';
        }
        
        lastScroll = currentScroll;
    }

    // Handle scroll events with throttling
    let isScrolling = false;
    window.addEventListener('scroll', () => {
        if (!isScrolling) {
            window.requestAnimationFrame(() => {
                updateNavbar();
                isScrolling = false;
            });
            isScrolling = true;
        }
    });
    
    // Update navbar position on window resize
    window.addEventListener('resize', updateNavbar);
    
    // Initial update
    updateNavbar();
});
