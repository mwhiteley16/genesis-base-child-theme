// Add custom button styles
wp.domReady( () => {

     // button styles
     wp.blocks.unregisterBlockStyle(
     	'core/button',
     	[ 'default', 'outline', 'squared', 'fill' ]
     );

     wp.blocks.registerBlockStyle(
          'core/button',
          [
               {
                    name: 'default',
                    label: 'Default',
                    isDefault: true,
               },
               {
                    name: 'inverse',
                    label: 'Inverse',
               }
          ]
     );


     // separator styles
     wp.blocks.unregisterBlockStyle(
     	'core/button',
     	[ 'default', 'dots', 'wide' ]
     );


     // list styles
     wp.blocks.registerBlockStyle(
          'core/list',
          [
               {
                    name: 'default',
                    label: 'Default',
                    isDefault: true,
               },
               {
                    name: 'two-column-list',
                    label: 'Two Columns',
               },
               {
                    name: 'two-three-list',
                    label: 'Three Columns',
               }
          ]
     );


     // image styles
     wp.blocks.registerBlockStyle(
          'core/image',
          [
               {
                    name: 'default',
                    label: 'Default',
                    isDefault: true,
               },
               {
                    name: 'no-bottom-margin',
                    label: 'No Bottom Margin',
               },
               {
                    name: 'half-bottom-margin',
                    label: 'Half Bottom Margin',
               }
          ]
     );


     // spacer styles
     wp.blocks.registerBlockStyle(
          'core/spacer',
          [
               {
                    name: 'default',
                    label: 'Default',
                    isDefault: true,
               },
               {
                    name: 'responsive-small',
                    label: 'Responsive Small (100px-60px)',
               },
               {
                    name: 'responsive-medium',
                    label: 'Responsive Medium (120px-80px)',
               },
               {
                    name: 'responsive-large',
                    label: 'Responsive Large (140px-100px)',
               },
               {
                    name: 'responsive-hide',
                    label: 'Responsive Hidden',
               },
               {
                    name: 'desktop-hide',
                    label: 'Desktop Hidden',
               }
          ]
     );


     // group styles
     wp.blocks.registerBlockStyle(
          'core/group',
          [
               {
                    name: 'default',
                    label: 'Default',
                    isDefault: true,
               },
               {
                    name: 'full-inner-width',
                    label: 'Full Inner Width',
               }
          ]
     );
} );
