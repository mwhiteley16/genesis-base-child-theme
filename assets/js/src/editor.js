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

     // column styles
     wp.blocks.registerBlockStyle(
          'core/columns',
          [
               {
                    name: 'default',
                    label: 'Default',
                    isDefault: true,
               },
               {
                    name: 'three-column',
                    label: 'Three Column',
               },
               {
                    name: 'four-column',
                    label: 'Four Column',
               },
               {
                    name: 'five-column',
                    label: 'Five Column',
               },
               {
                    name: 'wide-break',
                    label: 'Wide Break',
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


     // image styles
     wp.blocks.registerBlockStyle(
          'core/heading',
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

     // image styles
     wp.blocks.unregisterBlockStyle(
     	'core/image',
     	[ 'rounded' ]
     );

     wp.blocks.registerBlockStyle(
          'core/image',
          [
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


     // media text styles
     wp.blocks.registerBlockStyle(
          'core/media-text',
          [
               {
                    name: 'default',
                    label: 'Default',
                    isDefault: true,
               },
               {
                    name: 'wide-break',
                    label: 'Wide Break',
               },
               {
                    name: 'mobile-image-top',
                    label: 'Mobile Image Top',
               }
          ]
     );


     // paragraph styles
     wp.blocks.registerBlockStyle(
          'core/paragraph',
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
                    name: 'tablet-hide',
                    label: 'Tablet Hidden',
               },
               {
                    name: 'mobile-hide',
                    label: 'Mobile Hidden',
               },
               {
                    name: 'desktop-hide',
                    label: 'Desktop Hidden',
               }
          ]
     );


     // REMOVE CORE BLOCKS THAT AREN'T NEEDED

     // design
     wp.blocks.unregisterBlockType( 'core/separator' );

     // formatting
     wp.blocks.unregisterBlockType( 'core/preformatted' );
     wp.blocks.unregisterBlockType( 'core/pullquote' );
     wp.blocks.unregisterBlockType( 'core/verse' );

     // layouts
     wp.blocks.unregisterBlockType( 'core/more' );
     wp.blocks.unregisterBlockType( 'core/nextpage' );

     // widgets
     wp.blocks.unregisterBlockType( 'core/archives' );
     wp.blocks.unregisterBlockType( 'core/calendar' );
     wp.blocks.unregisterBlockType( 'core/categories' );
     wp.blocks.unregisterBlockType( 'core/latest-comments' );
     wp.blocks.unregisterBlockType( 'core/latest-posts' );
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
     //wp.blocks.unregisterBlockType( 'core-embed/funnyordie' );
     //wp.blocks.unregisterBlockType( 'core-embed/hulu' );
     wp.blocks.unregisterBlockType( 'core-embed/imgur' );
     wp.blocks.unregisterBlockType( 'core-embed/issuu' );
     wp.blocks.unregisterBlockType( 'core-embed/kickstarter' );
     wp.blocks.unregisterBlockType( 'core-embed/meetup-com' );
     wp.blocks.unregisterBlockType( 'core-embed/mixcloud' );
     //wp.blocks.unregisterBlockType( 'core-embed/photobucket' );
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
