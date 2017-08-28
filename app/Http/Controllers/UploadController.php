<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
        // $letters = Letters::create($request->all('files'));
        // $filename = $request->file('files')->storeAs('uploads', 'files');
        // $files = $request->input('files');
        // $files = Input::get('files');
         $input=$request->all();
         $pdfUploaded=array();
         $pdf = array(
                'file' => 'required|max:10000|mimes:pdf'
                );


         if($files=$request->file('pdfUploaded')){
            foreach($files as $file){
                $filename=$file->getClientOriginalName();
                $file->move('../pdf', $filename);
                $pdfUploaded[]=$filename;
                $upload = (new PdfController)->pdfUpload($filename);
            }
        }
       $Letters = Letters::all();
        return redirect('letters')->with([
            'Letters' => $Letters
            ]);
    }

}