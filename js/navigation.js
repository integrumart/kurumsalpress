/**
 * Navigation JavaScript for KurumsalPress Theme
 *
 * @package KurumsalPress
 */

(function() {
    'use strict';

    // Mobile menu toggle functionality (for future enhancements)
    document.addEventListener('DOMContentLoaded', function() {
        
        // Smooth scroll for hero button
        const heroButton = document.querySelector('.hero-button');
        if (heroButton) {
            heroButton.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#')) {
                    const target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        }

        // Add active class to current menu item
        const currentLocation = window.location.href;
        const menuItems = document.querySelectorAll('.main-navigation a');
        menuItems.forEach(function(item) {
            if (item.href === currentLocation) {
                item.classList.add('current');
            }
        });
    });

})();
