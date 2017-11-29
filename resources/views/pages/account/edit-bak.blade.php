@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

<!-- Get session messages -->
@if (Session::has('message.content'))
<div id="sessionStatus" class="alert alert-{{ Session::get('message.level') }}">
	<strong>Something went wrong.</strong> {{ Session::get('message.content') }}
	<div class="closeCrossDiv"><a href="javascript: hideObject('#sessionStatus');">&times;</a></div>
</div>
@endif
<div class="container-wrapper services-wrapper">
	<div class="container-wrapper">
		<div class="container">
			<div class="row">
				<div class="noSpace">
					<a class="backButton" href="">&lt;&nbsp;&nbsp;Back</a>
				</div>
				<div class="col-md-8 col-md-offset-2">
					<div class="account_title_header">
						<div class="panel-heading">
							<div class="col-md-2 hide-on-mobile">
							</div>
							<div class="col-md-7 services_heading_right">
								@if ( Auth::user()->usertype == '1' )
								<h3><a href="/accounts">All Accounts</a></h3>
								<p>You may edit {{ $AccountDetails[0]->firstName }} {{ $AccountDetails[0]->lastName }}'s account information here</p>
								@else
								<h3>Edit Account Information</h3>
								<p>You may edit your account information here</p>
								@endif
							</div>
							<div class="col-md-2 col-sm-5 services_heading_right">
								<div class="toolbox-banner mail_icon-link">
									<p class="acount_title_right"><a class="panel-heading_link" href="/accounts/{{ $AccountDetails[0]->id }}">Back to Profile</a></p>
								</div>
							</div>
							<div class="col-md-1 services_heading_right">
								<div class="toolbox-banner mail_icon-link">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="account_body">
				<div class="panel-body">
					<!-- Add client ID -->
					@if ( Auth::user()->usertype == '1' )

					<!-- IF ADMIN USER -->
					@include('pages.account.editAdmin')
					@else
					@include('pages.account.editNotAdmin')
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

@include('pages.dashboard.housing_office')
@endsection
