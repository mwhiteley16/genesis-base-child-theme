<?php if ( function_exists( 'the_custom_logo' ) ) : ?>
     <div class="site-header__logo">
          <?php the_custom_logo(); ?>
     </div>
<?php endif; ?>

<div class="mobile-navigation-icon">
     <span></span>
     <span></span>
     <span></span>
</div>

<script>
jQuery(document).ready(function() {
     jQuery('.mobile-navigation-icon').click(function() {
          jQuery(this).toggleClass('open');
          jQuery('.nav-primary').slideToggle();
     });
})
</script>
