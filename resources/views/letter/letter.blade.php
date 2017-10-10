@extends('layouts.app') @section('title', 'Home') @section('content')
<!-- Letter -->

<div class="container">
  <div class="row">
<!--
    <a id="rippleZoomIn" class="btn btn-primary" href="#navigation-main" aria-label="Zoom In">
      <i class="fa  fa-search-plus" aria-hidden="true"></i>&nbsp;&nbsp;Zoom In
    </a>
    <a id="rippleZoomOut" class="btn btn-primary" href="#navigation-main" aria-label="Zoom Out">
      <i class="fa  fa-search-minus" aria-hidden="true"></i>&nbsp;&nbsp;Zoom Out
    </a>
-->
    <a id="rippleDownload" class="btn btn-primary" href="#navigation-main" aria-label="Download">
      <i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;&nbsp;Download
    </a>
    <a id="ripplePrint" class="btn btn-primary" href="#navigation-main" aria-label="Print">
      <i class="fa fa-print" aria-hidden="true"></i>&nbsp;&nbsp;Print
    </a>
  </div>

  <div class="row">
    @foreach ($letters as $letter)
    <div class="embed-responsive" style="width: 100%; padding-bottom: 141.42%;">
      <iframe id="letterIframe" class="embed-responsive-item" src="/letter-pdfjs/{{$letter->id}}"></iframe>
    </div>
    @endforeach
  </div>
</div>

@endsection
