/**
 * ============================================
 * SCROLL ANIMATIONS - Toddler town Kindergarten
 * ============================================
 */

document.addEventListener('DOMContentLoaded', function() {
    ScrollAnimations.init();
});

const ScrollAnimations = {
    animatedElements: null,
    observer: null,
    
    init() {
        // Get all elements with animation classes
        this.animatedElements = document.querySelectorAll(
            '.fade-in-up, .fade-in-left, .fade-in-right, .fade-in-down'
        );
        
        if (this.animatedElements.length === 0) return;
        
        // Create intersection observer
        this.observer = new IntersectionObserver(
            (entries) => this.handleIntersection(entries),
            {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            }
        );
        
        // Observe all animated elements
        this.animatedElements.forEach(element => {
            this.observer.observe(element);
        });
    },
    
    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = entry.target.getAttribute('data-delay') || 0;
                
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, delay);
                
                // Stop observing once animated
                this.observer.unobserve(entry.target);
            }
        });
    }
};

// ============================================
// PARALLAX EFFECT
// ============================================
const ParallaxEffect = {
    parallaxElements: null,
    
    init() {
        this.parallaxElements = document.querySelectorAll('[data-parallax]');
        
        if (this.parallaxElements.length === 0) return;
        
        window.addEventListener('scroll', () => this.handleScroll());
    },
    
    handleScroll() {
        const scrolled = window.pageYOffset;
        
        this.parallaxElements.forEach(element => {
            const speed = element.getAttribute('data-parallax') || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    }
};

// Initialize parallax if elements exist
document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelectorAll('[data-parallax]').length > 0) {
        ParallaxEffect.init();
    }
});