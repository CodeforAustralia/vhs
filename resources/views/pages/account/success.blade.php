@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="float-left">Account Details</span>
					<!-- <span class="float-right">Edit</span> -->
				</div>
				<div class="panel-body">
					<ul>
						@if(Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
