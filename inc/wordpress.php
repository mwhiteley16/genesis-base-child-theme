<?php
/**
 * WordPress Stuff
 *
 * @author       Matt Whiteley
 * @since        1.0.0
 * @license      GPL-2.0+
**/

// Ensure jQuery loads
add_action( 'init', 'wd_load_scripts', 0 );
function wd_load_scripts() {
	wp_enqueue_script( 'jquery' );
}

// Allow SVG uploads to the media uploads
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

// Remove comment form allowed tags
add_filter( 'comment_form_defaults', 'wd_remove_comments_allowed_tags' );
function wd_remove_comments_allowed_tags( $defaults ) {
     $defaults['comment_notes_after'] = '';
     return $defaults;
}

// Remove admin bar for non-admins
//add_action( 'after_setup_theme', 'wd_remove_admin_bar' );
function wd_remove_admin_bar() {
	if ( !current_user_can( 'administrator' ) && !is_admin() ) {
  		show_admin_bar(false);
	}
}

// Clean up menu classes
function wd_clean_nav_menu_classes( $classes ) {
	if( ! is_array( $classes ) )
		return $classes;
	foreach( $classes as $i => $class ) {
		// Remove class with menu item id
		$id = strtok( $class, 'menu-item-' );
		if( 0 < intval( $id ) )
			unset( $classes[ $i ] );
		// Remove menu-item-type-*
		if( false !== strpos( $class, 'menu-item-type-' ) )
			unset( $classes[ $i ] );
		// Remove menu-item-object-*
		if( false !== strpos( $class, 'menu-item-object-' ) )
			unset( $classes[ $i ] );
		// Change page ancestor to menu ancestor
		if( 'current-page-ancestor' == $class ) {
			$classes[] = 'current-menu-ancestor';
			unset( $classes[ $i ] );
		}
	}
	// Remove submenu class if depth is limited
	if( isset( $args->depth ) && 1 === $args->depth ) {
		$classes = array_diff( $classes, array( 'menu-item-has-children' ) );
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'wd_clean_nav_menu_classes', 5 );

// Clean up post classes
function wd_clean_post_classes( $classes ) {
	if( ! is_array( $classes ) )
		return $classes;
	$allowed_classes = array(
  		'hentry',
  		'type-' . get_post_type(),
   	);
	return array_intersect( $classes, $allowed_classes );
}
add_filter( 'post_class', 'wd_clean_post_classes', 5 );

// Add custom image sizes
// add_image_size( 'size-name', 000, 000, true );
