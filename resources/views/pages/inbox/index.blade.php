@extends('layouts.page') @section('title', 'Your Details') @section('content')

<!-- My Services -->
<div class="container-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 welcome_banner-wrapper">
        <div class="welcome-banner">
          @if (count($user_services) > 0)
            <h3>Inbox</h3>
          @else
            <h3>No Services Assigned</h3>
            <p>&nbsp;</p> 
          @endif
        </div>
      </div>
    </div>
  </div>

  @if (count($user_services) > 0)
  <div class="container">
    <div class="row">
      <div class="col-md-9 inbox_toolbox">
        @include('pages.inbox.enumerate_services')
      </div>
    </div>
  </div>
  @endif

</div>
@endsection
