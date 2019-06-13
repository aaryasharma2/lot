(function ($) {
    'use strict';

    // Masonry
    $( document ).ready(function() {
        $('.feature-section.masonry-section').masonry({
            // options
            itemSelector: 'div.col'
        });
    });

})(jQuery);