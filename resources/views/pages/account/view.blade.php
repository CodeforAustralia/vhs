@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="float-left">Account Details</span>
					<span class="float-right"><a class="panel-heading_link" href="/accountdetails/edit/{{ $AccountDetails[0]->id }}">Edit</a></span>
				</div>
				<div class="panel-body">
					<ul>
						<li><a href="/accountdetails/{{ $AccountDetails[0]->id }}">{{ $AccountDetails[0]->firstName }}, {{ $AccountDetails[0]->lastName }}</a></li>
						<li>Email: {{ $AccountDetails[0]->email }}</li>
						<li>Gender: {{ $AccountDetails[0]->gender }}</li>
						<li>Client ID:{{ $AccountDetails[0]->client_id }}</li>
						<li>Service ID: {{ $AccountDetails[0]->reference_id }}</li>
						<li>Address: {{ $UserAddress[0]->address_1 }}, {{ $UserAddress[0]->suburb_town }}, {{ $UserAddress[0]->postcode }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
