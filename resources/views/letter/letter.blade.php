@extends('layouts.app') @section('title', 'Home') @section('content')
@foreach ($letters as $letter)


<div class="container-wrapper">
  <div class="container">
    <!-- Template summary -->
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12 welcome_banner-wrapper">
        <div class="welcome-banner">
          <h3>
          @if (!empty($service))
          {{$service->type}} - {{$service->description}}<br/>
          @endif
          @if (!empty($letter->template->summary))
          {{$letter->template->summary}}
          @endif
        </h3>
        </div>
      </div>
    </div>

    <!-- Buttons -->
    <div class="row">
      <div class="col-md-8 welcome_banner-wrapper btn-vhs_wrapper">
        <div class="btn-group" role="group" aria-label="...">
        <a id="rippleDownload" class="btn btn-primary btn-vhs" href="#navigation-main" aria-label="Download">
          {!! file_get_contents(public_path('images/ico-download.svg')) !!}</i>&nbsp;&nbsp;Download&nbsp;PDF
        </a>
        <a id="ripplePrint" class="btn btn-primary btn-vhs" href="#navigation-main" aria-label="Print">
          {!! file_get_contents(public_path('images/ico-print.svg')) !!}</i>&nbsp;&nbsp;Print
        </a>
        <a id="rippleFullScreen" class="btn btn-primary btn-vhs" href="#navigation-main" aria-label="Full Screen">
          {!! file_get_contents(public_path('images/ico-fullscreen.svg')) !!}</i>&nbsp;&nbsp;Full Screen
        </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-wrapper services-wrapper no-padding with-top-margin">
  <div class="container">
    <div class="row">
      <!-- Loader -->
      <div class="loading">
        <img src="{{ asset('images/loading.gif') }}"/>
      </div>
      <!-- Letter (in iframe)-->
        <div id="letterIframeWrapper" class="embed-responsive">
          <iframe id="letterIframe" class="embed-responsive-item" src="/letter-pdfjs/{{$letter->id}}#zoom=page-width" allowfullscreen></iframe>
        </div>
    </div>
  </div>
</div>


@endforeach
@endsection
