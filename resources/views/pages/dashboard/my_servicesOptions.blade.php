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
            <a href="/accounts" target="_blank" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(asset('images/ico-profile.svg')) !!}
              <br/>
              View Accountss</a>
              @else 
              <a href="/accounts/{{ Auth::user()->id }}" target="_blank" role="button" class="btn btn-primary need_housing_button">
                {!! file_get_contents(asset('images/ico-profile.svg')) !!}
                <br/>
                My Profile</a>
                @endif
              </a>
            </div>
            <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
              <a href="/inbox" target="_blank" role="button" class="btn btn-primary need_housing_button">
               {!! file_get_contents(asset('images/ico-inbox.svg')) !!}
               <br/>
               Inbox
             </a>
           </div>
           <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
            <a href="#" target="_blank" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(asset('images/ico-services.svg')) !!}
              <br/>
              Services
            </a>
          </div>
          <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
            <a href="#" target="_blank" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(asset('images/ico-payment.svg')) !!}
              <br/>
              Make Payment
            </a>
          </div>
          <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
            <a href="#" target="_blank" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(asset('images/ico-appointments.svg')) !!}
              <br/>
              Appointments
            </a>
          </div>
          <div class="services_buttons col-xs-6 col-md-4 col-lg-4">
            <a href="#" target="_blank" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(asset('images/ico-translation.svg')) !!}
              <br/>
              Translation
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
