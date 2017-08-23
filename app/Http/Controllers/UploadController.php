<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Letters;

class UploadController extends Controller
{
    //

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// return view('pages/upload_form');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadForm()
    {
    	return view('pages/upload_form');
    }

    public function uploadSubmit(Request $request)
    {
       $letters = Letters::create($request->all());
        foreach ($request->files as $file) {
        	// $filename = $file->store('files');
        	$filename = $request->file('file')->storeAs('uploads', 'files');
        	{!! Form::open(['url' => '/']) !!}
        	$upload = (new PdfController)->pdfUpload();
            // $filename = $file->store('files');
            // LettersPdf::create([
            //     'letter_id' => $letters->id,
            //     'filename' => $filename,

            // ]);
        }
        return 'Upload successful!';
    }

}