@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 welcome_banner-wrapper">

        <div class="welcome-banner">
          <h3>Notifications</h3>
        </div>
        <div class="dashboard_notifications">
          <p class="alert alert-success">Email Sent to: <strong>{{ Auth::user()->email }}</strong>.</p>
          <p class="alert alert-success">SMS Sent to: <strong>{{ Auth::user()->mobile }}</strong>.</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
