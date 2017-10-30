<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="welcome-banner">
						<div class="col-md-2">

						</div>
						<div class="col-md-7 services_heading_right">
							@if ( Auth::user()->usertype == '1' )
							<h3><a href="/accounts">All Accounts</a></h3>
							@else
							<h3>{{ $AccountDetails[0]->firstName }} {{ $AccountDetails[0]->lastName }}</h3>
							<p>
								@if($AccountDetails[0]->last_login_at == NULL) {{ 'This user has never logged in before' }} @else {{$lastLoginAt = Request::get($AccountDetails[0]->last_login_at) }}{{ 'Last login '. date("F jS, Y h:i:s A", strtotime($lastLoginAt)) }} @endif

							</p>
							@endif

						</div>
						<div class="col-md-3 services_heading_right">
							<div class="toolbox-banner mail_icon-link">
									<p class=""><a class="panel-heading_link" href="/accounts/edit/{{ $AccountDetails[0]->id }}">Edit</a></p>
								@if ( Auth::user()->usertype == '1' )
									<p class=""><a class="panel-heading_link" href="/notification/{{ $AccountDetails[0]->id }}">Send Notification</a></p>
									<p class=""><a class="panel-heading_link" href="/notification/{{ $AccountDetails[0]->id }}">Send Sample Letters</a></p>
									<p class="">
										<a href="#myModal" data-toggle="modal" data-target="#myModal">Load me</a>
										<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                  </p>
								@endif
							</div>
						</div>
						<!-- <div class="col-md-2 services_heading_right">
							<div class="toolbox-banner mail_icon-link">
								<p class="pull-right"><a class="panel-heading_link" href="/accounts/edit/{{ $AccountDetails[0]->id }}">Edit</a></p>
							</div>
						</div> -->
						<!-- <div class="col-md-1 services_heading_right">
							<div class="toolbox-bannetest@test.com.aur mail_icon-link">
							</div>
						</div> -->
					</div>
				</div>
				<div class="panel-body">
					<div class="col-md-2">

					</div>
					<div class="col-md-7 services_heading_right">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#aboutMe">About Me</a></li>
							<li><a data-toggle="tab" href="#currentSituation">Current Situation</a></li>
							<li><a data-toggle="tab" href="#location">Location</a></li>
						</ul>

						<div class="tab-content">
							<div id="aboutMe" class="tab-pane fade in active">
								<h4>Contact Details</h4>
								<p>{{ $UserAddress[0]->address_1 }} <br class="show-sm-down"/>{{ $UserAddress[0]->suburb_town }} VIC {{ $UserAddress[0]->postcode }}</p>
								<p>
									{{ $AccountDetails[0]->email }}
								</p>
								<p>
									{{ $AccountDetails[0]->mobile }}
								</p>
								<h4>Services</h4>
								<p>
									Victorian Housing Register
									<br/>
									Effective Date 17 July, 2017
									<br/>
									#90181390812
								</p>
								<p>
									Bond - 8 King Rd,
									<br/>
									Collingwood VIC 3000
									<br/>
									#12490375623
								</p>
								<p>
									Bond - 1 Victoria St,
									<br/>
									Melbourne VIC 3000
									<br/>
									#234719051923
								</p>
								<h4>Privacy & Security</h4>
								<p>
									Security Password
									<br/>
									<span style="font-size: 24px">**********************</span>
								</p>
							</div>
							<div id="currentSituation" class="tab-pane fade">
								<h4>Menu 1</h4>
								<p>Some content in menu 1.</p>
							</div>
							<div id="location" class="tab-pane fade">
								<h4>Menu 2</h4>
								<p>Some content in menu 2.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
