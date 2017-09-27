<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserService;
use App\Models\Letters;
use Config;

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

      $letters = Letters::where('id', $id)->get();
      $directory=env('CORRESPONDENCE_DIR');

      return view('letter/actual-letter')->with([
        'directory' => $directory,
        'letters' => $letters
        ]);
    }

    public function pdfjs($id)
    {

      $letters = Letters::where('id', $id)->get();

      return view('letter/letter-pdfjs')->with([
        'letters' => $letters
        ]);
    }
 }
