<!-- List of Services (Option B) -->


<div class="container-wrapper tools-wrapper">
  @if (count($user_services) == 0)
  <div class="container">
    <div class="row">
      <div class="col-md-8 toolbox-wrapper col-xs-12">
        <h3>No Public Housing Services assigned yet</h3>
        <p>&nbsp;</p>
      </div>
    </div>
  </div>
  @endif

  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-md-9 services_toolbox">

          @include('pages.dashboard.enumerate_services')

        </div>
      </div>
    </div>
  </div>
</div>
