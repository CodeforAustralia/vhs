// Ripple Print and Expand button events to the iframe
$('#ripplePrint').on('click',function(e){
  $('#letterIframe').contents().find('#print').trigger( "click" );
});

$('#rippleFullScreen').on('click',function(e){
  $('#letterIframe').contents().find('#presentationMode').trigger( "click" );
});

// Back button functionality
$('.backButton').on('click',function(e){
  window.history.back();
  e.preventDefault();
});

//If IE do not give the option to go Full screen
isIE = navigator.userAgent.indexOf('Trident') >= 0; // this is the same way of detecting the IE browser as in pdf.js
if (isIE) {
  $('#rippleFullScreen').css("display","none");
  $('#ripplePrint').css("margin-left","20px");
  $('#ripplePrint').css("border-radius","5px");
  $('#rippleDownload').css("border-radius","5px");
  }

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

$(function () {
    $(".all_letter_list").slice(0, 10).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".all_letter_list:hidden").slice(0, 10).slideDown();
        if ($(".all_letter_list:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 0);
    });
});

$('a[href=#top]').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 100);
    return false;
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.totop a').fadeIn();
    } else {
        $('.totop a').fadeOut();
    }
});
