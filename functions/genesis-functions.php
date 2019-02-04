<?php
/*
 * Cache bust stylesheet
 *
 * Appends datestamp & child theme version to end of styleshee
 * each time file is edited
 * @author Matt Whiteley
 * @link https://whiteleydesigns.com/automatically-cache-bust-genesis-child-theme-css/
 *
*/

// Remove unused page templates
add_filter( 'theme_page_templates', 'wd_remove_genesis_page_templates' );
function wd_remove_genesis_page_templates( $page_templates ) {
	unset( $page_templates['page_archive.php'] );
	unset( $page_templates['page_blog.php'] );
	return $page_templates;
}

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
