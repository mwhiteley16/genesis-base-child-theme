// Add custom button styles
wp.domReady( () => {

     // remove default buttons styles
	wp.blocks.unregisterBlockStyle( 'core/button', 'default' );
	wp.blocks.unregisterBlockStyle( 'core/button', 'outline' );
	wp.blocks.unregisterBlockStyle( 'core/button', 'squared' );

     // remove default separator styles
     wp.blocks.unregisterBlockStyle( 'core/separator', 'dots')
     wp.blocks.unregisterBlockStyle( 'core/separator', 'wide')

     // add custom button styles
	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'default',
		label: 'Default',
		isDefault: true,
	});

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'inverse',
		label: 'Inverse',
	} );

} );
