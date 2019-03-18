<?php
// Enqueue Gutenberg admin fonts
add_action( 'enqueue_block_editor_assets', 'wd_admin_gutenfonts' );
function wd_admin_gutenfonts() {
	wp_enqueue_style(
		'wd-gutenberg-fonts',
		'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i',
		array(),
		CHILD_THEME_VERSION
	);
}

// Add support for wide blocks
add_theme_support( 'align-wide' );

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
