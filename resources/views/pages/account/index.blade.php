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
					<div class="col-md-2">

					</div>
					<div class="col-md-7 services_heading_right">
						<ul>
							@foreach ($AccountDetails as $AccountDetail)
							<li><a href="/accountdetails/{{$AccountDetail->id}}">{{ $AccountDetail->firstName }} {{ $AccountDetail->lastName }}</a></li>
							@endforeach
						</ul>
						{{ $AccountDetails->links() }}
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
			</div>
		</div>
	</div>
</div>
@endsection
