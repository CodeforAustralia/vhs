@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

<!-- Get session messages -->
@if (Session::has('message.content'))
<div id="sessionStatus" class="alert alert-{{ Session::get('message.level') }}">
	@if ((Session::get('message.level')) == 'alert-danger')
		<strong>Something went wrong. </strong>
  @endif
	{{ Session::get('message.content') }}
	<div class="closeCrossDiv"><a href="javascript: hideObject('#sessionStatus');">&times;</a></div>
</div>
@endif

<div class="container-wrapper profile-wrapper">
		<div class="container">
			<div class="row">
				<div class class="col-md-1 welcome_banner-wrapper">
					<div class="noSpace">
						<a class="backButton" href="">&lt;&nbsp;&nbsp;Back</a>
					</div>
				</div>

				<div class="col-md-8 col-md-offset-2">
					<div class="account_title_header">
						<div class="panel-heading">
							<div class="welcome-banner">
								<div class="col-md-2">

								</div>
								<div class="col-md-7 services_heading_right">
										@if ( Auth::user()->usertype == '1' )
										<h3><a href="/accounts">All Accounts</a></h3>
										<div class="account_instructions">
											You may edit {{ $AccountDetails[0]->firstName }} {{ $AccountDetails[0]->lastName }}'s account information here
										</div>
										@else
										<h3>Edit Account Information</h3>
										<div class="account_instructions">
											You may edit your account information here
										</div>
										@endif
								</div>
								@if ( Auth::user()->usertype == '1' )
								<div class="col-md-3 services_heading_right">
									<div class="toolbox-banner mail_icon-link">
										<p><a class="panel-heading_link" href="/notification/{{ $AccountDetails[0]->id }}">Send Notification</a></p>
										<p><a class="panel-heading_link" href="#modalWindow" data-toggle="modal" data-target="#modalWindow">Send Sample Letters</a></p>
										<p><a href="/accounts">All Users</a></p>
									</div>
								</div>
								@endif
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
			<div class="account_edit_body">
				<div class="panel-body account_edit_panel">

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
