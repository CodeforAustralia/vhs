@extends('layouts.app') @section('title', 'Home') @section('content')
<!-- My Letters (Option B) -->



<div class="container-wrapper tools-wrapper no-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-9 services_toolbox">
        <div class="panel panel-primary">
          <!-- Service Panel -->
          @include('pages.dashboard.enumerate_services')
          <div class="stripe" style="margin-left: 30px; border-left: 3px solid orange;">

            @foreach ($user_services as $user_service)
            @foreach ($user_service->service->letters as $letter)

            <!-- Letter -->
            <div class="row" style="font-size: 16px; color: black; line-height: 24px;margin: 24px;">
              <a href="/letter/{{$letter->id}}">
                <div class="col-xs-12 col-sm-3 col-md-3">
                  @if ($letter->isUnread())
                  <div class="letter-unread" style="margin-left: -3.2em; display: inline-block; vertical-align:middle;"></div>
                  @else
                  <div class="letter-read" style="margin-left: -3.2em; display: inline-block; vertical-align:middle;"></div>
                  @endif
                  <div style="display: inline-block; color: #0d293c; font-weight: 700; font-size: 16px; vertical-align:middle; padding-left: 1.6em;">
                    <?php echo \Carbon\Carbon::createFromFormat('Y-m-d', $letter->letter_date)->format('j M Y');?>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-9 col-md-9 mark-as-unread">
                  @if(is_null($letter->template)) Text holder for some template that tells you to do stuff @else {{$letter->template->summary}} @endif
                </div>
              </a>
            </div>
            @endforeach
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.container-wrapper -->

@endsection
