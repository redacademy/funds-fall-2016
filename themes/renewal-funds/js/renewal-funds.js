// js file for renewal funds
(function( $ ) {
    
    // navigation functions
    $( '.nav-btn' ).on('click',function( event ){
        event.preventDefault();
        $( '.site-header' ).addClass( 'header-resize' );
        $( '.menu-toggle' ).hide();
        var height = $(window).height(); 
        $('.header-resize .main-navigation .menu').css('max-height', height-200);
    });

    $( '.nav-cancel' ).on( 'click', function( event ){
        event.preventDefault();
        $( '.site-header' ).removeClass( 'header-resize' );
    });

    $(window).resize(function(){
        $( '.site-header' ).removeClass( 'header-resize' );
    });

    $( '.acf-input-wrap input' ).prop( 'disabled', true );  



    /*var $carousel = $('#main-carousel').flickity();
    var cellElements = $carousel.flickity('getCellElements');

    console.log(cellElements.length);

    for (var i = 0; i < cellElements.length; i++) {
        console.log(cellElements[i]);
    }*/


})(jQuery);