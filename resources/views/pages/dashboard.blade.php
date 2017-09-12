@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="welcome-banner">
                    <h3>{{ $message }} {{ Auth::user()->firstName }}</h3>
                </div>
                <div class="dashboard_notifications">
                    <p>Your Application for the Victorian Housing Register is being reviewed.</p>
                    <p>You have <strong>1 new letter</strong>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-wrapper tools-wrapper">
    <div class="container">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <div class="toolbox-banner col-md-offset-1 col-md-10 col-xs-12">
                <h3>My Services</h3>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="col-md-9 col-md-offset-1">

            <!-- Application -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="col-md-7 col-md-offset-2 services_heading_right col-xs-8">
                        <p>Victorian Housing Register Application #{{ Auth::user()->service_id }}</p>
                        <h3>Application</h3>
                    </div>
                    <div class="col-md-2 services_heading_right  col-xs-4">
                        <div class="toolbox-banner mail_icon-link">
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    <div class="col-md-1 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                            <!-- <p><i class="fa fa-envelope-o" aria-hidden="true"></i></p> -->
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-1 col-xs-4 icon_read_mark">
                        <div class="text-center col-md-12">
                           <svg width="28px" height="28px" viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
                            <title>ico-unread@2x</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="_VisualDesign_0.01" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="XL---Dash-03" transform="translate(-221.000000, -625.000000)" fill="#3382BE">
                                    <g id="Services" transform="translate(0.000000, 456.000000)">
                                        <g id="Group-12" transform="translate(139.000000, 63.000000)">
                                            <g id="Group-2" transform="translate(0.000000, 106.000000)">
                                                <circle id="ico-unread" cx="96" cy="14" r="14"></circle>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="text-center col-md-12 icon_read_mark">
                        <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-1 services_body_right">

                </div>
                <div class="col-md-2 col-xs-8 services_body_date">
                    <p><i>12 Sep 2017</i></p>

                </div>
                <div class="col-md-8 col-xs-8 services_body_right">
                    <p><strong>You are on the waiting list</strong></p>
                </div>
            </div>
            <div class="panel-footer text-center"><strong>Show More</strong></div>
        </div>
        <!-- Tenancy -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-7 col-md-offset-2 services_heading_right col-xs-8">
                    <p>Tenacy #{{ Auth::user()->service_id }}</p>
                    <h3>Tenancy</h3>
                </div>
                <div class="col-md-2 services_heading_right  col-xs-4">
                    <div class="toolbox-banner mail_icon-link">
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i></p>
                    </div>
                </div>
                <div class="col-md-1 services_heading_right">
                    <div class="toolbox-banner mail_icon-link">
                        <!-- <p><i class="fa fa-envelope-o" aria-hidden="true"></i></p> -->
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-md-1 col-xs-4 icon_read_mark">
                    <div class="text-center col-md-12">
                       <svg width="28px" height="28px" viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
                        <title>ico-read@2x</title>
                        <desc>Created with Sketch.</desc>
                        <defs>
                            <circle id="path-1" cx="14" cy="14" r="14"></circle>
                        </defs>
                        <g id="_VisualDesign_0.01" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="XL---Dash-03" transform="translate(-220.000000, -2530.000000)">
                                <g id="Services" transform="translate(0.000000, 456.000000)">
                                    <g id="Group-12" transform="translate(139.000000, 63.000000)">
                                        <g id="Group-2" transform="translate(0.000000, 106.000000)">
                                            <g id="Group" transform="translate(81.000000, 1905.000000)">
                                                <g id="ico-read">
                                                    <use fill="#FFFFFF" fill-rule="evenodd" xlink:href="#path-1"></use>
                                                    <circle stroke="#3382BE" stroke-width="3" cx="14" cy="14" r="12.5"></circle>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="text-center col-md-12 icon_read_mark">
                   <i class="fa fa-arrow-up" aria-hidden="true"></i>
               </div>
           </div>
           <div class="col-md-1 services_body_right">

           </div>
           <div class="col-md-2 col-xs-8 services_body_date">
            <p><i>9 Sep 2017</i></p>

        </div>
        <div class="col-md-8 col-xs-8 services_body_right">
            <p><strong>Letter</strong></p>
        </div>
    </div>
    <div class="panel-footer text-center"><strong>Show More</strong></div>
</div>
<!-- Bond -->
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-md-7 col-xs-8 col-md-offset-2 services_heading_right">
            <p>Bond #{{ Auth::user()->service_id }}</p>
            <h3>Bond</h3>
        </div>
        <div class="col-md-2  col-xs-4 services_heading_right">
            <div class="toolbox-banner mail_icon-link">
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i></p>
            </div>
        </div>
        <div class="col-md-1 services_heading_right">
            <div class="toolbox-banner mail_icon-link">
                <!-- <p><i class="fa fa-envelope-o" aria-hidden="true"></i></p> -->
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-md-1 col-xs-4 icon_read_mark">
            <div class="text-center col-md-12">
               <svg width="28px" height="28px" viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
                <title>ico-read@2x</title>
                <desc>Created with Sketch.</desc>
                <defs>
                    <circle id="path-1" cx="14" cy="14" r="14"></circle>
                </defs>
                <g id="_VisualDesign_0.01" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="XL---Dash-03" transform="translate(-220.000000, -2530.000000)">
                        <g id="Services" transform="translate(0.000000, 456.000000)">
                            <g id="Group-12" transform="translate(139.000000, 63.000000)">
                                <g id="Group-2" transform="translate(0.000000, 106.000000)">
                                    <g id="Group" transform="translate(81.000000, 1905.000000)">
                                        <g id="ico-read">
                                            <use fill="#FFFFFF" fill-rule="evenodd" xlink:href="#path-1"></use>
                                            <circle stroke="#3382BE" stroke-width="3" cx="14" cy="14" r="12.5"></circle>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="text-center col-md-12 icon_read_mark">
           <i class="fa fa-arrow-up" aria-hidden="true"></i>
       </div>
   </div>
   <div class="col-md-1 services_body_right">

   </div>
   <div class="col-md-2 col-xs-8 services_body_date">
       <p><i>9 Sep 2017</i></p>
   </div>
   <div class="col-md-8 col-xs-8 services_body_right">
    <p><strong>Letter</strong></p>
</div>
</div>
<div class="panel-footer text-center"><strong>Show More</strong></div>
</div>

    <!-- <div class="row toolbox_half-row">
    <div class="tool-box_half col-xs-12"> -->
     <!-- <a href="/upload">Upload</a> -->
           <!-- @if ( Auth::user()->usertype == '1' )
           <a href="/accounts">Account Details</a>
           @else 
           <a href="/accountdetails/{{ Auth::user()->id }}">Account Details</a>
           @endif
       </div>
       <div class="tool-box_half col-xs-12">
        <a href="/status">Status</a>
    </div>
</div> -->
</div>
</div>
</div>
</div>
</div>
<div class="container-wrapper recommended_links-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="recommended_links-banner">
                    <h3>Recommended Links</h3>
                </div>
                <div>
                   <p>Looking into private rental? <a href="#">Learn more about VHS Bonding Assistance.</a></p>
                   <p>Need advice and support? <a href="#">Find a service provider near you</a></p>
                   <p><a href="#">Nearest Housing Office</a></p>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection