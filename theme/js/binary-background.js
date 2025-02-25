document.addEventListener('DOMContentLoaded', function() {
    function initBinaryBackground() {
        const container = document.querySelector('.binary-background');
        if (!container) return;
        
        const createBinaryDigit = () => {
            const digit = document.createElement('div');
            digit.className = 'binary-digit';
            digit.textContent = Math.random() < 0.5 ? '0' : '1';
            digit.style.left = `${Math.random() * 100}%`;
            digit.style.top = '-20px';
            digit.style.opacity = Math.random() * 0.3 + 0.2; 
            container.appendChild(digit);

            let speed = 1 + Math.random() * 1.5; 
            let posY = -20;

            const animate = () => {
                posY += speed;
                digit.style.transform = `translateY(${posY}px)`;

                if (posY > window.innerHeight) {
                    if (digit && digit.parentNode) {
                        digit.parentNode.removeChild(digit);
                    }
                } else {
                    requestAnimationFrame(animate);
                }
            };

            requestAnimationFrame(animate);
        };

        // Create initial digits - increased from 50 to 100
        for (let i = 0; i < 100; i++) {
            setTimeout(() => {
                createBinaryDigit();
            }, Math.random() * 1500); 
        }

        // Continue creating new digits more frequently
        setInterval(() => {
            if (document.querySelectorAll('.binary-digit').length < 100) { 
                createBinaryDigit();
            }
        }, 300); 
    }

    // Initialize after a short delay to ensure DOM is ready
    setTimeout(initBinaryBackground, 100);
});
