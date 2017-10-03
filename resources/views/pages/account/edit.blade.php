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
						@if ( Auth::user()->usertype == '1' )
						<h3><a href="/accounts">All Accounts</a></h3>
						@else
						<h3>Account Details</h3>
						@endif
					</div>
					<div class="col-md-2 services_heading_right">
						<div class="toolbox-banner mail_icon-link">
							<p class="pull-right"><a class="panel-heading_link" href="/accounts/{{ $AccountDetails[0]->id }}">Back to Profile</a></p>
						</div>
					</div>
					<div class="col-md-1 services_heading_right">
						<div class="toolbox-banner mail_icon-link">
						</div>
					</div>
				</div>
				<div class="panel-body">
					@if(Session::has('message'))
					<p class="alert alert-danger">{{ Session::get('message') }}</p>
					@endif
					<!-- Add client ID -->
					@if ( Auth::user()->usertype == '1' )

					<form class="form-horizontal" method="POST" action="{{ route('accounts.updatebyadmin', $AccountDetails[0]->id) }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('fistName') ? ' has-error' : '' }}">
							<label for="firstName" class="col-md-4 control-label">First Name:</label>
							<div class="col-md-6">	
								<input id="firstName" type="text" class="form-control" name="firstName" value="{{ $AccountDetails[0]->firstName }}"/>

								@if ($errors->has('firstName'))
								<span class="help-block">
									<strong>{{ $errors->first('firstName') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
							<label for="lastName" class="col-md-4 control-label">Last Name:</label>
							<div class="col-md-6">
								<input id="lastName" type="text" class="form-control" name="lastName" value="{{ $AccountDetails[0]->lastName }}"/>

								@if ($errors->has('lastName'))
								<span class="help-block">
									<strong>{{ $errors->first('lastName') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-mail:</label>
							<div class="col-md-6">
								<input id="email" type="text" class="form-control" name="email" value="{{ $AccountDetails[0]->email }}"/>

								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
							<label for="mobile" class="col-md-4 control-label">Mobile:</label>
							<div class="col-md-6">	
								<input id="email" type="mobile" class="form-control" name="mobile" value="{{ $AccountDetails[0]->mobile }}"/>

								@if ($errors->has('mobile'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('client_id') ? ' has-error' : '' }}">
							<label for="client_id" class="col-md-4 control-label">Client ID:</label>
							<div class="col-md-6">	
								<input id="client_id" type="number" class="form-control" name="client_id" value="{{ $AccountDetails[0]->client_id }}" autofocus>

								@if ($errors->has('client_id'))
								<span class="help-block">
									<strong>{{ $errors->first('client_id') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('reference_id') ? ' has-error' : '' }}">
							<label for="reference_id" class="col-md-4 control-label">Service ID:</label>
							<div class="col-md-6">	
								<input id="client_id" type="number" class="form-control" name="reference_id" value="{{ $AccountDetails[0]->reference_id }}" autofocus>

								@if ($errors->has('reference_id'))
								<span class="help-block">
									<strong>{{ $errors->first('reference_id') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="col-sm-4 control-label">New Password</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Submit
								</button>
								<br/>
								Request change of details by submitting the form with the changes.
							</div>
						</div>
					</form>
					@else


					<!-- IF NOT ADMIN USER -->
					<form class="form-horizontal" method="POST" action="{{ route('accounts.update', $AccountDetails[0]->id) }}">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="firstName" class="col-md-4 control-label">First Name:</label>
							<div class="col-md-6">	
								<input id="firstName" type="text" class="form-control" name="firstName" value="{{ $AccountDetails[0]->firstName }}" required autofocus>
							</div>
						</div>

						<div class="form-group">
							<label for="lastName" class="col-md-4 control-label">Last Name:</label>
							<div class="col-md-6">
								<input id="lastName" type="text" class="form-control" name="lastName" value="{{ $AccountDetails[0]->lastName }}" required autofocus>
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-Mail:</label>
							<div class="col-md-6">	
								<input id="email" type="email" class="form-control" name="email" value="{{ $AccountDetails[0]->email }}" required autofocus>

								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>
						

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="current_password" class="col-sm-4 control-label">Current Password</label>
							<div class="col-sm-6">
								<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
								<input type="password" class="form-control" id="current_password" name="current_password" placeholder="Password">

							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="col-sm-4 control-label">New Password</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
							<div class="col-sm-6">
								<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Submit
								</button>
								<br/>
								Request change of details by submitting the form with the changes.
							</div>
						</div>
					</form>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
