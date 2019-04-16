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

// Remove admin bar for non-admins
//add_action( 'after_setup_theme', 'wd_remove_admin_bar' );
function wd_remove_admin_bar() {
	if ( !current_user_can( 'administrator' ) && !is_admin() ) {
  		show_admin_bar(false);
	}
}
