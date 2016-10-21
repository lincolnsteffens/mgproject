
var jq = jQuery;

jq( window ).on( 'load', function () {
	if ( jq( 'div' ).hasClass( 'news-page' ) ) {

		jq( '.stm-posts .entry-summary a' ).each( function( ) {
			var readmoreUrl = jq( this ).attr( 'href' );

			if( readmoreUrl.indexOf( "marcusgrahamproject" ) >= 0 ) {} else {
				jq( this ).attr( 'target', '_blank' );
			}

		});
	}

});
