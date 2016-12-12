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

    $('.page-template-feedback .gform_button').on('click',function(event){
        var content = $('.textarea').val().length;
        if (content === 0 ){
            $('.page-template-feedback .textarea.medium').addClass('invalid');
            if (('#input_2_1').hasClass('invalid')){
                $('.page-template-feedback .gform_button').preventDefault();
            }
        } else {
            $('.page-template-feedback .textarea.medium').removeClass('invalid');
        }
    });

    $('.page-template-feedback .gform_button').on('click',function(event){
        
    });

})(jQuery);