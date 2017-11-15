<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\UserService;
use DB;
use App\Models\LetterHistory;


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
    $user_services = UserService::where('user_id',$user_id)->get();


// get the total number of unread letters
    $user_id = Auth::user()->id;
    $total_unread = count(LetterHistory::where('user_id',$user_id)->where('unread','1')->get());

// get the latest unread letters
    $latest_unread =  DB::table('letters')
            ->join('letter_history', function ($join) use ($user_id){
                $join->on('letters.uuid', '=', 'letter_history.letter_uuid')
                ->where('letter_history.user_id', '=', $user_id)
                ->where('letter_history.unread', '=', 1);
            })
            ->join('templates', 'letters.template_id', '=', 'templates.template_id')
            ->select('letters.id', 'letters.letter_date', 'templates.summary', 'templates.action_needed')
            ->orderBy('letter_date', 'desc')
            ->first();

     return view('pages/dashboard')->with([
      'message' => $message,
      'user_services' => $user_services,
      'total_unread' => $total_unread,
      'latest_unread' => $latest_unread,
      'include_links' => true   // include links on summary of services and new letters
      ]);
   }
 }
