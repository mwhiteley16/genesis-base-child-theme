<?php
/**
 * Advanced Custom  Fields
 *
 * @author       Matt Whiteley
 * @since        1.0.0
 * @license      GPL-2.0+
**/

/**
 * register options page
 * @link https://www.advancedcustomfields.com/resources/options-page/
 *
 */
if( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' 	=> 'Site Options',
		'menu_title'	=> 'Site Options',
		'menu_slug' 	=> 'site-options',
		'capability'	=> 'edit_posts',
		'position'     => '58.997', // Adds under Genesis options page
		'icon_url'     => 'dashicons-image-filter', // https://developer.wordpress.org/resource/dashicons/
		'redirect'	=> false
	) );
}

/**
 * restrict access to ACF from dashboard based on specific users
 *
 */
add_filter( 'acf/settings/show_admin', 'wd_acf_show_admin' );
function wd_acf_show_admin( $show ) {

     // get current users
     $current_user = wp_get_current_user();

     // create array of approved users
     $approved_users = [
          "matt@whiteleydesigns.com",
     ];

     // allow access to acf if current user is in approved users list
     $access_result = in_array( $current_user->user_email, $approved_users ) ? true : false;
     return $access_result;

}

/**
 * ACF Gutenberg Blocks
 *
 * Categories: common, formatting, layout, widgets, embed
 * Dashicons: https://developer.wordpress.org/resource/dashicons/
 * ACF Settings: https://www.advancedcustomfields.com/resources/acf_register_block/
 *
*/
add_action( 'acf/init', 'wd_acf_init' );
function wd_acf_init() {

 	if( function_exists( 'acf_register_block' ) ) {

          acf_register_block_type(array(
 			'name'			=> 'acf-slideshow',
 			'title'			=> __( 'Slideshow Block' ),
 			'description'		=> __( 'A simple slideshow block.' ),
 			'category'		=> 'formatting',
 			'icon'			=> 'star-filled',
               'mode'              => 'preview',
 			'keywords'		=> array( 'slideshow, wd, acf' ),
               'post_type'         => array( 'post', 'page' ),
               'render_callback'	=> 'wd_acf_block_render_callback',
               'enqueue_script'    => get_stylesheet_directory_uri() . '/blocks/js/block-acf-slideshow.js',
 		));

          acf_register_block_type(array(
 			'name'			=> 'acf-tabs',
 			'title'			=> __( 'Tabs Block' ),
 			'description'		=> __( 'A simple tabs block.' ),
 			'category'		=> 'formatting',
 			'icon'			=> 'star-filled',
               'mode'              => 'preview',
 			'keywords'		=> array( 'tabs, wd, acf' ),
               'post_type'         => array( 'post', 'page' ),
               'render_callback'	=> 'wd_acf_block_render_callback',
               'enqueue_script'    => get_stylesheet_directory_uri() . '/blocks/js/block-acf-tabs.js',
 		));
 	}
}

function wd_acf_block_render_callback( $block ) {

	// convert name into path friendly slug
	$slug = str_replace('acf/', '', $block['name']);

     // include a template part from within the "blocks/templates" folder
	if( file_exists(STYLESHEETPATH . "/blocks/templates/block-{$slug}.php") ) {
		include( STYLESHEETPATH . "/blocks/templates/block-{$slug}.php" );
	}
}

/**
 * ACF Color Palette
 * @link https://www.advancedcustomfields.com/resources/adding-custom-javascript-fields/
 *
 * Add default color palatte to ACF color picker for branding
 * Match these colors to colors in /functions.php & /assets/scss/partials/base/variables.scss
 *
*/
function wd_acf_color_palette() { ?>
<script type="text/javascript">
(function($) {
     acf.add_filter('color_picker_args', function( args, $field ){
          args.palettes = [
               '#007991',
               '#439a86',
               '#e9d985',
               '#ffffff',
               '#000000'
          ]
          return args;
     });
})(jQuery);
</script>
<?php }
add_action( 'acf/input/admin_footer', 'wd_acf_color_palette' );
