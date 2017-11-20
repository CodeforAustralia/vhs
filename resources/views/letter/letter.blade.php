@extends('layouts.app') @section('title', 'Home')
@section('content')
@foreach ($letters as $letter)

<div class="container-wrapper">
  <div class="container">
    <!-- Template summary -->
    <div class="row">
      <div class="col-md-8 welcome_banner-wrapper">
        <div class="welcome-banner letter-banner">
          <h3>
          @if (!empty($service))
          {{$service->type}} - {{$service->description}}<br/>
          @endif
          @if (!empty($letter->template->summary))
          {{$letter->template->summary}}<br/>
          @endif
        </h3>
          <span class="ref_no">Reference Number: {{$letter->reference_id}}</span>
        </div>
      </div>
    </div>

    <!-- Buttons -->
    <div class="row">
      <div class="col-md-8 welcome_banner-wrapper btn-vhs_wrapper">
        <div class="btn-group" role="group">
          <a href="/to-download/{{$letter->id}}" id ="rippleDownload2" class="btn btn-primary btn-vhs" href="" aria-label="Download">
              {!! file_get_contents(public_path('images/ico-download.svg')) !!}</i>&nbsp;&nbsp;Download&nbsp;PDF
          </a>
          <a href="javascript: return false;" id="ripplePrint" class="btn btn-primary btn-vhs" href="" aria-label="Print">
              {!! file_get_contents(public_path('images/ico-print.svg')) !!}</i>&nbsp;&nbsp;Print
          </a>
          <a href="javascript: return false;" id="rippleFullScreen" class="btn btn-primary btn-vhs" href="" aria-label="Full Screen">
              {!! file_get_contents(public_path('images/ico-fullscreen.svg')) !!}</i>&nbsp;&nbsp;Full Screen
          </a>
        </div>
      </div>
    </div>
  </div>  <!-- /container-wrapper -->
</div> <!-- /container -->

<div class="container-wrapper services-wrapper no-padding letter-wrapper">
  <div class="container">
    <div class="row">
      <!-- Loader -->
      <div class="loading">
        Loading&nbsp;
        <img src="{{ asset('images/rendering.gif') }}" />
      </div>
      <!-- Letter (in iframe)-->
      <div id="letterIframeWrapper" class="embed-responsive">
<!--        <iframe id="letterIframe" class="embed-responsive-item" src="/letter-pdfjs/{{$letter->id}}" allowfullscreen mozallowfullscreen webkitallowfullscreen></iframe> -->
        <iframe id="letterIframe" title="The Letter" class="embed-responsive-item" src="/letter-pdfjs/{{$letter->id}}" allowfullscreen mozallowfullscreen webkitallowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

@include('letter/interpreting') @include('pages.dashboard.housing_office')
@endforeach
@endsection
