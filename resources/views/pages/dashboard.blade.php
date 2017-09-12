@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 welcome_banner-wrapper">

        <div class="welcome-banner">
          <h3>{{ $message }} {{ Auth::user()->firstName }}</h3>
        </div>
        <div class="dashboard_notifications">
          <p>Your Application for the Victorian Housing Register is being reviewed.</p>
          <p>You have <strong>1 new letter</strong>.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@include('pages.dashboard.my_services')
@include('pages.dashboard.recommendation_buttons')
@include('pages.dashboard.recommended_links')


@endsection