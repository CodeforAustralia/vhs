<!-- Dashboard Tiles -->
<div class="container-wrapper services-wrapper">
    <div class="container">
      <div class="row odd-row">
        <div class="col-md-8 col-sm-10 col-xs-12 services_toolbox">
          <div id="letters-0" class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            <a href="/inbox" role="button" class="btn btn-primary need_housing_button">
             {!! file_get_contents(public_path('images/ico-inbox.svg')) !!}
             @if ($total_unread > 0 &&  $total_unread < 10)
                <div class="tile-number-unread">{{$total_unread}}</div>
             @endif
             @if ($total_unread == 10)
                <div class="tile-number-unread lots">{{$total_unread}}</div>
             @endif
             @if ($total_unread > 10)
                <div class="tile-number-unread lots">10+</div>
             @endif
             <br/>
             Letters
           </a>
         </div>
         <div id="letters-1" class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
           <a href="/inbox" role="button" class="btn btn-primary need_housing_button">
<!--
             @if ($total_unread == 0)
             <div class="tile-message">You are up to date, you've read all your letters.</div>
             @else
             <div class="tile-new">
               <div class="tile-new-header">New</div>
               <div class="tile-new-date">25 Oct 17</div>
               <div class="tile-new-summary">
                 <span class="tile-new-link">{{$latest_unread->summary}}</span>
                 <span class="tile-new-direct">&nbsp;&gt;</span>
              </div>
             </div>
             @endif
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
              Appointments
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
