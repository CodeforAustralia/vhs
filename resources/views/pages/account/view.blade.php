@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

@if ( Auth::user()->usertype == '1' ) {{-- Modal --}}
<div id="modalWindow" class="modal fade" role="dialog">
	<div class="modal-dialog">
		{{-- Modal content --}}
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Send Sample Letters</h4>
			</div>
			<div class="modal-body">
				<p>
					Use this is for testing purposes only. You are essentailly assigning
					new services to Social Housing clients and simulating the Department
					sending letters in regard to those services.
					<b>DO NOT USE IN A PRODUCTION SYSTEM!</b>
				</p>
				<p>&nbsp;</p>
				<form class="form-horizontal" method="POST" action="{{ route('correspondence.sendLetters', $AccountDetails[0]->id) }}">
					{{ csrf_field() }}
					@include('letter.simulateLetters')
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Send</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endif

{{-- Get session messages --}}
@if (Session::has('message.content'))
<div id="sessionStatus" class="alert alert-{{ Session::get('message.level') }}">
	{{Session::get('message.content')}}
	<div class="closeCrossDiv"><a href="javascript: hideObject('#sessionStatus');">&times;</a></div>
</div>
@endif

<div class="container-wrapper">
	<div class="container">
		<div class="row">
			<div class="noSpace">
				<a class="backButton" href="">&lt;&nbsp;&nbsp;Back</a>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="welcome-banner">
							<div class="col-md-2">

							</div>
							<div class="col-md-7 services_heading_right">
								@if ( Auth::user()->usertype == '1' )
								<h3>{{ $AccountDetails[0]->firstName }} {{ $AccountDetails[0]->lastName }}</h3>
								<p>
									@if($AccountDetails[0]->last_login_at == NULL)
									{{ 'This user has never logged in before' }}
									@else
									{{$lastLoginAt = Request::get($AccountDetails[0]->last_login_at) }}{{ 'Last login '. date("F jS, Y h:i:s A", strtotime($lastLoginAt)) }}
									@endif
								</p>
								@else
								<h3>{{ $AccountDetails[0]->firstName }} {{ $AccountDetails[0]->lastName }}</h3>
								<p>
									@if($AccountDetails[0]->last_login_at == NULL)
									{{ 'This user has never logged in before' }}
									@else
									{{$lastLoginAt = Request::get($AccountDetails[0]->last_login_at) }}{{ 'Last login '. date("F jS, Y h:i:s A", strtotime($lastLoginAt)) }}
									@endif
								</p>
								@endif
							</div>

							<div class="col-md-3 services_heading_right">
								<div class="toolbox-banner mail_icon-link">
									@if ( Auth::user()->usertype == '1' )
									<p><a class="panel-heading_link" href="/notification/{{ $AccountDetails[0]->id }}">Send Notification</a></p>
									<p><a class="panel-heading_link" href="#modalWindow" data-toggle="modal" data-target="#modalWindow">Send Sample Letters</a></p>
									<p><a href="/accounts">All Users</a></p>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- Account Information --}}
<div class="container-wrapper services-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel-body account_panel">
					<div class="col-md-2">

					</div>
					<div class="col-md-7 services_heading_right">
						<div class="col-md-12 contact-address-details">
							<h4>Contact Details</h4>
						</div>
						<div class="col-md-12 contact-address-details">
							<p>Address: {{ $UserAddress[0]->address_1 }} <br class="show-sm-down"/>{{ $UserAddress[0]->suburb_town }} VIC {{ $UserAddress[0]->postcode }}</p>
						</div>
						<div class="col-md-12 contact-address-details">
							<p>
								E-mail: {{ $AccountDetails[0]->email }}
								<br/>
								Mobile: {{ $AccountDetails[0]->mobile }}
							</p>
						</div>
						<div class="col-md-12 contact-address-details">
							<h4>Services</h4>
						</div>
						<div class="col-md-6 contact-address-details">
							<p>
								Victorian Housing Register
								<br/>
								Effective Date 17 July, 2017
								<br/>
								#90181390812
							</p>
							<p>
								Bond - 8 King Rd,
								<br/>
								Collingwood VIC 3000
								<br/>
								#12490375623
							</p>
							<p>
								Bond - 1 Victoria St,
								<br/>
								Melbourne VIC 3000
								<br/>
								#234719051923
							</p>
							<h4>Privacy & Security</h4>
							<p>
								Security Password
								<br/>
								<span style="font-size: 24px">**********************</span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-8 col-xs-12 edit-button-wrapper">
					<a class="panel-heading_link edit_button" href="/accounts/edit/{{ $AccountDetails[0]->id }}"><button type="button" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Profile</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
@include('letter/interpreting')
@include('pages.dashboard.housing_office')

@endsection
