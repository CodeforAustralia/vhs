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