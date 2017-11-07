@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Welcome Banner -->
<div class="container-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12 welcome_banner-wrapper">
        <div class="welcome-banner">
          <h3>{{ $message }} {{ Auth::user()->firstName }}</h3>
        </div>
        <div class="last-login">
          @if (empty(Auth::user()->last_logged_in))
            You have not logged in before.
          @else
            Last login: {{ \Carbon\Carbon::parse(Auth::user()->last_logged_in)->format('g:i a j M Y') }}.
          @endif
        </div>
        <div class="dashboard_notifications">
          @if ($total_unread == 0)
            You have <strong>no new letters</strong>.
          @else
            @if ($total_unread == 1)
              You have <a href="/inbox">{{$total_unread}} new letter</a>.
            @else
              You have <a href="/inbox">{{$total_unread}} new letters</a>.
            @endif
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@include('pages.dashboard.my_servicesOptions')
@include('pages.dashboard.recommended_buttons')
@include('pages.dashboard.housing_office')

@endsection
