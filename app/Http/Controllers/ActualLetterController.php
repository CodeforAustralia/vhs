<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserService;
use App\Models\Letters;
use App\Models\LetterHistory;
use Config;
use Carbon\Carbon;

class ActualLetterController extends Controller
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

    public function index($id)
    {
      $directory=env('CORRESPONDENCE_DIR');
      $letters = Letters::where('id', $id)->get();
      $authorized = ActualLetterController::hasAuthority($id);

      if ($authorized) {
        return view('letter/actual-letter')->with([
          'directory' => $directory,
          'letters' => $letters
          ]);
      } else {
        return redirect()->route('dashboard');
      }
    }

    public function pdfjs($id)
    {
      $directory=env('CORRESPONDENCE_DIR');
      $letters = Letters::where('id', $id)->get();
      $authorized = ActualLetterController::hasAuthority($id);

      if ($authorized) {
        return view('letter/letter-pdfjs')->with([
          'directory' => $directory,
          'letters' => $letters
          ]);
      } else {
        return redirect()->route('dashboard');
      }
    }

    public function showAccessible($id)
    {
      $directory=env('CORRESPONDENCE_DIR');
      $letters = Letters::where('id', $id)->get();
      $authorized = ActualLetterController::hasAuthority($id);

      if ($authorized) {
        return view('letter/letter-accessible')->with([
          'directory' => $directory,
          'letters' => $letters
          ]);
      } else {
        return redirect()->route('dashboard');
      }
    }

    public function showToDownload($id)
    {
      $directory=env('CORRESPONDENCE_DIR');
      $letters = Letters::where('id', $id)->get();
      $letterDate =  Carbon::parse($letters[0]->letter_date)->format('Y-m-d');
      $fileName = 'DHHS-letter-'. $letterDate. '.pdf';
      $authorized = ActualLetterController::hasAuthority($id);

      if ($authorized) {
        return view('letter/letter-to-download')->with([
          'directory' => $directory,
          'filename' => $fileName,
          'letters' => $letters
          ]);
      } else {
        return redirect()->route('dashboard');
      }
    }

    private function hasAuthority ($letter_id) {
       $user = Auth::user();
       if ($user->usertype == 1) { // user is an administrator
         return true;
       } else {
         $letters = Letters::where('id', $letter_id)->get();
         if (count($letters) > 0) {
             // check to see if this user ever "received" the letter
             $letter_history = LetterHistory::where('user_id',$user->id)
             ->where('letter_uuid', $letters[0]->uuid)
             ->get();
/*
             // check to see if this user is assigned to the service
             $user_services = UserService::where('user_id',$user->id)
             ->where('reference_id',$letters[0]->reference_id)
             ->get();
*/
         }
         if ( (count($letters) > 0) && (count($letter_history) > 0) ) {
          return true;
        } else {
          return false;
        }
       }
    }
 }
