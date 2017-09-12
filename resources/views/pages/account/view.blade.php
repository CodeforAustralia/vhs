@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="welcome-banner">
						<div class="col-md-2">

						</div>
						<div class="col-md-7 services_heading_right">
							@if ( Auth::user()->usertype == '1' )
							<h3><a href="/accounts">All Accounts</a></h3>
							@else
							<h3>Account Details</h3>
							@endif
						</div>
						<div class="col-md-2 services_heading_right">
							<div class="toolbox-banner mail_icon-link">
								<p class="pull-right"><a class="panel-heading_link" href="/accountdetails/edit/{{ $AccountDetails[0]->id }}">Edit</a></p>
							</div>
						</div>
						<div class="col-md-1 services_heading_right">
							<div class="toolbox-banner mail_icon-link">
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }}</p>
					@endif
					@if ($AccountDetails[0]->reference_id == '')
					<p class="alert alert-danger">
						You don't have any services at the moment. Please refer to <a href="http://www.housing.vic.gov.au/" target="_blank" title="Victorian Housing Website">Victorian Housing website</a> for more information about available service.  
					</p>
					@else <p class="alert alert-success">
					You have a service  
				</p> @endif
				<ul>
					<div class="col-md-3">Name:</div>
					<div class="col-md-9"><a href="/accountdetails/{{ $AccountDetails[0]->id }}">{{ $AccountDetails[0]->firstName }}, {{ $AccountDetails[0]->lastName }}</a></div>
					<div class="col-md-3">Email: </div>
					<div class="col-md-9">{{ $AccountDetails[0]->email }}</div>
					<div class="col-md-3">Gender: </div>
					<div class="col-md-9">
						@if ($AccountDetails[0]->gender == '') Not Defined @else {{ $AccountDetails[0]->gender }} @endif
					</div>
					<div class="col-md-3">Client ID: </div>
					<div class="col-md-9">
						@if ($AccountDetails[0]->client_id == '') No client ID @else {{ $AccountDetails[0]->client_id }} @endif
					</div>
					<div class="col-md-3">Service ID: </div>
					<div class="col-md-9">
						@if ($AccountDetails[0]->reference_id == '') No service ID @else {{ $AccountDetails[0]->reference_id }} @endif
					</div>
					<div class="col-md-3">Address Line 1: </div>
					<div class="col-md-9">
						@if ($UserAddress[0]->address_1 == '') No address line 1 @else {{ $UserAddress[0]->address_1 }} @endif
					</div>
					<div class="col-md-3">Address Line 2: </div>
					<div class="col-md-9">
						@if ($UserAddress[0]->address_2 == '') No address line 2 @else {{ $UserAddress[0]->address_2 }} @endif
					</div>
					<div class="col-md-3">Address Line 3: </div>
					<div class="col-md-9">
						@if ($UserAddress[0]->address_3 == '') No address line 3 @else {{ $UserAddress[0]->address_3 }} @endif
					</div>
					<div class="col-md-3">Suburb/Town: </div>
					<div class="col-md-9">
						@if ($UserAddress[0]->suburb_town == '') No suburb @else {{ $UserAddress[0]->suburb_town }} @endif
					</div>
					<div class="col-md-3">Suburb/Town: </div>
					<div class="col-md-9">
						@if ($UserAddress[0]->postcode == '') No postcode @else {{ $UserAddress[0]->postcode }} @endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
