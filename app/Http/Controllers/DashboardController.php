<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
      $time = Carbon::now('Australia/Melbourne')->format('g');

      $message = '';
      if($time < 12){
        $message = "Good Morning";

      } elseif($time > 11 && $time < 18){

       $message = "Good Afternoon";

     } elseif ($time > 17) {

       $message = "Good Evening";

     }
     return view('pages/dashboard')->with([
      'message' => $message
      ]);
   }
 }
