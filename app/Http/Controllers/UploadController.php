<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Letters;
use App\Http\Requests;
// use Request;
use storeAs;
use Session;

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
        return view('pages/upload/index');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadPdf()
    {
        return view('pages/upload/upload_pdf');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadTemplatesXml()
    {
        return view('pages/upload/upload_templatesXml');
    }

    public function uploadPdfSubmit(Request $request)
    {
        // $letters = Letters::create($request->all('files'));
        // $filename = $request->file('files')->storeAs('uploads', 'files');
        // $files = $request->input('files');
        // $files = Input::get('files');
         $input=$request->all();
         $pdfUploaded=array();
         $filetype = array(
            'file' => 'required|max:10000|mimes:pdf,jpeg,bmp,png,xml'
            );


         if($files=$request->file('pdfUploaded')) {
            foreach($files as $file) {
                $filename=$file->getClientOriginalName();
                $file->move(public_path().'/pdf/', $filename);
                app('App\Http\Controllers\PdfController')->pdfUpload($filename);

            }
        }
        $Letters = Letters::all();
        return redirect('letters')->with([
            'Letters' => $Letters
            ]);
    }

    public function uploadTemplatesXmlSubmit(Request $request)
    {
        // $letters = Letters::create($request->all('files'));
        // $filename = $request->file('files')->storeAs('uploads', 'files');
        // $files = $request->input('files');
        // $files = Input::get('files');
         $input=$request->all();
         $xmlUploaded=array();
         $filetype = array(
            'file' => 'required|max:10000|mimes:pdf,jpeg,bmp,png,xml'
            );


         if($files=$request->file('TemplatesXmlUploaded')) {
            foreach($files as $file) {
                $filename=$file->getClientOriginalName();
                $file->move(public_path().'/xml/templates', $filename);
                app('App\Http\Controllers\XmlController')->templatesXmlUpload($filename);

            }
        }


        if (!$file) {
            Session::flash('message', 'File is not uploaded! Please try again!');
            return redirect('upload_templatesXml');
        } else {
           Session::flash('message', 'File is uploaded successfully!');
            return redirect('upload_templatesXml');
        }
    }

}