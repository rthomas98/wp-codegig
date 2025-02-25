document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.scroll-container');
    if (!container) return;

    const cards = container.querySelectorAll('.scroll-card');
    const totalCards = cards.length;

    // Initialize Intersection Observer for the container
    const containerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const containerRect = container.getBoundingClientRect();
                const containerTop = containerRect.top;
                const containerHeight = containerRect.height;
                const viewportHeight = window.innerHeight;
                
                // Calculate progress (0 to 1) based on container position
                const progress = Math.max(0, Math.min(1, 
                    (viewportHeight - containerTop) / (containerHeight * 0.6)
                ));

                // Update each card's scale based on its position
                cards.forEach((card, index) => {
                    const sectionFraction = 1 / totalCards;
                    const start = sectionFraction * index;
                    const end = sectionFraction * (index + 1);
                    
                    // Calculate scale based on progress and card position
                    let scale = 1;
                    if (progress >= start && progress <= end) {
                        const cardProgress = (progress - start) / (end - start);
                        scale = 1 - (0.2 * cardProgress);
                    } else if (progress > end) {
                        scale = 0.8;
                    }
                    
                    // Apply transform only on desktop
                    if (window.innerWidth >= 768) {
                        card.style.transform = `scale(${Math.max(0.8, scale)})`;
                        card.style.transition = 'transform 0.3s ease-out';
                    }
                });
            }
        });
    }, {
        threshold: Array.from({ length: 100 }, (_, i) => i / 100),
        rootMargin: '0px 0px -40% 0px'
    });

    // Observe the container
    containerObserver.observe(container);

    // Handle resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            if (window.innerWidth < 768) {
                cards.forEach(card => {
                    card.style.transform = '';
                    card.style.transition = '';
                });
            }
        }, 250);
    });
});
