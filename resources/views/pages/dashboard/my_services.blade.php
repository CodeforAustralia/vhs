<!-- My Services -->

<div class="container-wrapper tools-wrapper">
<div class="container">
  <div class="col-md-6 toolbox-wrapper col-xs-12">
      <div class="toolbox-banner col-md-10 col-xs-12">
        @if (count($user_services) > 0)
          <h3>My Services</h3>
        @else
          <h3>No Public Housing Services assigned yet</h3>
          <p>&nbsp;</p>
        @endif
      </div>
    </div>
  </div>
  <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-9 services_toolbox">

@include('pages.dashboard.enumerate_services')

            </div>
        </div>
    </div>
</div>
