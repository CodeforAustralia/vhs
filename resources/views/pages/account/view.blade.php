@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="float-left">Account Details</span>
					<span class="float-right"><a class="panel-heading_divnk" href="/accountdetails/edit/{{ $AccountDetails[0]->id }}">Edit</a></span>
				</div>
				<div class="panel-body">
					@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }}</p>
					@endif
					@if ($AccountDetails[0]->service_id = 'NULL')
					<p class="alert alert-danger">
						You don't have any services at the moment. Please refer to <a href="http://www.housing.vic.gov.au/" target="_blank" title="Victorian Housing Website">Victorian Housing website</a> for more information about available service.  
					</p>
					@else {{ $AccountDetails[0]->service_id }} @endif
					<ul>
						<div class="col-md-3">Name:</div>
						<div class="col-md-9"><a href="/accountdetails/{{ $AccountDetails[0]->id }}">{{ $AccountDetails[0]->firstName }}, {{ $AccountDetails[0]->lastName }}</a></div>
						<div class="col-md-3">Email: </div>
						<div class="col-md-9">{{ $AccountDetails[0]->email }}</div>
						<div class="col-md-3">Gender: </div>
						<div class="col-md-9">
							@if ($AccountDetails[0]->gender = 'NULL') Not Defined @else {{ $AccountDetails[0]->gender }} @endif
						</div>
						<div class="col-md-3">Client ID: </div>
						<div class="col-md-9">
							@if ($AccountDetails[0]->client_id = 'NULL') No client ID @else {{ $AccountDetails[0]->client_id }} @endif
						</div>
						<div class="col-md-3">Service ID: </div>
						<div class="col-md-9">
							@if ($AccountDetails[0]->service_id = 'NULL') No service ID @else {{ $AccountDetails[0]->service_id }} @endif
						</div>
						<div class="col-md-3">Address Line 1: </div>
						<div class="col-md-9">
							@if ($AccountDetails[0]->address_1 = 'NULL') No address line 1 @else {{ $AccountDetails[0]->address_1 }} @endif
						</div>
						<div class="col-md-3">Address Line 2: </div>
						<div class="col-md-9">
							@if ($AccountDetails[0]->address_2 = 'NULL') No address line 2 @else {{ $AccountDetails[0]->address_2 }} @endif
						</div>
						<div class="col-md-3">Address Line 3: </div>
						<div class="col-md-9">
							@if ($AccountDetails[0]->address_3 = 'NULL') No address line 3 @else {{ $AccountDetails[0]->address_3 }} @endif
						</div>
						<div class="col-md-3">Suburb/Town: </div>
						<div class="col-md-9">
							@if ($AccountDetails[0]->suburb_town = 'NULL') No suburb @else {{ $AccountDetails[0]->suburb_town }} @endif
						</div>
						<div class="col-md-3">Suburb/Town: </div>
						<div class="col-md-9">
							@if ($AccountDetails[0]->postcode = 'NULL') No postcode @else {{ $AccountDetails[0]->postcode }} @endif
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
