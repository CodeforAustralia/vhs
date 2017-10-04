<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\UserService;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // get time of day
      $time = Carbon::now('Australia/Melbourne')->format('G');

      $message = '';
      if($time < 12){
        $message = "Good Morning";

      } elseif($time > 11 && $time < 18){

       $message = "Good Afternoon";

     } elseif ($time > 17) {

       $message = "Good Evening";

     }

// get the services for the logged-in user
     $user_id = Auth::user()->id;
     $user_testType = Auth::user()->test_type;
     $user_services = UserService::where('user_id',$user_id)->get();


// get the total number of unread letters (for all services assigned to user)
    $total_unread = 0;
    foreach ($user_services as &$user_service) {
      $unreadForService = count($user_service->unreadLetters);
      $total_unread = $total_unread + $unreadForService;
    }

     return view('pages/dashboard')->with([
      'message' => $message,
      'user_services' => $user_services,
      'total_unread' => $total_unread,
      'user_testType' => $user_testType,
      'include_links' => true   // include links on summary of services and new letters
      ]);
   }
 }
