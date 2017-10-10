<!-- My Services -->

<div class="container-wrapper services-wrapper">
  <div class="container">
    <div class="col-md-6 toolbox-wrapper col-xs-12">
      <!-- <div class="toolbox-banner col-md-10 col-xs-12">
        @if (count($user_services) > 0)
        <h3>My Services</h3> @else
        <h3>No Public Housing Services assigned yet</h3>
        <p>&nbsp;</p>
        @endif
      </div> -->
    </div>
  </div>
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-md-8 services_toolbox col-xs-12">
          <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
            @if ( Auth::user()->usertype == '1' )
            <a href="/accounts" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(public_path('images/ico-profile.svg')) !!}
              <br/>
              View Accounts</a>
              @else
              <a href="/accounts/{{ Auth::user()->id }}" role="button" class="btn btn-primary need_housing_button">
                {!! file_get_contents(public_path('images/ico-profile.svg')) !!}
                <br/>
                My Profile</a>
                @endif
              </a>
            </div>
            <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
              <a href="/inbox" role="button" class="btn btn-primary need_housing_button">
               {!! file_get_contents(public_path('images/ico-inbox.svg')) !!}
               <br/>
               Inbox
             </a>
           </div>
           <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
            <a href="#" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(public_path('images/ico-services.svg')) !!}
              <br/>
              Services
            </a>
          </div>
          <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
            <a href="#" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(public_path('images/ico-payment.svg')) !!}
              <br/>
              Make Payment
            </a>
          </div>
          <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
            <a href="#" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(public_path('images/ico-appointments.svg')) !!}
              <br/>
              Appointments
            </a>
          </div>
          <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
            <a href="#" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(public_path('images/ico-translation.svg')) !!}
              <br/>
              Translation
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
