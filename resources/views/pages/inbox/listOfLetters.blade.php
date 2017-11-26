<div class="container-wrapper services-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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
                        <div class="col-md-1 col-xs-12">
                            @if ($letter->action_needed == 1)
                            {!! file_get_contents(public_path('images/action-needed.svg')) !!}
                            @endif
                        </div>
                        <div class="col-md-3 col-xs-12">
                            {{ $letter->type }} -
                            {{ $letter->description }}
                        </div>
                        <div class="col-md-5 col-xs-12">
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
                        <div class="col-md-1 col-xs-12">
                            @if ($letter->action_needed == 1)
                            {!! file_get_contents(public_path('images/action-needed.svg')) !!}
                            @endif
                        </div>
                        <div class="col-md-3 col-xs-12">
                            {{ $letter->type }} -
                            {{ $letter->description }}
                        </div>
                        <div class="col-md-5 col-xs-12">
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
                <div class="col-md-12 load_more_button">
                    <a href="#" role="none" id="loadmore-href">
                        <button  id="loadMore" class="btn btn-primary" aria-label="Load More">
                            Load More
                        </button>
                    </a>
                </div>

            </div>
            <p class="totop"> 
                <a href="#top">Back to top</a> 
            </p>
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