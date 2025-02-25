document.addEventListener('DOMContentLoaded', function() {
    const section = document.querySelector('#relume');
    if (!section) return;

    const content = section.querySelector('.hero-content');
    const overlay = section.querySelector('.hero-overlay');
    const imageGrid = section.querySelector('.hero-image-grid');

    function updateAnimations() {
        const sectionHeight = section.offsetHeight;
        const viewportHeight = window.innerHeight;
        const scrollPosition = window.scrollY;
        const scrollProgress = Math.min(scrollPosition / (sectionHeight - viewportHeight), 1);

        // Content opacity: 1 to 0 in first half of scroll (0 to 0.5)
        if (content) {
            const contentOpacity = Math.max(0, 1 - (scrollProgress * 2));
            content.style.opacity = contentOpacity;
        }

        // Overlay opacity: 1 to 0 over full scroll (0 to 1)
        if (overlay) {
            const overlayOpacity = Math.max(0, 1 - scrollProgress);
            overlay.style.opacity = overlayOpacity;
        }

        // Scale: 3.2 to 1 over full scroll (0 to 1)
        if (imageGrid) {
            const scale = 3.2 - (scrollProgress * 2.2);
            imageGrid.style.transform = `scale(${Math.max(1, scale)})`;
        }
    }

    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateAnimations();
                ticking = false;
            });
            ticking = true;
        }
    });

    // Initial update
    updateAnimations();
});
