// js file for renewal funds
(function( $ ) {
    $('.nav-logo').hide();
    $('.menu-toggle').hide();
    $('.menu-renewal-fund-menu-container').hide();
    $('.nav-btn').on('click',function(event){
        event.preventDefault();
        $('.site-header').addClass('header-resize');
        $('.nav-logo').show();
        $('.menu-renewal-fund-menu-container').show();
    });
    $('.nav-cancel').on('click', function(event){
        event.preventDefault();
        $('.site-header').removeClass('header-resize');
        $('.nav-logo').hide();
        $('.menu-renewal-fund-menu-container').hide();
    });
})(jQuery);