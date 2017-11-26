@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

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
							<div class="col-md-2">

							</div>
							<div class="col-md-7 services_heading_right">
								<h3>All Users</h3>
							</div>
							<div class="col-md-2 services_heading_right">
								<div class="toolbox-banner">
									<form action="/search" method="POST" role="search">
										{{ csrf_field() }}
										<div class="input-group">
											<input type="text" aria-label="Search User Field" class="form-control" name="q"
											placeholder="Search users">
											<span class="input-group-btn">
												<button type="submit" aria-label="Start searching account" class="btn btn-default">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
											</span>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-1 services_heading_right">
								<div class="toolbox-banner mail_icon-link">
									<form action="/search" method="POST" role="search">

									</div>
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
		<div class="panel-body">
			<div class="col-md-9 col-md-offset-2 services_heading_right">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th class="visible-md visible-lg">Email</th>
								<th>Gender</th> 
								<th>Client ID</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($AccountDetails as $AccountDetail)
							<tr>
								<td class="account-list"><a aria-label="Click here for {{ $AccountDetail->firstName }} {{ $AccountDetail->lastName }} Account Information" href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->firstName }} {{ $AccountDetail->lastName }}</a></td>
								<td class="visible-md visible-lg account-list"><a aria-label="Click here for {{ $AccountDetail->firstName }} {{ $AccountDetail->lastName }} Account Information" href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->email }}</a></td>
								<td class="account-list"><a aria-label="Click here for {{ $AccountDetail->firstName }} {{ $AccountDetail->lastName }} Account Information" href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->gender }}</a></td>
								<td class="account-list"><a aria-label="Click here for {{ $AccountDetail->firstName }} {{ $AccountDetail->lastName }} Account Information" href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->client_id }}</a></td>
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

@endsection
