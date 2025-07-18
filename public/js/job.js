document.addEventListener('DOMContentLoaded', () => {
    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // If the target contains a list, add visible class with delay for each item
                if (entry.target.classList.contains('list-disc')) {
                    entry.target.querySelectorAll('li').forEach((item, index) => {
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateX(0)';
                        }, index * 100);
                    });
                }
            }
        });
    }, {
        threshold: 0.1
    });

    // Observe all job sections and lists
    document.querySelectorAll('.job-section, .list-disc').forEach(section => {
        observer.observe(section);
    });

    // Handle apply button hover animation
    const applyButton = document.getElementById('applyButton');
    if (applyButton) {
        applyButton.addEventListener('mouseenter', () => {
            const svg = applyButton.querySelector('svg');
            svg.style.transform = 'translateX(4px)';
        });

        applyButton.addEventListener('mouseleave', () => {
            const svg = applyButton.querySelector('svg');
            svg.style.transform = 'translateX(0)';
        });
    }
});