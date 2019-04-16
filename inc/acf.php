<?php
/**
 * Advanced Custom  Fields
 *
 * @author       Matt Whiteley
 * @since        1.0.0
 * @license      GPL-2.0+
**/

// Add Theme Options tab
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'position'     => '58.997', // Adds under Genesis options page
		'icon_url'     => 'dashicons-image-filter', // https://developer.wordpress.org/resource/dashicons/
		'redirect'	=> false
	));
}

// Hide ACF Custom Fields tab from other users
add_filter( 'acf/settings/show_admin', 'wd_acf_show_admin' );
function wd_acf_show_admin( $show ) {
     $current_user = wp_get_current_user();
     if ( $current_user->user_email == 'matt@whiteleydesigns.com' ){
          return true; // show it
     } else {
          return false; // hide it
     }
}

/**
 * ACF Gutenberg Blocks
 *
 * Add blocks to use with Gutenberg
 * @uses https://www.advancedcustomfields.com/blog/acf-5-8-introducing-acf-blocks-for-gutenberg/
 *
*/
add_action( 'acf/init', 'wd_acf_init' );
function wd_acf_init() {
 	if( function_exists( 'acf_register_block' ) ) {
 		acf_register_block(array(
 			'name'			=> 'acf-team-member',
 			'title'			=> __( 'Team Member' ),
 			'description'		=> __( 'A Team Member block.' ),
 			'render_callback'	=> 'wd_acf_block_render_callback',
 			'category'		=> 'formatting',
 			'icon'			=> 'businessman',
               'mode'              => 'preview',
 			'keywords'		=> array( 'team, headshot, acf' ),
 		));
 	}
}

/**
 * ACF Gutenberg Blocks
 *
 * Add blocks to use with Gutenberg
 *
*/
function wd_acf_block_render_callback( $block ) {
	// convert name into path friendly slug
	$slug = str_replace('acf/', '', $block['name']);
	// include a template part from within the "template-parts/blocks" folder
	if( file_exists(STYLESHEETPATH . "/blocks/content-{$slug}.php") ) {
		include( STYLESHEETPATH . "/blocks/content-{$slug}.php" );
	}
}

/**
 * ACF Color Palette
 *
 * Add default color palatte to ACF color picker for branding
 * Match these colors to colors in /functions.php & /assets/scss/partials/base/variables.scss
 *
*/
function wd_acf_color_palette() { ?>
<script type="text/javascript">
(function($) {
     acf.add_filter('color_picker_args', function( args, $field ){
          // add the hexadecimal codes here for the colors you want to appear as swatches
          args.palettes = ['#007991', '#439a86', '#e9d985']
          // return colors
          return args;
     });
})(jQuery);
</script>
<?php }

add_action( 'acf/input/admin_footer', 'wd_acf_color_palette' );
