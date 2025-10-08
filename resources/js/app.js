import './bootstrap';

// Tab functionality for Element Touch
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');

    // Initialize first tab as active
    if (tabButtons.length > 0 && tabPanels.length > 0) {
        tabButtons[0].classList.add('active');
        tabPanels[0].classList.add('active');
    }

    // Tab switching functionality
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all buttons and panels
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanels.forEach(panel => panel.classList.remove('active'));
            
            // Add active class to clicked button and corresponding panel
            this.classList.add('active');
            const targetPanel = document.getElementById(targetTab);
            if (targetPanel) {
                targetPanel.classList.add('active');
            }
        });
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add subtle hover effects to cards
    document.querySelectorAll('.bg-gray-50').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Logo animation on hover
    document.querySelectorAll('.logo-rectangle').forEach(rect => {
        rect.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });
        
        rect.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // Form handling for quote requests and contact forms
    document.querySelectorAll('button').forEach(button => {
        if (button.textContent.includes('Request Quote') || button.textContent.includes('Send Message')) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Simple notification for demo
                const notification = document.createElement('div');
                notification.className = 'fixed top-4 right-4 bg-gray-800 text-white px-6 py-3 rounded-lg shadow-lg z-50';
                notification.textContent = 'Message sent! We\'ll contact you soon.';
                
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.remove();
                }, 3000);
            });
        }
    });

    // Intersection Observer for subtle animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.bg-gray-50, .bg-gray-800').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    console.log('Element Touch - Display Solutions initialized');
});
