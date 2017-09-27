@extends('layouts.app') @section('title', 'Home') @section('content')
<!-- Letter -->

<div class="container">
  <div class="row">
    @foreach ($letters as $letter)
    <div class="embed-responsive" style="width: 100%; padding-bottom: 141.42%;">
      <iframe class="embed-responsive-item" src="/letter-pdfjs/{{$letter->id}}"></iframe>
    </div>
    @endforeach
  </div>
</div>

@endsection
