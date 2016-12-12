// js file for renewal funds
(function( $ ) {
    
    // navigation functions
    $( '.nav-btn' ).on('click',function( event ){
        event.preventDefault();
        $( '.site-header' ).addClass( 'header-resize' );
        $( '.menu-toggle' ).hide();
        var height = $(window).height();
        var scrollbarHeight = height - 200; 
        $('.header-resize .main-navigation .menu').css('max-height', scrollbarHeight);
    });

    $( '.nav-cancel' ).on( 'click', function( event ){
        event.preventDefault();
        $( '.site-header' ).removeClass( 'header-resize' );
    });

    $(window).resize(function(){
        $( '.site-header' ).removeClass( 'header-resize' );
        var scrollbarHeight = $(window).height() - 200;
    });

    $( '.acf-input-wrap input' ).prop( 'disabled', true ); 
    //$( '.acf-form' ).css( 'background-color: white'); 

})(jQuery);