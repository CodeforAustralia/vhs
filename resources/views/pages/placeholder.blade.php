@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

<div class="container-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-6  col-sm-12  col-xs-12  welcome_banner-wrapper">
				<div class="placeholder-banner">
					<h3>Uh oh! This page is not available. </h3>
				
					<h5>The page that you are viewing doesnt seem to be available at the moment.</h5>
					<h5>This might be part of the future state of the concept or the page is under construction.</h5>
				</div>
				<div class="placeholder-banner">
					<button type="button" class="btn btn-primary"><a class="panel-heading_link edit_button" href="/"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Go back to first page</a></button>
					</div>
				</div>
			</div>
		</div>		
	</div>

	@endsection