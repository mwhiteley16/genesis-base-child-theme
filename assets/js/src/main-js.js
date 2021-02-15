// @codekit-prepend quiet "flickity.pkgd.min.js";

(function($){

     $(document).ready(function(){

          // mobile menu
          $('.mobile-navigation-icon').click(function() {
               $(this).toggleClass('open');
               $('.nav-primary').slideToggle();
          });
     });

     // run after Gravity Forms renders
     $(document).bind('gform_post_render', function() {

          // set active classes for checkboxes
          $('.ginput_container_checkbox input[type="checkbox"]').change( function(){
               if ($(this).is(':checked') ) {
                    $(this).closest('li').addClass('active');
               } else {
                    $(this).closest('li').removeClass('active');
               }
          });

          // set active class for radios
          $('.ginput_container_radio ul li input[type="radio"]:checked').closest('li').addClass('active');
          $('.ginput_container_radio input[type="radio"]').change( function(){
               $(this).closest('li').siblings('li').removeClass('active');
               $(this).closest('li').addClass('active');
          });
     });
})(jQuery);
