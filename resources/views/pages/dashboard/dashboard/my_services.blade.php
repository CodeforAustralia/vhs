<!-- My Services -->

<div class="container-wrapper tools-wrapper">
    <div class="container">
        <div class="col-md-6 toolbox-wrapper col-xs-12">
            <div class="toolbox-banner col-md-10 col-xs-12">
                @if (count($user_services) > 0)
                <h3>My Services</h3>
                @else
                <h3>No Public Housing Services assigned yet</h3>
                <p>&nbsp;</p>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 services_toolbox">

                    <!-- Enumerate Services -->
                    @foreach ($user_services as $user_service)
                    <a href="/correspondence/{{$user_service->reference_id}}">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="col-xs-1">
                                </div>
                                <div class="col-xs-7 col-xs-10 services_heading_right">
                                    <p>{{ $user_service->service->description }}</p>
                                    <p>Reference #{{ $user_service->reference_id }}</p>
                                    <h3>{{ $user_service->service->type }}</h3>
                                </div>
                                <div class="col-xs-4 services_heading_right">
                                    <div class="toolbox-banner mail_icon-link">
                                        <?php $no_of_letters = count($user_service->service->unreadLetters);

                                        $unread_letters_class = '';

                                        switch ($no_of_letters) {

                                            case ($no_of_letters == 0) :
                                            $unread_letters_class = 'none';
                                            break;

                                            case ($no_of_letters > 0 && $no_of_letters < 10) :
                                            $unread_letters_class = 'few';
                                            break;

                                            case ($no_of_letters >=10 && $no_of_letters < 100) :
                                            $unread_letters_class = 'some';
                                            break;

                                            case ($no_of_letters >= 100 && $no_of_letters < 1000) :
                                            $unread_letters_class = 'lots';
                                            break;

                                            case ($no_of_letters > 1000) :
                                            $unread_letters_class = 'too-many';
                                            break;
                                        }
                                        ?>

                                        <p>
                                            <span class="fa-stack fa-2x">
                                               @if ($no_of_letters > 0)
                                               @if ($no_of_letters > 999)
                                               <span class="letter-numbers {{$unread_letters_class}}">&gt;999</span>
                                               @else
                                               <span class="letter-numbers {{$unread_letters_class}}">{{$no_of_letters}}</span>
                                               @endif
                                               <i class="fa fa-envelope-o fa-stack-1x"></i>
                                               <i style="color: red; text-align: right;" class="fa fa-circle fa-stack-2x"></i>
                                               @else
                                               <i class="fa fa-envelope-o fa-stack-1x"></i>
                                               @endif
                                           </span>
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </a>
                   @endforeach
               </div>
           </div>
       </div>
   </div>
