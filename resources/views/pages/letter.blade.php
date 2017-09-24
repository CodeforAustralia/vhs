@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Letter -->

<div class="container">
<div class="row">
		<!-- Panel -->
		@foreach ($letters as $letter)
		<!-- Letter -->
		<div class="embed-responsive" style="width: 100%; padding-bottom: 141.42%;">
			<iframe class="embed-responsive-item" src="/actual-letter"></iframe>
		</div>
		@endforeach
	</div>
</div>

@endsection
