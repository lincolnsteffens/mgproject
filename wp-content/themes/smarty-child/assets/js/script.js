
var jq = jQuery;

jq( window ).on( 'load', function () {

	// Read More functionality

	if ( jq( 'div' ).hasClass( 'news-page' ) ) {

		jq( '.stm-posts .entry-summary a' ).each( function( ) {
			var readmoreUrl = jq( this ).attr( 'href' );

			if( readmoreUrl.indexOf( "marcusgrahamproject" ) >= 0 ) {} else {
				jq( this ).attr( 'target', '_blank' );
			}

		});
	}

	// Removing Title Href functionality

	jq( '.stm-posts .entry-title a, .stm-posts .entry-thumbnail a, .stm-posts .entry-meta a' ).removeAttr( 'href' );


});
