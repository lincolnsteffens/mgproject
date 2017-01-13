
var jq = jQuery;
var width = jq(window).width();
console.log(width);

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

  // Triggering paginations parent tab

  jq('.page-numbers').on('click', function() {
    var anchorText = jq(this).text();
    var textz = jq(this).parent('.vc_tta-panels-container');
    // .siblings('.vc_tta-tabs-container')
    // .children('a').text();
    console.log(textz);
  });

  /*****************Back to top******************/

  if (jq('.back-to-top').length) {
      var scrollTrigger = 100, // px
          backToTop = function () {
              var scrollTop = jq(window).scrollTop();
              if (scrollTop > scrollTrigger) {
                  jq('.back-to-top').addClass('back-show');
              } else {
                  jq('.back-to-top').removeClass('back-show');
              }
          };
      backToTop();
      jq(window).on('scroll', function () {
          backToTop();
      });
      jq('.back-to-top').on('click', function (e) {
          e.preventDefault();
          jq('html,body').animate({
              scrollTop: 0
          }, 700);
      });
  }


  /***Adjust tabs on Our People page in responsive layout**/

  if(width < 768) {
    jq('.page-our-people .vc_tta.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tab > a').click(function() {
      jq('html,body').animate({
        scrollTop: jq('.page-our-people .vc_tta-panels-container').offset().top},
        'slow');
  });
  }
});

jq( window ).on( "orientationchange", function( event ) {
  width = jq(window).width();
  if(width < 768) {
    jq('.page-our-people .vc_tta.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tab > a').click(function() {
      jq('html,body').animate({
        scrollTop: jq('.page-our-people .vc_tta-panels-container').offset().top},
        'slow');
  });
  }
});
