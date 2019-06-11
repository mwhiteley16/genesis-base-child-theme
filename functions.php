<?php
/**
 * Functions
 *
 * @package      base-genesis-child
 * @since        1.0.0
 * @author       Matt Whiteley <matt@whiteleydesigns.com>
 * @copyright    Copyright (c) 2018, Matt Whiteley
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

define( 'CHILD_THEME_NAME', 'Base Genesis Child Theme' );
define( 'CHILD_THEME_SLUG', 'base-genesis-child' );
define( 'CHILD_THEME_VERSION', '1.0.0' );


/**
 * Set up base content width based on theme
 *
 */
 if( ! isset( $content_width ) )
     $content_width = 1140;

/**
 * Set up variable with theme Google fonts
 *
 */
function wd_theme_fonts() {
	$font_families = apply_filters( 'ea_theme_fonts', array( 'Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' ) );
	$query_args = array(
		'family' => implode( '|', $font_families ),
		'subset' => 'latin,latin-ext',
	);
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	return esc_url_raw( $fonts_url );
}

/**
 * Global enqueues
 *
 * @since  1.0.0
 *
 */
function wd_global_enqueues() {

     // fonts
     wp_enqueue_style( 'wd-fonts', wd_theme_fonts() );

     // javascript
     //wp_enqueue_script( 'wd-scripts', get_stylesheet_directory_uri() . '/assets/js/main-js-min.js' );

     // append datestamp to stylesheet to cache bust when styles are changed
     $version = defined( 'CHILD_THEME_VERSION' ) && CHILD_THEME_VERSION ? CHILD_THEME_VERSION : PARENT_THEME_VERSION;
     $version .= '.' . date ( "njYHi", filemtime( get_stylesheet_directory() . '/assets/css/main.css' ) );
     wp_enqueue_style( 'wd-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $version );

}
add_action( 'wp_enqueue_scripts', 'wd_global_enqueues' );

/**
 * Block editor scripts & styles
 *
 * @since  1.0.0
 *
 */
function wd_admin_gutenfonts() {
     wp_enqueue_style( 'wd-fonts', wd_theme_fonts() );
     wp_enqueue_script('wd-editor', get_stylesheet_directory_uri() . '/assets/js/editor.js', array( 'wp-blocks', 'wp-dom' ), filemtime( get_stylesheet_directory() . '/assets/js/editor.js' ), true );
}
add_action( 'enqueue_block_editor_assets', 'wd_admin_gutenfonts' );

/**
 * Admin CSS used outside of block editor
 *
 * @since  1.0.0
 *
 */
function wd_admin_style() {
     wp_enqueue_style( 'admin-styles', get_stylesheet_directory_uri().'/assets/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'wd_admin_style' );

/**
 * Theme Setup
 *
 * Replace default "Start Engine" functionality
 * Setup site functions to correct hooks and filters
 *
 * @since 1.0
 */
function wd_base_setup() {

     // Add custom image sizes
     // add_image_size( 'size-name', 000, 000, true );

     // Register additional sidebars
     //genesis_register_sidebar(array(
     //	'name'=>'Additional Sidebar',
     //	'id' => 'footer-widget-1',
     //	'description' => 'Footer widget number 1.',
     //	'before_widget' => '<div class="widget-wrap %2$s">',
     //	'after_widget'  => "</div>\n",
     //	'before_title'  => '<h3 class="widget-title">',
     //	'after_title'   => "</h3>\n"
     //));

     // Remove comment form allowed tags
     add_filter( 'comment_form_defaults', 'wd_remove_comments_allowed_tags' );
     function wd_remove_comments_allowed_tags( $defaults ) {
     	$defaults['comment_notes_after'] = '';
     	return $defaults;
     }

     include_once( get_stylesheet_directory() . '/inc/acf.php' );
     include_once( get_stylesheet_directory() . '/inc/genesis.php' );
     include_once( get_stylesheet_directory() . '/inc/gravityforms.php' );
     include_once( get_stylesheet_directory() . '/inc/gutenberg.php' );
     include_once( get_stylesheet_directory() . '/inc/wordpress.php' );

}
add_action( 'genesis_setup', 'wd_base_setup', 15 );
