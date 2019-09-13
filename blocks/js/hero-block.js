(function($){

     var initializeBlock = function( $block ) {
        $('.hero-block').addClass('add-class');
    }

    // Initialize each block on page load (front end).
    $(document).ready(function(){
        $('.hero-block').each(function(){
            initializeBlock( $(this) );
        });
    });

     if( window.acf ) {
          window.acf.addAction( 'render_block_preview/type=acf-hero', initializeBlock );
     }

})(jQuery);
