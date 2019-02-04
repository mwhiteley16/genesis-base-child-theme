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
define( 'CHILD_THEME_URL', 'http://whiteleydesigns.com/' );
define( 'CHILD_THEME_VERSION', '3.0.0' );

 add_action( 'genesis_setup', 'wd_base_setup', 15 );
 /**
  * Theme Setup
  *
  * Replace default "Start Engine" functionality
  * Setup site functions to correct hooks and filters
  *
  * @since 3.0
  */
function wd_base_setup() {

     // Add HTML5 markup
     add_theme_support( 'html5' );

     // Add proper viewport meta for mobile
     add_theme_support( 'genesis-responsive-viewport' );

     // Add proper support for accibility features
     add_theme_support( 'genesis-accessibility', array(
          '404-page',
          'drop-down-menu',
          'headings',
          'rems',
          'search-form',
          'skip-links'
     ) );

     // Add support for custom logo
     add_theme_support( 'custom-logo', array(
          'width'       => 244,
          'height'      => 315,
          'flex-width'  => true,
          'flex-height' => true,
          'header-text' => array( '.site-title', '.site-description' ),
     ) );

     // Add proper support for footer widgets
     add_theme_support( 'genesis-footer-widgets', 3 );

     // Change secondary menu to footer menu as theme doesn't use a secondary menu
     add_theme_support( 'genesis-menus', array(
     	'primary' => __( 'Primary Navigation Menu', CHILD_THEME_SLUG ),
     	'secondary' => __( 'Footer Menu', CHILD_THEME_SLUG )
     ) );

     // Add support for structural wraps
     add_theme_support( 'genesis-structural-wraps', array(
          'footer',
          'footer-widgets',
          'header',
          'nav',
          'site-inner',
          'site-tagline'
     ) );

     // Add custom image sizes
     // add_image_size( 'size-name', 000, 000, true );

     // Remove unused page layouts
     genesis_unregister_layout( 'content-sidebar-sidebar' );
     genesis_unregister_layout( 'sidebar-sidebar-content' );
     genesis_unregister_layout( 'sidebar-content-sidebar' );

     // Remove unused widget areas
     unregister_sidebar( 'header-right' );
     unregister_sidebar( 'sidebar-alt' );

     // Reposition navigation within header
     remove_action( 'genesis_after_header', 'genesis_do_nav' );
     add_action( 'genesis_header', 'genesis_do_nav', 12 );

     // Remove edit link from front end
     add_filter ( 'genesis_edit_post_link' , '__return_false' );

     // Remove sub navigation
     remove_action( 'genesis_after_header', 'genesis_do_subnav' );

     // Remove content-sidebar div
     add_filter( 'genesis_markup_content-sidebar-wrap_open', '__return_false' );
     add_filter( 'genesis_markup_content-sidebar-wrap_close', '__return_false' );

     // Replace header with custom header
     remove_action( 'genesis_header', 'genesis_do_header' );
     add_action( 'genesis_header', 'wd_header' );


     // Replace footer with custom footer
     remove_action( 'genesis_footer', 'genesis_do_footer' );
     add_action( 'genesis_footer', 'wd_footer' );

     // Relocate footer widgets to within footer
     //remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
     //add_action( 'genesis_footer', 'genesis_footer_widget_areas', 6 );

     // Enable block editor styles
     add_editor_style( 'assets/css/editor-style.css' );
     add_theme_support( 'editor-styles' );

}

// Custom header
function wd_header() {
     get_template_part( 'sections/header' );
}

// Custom footer
function wd_footer() {
     get_template_part( 'sections/footer' );
}

// Ensure jQuery loads
add_action( 'init', 'wd_load_scripts', 0 );
function wd_load_scripts() {
	wp_enqueue_script( 'jquery' );
}

// Remove default stylesheet
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );

// Enqueue additional styles and scripts
add_action( 'wp_enqueue_scripts', 'wd_enqueue_scripts' );
function wd_enqueue_scripts() {

	/*
      * Enqueue Google Fonts
      *
      * Make sure to also enqueue same fonts in /functions/gutenberg.php so they display on the back end block editor
      */
	wp_enqueue_style(
          'google-fonts',
          '//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i',
          array(),
          CHILD_THEME_VERSION
     );

     /*
      * Enqueue main JS file from Codekit
      *
      * Alter /assets/js/main-js.js to concatenate proper JS files in to one minified file
      * then uncomment the script below
      */
     //wp_enqueue_script( 'wd-scripts', get_stylesheet_directory_uri() . '/assets/js/main-js-min.js' );

     //Enqueue proper stylesheet with datestamp of last edit appended to flush cache
     $version = defined( 'CHILD_THEME_VERSION' ) && CHILD_THEME_VERSION ? CHILD_THEME_VERSION : PARENT_THEME_VERSION;
     $version .= '.' . date ( "njYHi", filemtime( get_stylesheet_directory() . '/assets/css/main.css' ) );
     wp_enqueue_style( 'wd-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $version );

}

// All SVG uploads to the media uploads
add_filter( 'upload_mimes', 'wd_mime_types' );
function wd_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_action( 'admin_head', 'wd_admin_head' );
function wd_admin_head() {
	$css = '';
	$css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';
	echo '<style type="text/css">'.$css.'</style>';
}

// Add custom logo to login page (optional)
//add_action( 'login_head', 'wd_login_logo' );
function wd_login_logo() {
	echo '<style type="text/css">
	h1 a {background-image: url('.get_stylesheet_directory_uri().'/images/logo-name-here.png) !important; }
	</style>';
}

// Remove admin bar for non-admins
//add_action( 'after_setup_theme', 'wd_remove_admin_bar' );
function wd_remove_admin_bar() {
	if ( !current_user_can( 'administrator' ) && !is_admin() ) {
  		show_admin_bar(false);
	}
}

// Add admin CSS (Gutenberg)
function wd_admin_style() {
  wp_enqueue_style( 'admin-styles', get_stylesheet_directory_uri().'/assets/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'wd_admin_style' );

// Call each function file from the includes directory
require_once( __DIR__ . '/functions/genesis-functions.php');
require_once( __DIR__ . '/functions/gravityforms-functions.php');
require_once( __DIR__ . '/functions/acf-functions.php');
require_once( __DIR__ . '/functions/gutenberg.php');
