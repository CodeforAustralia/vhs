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

// Disable folowing phone link on tablet and desktop
$('.phone').on('click',function(e){
  documentWidth = $(document).width();
  if ( documentWidth >= 768 ) {
    e.preventDefault();
  }
});

// Add some extra styling for navbar
$(document).ready(function(){
  $('.navbar-toggle').click(function(){
    /* show white overlay */
    documentHeight = $(document).height();
    $( '#transparent-overlay').css("height",documentHeight);
    $( '#transparent-overlay').toggle();
  });
});

/* Functions */

// Make wrapper around the iframe (that contains the rendered PDF document)
// the same height as the rendered document
function fix_heights_on_pdf2html() {
  viewerWidth = $('#viewer').width();
  ( viewerWidth > 767 ) ? bottomOffset = 50 : bottomOffset = 10;
  heightShouldBe = $('#viewer').height() + bottomOffset;
  parent.$('body').contents().find('#letterIframeWrapper').height(heightShouldBe);
  parent.$('body').contents().find('.loading').hide();
}

function hideObject( objectToHide ) {
  $(objectToHide).hide();
}

$(document).ready(function () {
    $('#password_checkbox').change(function () {
        if (!this.checked)
        //  ^
           $('#password_hide').fadeOut('slow');
        else
            $('#password_hide').fadeIn('slow');
    });
});
