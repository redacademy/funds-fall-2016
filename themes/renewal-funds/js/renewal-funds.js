// js file for renewal funds
(function( $ ) {
    
    // navigation functions
    $( '.nav-btn' ).on('click',function( event ){
        event.preventDefault();
        $( '.site-header' ).addClass( 'header-resize' );
        $( '.menu-toggle' ).hide();
        $('.header-resize .main-navigation .menu').css('max-height', scrollbarHeight);
    });

    $( '.nav-cancel' ).on( 'click', function( event ){
        event.preventDefault();
        $( '.site-header' ).removeClass( 'header-resize' );
    });

    $( '.acf-input-wrap input' ).prop( 'disabled', true ); 

    
    var height = $(window).height();
    // console.log(height);
    var scrollbarHeight = height - 200;
    // console.log(scrollbarHeight);
    // $('.header-resize .main-navigation .menu').css('max-height', scrollbarHeight);

    $(window).resize(function(){location.reload();});
    
    //$( '.acf-form' ).css( 'background-color: white'); 

    $('.page-template-feedback .gform_button').on('click',function(event){
        var content = $('.textarea').val();
        if (content === ''){
            event.preventDefault();
            ('.page-template-feedback .textarea.medium').css('border','1px solid red');

        }
        else{
            return event;
        };
    })

})(jQuery);