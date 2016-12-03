// js file for renewal funds
(function( $ ) {
    // navigation functions
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

    //$('.a-unique-class').text( 'this is really bollocks' );
    //$( '.single-story .site-main > p' ).text( 'this is really bollocks' );
    

})(jQuery);

(function($){
        $('.sub-menu').hide();
    $('#menu-item-44').on('click',function(event){
        event.preventDefault();
        $('.sub-menu').show();
    });

})(jQuery);