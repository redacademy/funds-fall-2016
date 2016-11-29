// js file for renewal funds
(function( $ ) {
    $('.main-navigation').hide();
    $('.nav-btn').on('click',function(event){
        event.preventDefault();
        $('.site-header').addClass('header-resize');
        $('.main-navigation').show();
    });
    $('.site-header').on('mouseleave', function(){
        $('.site-header').removeClass('header-resize');
        $('.main-navigation').hide();
    })
})(jQuery);