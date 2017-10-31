<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\UserService;
use App\Models\Letters;
use App\Models\LetterHistory;
use DB;
use App\Quotation;
use Session;

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

   public function show($id) {

     $letters = Letters::where('id', $id)->get();

     if (count($letters) > 0) {
         // first check to see if this letter belongs to the logged-in user
         $user_id = Auth::user()->id;
         $letter_history = LetterHistory::where('user_id',$user_id)
         ->where('letter_uuid', $letters[0]->uuid)
         ->get();

// if letter is not meant for this user, or there is no history of them having received it,
// re-route to the dashboard
      if ( empty($letter_history) || count($letter_history)==0) {
        return redirect()->route('dashboard');
      }
// if we have made it this far, mark the letter as read
      $letter_history[0]->unread=false;
      $letter_history[0]->save();

     return view('letter/letter')->with([
       'letters' => $letters
     ]);

   }
  }

  /**
  *  function sendLetters
  *
  * @return Illuminate\Http\RedirectResponse
  */
  public function sendLetters(Request $request, $id)
  {
    // Get the user to send letters to and the services they need
    $user = DB::table('users')
    ->where('id', $id)
    ->get();
    $reference_id = $request->input('service');
    $user_services = UserService::where('user_id',$id)
     ->where('reference_id',$reference_id)
     ->get();
//    if (empty($user_services)) {

//    } else {
//      $output = shell_exec('sh /home/ubuntu/testing-data/process_sample_letters.sh');
      $output = exec("sh /home/ubuntu/testing-data/process_sample_letters.sh");

//    }
      if (empty($output)) {
        $output='Letters sent! (not really)';
      }

    Session::flash('status', $output);
    return redirect()->route('accounts.view', [$id]);
  }
 }
