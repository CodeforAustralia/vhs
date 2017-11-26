@extends('layouts.app')

@section('title', 'Home')

@section('content')

{{-- Page Title --}}
<div class="container">
    <div class="row">
        <div class class="col-md-1 welcome_banner-wrapper">
            <div class="noSpace">
                <a class="backButton" href="">&lt;&nbsp;&nbsp;Back</a>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="inbox_panel-primary">
                <div class="panel-heading">
                    <div class="col-md-10 services_heading_right">
                        <h3>Your Housing Letters</h3>
                    </div>
                    <div class="col-md-2 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                    <div class="col-md-1 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                    @if ($letters->isEmpty())

                    <div class="col-md-12"><p>You have not recieved any letter from Housing Office</p></div>
                    @else
                    <div class="col-md-12 services_heading_right">
                        <div class="letter_list_wrapper">
                            <div class="letter_list_header col-md-9">

                                <h4>{{ Session::get('message.title') }}</h4>
                            </div>
                            <div class="letter_list_header_right col-md-3">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="float-left sort_by_text">Sort your letters</span>
                                        <span class="sort_by_text sort_by_icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li>
                                            <!-- <li><a href="#">Option not available yet</a></li> -->
                                            <li><a href="/inbox">Default</a></li>
                                            <li><a href="/sortbydate">Sort by date</a></li>
                                            <li><a href="/sortbyservices">Sort by services</a></li>
                                            <li><a href="/showunread">Show only unread letters</a></li>
                                            <li><a href="/showread">Show only read letters</a></li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Page Content --}}
@if (!empty($letters))
@include('pages.inbox.listOfLetters')
@endif
@include('letter/interpreting')
@include('pages.dashboard.housing_office')

@endsection