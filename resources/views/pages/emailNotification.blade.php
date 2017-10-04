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
          <p class="alert alert-success">Email Sent to: <strong>{{ $AccountDetails[0]->email }}</strong>.</p>
          @if($AccountDetails[0]->mobile != NULL)
          <p class="alert alert-success">SMS Sent to: <strong>{{ $AccountDetails[0]->mobile }}</strong>.</p>
          @else
           <p class="alert alert-danger">Either no mobile number or mobile number is incorrect.</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
