<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Letters;
use App\Models\LetterHistory;
use App\Models\UserService;
use DB;
use Session;
use Illuminate\Support\Facades\Hash;


class InboxController extends Controller
{
    /**
     * Show All letters.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      $user = Auth::user();

// If no current user logged in
      if ( empty($user)) {
        return redirect()->route('login');
      }

      $user_id = $user->id;;
      $letter = Letters::first();
      $user_services = UserService::where('user_id',$user_id)->get();


// get the total number of unread letters (for all services assigned to user)
      $total_unread = 0;
      foreach ($user_services as &$user_service) {
        if (empty($user_service) || empty($user_service->service)) {
          $unreadForService = 0;
        } else {
          $unreadForService = $user_service->service->numberUnread();
        }
        $total_unread = $total_unread + $unreadForService;
      }

      return view('pages/inbox/index')->with([
        'AccountDetails' => $user,
        'user_services' => $user_services,
        'total_unread' => $total_unread,
          'include_links' => true   // include links on summary of services and new letters
          ]);
    }

    /**
     * Sort Letters by Date.
     *
     * @return \Illuminate\Http\Response
     */
    public function sortbyservices() {
      $user = Auth::user();

      // If no current user logged in
      if ( empty($user)) {
        return redirect()->route('login');
      }

      $user_id = $user->id;

      $letters = LetterHistory::where('user_id',$user_id)->get();

      $all_letters = DB::table('letters')
      ->join('letter_history', function ($join) use ($user_id){
        $join->on('letters.uuid', '=', 'letter_history.letter_uuid')
        ->where('letter_history.user_id', '=', $user_id);
      })
      ->join('templates', 'letters.template_id', '=', 'templates.template_id')
      ->join('services', 'letter_history.reference_id', '=', 'services.reference_id')
      ->select('letters.letter_date','letters.id', 'letter_history.reference_id', 'letter_history.unread', 'templates.summary', 'templates.action_needed', 'services.type', 'services.description')
      ->orderBy('reference_id', 'desc')
      ->get();

      Session::flash('message.title', 'Sort by services');
      Session::flash('message.class', 'sort-by-letters');

      // var_dump('<pre>');
      // var_dump($letter_read);
      // die;

      return view('pages/inbox/getAllLetters')->with([
        'letters' => $letters,
        'all_letters' => $all_letters
        ]);

    }

    /**
     * show all unread letters.
     *
     * @return \Illuminate\Http\Response
     */
    public function showunread() {
      $user = Auth::user();

      // If no current user logged in
      if ( empty($user)) {
        return redirect()->route('login');
      }

      $user_id = $user->id;

      $letters = LetterHistory::where('user_id',$user_id)->get();

      $all_letters = DB::table('letters')
      ->join('letter_history', function ($join) use ($user_id){
        $join->on('letters.uuid', '=', 'letter_history.letter_uuid')
        ->where('letter_history.user_id', '=', $user_id)
        ->where('letter_history.unread', '=', 1);
      })
      ->join('templates', 'letters.template_id', '=', 'templates.template_id')
      ->join('services', 'letter_history.reference_id', '=', 'services.reference_id')
      ->select('letters.letter_date','letters.id', 'letter_history.reference_id', 'letter_history.unread', 'templates.summary', 'templates.action_needed', 'services.type', 'services.description')
      ->orderBy('letter_date', 'desc')
      ->get();

      Session::flash('message.title', 'Unread Letters');
      Session::flash('message.class', 'unread-letters');

      // var_dump('<pre>');
      // var_dump($letter_read);
      // die;

      return view('pages/inbox/getAllLetters')->with([
        'letters' => $letters,
        'all_letters' => $all_letters
        ]);

    }

    /**
     * show all read letters.
     *
     * @return \Illuminate\Http\Response
     */
    public function showread() {
      $user = Auth::user();

      // If no current user logged in
      if ( empty($user)) {
        return redirect()->route('login');
      }

      $user_id = $user->id;

      $letters = LetterHistory::where('user_id',$user_id)->get();

      $all_letters = DB::table('letters')
      ->join('letter_history', function ($join) use ($user_id){
        $join->on('letters.uuid', '=', 'letter_history.letter_uuid')
        ->where('letter_history.user_id', '=', $user_id)
        ->where('letter_history.unread', '=', 0);
      })
      ->join('templates', 'letters.template_id', '=', 'templates.template_id')
      ->join('services', 'letter_history.reference_id', '=', 'services.reference_id')
      ->select('letters.letter_date','letters.id', 'letter_history.reference_id', 'letter_history.unread', 'templates.summary', 'templates.action_needed', 'services.type', 'services.description')
      ->orderBy('letter_date', 'desc')
      ->get();

      Session::flash('message.title', 'Read Letters');
      Session::flash('message.class', 'read-letters');

      // var_dump('<pre>');
      // var_dump($letter_read);
      // die;

      return view('pages/inbox/getAllLetters')->with([
        'letters' => $letters,
        'all_letters' => $all_letters
        ]);

    }
    
    /**
     * sort by date.
     *
     * @return \Illuminate\Http\Response
     */
    public function sortbydate() {
      $user = Auth::user();

      // If no current user logged in
      if ( empty($user)) {
        return redirect()->route('login');
      }

      $user_id = $user->id;

      $letters = LetterHistory::where('user_id',$user_id)->get();

      $all_letters = DB::table('letters')
      ->join('letter_history', function ($join) use ($user_id){
        $join->on('letters.uuid', '=', 'letter_history.letter_uuid')
        ->where('letter_history.user_id', '=', $user_id);
      })
      ->join('templates', 'letters.template_id', '=', 'templates.template_id')
      ->join('services', 'letter_history.reference_id', '=', 'services.reference_id')
      ->select('letters.letter_date','letters.id', 'letter_history.reference_id', 'letter_history.unread', 'templates.summary', 'templates.action_needed', 'services.type', 'services.description')
      ->orderBy('letter_date', 'desc')
      ->get();

      Session::flash('message.title', 'Sort by date');
      Session::flash('message.class', 'sort-by-date');

      // var_dump('<pre>');
      // var_dump($letter_read);
      // die;

      return view('pages/inbox/getAllLetters')->with([
        'letters' => $letters,
        'all_letters' => $all_letters
        ]);
    }
    
    /**
     * Show All letters.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllLetters() {
      $user = Auth::user();

      // If no current user logged in
      if ( empty($user)) {
        return redirect()->route('login');
      }

      $user_id = $user->id;

      $letters = LetterHistory::where('user_id',$user_id)->get();

      $all_letters = DB::table('letters')
      ->join('letter_history', function ($join) use ($user_id){
        $join->on('letters.uuid', '=', 'letter_history.letter_uuid')
        ->where('letter_history.user_id', '=', $user_id);
      })
      ->join('templates', 'letters.template_id', '=', 'templates.template_id')
      ->join('services', 'letter_history.reference_id', '=', 'services.reference_id')
      ->select('letters.letter_date','letters.id', 'letter_history.reference_id', 'letter_history.unread', 'templates.summary', 'templates.action_needed', 'services.type', 'services.description')
      ->orderBy('unread', 'desc')
      ->get();

      //number of rows

      Session::flash('message.title', 'All Letters');
      Session::flash('message.class', 'all-letters');

      // var_dump('<pre>');
      // var_dump($letter_read);
      // die;

      return view('pages/inbox/getAllLetters')->with([
        'letters' => $letters,
        'all_letters' => $all_letters
        ]);
    }
  }
