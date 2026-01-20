// ==================== NETFLIX-LIKE INTERACTIVITY ==================== 

document.addEventListener('DOMContentLoaded', function() {
    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.style.background = 'linear-gradient(to bottom, rgba(0,0,0,0.9), rgba(0,0,0,0.7))';
        } else {
            navbar.style.background = 'linear-gradient(to bottom, rgba(0,0,0,0.8), transparent)';
        }
    });

    // Movie card hover animation
    const movieCards = document.querySelectorAll('.card-movie');
    
    movieCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
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

    // Add click handlers for play buttons
    const playButtons = document.querySelectorAll('.overlay button');
    
    playButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            // Trigger modal or play action
            const modal = new bootstrap.Modal(document.getElementById('playModal'));
            modal.show();
        });
    });

    // Auto-hide navbar after scroll
    let scrollTimeout;
    window.addEventListener('scroll', function() {
        clearTimeout(scrollTimeout);
        navbar.style.opacity = '1';
        
        scrollTimeout = setTimeout(function() {
            if (window.scrollY > 200) {
                navbar.style.opacity = '0.8';
            }
        }, 2000);
    });

    // Add loading animation for images
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        img.addEventListener('load', function() {
            this.style.animation = 'fadeInUp 0.5s ease';
        });
    });

    // Lazy load images if needed
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    imageObserver.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    }

    // Sign In form validation
    const signInForm = document.querySelector('#signInModal form');
    if (signInForm) {
        const signInBtn = document.querySelector('#signInModal .modal-footer .btn-danger');
        if (signInBtn) {
            signInBtn.addEventListener('click', function() {
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                
                if (!email || !password) {
                    alert('Please fill in all fields');
                    return;
                }
                
                if (!isValidEmail(email)) {
                    alert('Please enter a valid email');
                    return;
                }
                
                // Add success feedback
                const modal = bootstrap.Modal.getInstance(document.getElementById('signInModal'));
                alert('Sign In successful!');
                modal.hide();
            });
        }
    }
});

// Email validation helper
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Smooth page load animation
window.addEventListener('load', function() {
    document.body.style.animation = 'fadeInUp 0.8s ease';
});
