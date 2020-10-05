wp.domReady( () => {

     // ADD CUSTOM BLOCK STYLES

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
     	'core/separator',
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


     // REMOVE CORE BLOCKS THAT AREN'T NEEDED

     // formatting
     wp.blocks.unregisterBlockType( 'core/verse' );
     wp.blocks.unregisterBlockType( 'core/preformatted' );
     wp.blocks.unregisterBlockType( 'core/pullquote' );

     // layouts
     wp.blocks.unregisterBlockType( 'core/more' );
     wp.blocks.unregisterBlockType( 'core/nextpage' );

     // widgets
     wp.blocks.unregisterBlockType( 'core/archives' );
     wp.blocks.unregisterBlockType( 'core/categories' );
     wp.blocks.unregisterBlockType( 'core/latest-comments' );
     wp.blocks.unregisterBlockType( 'core/latest-posts' );
     wp.blocks.unregisterBlockType( 'core/calendar' );
     wp.blocks.unregisterBlockType( 'core/rss' );
     wp.blocks.unregisterBlockType( 'core/search' );
     wp.blocks.unregisterBlockType( 'core/tag-cloud' );

     // embeds
     wp.blocks.unregisterBlockType( 'core-embed/amazon-kindle' );
     wp.blocks.unregisterBlockType( 'core-embed/animoto' );
     wp.blocks.unregisterBlockType( 'core-embed/cloudup' );
     wp.blocks.unregisterBlockType( 'core-embed/collegehumor' );
     wp.blocks.unregisterBlockType( 'core-embed/crowdsignal' );
     wp.blocks.unregisterBlockType( 'core-embed/dailymotion' );
     wp.blocks.unregisterBlockType( 'core-embed/flickr' );
     wp.blocks.unregisterBlockType( 'core-embed/funnyordie' );
     wp.blocks.unregisterBlockType( 'core-embed/hulu' );
     wp.blocks.unregisterBlockType( 'core-embed/imgur' );
     wp.blocks.unregisterBlockType( 'core-embed/issuu' );
     wp.blocks.unregisterBlockType( 'core-embed/kickstarter' );
     wp.blocks.unregisterBlockType( 'core-embed/meetup-com' );
     wp.blocks.unregisterBlockType( 'core-embed/mixcloud' );
     wp.blocks.unregisterBlockType( 'core-embed/photobucket' );
     wp.blocks.unregisterBlockType( 'core-embed/polldaddy' );
     wp.blocks.unregisterBlockType( 'core-embed/reddit' );
     wp.blocks.unregisterBlockType( 'core-embed/reverbnation' );
     wp.blocks.unregisterBlockType( 'core-embed/screencast' );
     wp.blocks.unregisterBlockType( 'core-embed/scribd' );
     wp.blocks.unregisterBlockType( 'core-embed/slideshare' );
     wp.blocks.unregisterBlockType( 'core-embed/smugmug' );
     wp.blocks.unregisterBlockType( 'core-embed/speaker' );
     wp.blocks.unregisterBlockType( 'core-embed/speaker-deck' );
     wp.blocks.unregisterBlockType( 'core-embed/ted' );
     wp.blocks.unregisterBlockType( 'core-embed/tiktok' );
     wp.blocks.unregisterBlockType( 'core-embed/tumblr' );
     wp.blocks.unregisterBlockType( 'core-embed/videopress' );
     wp.blocks.unregisterBlockType( 'core-embed/wordpress' );
     wp.blocks.unregisterBlockType( 'core-embed/wordpress-tv' );

} );
