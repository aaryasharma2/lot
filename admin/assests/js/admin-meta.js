/**
 *  Tab navigation for shortcode generator
 */
(function ($) {
    'use strict';

    $(document).ready(function(){

        $('div.sp-tfree-mbf-nav a').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('.sp-tfree-mbf-nav a').removeClass('nav-tab-active');
            $('.sp-tfree-mbf-tab-content').removeClass('nav-tab-active');

            $(this).addClass('nav-tab-active');
            $("#"+tab_id).addClass('nav-tab-active');
        })

    });

    // Initializing WP Color Picker
    $('.sp-tfree-color-picker').each(function(){
        $(this).wpColorPicker();
    });

    $('.sp-tfree-select').chosen({
        width: '100%',
        allow_single_deselect: true,
        "disable_search": true
    });

})(jQuery);