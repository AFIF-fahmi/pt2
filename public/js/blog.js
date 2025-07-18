document.addEventListener('DOMContentLoaded', () => {
    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // If the target is a blog card, animate its category tag
                if (entry.target.classList.contains('blog-card')) {
                    const categoryTag = entry.target.querySelector('.category-tag');
                    if (categoryTag) {
                        setTimeout(() => {
                            categoryTag.classList.add('visible');
                        }, 200);
                    }
                }
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    // Observe all blog cards
    document.querySelectorAll('.blog-card').forEach(card => {
        observer.observe(card);
    });

    // Observe pagination
    const pagination = document.querySelector('.pagination');
    if (pagination) {
        observer.observe(pagination);
    }

    // Add hover effect for read more links
    document.querySelectorAll('.blog-card').forEach(card => {
        const readMoreLink = card.querySelector('a[href="#"]');
        const arrow = card.querySelector('svg');
        
        if (readMoreLink && arrow) {
            readMoreLink.addEventListener('mouseenter', () => {
                arrow.classList.add('read-more-arrow');
            });
            
            readMoreLink.addEventListener('mouseleave', () => {
                arrow.classList.remove('read-more-arrow');
            });
        }
    });
});