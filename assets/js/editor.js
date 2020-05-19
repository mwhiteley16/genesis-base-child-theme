// Add custom button styles
wp.domReady( () => {

     // remove default buttons styles
	wp.blocks.unregisterBlockStyle( 'core/button', 'fill' );
	wp.blocks.unregisterBlockStyle( 'core/button', 'outline' );

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
	});

     // add custom list styles
     wp.blocks.registerBlockStyle( 'core/list', {
		name: 'default',
		label: 'Default',
		isDefault: true,
	});

	wp.blocks.registerBlockStyle( 'core/list', {
		name: 'two-column-list',
		label: 'Two-Columns',
	});

     wp.blocks.registerBlockStyle( 'core/list', {
		name: 'three-column-list',
		label: 'Three-Columns',
	});

     // add custom image styles
     wp.blocks.registerBlockStyle( 'core/image', {
          name: 'default',
          label: 'Default',
          isDefault: true,
     });

     wp.blocks.registerBlockStyle( 'core/image', {
          name: 'no-bottom-margin',
          label: 'No Bottom Margin',
     });

} );
