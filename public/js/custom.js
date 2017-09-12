/* Quick Escape
- reminiscent of the 'Hide Page' button on http://www.vic.gov.au/familyviolence/recommendations.html */
$('.btn-danger').on('click',function(e){window.location.href='https://www.google.com.au/';});

/* Toggle service panels to show all letters */
$('.show-more').on('click',function(e){
  current_text = $(this).text();
  if (current_text == "Show More") {
    $(this).parent().find(".row").show();
    $(this).parent().find(".row").first().css("padding-bottom","0");
    current_text = "Show Less";
  } else {
    $(this).parent().find(".row").hide();
    $(this).parent().find(".row").first().show();
    $(this).parent().find(".row").first().css("padding","30px 0px");
    current_text = "Show More";
  }
  $(this).text(current_text);
});

// Trigger first click to collapse all service panels
$( ".show-more" ).trigger( "click" );
