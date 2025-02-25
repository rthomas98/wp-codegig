/* global jQuery, _cgData, window, document, setTimeout */
(function($, w, d) {
    'use strict';

    $(function() {
        // Get the page element
        var $page = $('#page');
        if (!$page.length) return; // Exit if page element doesn't exist

        // Set initial state
        w.setTimeout(function() {
            $page.css('opacity', 1);
        }, 100);

        // Function to handle page transitions
        function handlePageTransition() {
            $('a').not('[href^="#"], [href*="wp-admin"], [href*="wp-login"], [target="_blank"], [download]').each(function() {
                // Remove any existing click listeners
                $(this).off('click.pageTransition');
                // Add new click listener
                $(this).on('click.pageTransition', handleClick);
            });
        }

        function handleClick(e) {
            var href = $(this).attr('href');
            var currentUrl = w.location.href;
            
            // Only handle internal links
            if (href && (href.indexOf(_cgData.homeUrl) > -1 || href.startsWith('/'))) {
                e.preventDefault();
                
                // Don't transition if it's the current page
                if (href === currentUrl) return;
                
                // Add transition classes
                $page.css('opacity', 0);
                
                // Navigate after transition
                w.setTimeout(function() {
                    w.location.href = href;
                }, 500);
            }
        }

        // Initialize transitions
        handlePageTransition();

        // Handle dynamic content changes
        $(d).on('ajaxComplete', handlePageTransition);
    });
})(jQuery, window, document);
