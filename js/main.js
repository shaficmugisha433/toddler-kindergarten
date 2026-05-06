/**
 * ============================================
 * Toddler town Kindergarten - MAIN JAVASCRIPT
 * Version: 2.0
 * Last Updated: March 2026
 * ============================================
 */

// ============================================
// 1. DOM CONTENT LOADED
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all modules
    Navigation.init();
    ScrollHandler.init();
    TestimonialSlider.init();
    LiveChat.init();
    CounterAnimation.init();
});

// ============================================
// 2. NAVIGATION MODULE
// ============================================
const Navigation = {
    navbar: null,
    mobileMenuToggle: null,
    navMenu: null,
    navLinks: null,
    
    init() {
        this.navbar = document.getElementById('navbar');
        this.mobileMenuToggle = document.getElementById('mobileMenuToggle');
        this.navMenu = document.getElementById('navMenu');
        this.navLinks = document.querySelectorAll('.nav-link');
        
        if (this.mobileMenuToggle && this.navMenu) {
            this.mobileMenuToggle.addEventListener('click', () => this.toggleMobileMenu());
        }
        
        // Close mobile menu on link click
        this.navLinks.forEach(link => {
            link.addEventListener('click', () => this.closeMobileMenu());
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', () => this.handleScroll());
        
        // Close mobile menu on outside click
        document.addEventListener('click', (e) => {
            if (!this.navMenu.contains(e.target) && !this.mobileMenuToggle.contains(e.target)) {
                this.closeMobileMenu();
            }
        });
    },
    
    toggleMobileMenu() {
        this.mobileMenuToggle.classList.toggle('active');
        this.navMenu.classList.toggle('active');
        document.body.style.overflow = this.navMenu.classList.contains('active') ? 'hidden' : '';
    },
    
    closeMobileMenu() {
        this.mobileMenuToggle.classList.remove('active');
        this.navMenu.classList.remove('active');
        document.body.style.overflow = '';
    },
    
    handleScroll() {
        if (window.scrollY > 50) {
            this.navbar.classList.add('scrolled');
        } else {
            this.navbar.classList.remove('scrolled');
        }
    }
};

// ============================================
// 3. SCROLL HANDLER MODULE
// ============================================
const ScrollHandler = {
    scrollTopBtn: null,
    
    init() {
        this.scrollTopBtn = document.getElementById('scrollTop');
        
        if (this.scrollTopBtn) {
            window.addEventListener('scroll', () => this.handleScroll());
            this.scrollTopBtn.addEventListener('click', () => this.scrollToTop());
        }
    },
    
    handleScroll() {
        if (window.scrollY > 500) {
            this.scrollTopBtn.classList.add('visible');
        } else {
            this.scrollTopBtn.classList.remove('visible');
        }
    },
    
    scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
};

// ============================================
// 4. TESTIMONIAL SLIDER MODULE
// ============================================
const TestimonialSlider = {
    slider: null,
    cards: null,
    dotsContainer: null,
    prevBtn: null,
    nextBtn: null,
    currentIndex: 0,
    autoPlayInterval: null,
    
    init() {
        this.slider = document.getElementById('testimonialsSlider');
        
        if (!this.slider) return;
        
        this.cards = this.slider.querySelectorAll('.testimonial-card');
        this.dotsContainer = document.getElementById('sliderDots');
        this.prevBtn = document.getElementById('sliderPrev');
        this.nextBtn = document.getElementById('sliderNext');
        
        if (this.cards.length === 0) return;
        
        this.createDots();
        this.updateSlider();
        
        if (this.prevBtn) {
            this.prevBtn.addEventListener('click', () => this.prev());
        }
        
        if (this.nextBtn) {
            this.nextBtn.addEventListener('click', () => this.next());
        }
        
        // Auto play
        this.startAutoPlay();
        
        // Pause on hover
        this.slider.addEventListener('mouseenter', () => this.stopAutoPlay());
        this.slider.addEventListener('mouseleave', () => this.startAutoPlay());
    },
    
    createDots() {
        if (!this.dotsContainer) return;
        
        this.dotsContainer.innerHTML = '';
        
        this.cards.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.classList.add('slider-dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => this.goToSlide(index));
            this.dotsContainer.appendChild(dot);
        });
    },
    
    updateSlider() {
        this.cards.forEach((card, index) => {
            card.classList.remove('active');
            if (index === this.currentIndex) {
                card.classList.add('active');
            }
        });
        
        const dots = this.dotsContainer?.querySelectorAll('.slider-dot');
        dots?.forEach((dot, index) => {
            dot.classList.remove('active');
            if (index === this.currentIndex) {
                dot.classList.add('active');
            }
        });
    },
    
    prev() {
        this.currentIndex = (this.currentIndex - 1 + this.cards.length) % this.cards.length;
        this.updateSlider();
    },
    
    next() {
        this.currentIndex = (this.currentIndex + 1) % this.cards.length;
        this.updateSlider();
    },
    
    goToSlide(index) {
        this.currentIndex = index;
        this.updateSlider();
    },
    
    startAutoPlay() {
        this.autoPlayInterval = setInterval(() => this.next(), 5000);
    },
    
    stopAutoPlay() {
        clearInterval(this.autoPlayInterval);
    }
};

// ============================================
// 5. LIVE CHAT MODULE
// ============================================
const LiveChat = {
    chatToggle: null,
    chatWindow: null,
    chatClose: null,
    chatInput: null,
    chatSend: null,
    chatBody: null,
    
    init() {
        this.chatToggle = document.getElementById('chatToggle');
        this.chatWindow = document.getElementById('chatWindow');
        this.chatClose = document.getElementById('chatClose');
        this.chatInput = document.getElementById('chatInput');
        this.chatSend = document.getElementById('chatSend');
        this.chatBody = document.getElementById('chatBody');
        
        if (this.chatToggle && this.chatWindow) {
            this.chatToggle.addEventListener('click', () => this.toggle());
        }
        
        if (this.chatClose && this.chatWindow) {
            this.chatClose.addEventListener('click', () => this.close());
        }
        
        if (this.chatSend) {
            this.chatSend.addEventListener('click', () => this.sendMessage());
        }
        
        if (this.chatInput) {
            this.chatInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') this.sendMessage();
            });
        }
    },
    
    toggle() {
        this.chatWindow.classList.toggle('active');
        if (this.chatWindow.classList.contains('active')) {
            setTimeout(() => this.chatInput?.focus(), 300);
        }
    },
    
    close() {
        this.chatWindow.classList.remove('active');
    },
    
    sendMessage() {
        const message = this.chatInput?.value.trim();
        
        if (!message || !this.chatBody) return;
        
        // Add user message
        const userMessage = document.createElement('div');
        userMessage.classList.add('chat-message', 'user');
        userMessage.innerHTML = `<p>${this.escapeHtml(message)}</p>`;
        this.chatBody.appendChild(userMessage);
        
        // Clear input
        this.chatInput.value = '';
        
        // Scroll to bottom
        this.chatBody.scrollTop = this.chatBody.scrollHeight;
        
        // Simulate bot response
        setTimeout(() => this.botResponse(), 1000);
    },
    
    botResponse() {
        const responses = [
            "Thank you for your message! Our team will get back to you within 24 hours.",
            "Great question! Would you like to schedule a tour to learn more?",
            "We'd love to help! You can also call us at +256 742 384 700.",
            "Thanks for reaching out! Check your email for more information."
        ];
        
        const randomResponse = responses[Math.floor(Math.random() * responses.length)];
        
        const botMessage = document.createElement('div');
        botMessage.classList.add('chat-message', 'bot');
        botMessage.innerHTML = `<p>${randomResponse}</p>`;
        this.chatBody.appendChild(botMessage);
        
        this.chatBody.scrollTop = this.chatBody.scrollHeight;
    },
    
    escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
};

