<?php
/**
 * Hero Block
 *
 * @package      ClientName
 * @author       Matt Whiteley
 * @since        3.0.0
 * @license      GPL-2.0+
**/

// ACF Variable custom meta


// Block ID
$block_id = 'hero-' . $block['id'];

// Block Classes
$block_classes = 'acf-block hero-block';

if( ! empty( $block['align'] ) ) { // get align class if present
     $block_classes .= ' align' . $block['align'];
}

if( ! empty( $block['className'] ) ) { // get custom class name if present
     $block_classes .= ' ' . $block['className'];
}

?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $block_classes ); ?>">
     HERO BLOCK HERE!
</div>
