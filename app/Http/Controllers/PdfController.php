<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gufy\PdfToHtml\Pdf as Pdf;
use Gufy\PdfToHtml\Config;
use App\Models\Letters;
use Database\Factories;
use App\Models\Templates;
use File;
use Storage;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/upload');
    }

    /**
     * Get all files in Pdf folder.
     *
     * @return \Illuminate\Http\Response
     */
    public function allFiles()
    {

        // get all letters
        $Letters = Letters::all();
        $Templates = Templates::where('template_id', $Letters[0]['template_id'])->get();
        return view('pages/letters')->with([
            'Letters' => $Letters,
            'Templates' => $Templates
            ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function letters()
    {   
        // return view('pages/pdf')->with([
        //     'refNumber' => $refNumber,
        //     'dateMatched' => $finalDate,
        //     'clientName' => $clientName,
        //     'letterTemplateID' => $letterTemplateID,

        //     ]);
        // use the factory to create a Faker\Generator instance

        return view('pages/upload_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function pdfUpload($filename)
    {
        $random_dir = uniqid();
        // Change outout folder
        Config::set('pdftohtml.output', public_path().'/pdftohtml/'. $random_dir);
        // $outputDir = public_path().'/pdftohtml/';
        Config::set('pdfinfo.bin', '/usr/bin/pdfinfo');
        Config::set('pdftohtml.bin', '/usr/bin/pdftohtml');

        // initiate
        $pdf = new Pdf(public_path() . '/pdf/' . $filename);

        $html = $pdf->html();
        // print_r('<pre>');
        // print_r($pdf);
        // die;
        // check if your pdf has more than one pages
        
        // Finds substring inside string, looks for the word 'Ref'
        $refNumber = substr($html, strpos($html, "Ref") + 10);
        $refNumber = substr($refNumber, 0, strpos($refNumber, '</p>'));
        

        $months = array(
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
            );

        $day = '';
        $monthMatching = '';
        $year = '';

        $matchedFirstDate = false;

        $monthNumber = 0; 
        foreach($months as $month) {
            $monthNumber++;
            if (strpos($html, $month) && !$matchedFirstDate) {
                $day = substr($html, strpos($html, $month) - 4);
                $day = substr($day, 0, 2); 

                $monthMatching = $month;
                $monthNumberFinal = $monthNumber;

                $year = substr($html, strpos($html, $month));
                $year = substr($year, 0, 15);     

                $matchedFirstDate = true;
                $monthNumber = true;

            }

        }


        preg_match('/\b(\d{4})\b/', $year, $yearMatched);
        $finalDate = $yearMatched[1] . '-' . $monthNumberFinal . '-' . $day;

        // Finds substring inside string, looks for the word 'Dear'
        $getclientName = substr($html, strpos($html, "Dear") + 6);
        $clientName = substr($getclientName, 0, strpos($getclientName, '</p>'));

        // Find Letter Template ID
        $letterTemplateID = substr($html, strpos($html, "TMP") - 0);
        $letterTemplateID = substr($letterTemplateID, 0, strpos($letterTemplateID, '</p>'));

        $firstParagraph = substr($html, strpos($html, "Dear") + 0, strpos($html, "</p>"));
        $firstParagraph = substr($firstParagraph, strpos($firstParagraph, "ft01"), strpos($firstParagraph, ".") + strlen($firstParagraph));
        $firstParagraph2 = substr($firstParagraph, strpos($firstParagraph, "<p>"));
        $firstParagraph2 = substr($firstParagraph, 0, strpos($firstParagraph2, '</p>'));
        $firstParagraph3 = substr($firstParagraph, strpos($firstParagraph, "ft01") + strlen($firstParagraph2));
        $firstParagraph4 = substr($firstParagraph3, strpos($firstParagraph3, "ft01") + 6);
        $firstParagraph4 = substr($firstParagraph4, 0, strpos($firstParagraph4, '</p>'));

        // Create new pdf object
        $letters = new letters;

        // Set the property for each required field
        $letters->uuid = '1';
        $letters->reference_id = $refNumber;
        $letters->template_id = $letterTemplateID;
        $letters->filename = $filename;
        $letters->letter_date = $finalDate;

        // Create new pdf in fbsql_database(link_identifier)
        $letters->save();

        $checkTemplateID = Templates::where('template_id', '=', $letterTemplateID)->first();

        if (!count($checkTemplateID)) {
            $letters = new templates;

            $letters->template_id = $letterTemplateID;
            $letters->summary = $firstParagraph4;

            $letters->save();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)   
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function submit(Request $request)
    {

    }

}
