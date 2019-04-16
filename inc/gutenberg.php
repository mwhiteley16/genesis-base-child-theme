<?php
/**
 * Gutenberg
 *
 * @author       Matt Whiteley
 * @since        1.0.0
 * @license      GPL-2.0+
**/

// Add support for wide blocks
add_theme_support( 'align-wide' );

// Enable block editor styles
add_editor_style( 'assets/css/editor-style.css' );
add_theme_support( 'editor-styles' );

// Disable Custom Colors
add_theme_support( 'disable-custom-colors' );

// Responsive embeds
add_theme_support( 'responsive-embeds' );

// Customize Gutenberg color palette
// Match these colors to the variables set up in /assets/scss/partials/base/variables.scss
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Primary Color', CHILD_THEME_SLUG ),
		'slug'  => 'primary-color',
		'color'	=> '#007991',
	),
	array(
		'name'  => __( 'Secondary Color', CHILD_THEME_SLUG ),
		'slug'  => 'secondary-color',
		'color' => '#439a86',
	),
	array(
		'name'  => __( 'Accent Color 1', CHILD_THEME_SLUG ),
		'slug'  => 'accent-color-1',
		'color' => '#e9d985',
       ),
) );

//Customize Gutenberg font sizes
//Match with /assets/scss/partials/blocks/blocks-base.scss
add_theme_support( 'editor-font-sizes', array(
	array(
		'name'      => __( 'Small', CHILD_THEME_SLUG ),
		'shortName' => __( 'S', CHILD_THEME_SLUG ),
		'size'      => 12,
		'slug'      => 'small'
	),
	array(
		'name'      => __( 'Normal', CHILD_THEME_SLUG ),
		'shortName' => __( 'M', CHILD_THEME_SLUG ),
		'size'      => 16,
		'slug'      => 'normal'
	),
	array(
		'name'      => __( 'Large', CHILD_THEME_SLUG ),
		'shortName' => __( 'L', CHILD_THEME_SLUG ),
		'size'      => 20,
		'slug'      => 'large'
	),
	array(
		'name'      => __( 'Larger', CHILD_THEME_SLUG ),
		'shortName' => __( 'XL', CHILD_THEME_SLUG ),
		'size'      => 24,
		'slug'      => 'larger'
	)
) );
