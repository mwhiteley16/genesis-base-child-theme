<?php
/**
 * Hero Block
 *
 * @package      ClientName
 * @author       Matt Whiteley
 * @since        1.0.0
 * @license      GPL-2.0+
**/

// Block editor classes
$block_id = 'hero-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$block_class = $block['className'] ? $block['className'] : '';

// ACF Variable custom meta

?>

<div id="<?php echo $block_id; ?>" class="block-wrapper hero <?php if( $align_class ) { echo $align_class; } ?> <?php if( $block_class ) { echo $block_class; } ?>">
     <div class="wrap">


     </div>
</div>
