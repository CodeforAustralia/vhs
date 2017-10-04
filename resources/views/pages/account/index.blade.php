@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="col-md-2">

					</div>
					<div class="col-md-7 services_heading_right">
						<h3>All Users</h3>
					</div>
					<div class="col-md-2 services_heading_right">
						<div class="toolbox-banner mail_icon-link">
						</div>
					</div>
					<div class="col-md-1 services_heading_right">
						<div class="toolbox-banner mail_icon-link">
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="col-md-9 services_heading_right">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Name</th>
										<th class="visible-md visible-lg">Email</th>
										<th>Gender</th> 
										<th>Client ID</th>
									</tr>
								<thead>
								<tbody>
									@foreach ($AccountDetails as $AccountDetail)
										<tr>
											<td class="account-list"><a href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->firstName }} {{ $AccountDetail->lastName }}</a></td>
											<td class="visible-md visible-lg account-list"><a href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->email }}</a></td>
											<td class="account-list"><a href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->gender }}</a></td>
											<td class="account-list"><a href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->client_id }}</a></td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						{{ $AccountDetails->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
