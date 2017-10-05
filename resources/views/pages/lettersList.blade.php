@extends('layouts.app') @section('title', 'Home') @section('content')
<!-- My Services -->



<div class="container-wrapper tools-wrapper no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9 services_toolbox">
                <div class="panel panel-primary">

                    <!-- Service Panel -->
                    @include('pages.dashboard.enumerate_services')
                    @foreach ($user_services as $user_service) @foreach ($user_service->service->letters as $letter)

                    <!-- Letter -->
                    <a href="/letter/{{$letter->id}}">
                        <div class="panel-body row panel-first">
                            <div class="col-xs-4 col-md-2 letter-status">
                                @if ($letter->unread)
                                <div class="letter-unread"></div>
                                @else
                                <div class="letter-read"></div>
                                @endif
                            </div>
                            @if ($letter->unread)
                            <div class="col-xs-8 col-md-2 letter-date mark-as-unread">
                                @else
                                <div class="col-xs-8 col-md-2 letter-date">
                                    @endif
                                    <?php echo \Carbon\Carbon::createFromFormat('Y-m-d', $letter->letter_date)->format('j M Y');?>
                                </div>
                                @if ($letter->unread)
                                <div class="col-xs-12 col-sm-12 col-md-8 mark-as-unread">
                                    @else
                                    <div class="col-xs-12 col-sm-12 col-md-8">
                                    @endif
                                        @if(is_null($letter->template))
                                          &nbsp;
                                        @else
                                          {{$letter->template->summary}}
                                        @endif
                                    </div>
                                </div>
                            </a>


                            <!-- Arrow (but not after last item/ letter) -->
                            <div class="panel-body row">
                                @if ( $letter != $user_service->service->letters->last() )
                                <div class="col-xs-12 letter-status">
                                    <div class="arrow-up"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></div>
                                </div>
                                @else
                                <div class="col-xs-12 letter-status">&nbsp;</div>
                                @endif
                            </div>


                            @endforeach @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.container-wrapper -->

        @endsection
