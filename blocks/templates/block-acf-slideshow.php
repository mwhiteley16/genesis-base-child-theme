<?php
/**
 * Slideshow Block
 *
 * @package      ClientName
 * @author       Matt Whiteley
 * @since        3.0.0
 * @license      GPL-2.0+
**/

// ACF Variable custom meta


// Block ID
$block_id = 'acf-slideshow-' . $block['id'];

// Block Classes
$block_classes = 'acf-block acf-slideshow-block';

if( ! empty( $block['align'] ) ) { // get align class if present
     $block_classes .= ' align' . $block['align'];
}

if( ! empty( $block['className'] ) ) { // get custom class name if present
     $block_classes .= ' ' . $block['className'];
}

?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_classes ); ?>">

     <?php if ( have_rows( 'wd_block_slideshow_slides' ) ) : ?>
          <div class="acf-slideshow-block__slides">
               <?php while ( have_rows( 'wd_block_slideshow_slides' ) ) : the_row(); ?>

                    <?php
                    $wd_image = get_sub_field( 'wd_image' );
                    ?>

                    <div class="acf-slideshow-block__slide">
                         <img src="<?php echo esc_url( $wd_image['url'] ); ?>" data-flickity-lazyload="<?php echo esc_url( $wd_image['url'] ); ?>" alt="<?php echo esc_attr( $wd_image['alt'] ); ?>" />
                    </div>

               <?php endwhile; ?>
          </div>
     <?php endif; ?>

</div>
