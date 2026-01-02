/**
 * Kurumsal Press Theme Scripts
 *
 * @package KurumsalPress
 */

(function() {
    'use strict';

    // Mobile Menu Toggle
    var menuToggle = document.getElementById('menu-toggle');
    var navigation = document.getElementById('site-navigation');

    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function() {
            var expanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !expanded);
            navigation.classList.toggle('active');
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            var href = this.getAttribute('href');
            
            // Skip if href is just "#"
            if (href === '#') {
                return;
            }

            var target = document.querySelector(href);
            
            if (target) {
                e.preventDefault();
                
                var headerOffset = 80;
                var elementPosition = target.getBoundingClientRect().top;
                var offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                if (navigation && navigation.classList.contains('active')) {
                    navigation.classList.remove('active');
                    if (menuToggle) {
                        menuToggle.setAttribute('aria-expanded', 'false');
                    }
                }
            }
        });
    });

    // Add class to header on scroll
    var header = document.querySelector('.site-header');
    
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (navigation && navigation.classList.contains('active')) {
            var isClickInside = navigation.contains(event.target) || 
                              (menuToggle && menuToggle.contains(event.target));
            
            if (!isClickInside) {
                navigation.classList.remove('active');
                if (menuToggle) {
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            }
        }
    });

    // Add animation on scroll
    var observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);

    // Observe service cards and other elements
    document.querySelectorAll('.service-card, .post, .page').forEach(function(el) {
        observer.observe(el);
    });

    // Back to top button functionality
    var backToTopButton = document.createElement('button');
    backToTopButton.innerHTML = '↑';
    backToTopButton.setAttribute('id', 'back-to-top');
    backToTopButton.setAttribute('aria-label', 'Back to top');

    document.body.appendChild(backToTopButton);

    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTopButton.classList.add('show');
        } else {
            backToTopButton.classList.remove('show');
        }
    });

    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

})();
