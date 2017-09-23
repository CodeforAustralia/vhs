@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Letter -->

  <div class="container">
      <div class="row">

<!-- Panel -->
<?php
$protocol=getenv('SERVER_PROTOCOL');
$server=getenv('SERVER_ADDR') ;
?>

@foreach ($letters as $letter)
                   <!-- Letter -->
                     <div style="width:100%;height:100%;">
                     <iframe src="{{$protocol}}{{$server}}/actual-letter" height="800px" width="100%">
                     </iframe>
                     </div>
@endforeach

      </div>
    </div>

@endsection
