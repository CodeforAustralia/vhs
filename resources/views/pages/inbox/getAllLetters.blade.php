@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
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
                </div>
                <div class="panel-body">
                    @if ($letters->isEmpty())

                    You have not recieved any letter from Housing Office
                    @else
                    <div class="col-md-12 services_heading_right">
                        <div class="letter_list_wrapper">
                            <div class="letter_list_header col-md-9">
                                <h4>Unread mail</h4>
                            </div>
                            <div class="letter_list_header_right col-md-3">
                             <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <span class="float-left sort_by_text">Sort your letters</span>
                                  <span class="sort_by_text sort_by_icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li>
                                    <li><a href="#">Option not available yet</a></li>
                                        <!-- <li><a href="#">Select by date</a></li>
                                        <li><a href="#">Sort by date</a></li> -->
                                    </ul>
                                </div>
                            </div>
                            @foreach($letter_unread as $letter_unread) 
                            @if ($letter_unread->unread == '1')
                            <div class="col-md-12 all_letter_list">
                             <a href="/letter/{{ $letter_unread->id }}" class="letter_list_unread">
                                 <div class="col-md-3">
                                    {{ $letter_unread->type }} -
                                    {{ $letter_unread->description }}
                                </div>
                                <div class="col-md-6">
                                    {{ $letter_unread->summary }}
                                </div>
                                <div class="col-md-2">
                                    {{ date("j M", strtotime($letter_unread->letter_date)) }}
                                </div>
                                <div class="col-md-1">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        @endif
                        @endforeach
                        </div>
                        <div class="letter_list_wrapper">
                            <div class="letter_list_header">
                                <h4>Read mail</h4>
                            </div>
                            @foreach($letter_read as $letter_read) 
                            @if ($letter_read->unread == '0')
                            <div class="col-md-12 all_letter_list">
                                <a href="/letter/{{ $letter_read->id }}">
                                    <div class="col-md-3">
                                        {{ $letter_read->type }} -
                                        {{ $letter_read->description }}
                                    </div>
                                    <div class="col-md-6">
                                        {{ $letter_read->summary }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ date("j M", strtotime($letter_read->letter_date)) }}
                                    </div>
                                    <div class="col-md-1">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        @endif
                    </div>

                    <div class="col-md-2 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                    <div class="col-md-1 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('pages.account.hoInfo');

@endsection