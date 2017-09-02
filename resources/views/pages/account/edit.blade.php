@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Account Details</div>
                <div class="panel-body">
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
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="{{ $AccountDetails[0]->password }}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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
			</div>
		</div>
	</div>
</div>
@endsection
