@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Letter -->

  <div class="container">
      <div class="row">

<!-- Panel -->

@foreach ($letters as $letter)
                   <!-- Letter -->
                     <div style="width:100%;height:100%;">
                     <iframe src="http://localhost:8080/actual-letter" height="800px" width="100%"></iframe>
                     </div>
@endforeach

      </div>
    </div>

@endsection
