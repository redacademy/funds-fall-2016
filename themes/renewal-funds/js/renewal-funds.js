// js file for renewal funds
(function( $ ) {
    $('.nav-logo').hide();
    $('.main-navigation').hide();
    $('.nav-btn').on('click',function(event){
        event.preventDefault();
        $('.site-header').addClass('header-resize');
        $('.nav-logo').show();
        $('.main-navigation').show();
    });
    $('.nav-cancel').on('click', function(event){
        event.preventDefault();
        $('.site-header').removeClass('header-resize');
        $('.nav-logo').hide();
        $('.main-navigation').hide();
    });
})(jQuery);