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

     wp.blocks.registerBlockStyle( 'core/image', {
          name: 'half-bottom-margin',
          label: 'Half Bottom Margin',
     });

     // add custom spacer styles
     wp.blocks.registerBlockStyle( 'core/spacer', {
          name: 'responsive-small',
          label: 'Responsive Small (100px-60px)',
     });

     wp.blocks.registerBlockStyle( 'core/spacer', {
          name: 'responsive-medium',
          label: 'Responsive Medium (120px-80px)',
     });

     wp.blocks.registerBlockStyle( 'core/spacer', {
          name: 'responsive-large',
          label: 'Responsive Large (140px-100px)',
     });

     wp.blocks.registerBlockStyle( 'core/spacer', {
          name: 'responsive-hide',
          label: 'Responsive Hidden',
     });

     wp.blocks.registerBlockStyle( 'core/spacer', {
          name: 'desktop-hide',
          label: 'Desktop Hidden',
     });

     // add custom group block styles
     wp.blocks.registerBlockStyle( 'core/group', {
          name: 'default',
          label: 'Default',
          isDefault: true,
     });

     wp.blocks.registerBlockStyle( 'core/group', {
          name: 'full-inner-width',
          label: 'Full Inner Width',
     });

} );
