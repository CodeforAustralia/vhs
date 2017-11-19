// Ripple Download, Print and Expand button events to the iframe
$('#rippleDownload').on('click',function(e){
  $('#letterIframe').contents().find('#download').trigger( "click" );
    e.preventDefault();
});

$('#ripplePrint').on('click',function(e){
  $('#letterIframe').contents().find('#print').trigger( "click" );
    e.preventDefault();
});

$('#rippleFullScreen').on('click',function(e){
  $('#letterIframe').contents().find('#presentationMode').trigger( "click" );
    e.preventDefault();
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

// Make sure first 2 tiles on first page have the same hover effect
$( '#letters-0 a' ).hover(
  function() {
    $('#letters-0 a').css("background-color", "#005199");
    $('#letters-0 a').css("border-color", "#005199");
    $('#letters-1 a').css("background-color", "#005199");
    $('#letters-1 a').css("border-color", "#005199");
  }, function() {
    $('#letters-0 a').css("background-color", "#0062aa");
    $('#letters-0 a').css("border", "none");
    $('#letters-1 a').css("background-color", "#0062aa");
    $('#letters-1 a').css("border", "none");
  }
);

$( '#letters-1 a' ).hover(
  function() {
    $('#letters-0 a').css("background-color", "#005199");
    $('#letters-0 a').css("border-color", "#005199");
    $('#letters-1 a').css("background-color", "#005199");
    $('#letters-1 a').css("border-color", "#005199");
  }, function() {
    $('#letters-0 a').css("background-color", "#0062aa");
    $('#letters-0 a').css("border", "none");
    $('#letters-1 a').css("background-color", "#0062aa");
    $('#letters-1 a').css("border", "none");
  }
);

/* Functions */

// Make wrapper around the iframe (that contains the rendered PDF document)
// the same height as the rendered document
function fix_heights_on_pdf2html() {
  viewerWidth = $('#viewer').width();
  ( viewerWidth >= 750 ) ? bottomOffset = 41 : bottomOffset = 10; // (41px for margin + 9 padding for page border = 50)
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
