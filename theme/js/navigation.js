/* global jQuery, window */
(function($, w) {
    'use strict';

    $(function() {
        var $menuToggle = $('.menu-toggle');
        var $menuContainer = $('.primary-menu-container');
        var $dropdownItems = $('.menu-item-has-children');
        var isMobile = function() {
            return w.innerWidth < 992;
        };

        // Mobile menu toggle
        $menuToggle.on('click', function() {
            var $this = $(this);
            $this.toggleClass('active');
            $menuContainer.toggleClass('active');
            $this.attr('aria-expanded', $this.hasClass('active'));
            
            if ($menuContainer.hasClass('active')) {
                $menuContainer.css('height', 'calc(100vh - 4rem)');
            } else {
                $menuContainer.css('height', '0');
                // Reset all dropdowns when closing mobile menu
                $dropdownItems.removeClass('active');
            }
        });

        // Handle dropdown menus
        $dropdownItems.each(function() {
            var $item = $(this);
            var $link = $item.children('a');
            
            // Add dropdown icon if not already added by walker
            if (!$link.find('.chevron-down').length) {
                $link.append('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>');
            }
        });

        // Handle click events for dropdowns
        $(document).on('click', '.menu-item-has-children > a', function(e) {
            var $link = $(this);
            var $item = $link.parent();
            
            if (isMobile()) {
                e.preventDefault();
                $item.toggleClass('active');
                
                // Close other dropdowns
                $dropdownItems.not($item).removeClass('active');
            }
        });

        // Handle hover events on desktop
        if (!isMobile()) {
            $dropdownItems.hover(
                function() {
                    if (!isMobile()) {
                        $(this).addClass('active');
                    }
                },
                function() {
                    if (!isMobile()) {
                        $(this).removeClass('active');
                    }
                }
            );
        }

        // Handle window resize
        var resizeTimer;
        $(w).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (!isMobile()) {
                    $menuContainer.css('height', 'auto');
                    // Reset mobile menu state
                    $menuToggle.removeClass('active');
                    $menuContainer.removeClass('active');
                } else if (!$menuContainer.hasClass('active')) {
                    $menuContainer.css('height', '0');
                }
                
                // Reset all dropdowns on resize
                $dropdownItems.removeClass('active');
            }, 250);
        });

        // Close dropdowns when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.menu-item-has-children').length) {
                $dropdownItems.removeClass('active');
            }
        });
    });
})(jQuery, window);
