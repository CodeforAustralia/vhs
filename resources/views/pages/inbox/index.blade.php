@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

<!-- My Services -->

<div class="container-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 welcome_banner-wrapper">
        <div class="welcome-banner">
          @if (count($user_services) > 0)
            <h3>Inbox</h3>
          @else
            <h3>No Message yet</h3>
            @endif
        </div>
      </div>
    </div>
  </div>

  <div class="container">
          <div class="row">
              <div class="col-md-9 inbox_toolbox">
                  @include('pages.inbox.enumerate_services')
              </div>
          </div>
  </div>

</div>
@endsection
