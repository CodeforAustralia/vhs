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
          @if ($total_unread == 0)
            <p>You have <strong>no new letters</strong>.</p>
          @else
            @if ($total_unread == 1)
              <p>You have <strong>{{$total_unread}} new letter</strong>.</p>
            @else
              <p>You have <strong>{{$total_unread}} new letters</strong>.</p>
            @endif
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@include('pages.dashboard.my_services')
@include('pages.dashboard.recommendation_buttons')
@include('pages.dashboard.recommended_links')


@endsection
