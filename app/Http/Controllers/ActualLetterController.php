<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserService;
use App\Models\Letters;
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
      return view('letter/actual-letter')->with([
        'directory' => $directory,
        'letters' => $letters
        ]);
    }

    public function pdfjs($id)
    {
      $directory=env('CORRESPONDENCE_DIR');
      $letters = Letters::where('id', $id)->get();
      return view('letter/letter-pdfjs')->with([
        'directory' => $directory,
        'letters' => $letters
        ]);
    }

    public function showAccessible($id)
    {
      $directory=env('CORRESPONDENCE_DIR');
      $letters = Letters::where('id', $id)->get();
      return view('letter/letter-accessible')->with([
        'directory' => $directory,
        'letters' => $letters
        ]);
    }

    public function showToDownload($id)
    {
      $directory=env('CORRESPONDENCE_DIR');
      $letters = Letters::where('id', $id)->get();
      $letterDate =  Carbon::parse($letters[0]->letter_date)->format('Y-m-d');
      $fileName = 'DHHS-letter-'. $letterDate. '.pdf';
      return view('letter/letter-to-download')->with([
        'directory' => $directory,
        'filename' => $fileName,
        'letters' => $letters
        ]);
    }

 }
