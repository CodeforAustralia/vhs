<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Letters;
use App\Http\Requests;
// use Request;
use storeAs;

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
        if (request()->hasFile('files'))
        {
             $letters = Letters::create($request->all());
             // $files = $request->input('files');
             // echo $letters;
             // die();
             foreach ($letters as $file)
             {
                // $filename = $file->store('files');

                $filename = $request->input('files');
                echo $filename;
                die();
                $upload = (new PdfController)->pdfUpload($filename);
                // $filename = $file->store('files');
                // LettersPdf::create([
                //     'letter_id' => $letters->id,
                //     'filename' => $filename,
                // ]);
            }
            return 'Upload successful!';
        } else{
            echo 'No document';

        }
    }

}