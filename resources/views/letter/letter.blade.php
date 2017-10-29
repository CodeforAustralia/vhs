@extends('layouts.app') @section('title', 'Home') @section('content')

<!-- Buttons -->
<div class="container-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <a id="rippleDownload" class="btn btn-vhs" href="#navigation-main" aria-label="Download">
          {!! file_get_contents(public_path('images/download.svg')) !!}</i>&nbsp;&nbsp;Download
        </a>
        <a id="ripplePrint" class="btn btn-vhs" href="#navigation-main" aria-label="Print">
          {!! file_get_contents(public_path('images/print.svg')) !!}</i>&nbsp;&nbsp;Print
        </a>
        <a id="rippleFullScreen" class="btn btn-vhs" href="#navigation-main" aria-label="Full Screen">
          {!! file_get_contents(public_path('images/full-screen.svg')) !!}</i>&nbsp;&nbsp;Full Screen
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Letter -->
<div class="container-wrapper tools-wrapper no-padding with-top-margin">
  <div class="container">
    <div class="row">
      @foreach ($letters as $letter)
      <div class="embed-responsive pdf2html-wrapper">
        <iframe id="letterIframe" class="embed-responsive-item" src="/letter-pdfjs/{{$letter->id}}#zoom=page-width" allowfullscreen></iframe>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
