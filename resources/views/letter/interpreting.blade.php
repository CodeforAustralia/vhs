<!-- Interpreting Services -->
<div class="interpreting-wrapper">
  <div class="container">
    <div class="row">

      <div class="col-md-8 interpreting">
        <div class="speech-bubble">
          {!! file_get_contents(public_path('images/speech.svg')) !!}
        </div>
        <div class="sandwich-filler">
        </div>
        <div class="interpreting-text">
          Need an interpreter?
          <a href="http://www.housing.vic.gov.au/interpreter-services" target="_blank" role="button" class="need_housing_button">
            <span>Find out more about LanguageLink</span>
            <span class="external-link">{!! file_get_contents(public_path('images/ico-external-link.svg')) !!}</span>
          </a>
        </div>
      </div>

      <div class="col-md-8 interpreting-mobile">
        <div class="speech-bubble-mobile">
          {!! file_get_contents(public_path('images/speech-mobile.svg')) !!}
        </div>
        <div class="first-question">
          Need an interpreter?
        </div>

        <div class="sandwich-filler">
        </div>
        <div class="interpreting-text">
          <a href="http://www.housing.vic.gov.au/interpreter-services" target="_blank" role="button" class="need_housing_button">
            <span>More about LanguageLink</span>
            <span class="external-link">{!! file_get_contents(public_path('images/ico-external-link.svg')) !!}</span>
          </a>
        </div>
      </div>

    </div> <!-- /.row -->
  </div> <!-- /.container -->
</div> <!-- /.container-wrapper -->
