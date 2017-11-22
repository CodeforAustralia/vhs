@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div class="container">
    <div class="row">
        <div class class="col-md-1 welcome_banner-wrapper">
            <div class="noSpace">
              <a class="backButton" href="">&lt;&nbsp;&nbsp;Back</a>
          </div>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <div class="panel inbox_panel-primary">
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
                            </ul>
                        </div>
                    </div>

                    <?php $unread_heading = false; ?>
                    <?php $read_heading = false; ?>
                    <?php $countUnread = $all_letters->where("unread", 1)->count(); ?>
                    <?php $countRead = $all_letters->where("unread", 0)->count(); ?>
                    @foreach($all_letters as $letter) 
                    @if (Session::get('message.class') == 'all-letters')
                    @if ($letter->unread == '1' && !$unread_heading)
                    <?php $unread_heading = true; ?>

                    <div class="letter_list_header col-md-9">
                        <h4>Unread Mail ( {{ $countUnread }} )</h4>
                        <p><a href="/showread" role="none">Show all unread mail <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                    </div>

                    @endif
                    @endif
                    @if($letter->unread == '1') 
                    <a href="/letter/{{ $letter->id }}" class="letter_list_unread">
                        <div class="col-md-12 all_letter_list all_letter_list_unread">

                         <div class="col-md-3 col-xs-12">
                            {{ $letter->type }} -
                            {{ $letter->description }}
                        </div>
                        <div class="col-md-6 col-xs-12">
                            {{ $letter->summary }}
                        </div>
                        <div class="col-md-2">
                            {{ date("j M", strtotime($letter->letter_date)) }}
                        </div>
                        <div class="col-md-1 hide-on-mobile">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>

                    </div>
                </a>

                @endif
                @if (Session::get('message.class') == 'all-letters')
                @if ($letter->unread == '0' && !$read_heading)
                <?php $read_heading = true; ?>

                <div class="letter_list_header col-md-9">
                    <h4>Read Mail ( {{ $countRead }} )</h4>
                    <p><a href="/showread" role="none">Show all read mail  <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                </div>

                @endif

                @endif
                @if ($letter->unread == '0')
                <a href="/letter/{{ $letter->id }}">
                    <div class="col-md-12 all_letter_list">

                     <div class="col-md-3 col-xs-12">
                        {{ $letter->type }} -
                        {{ $letter->description }}
                    </div>
                    <div class="col-md-6 col-xs-12">
                        {{ $letter->summary }}
                    </div>
                    <div class="col-md-2">
                        {{ date("j M", strtotime($letter->letter_date)) }}
                    </div>
                    <div class="col-md-1 hide-on-mobile">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
            @endif
            @endforeach

        </div>
        <div class="col-md-12 load_more_button">
            <a href="#" role="none">
            <button  id="loadMore" class="btn btn-primary" aria-label="Load More">
                    Load More
                </button>
            </a>
        </div>

        <p class="totop"> 
            <a href="#top">Back to top</a> 
        </p>
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