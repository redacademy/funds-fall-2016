// js file for renewal funds
(function( $ ) {
    $('.nav-btn').on('click',function(event){
        event.preventDefault();
        $('.site-header').addClass('header-resize');
        $('.menu-toggle').hide();
    });
    $('.nav-cancel').on('click', function(event){
        event.preventDefault();
        $('.site-header').removeClass('header-resize');
    });

    // login functions

    $( "#login" ).replaceWith( "<p>Hello,</p>" );

})(jQuery);