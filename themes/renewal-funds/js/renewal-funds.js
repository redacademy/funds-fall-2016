// js file for renewal funds
(function( $ ) {
    // navigation functions
    $( '.nav-btn' ).on('click',function( event ){
        event.preventDefault();
        $( '.site-header' ).addClass( 'header-resize' );
        $( '.menu-toggle' ).hide();
    });

    $( '.nav-cancel' ).on( 'click', function( event ){
        event.preventDefault();
        $( '.site-header' ).removeClass( 'header-resize' );
    });

    $( '.acf-input-wrap input' ).prop( "disabled", true ); 

    //$( '.acf-form' ).css( 'background-color: white'); 
})(jQuery);