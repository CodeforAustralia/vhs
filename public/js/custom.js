// Ripple Download, Print and Expand button events to the iframe
$('#rippleDownload').on('click',function(e){
    $('#letterIframe').contents().find('#download').trigger( "click" );
});

$('#ripplePrint').on('click',function(e){
    $('#letterIframe').contents().find('#print').trigger( "click" );
});

$('#rippleFullScreen').on('click',function(e){
    $('#letterIframe').contents().find('#presentationMode').trigger( "click" );
});

// Add some extra styling for navbar
$('.navbar-toggle').click(function(){
    documentHeight = $(document).height();
    $( '#transparent-overlay').css("height",documentHeight);
    $( '#transparent-overlay').toggle();
    if ($( '#transparent-overlay' ).is(":visible")) {
      $( '.navbar-inverse').css("box-shadow","0px 10px 25px 5px rgba(0,0,0,0.65)");
      $( '.navbar-inverse').css("-webkit-box-shadow","0px 10px 25px 5px rgba(0,0,0,0.65)");
      $( '.navbar-inverse').css("-moz-box-shadow","0px 10px 25px 5px rgba(0,0,0,0.65)");
    } else {
      $( '.navbar-inverse').css("box-shadow","none");
      $( '.navbar-inverse').css("-webkit-box-shadow","none");
      $( '.navbar-inverse').css("-moz-box-shadow","none");
    }
});

/* Functions */

// Make wrapper around the iframe (that contains the rendered PDF document)
// the same height as the rendered document
function fix_heights_on_pdf2html() {
  viewerWidth = $('#viewer').width();
// condition ? value-if-true : value-if-false
  ( viewerWidth > 767) ? bottomOffset = 30 : bottomOffset = 10;
  heightShouldBe = $('#viewer').height() + bottomOffset;
  parent.$('body').contents().find('.pdf2html-wrapper').height(heightShouldBe);
}
