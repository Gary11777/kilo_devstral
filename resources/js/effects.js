/**
 * SiteStar Special Effects
 * Hover animations, parallax effects, and scroll animations
 */

document.addEventListener('DOMContentLoaded', function() {
    // Parallax Effect for Hero Sections
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    if (parallaxElements.length > 0) {
        window.addEventListener('scroll', function() {
            const scrollPosition = window.pageYOffset;
            
            parallaxElements.forEach(element => {
                const speed = parseFloat(element.getAttribute('data-parallax-speed')) || 0.1;
                const offset = scrollPosition * speed;
                element.style.transform = `translateY(${offset}px)`;
            });
        });
    }
    
    // Scroll Animations
    const scrollElements = document.querySelectorAll('[data-scroll-animate]');
    
    const elementInView = (el, dividend = 1) => {
        const elementTop = el.getBoundingClientRect().top;
        return elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend;
    };
    
    const displayScrollElement = (element) => {
        element.classList.add('animate-in');
    };
    
    const hideScrollElement = (element) => {
        element.classList.remove('animate-in');
    };
    
    const handleScrollAnimation = () => {
        scrollElements.forEach(element => {
            if (elementInView(element, 1.25)) {
                displayScrollElement(element);
            } else {
                hideScrollElement(element);
            }
        });
    };
    
    if (scrollElements.length > 0) {
        window.addEventListener('scroll', handleScrollAnimation);
        handleScrollAnimation(); // Check on page load
    }
    
    // Button Hover Effects
    const buttons = document.querySelectorAll('button, [role="button"]');
    
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.transition = 'transform 0.2s ease, box-shadow 0.2s ease';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Card Hover Effects
    const cards = document.querySelectorAll('.group');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const img = this.querySelector('img');
            if (img) {
                img.style.transform = 'scale(1.05)';
                img.style.transition = 'transform 0.5s ease';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const img = this.querySelector('img');
            if (img) {
                img.style.transform = 'scale(1)';
            }
        });
    });
    
    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Add CSS for scroll animations
    const style = document.createElement('style');
    style.textContent = `
        [data-scroll-animate] {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        [data-scroll-animate].animate-in {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Parallax container */
        [data-parallax-container] {
            overflow: hidden;
            position: relative;
        }
        
        /* Parallax element */
        [data-parallax] {
            will-change: transform;
        }
    `;
    
    document.head.appendChild(style);
});

// Alpine.js Component for Parallax
document.addEventListener('alpine:init', () => {
    Alpine.data('parallax', () => ({
        init() {
            this.$el.style.willChange = 'transform';
        },
        
        updatePosition(scrollPosition) {
            const speed = parseFloat(this.$el.getAttribute('data-parallax-speed')) || 0.1;
            const offset = scrollPosition * speed;
            this.$el.style.transform = `translateY(${offset}px)`;
        }
    }));
});