<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use DB;
use App\Quotation;
use Session;
use App\Models\UserService;
use App\Models\Letters;
use App\Models\LetterHistory;

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
    // Get the user (in order to send letters to) and the service (that they need)
    $user = DB::table('users')
    ->where('id', $id)
    ->get();
    $reference_id = $request->input('service');
    $user_services = UserService::where('user_id',$id)
     ->where('reference_id',$reference_id)
     ->get();

    // If user is not assigned to the service, then insert a record into the user_services table
    // BTW: Assuming that the services themselves where already seeded by running ServicesTableSeeder
    // e.g. php artisan db:seed --class=ServicesTableSeeder
    $output = $reference_id;

    if ( count($user_services) == 0) {
      $user_service = new UserService;
      $user_service->user_id = $id;
      $user_service->reference_id = $reference_id;
      $user_service->save();
    }

    $shellScript=env('CORRESPONDENCE_SIMULATE');
    $output = shell_exec($shellScript);

    if ($output == 'Letters Sent\n') {
      $messageLevel = 'success';
      $messageContent = $output;
    } else {
      $messageLevel = 'danger';
      $messageContent = 'Something went wrong :(';
    }

    Session::flash('message.level', $messageLevel);
    Session::flash('message.content', $messageContent);
    return redirect()->route('accounts.view', [$id]);
  }
 }
