
var jq = jQuery;

jq( window ).on( 'load', function () {
	// Read More functionality

  if ( jq( 'body' ).hasClass( 'page-news-list-vc' ) || jq( 'body' ).hasClass( 'archive' ) || jq( 'body' ).hasClass( 'home' )) {
    var base_url = window.location.host;
    jq( '.stm-posts .entry-summary a' ).each( function( ) {
      var readmoreUrl = jq( this ).attr( 'href' );
      if( readmoreUrl.indexOf( base_url ) == -1 ) {
        jq( this ).attr( 'target', '_blank' );
      }
    });
  }

  // Removing Title Href functionality

  if ( jq( 'div' ).hasClass( 'category-news' )) {
    jq( '.stm-posts .category-news .entry-title a, .stm-posts .category-news .entry-thumbnail a, .stm-posts .category-news .entry-meta a' ).removeAttr( 'href' );
  }

  // URL CHANGING FUNCTIONALITY

  var currentUrl,
      newUrl;

  var urlChanger = function( currentUrl, newUrl ){
    setTimeout( function(){
      currentUrl = window.location.href;
      newUrl = currentUrl.replace( /[#].*$/, '' );
      history.pushState( "", "", newUrl );
    }, 500);
  }

  jq( 'a' ).on( 'click', function() {
    urlChanger( currentUrl, newUrl );
  });

  urlChanger( currentUrl, newUrl );
});
