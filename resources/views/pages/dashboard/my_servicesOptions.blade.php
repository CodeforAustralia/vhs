<!-- Dashboard Tiles -->
<div class="container-wrapper services-wrapper">
    <div class="container">
      <div class="row odd-row">
        <div class="col-md-8 col-sm-10 col-xs-12 services_toolbox">
          <div id="letters-0" class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            <a href="/inbox" role="button" class="btn btn-primary need_housing_button">
             {!! file_get_contents(public_path('images/ico-inbox.svg')) !!}
             <br/>
             Letters
           </a>
         </div>
         <div id="letters-1" class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
           <a href="/placeholder" role="button" class="btn btn-primary need_housing_button">
             <svg></svg>
             <br/>
             &nbsp;
<!--
             <span style="background-color: #fff; border:1px solid grey; position: relative; display: inline-block; top: -90px; left: -50px; color: black;">New<br/>Date</span>
-->
           </a>
         </div>
         <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            @if ( Auth::user()->usertype == '1' )
            <a href="/accounts" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(public_path('images/ico-profile.svg')) !!}
              <br/>
              User Accounts</a>
              @else
              <a href="/accounts/{{ Auth::user()->id }}" role="button" class="btn btn-primary need_housing_button">
                {!! file_get_contents(public_path('images/ico-profile.svg')) !!}
                <br/>
                My Profile</a>
                @endif
              </a>
            </div>
          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            <a href="/placeholder" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(public_path('images/ico-payment.svg')) !!}
              <br/>
              Payments
            </a>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            <a href="/placeholder" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(public_path('images/ico-services.svg')) !!}
              <br/>
              Services
            </a>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            <a href="/placeholder" role="button" class="btn btn-primary need_housing_button">
              {!! file_get_contents(public_path('images/ico-appointments.svg')) !!}
              <br/>
              Meetings
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
