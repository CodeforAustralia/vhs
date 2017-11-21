@extends('layouts.app') @section('content')
<div class="container-wrapper login-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-10 col-xs-12 services_toolbox">
        <div class="panel panel-login">

          <div class="panel-heading">
            <div class="welcome-banner">
              <h3>Sign in to Housing Services Victoria</h3>
            </div>
          </div>

          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Email</label>
                <div>
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                    <span class="help-block login-help">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Password</label>
                <div>
                  <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                    <span class="help-block">{{ $errors->first('password') }}</span>
                  @endif
                </div>
                <a class="btn btn-link login-prompt" href="{{ route('password.request') }}">Forgot Your Password?</a>
              </div>

              <div class="form-group">
                <div>
                  <button id="login-btn" type="submit" class="btn btn-primary btn-vhs">Sign in</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
