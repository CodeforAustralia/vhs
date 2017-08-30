@extends('layouts.page')

@section('title', 'PDF')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">

				<div class="panel-heading">Generate</div>
				<ul>
					@foreach ($AccountDetails as $AccountDetail)
					<li>firstname: {{ $firstName }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
