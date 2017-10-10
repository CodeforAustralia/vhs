<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\UserService;
use App\Models\Letters;


class LettersListController extends Controller
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

    public function index($reference_id)
    {
    // check to see if this service belongs to the logged-in user
     $user_id = Auth::user()->id;
     $user_services = UserService::where('user_id',$user_id)
      ->where('reference_id',$reference_id)
      ->get();


    if (count($user_services) == 0) { // if service does not belong, re-route to the dashboard
      return redirect()->route('dashboard');
    }

    return view('letter/lettersList')->with([
         'user_services' => $user_services,
         'include_links' => false   // do not include links on summary of services and new letters
       ]);
   }

   public function show($id)
   {
   // check to see if this letter belongs to the logged-in user
//    $user_id = Auth::user()->id;
//    $user_services = UserService::where('user_id',$user_id)
//     ->where('reference_id',$reference_id)
//     ->get();
//   if (count($user_services) == 0) { // if service does not belong, re-route to the dashboard
//     return redirect()->route('dashboard');
//   }


$letters = Letters::where('id', $id)->get();

return view('letter/letter')->with([
    'letters' => $letters
    ]);
  }
 }
