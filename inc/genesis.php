<?php
/**
 * Genesis Changes
 *
 * @author       Matt Whiteley
 * @since        1.0.0
 * @license      GPL-2.0+
**/

// Remove default stylesheet
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );

// Theme Support
add_theme_support( 'html5' );
add_theme_support( 'genesis-responsive-viewport' );
add_theme_support( 'genesis-accessibility', array( '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links' ) );
add_theme_support( 'genesis-footer-widgets', 3 );
add_theme_support( 'genesis-structural-wraps', array( 'footer', 'footer-widgets', 'header', 'nav', 'site-inner', 'site-tagline' ) );

// Custom logo
add_theme_support( 'custom-logo', array(
     'width'       => 244,
     'height'      => 315,
     'flex-width'  => true,
     'flex-height' => true,
     'header-text' => array( '.site-title', '.site-description' ),
) );

// Change secondary menu to footer menu as theme doesn't use a secondary menu
add_theme_support( 'genesis-menus', array(
     'primary' => __( 'Primary Navigation Menu', CHILD_THEME_SLUG ),
     'secondary' => __( 'Footer Menu', CHILD_THEME_SLUG )
) );

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
function wd_header() {
     get_template_part( 'sections/header' );
}

// Replace footer with custom footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'wd_footer' );
function wd_footer() {
     get_template_part( 'sections/footer' );
}

// Remove unused page templates
add_filter( 'theme_page_templates', 'wd_remove_genesis_page_templates' );
function wd_remove_genesis_page_templates( $page_templates ) {
	unset( $page_templates['page_archive.php'] );
	unset( $page_templates['page_blog.php'] );
	return $page_templates;
}