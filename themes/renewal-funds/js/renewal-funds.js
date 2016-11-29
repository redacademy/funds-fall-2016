// js file for renewal funds
(function( $ ) {
    $('.main-navigation').hide();
    $('.nav-logo').hide();
    $('.nav-btn').on('click',function(event){
        event.preventDefault();
        $('.site-header').addClass('header-resize');
        $('.site-branding').hide();
        $('.nav-btn').hide();
        $('.nav-logo').show();
        $('.main-navigation').show();
    });
    $('.site-header').on('mouseleave', function(){
        $('.site-header').removeClass('header-resize');
        $('.site-branding').show();
        $('.nav-btn').show();
        $('.nav-logo').hide();
        $('.main-navigation').hide();
    })
})(jQuery);