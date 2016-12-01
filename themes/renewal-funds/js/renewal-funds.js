// js file for renewal funds
(function( $ ) {
    $('.nav-logo').hide();
    $('.nav-btn').on('click',function(event){
        event.preventDefault();
        $('.site-header').addClass('header-resize');
        $('.nav-logo').show();
        $('.menu-toggle').hide();
    });
    $('.nav-cancel').on('click', function(event){
        event.preventDefault();
        $('.site-header').removeClass('header-resize');
        $('.nav-logo').hide();
    });
})(jQuery);