// ============================================
// 6. COUNTER ANIMATION MODULE
// ============================================
const CounterAnimation = {
    counters: null,
    observer: null,
    
    init() {
        this.counters = document.querySelectorAll('.stat-number[data-count]');
        
        if (this.counters.length === 0) return;
        
        // Create intersection observer
        this.observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.animateCounter(entry.target);
                    this.observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        this.counters.forEach(counter => {
            this.observer.observe(counter);
        });
    },
    
    animateCounter(counter) {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000; // 2 seconds
        const step = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += step;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        updateCounter();
    }
};

// ============================================
// 8. UTILITY FUNCTIONS
// ============================================

// Debounce function
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function
function throttle(func, limit) {
    let inThrottle;
    return function(...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Smooth scroll to element
function smoothScrollTo(element) {
    const offset = element.getBoundingClientRect().top + window.pageYOffset - 100;
    window.scrollTo({
        top: offset,
        behavior: 'smooth'
    });
}

// Check if element is in viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// ============================================
// 9. SERVICE WORKER REGISTRATION (PWA)
// ============================================
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('ServiceWorker registration successful');
            })
            .catch(err => {
                console.log('ServiceWorker registration failed: ', err);
            });
    });
}

// ============================================
// 10. ANALYTICS TRACKING
// ============================================
function trackEvent(category, action, label) {
    if (typeof gtag === 'function') {
        gtag('event', action, {
            event_category: category,
            event_label: label
        });
    }
}

// Track button clicks
document.addEventListener('click', function(e) {
    const button = e.target.closest('a, button');
    if (button) {
        trackEvent('Interaction', 'Click', button.textContent.trim());
    }
});
