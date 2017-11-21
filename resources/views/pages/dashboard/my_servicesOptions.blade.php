<!-- Dashboard Tiles -->
<div class="container-wrapper services-wrapper">
    <div class="container">
      <div class="row odd-row">
        <div class="col-md-8 col-sm-10 col-xs-12 services_toolbox">
          <!--Letters -->
          <div id="letters-0" class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            <a href="/inbox" role="button" class="btn btn-primary need_housing_button" aria-label="Letters">
             {!! file_get_contents(public_path('images/ico-inbox.svg')) !!}
             @if ($total_unread > 0 &&  $total_unread < 10)
                <div class="tile-number-unread">{{$total_unread}}</div>
             @endif
             @if ($total_unread > 9 && $total_unread < 100)
                <div class="tile-number-unread lots">{{$total_unread}}</div>
             @endif
             @if ($total_unread > 99)
                <div class="tile-number-unread too-much">99+</div>
             @endif
             <br/>
             Letters
           </a>
         </div>
         <!-- Letters (2nd tile) -->
         <div id="letters-1" class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
         @if ($total_unread == 0 || empty($latest_unread))
           <a href="/inbox" role="button" class="btn btn-primary need_housing_button">
             <div class="tile-message">You are up to date, you've read all your letters.</div>
         @else
                @if (!empty($latest_unread->id))
          <a href="/letter/{{$latest_unread->id}}" role="button" class="btn btn-primary need_housing_button" aria-label="Latest unread letter">
                @else
          <a href="/inbox" role="button" class="btn btn-primary need_housing_button" aria-label="Letters">
                @endif

             <div class="tile-new">
               <div class="tile-new-header">New letter</div>
               @if (!empty($latest_unread->action_needed) && ($latest_unread->action_needed == 1))
               <div class="tile-action">
                   {!! file_get_contents(public_path('images/action-needed.svg')) !!}
               </div>
               <div class="summary-wrapper">
               @endif

               @if (!empty($latest_unread->letter_date))
               <div class="tile-new-date">{{ \Carbon\Carbon::parse($latest_unread->letter_date)->format('j M Y') }}</div>
               @endif
               <div class="tile-new-summary">
                  @if (!empty($latest_unread->summary))
                  <span class="tile-new-link">{{$latest_unread->summary}}</span><span class="tile-new-direct">&nbsp;&gt;</span>
                  @endif
               </div>
               @if (!empty($latest_unread->action_needed) && ($latest_unread->action_needed == 1))
              </div> <!--/summary-wrapper -->
              @endif
              </div>

              @if ($total_unread > 1)
              <div class="tile-shadow"></div>
              @endif
         @endif
           </a>
         </div>
         <!-- My Profile -->
         <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            @if ( Auth::user()->usertype == '1' )
            <a href="/accounts" role="button" class="btn btn-primary need_housing_button" aria-label="User Accounts">
              {!! file_get_contents(public_path('images/ico-profile.svg')) !!}
              <br/>
              User Accounts</a>
              @else
              <a href="/accounts/{{ Auth::user()->id }}" role="button" class="btn btn-primary need_housing_button" aria-label="My Profile">
                {!! file_get_contents(public_path('images/ico-profile.svg')) !!}
                <br/>
                My Profile</a>
                @endif
              </a>
            </div>
          <!-- Payments -->
          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            <a href="/placeholder" role="button" class="btn btn-primary need_housing_button" aria-label="Payments">
              {!! file_get_contents(public_path('images/ico-payment.svg')) !!}
              <br/>
              Payments
            </a>
          </div>
          <!-- Services -->
          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            <a href="/placeholder" role="button" class="btn btn-primary need_housing_button" aria-label="Services">
              {!! file_get_contents(public_path('images/ico-services.svg')) !!}
              <br/>
              Services
            </a>
          </div>
          <!-- Appointments -->
          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 services_buttons">
            <a href="/placeholder" role="button" class="btn btn-primary need_housing_button" aria-label="Appointments">
              {!! file_get_contents(public_path('images/ico-appointments.svg')) !!}
              <br/>
              Appointments
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
