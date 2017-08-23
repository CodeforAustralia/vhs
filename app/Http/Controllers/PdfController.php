<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gufy\PdfToHtml\Pdf as Pdf;
use App\Models\Letters;
use File;

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

        // $directory = File::directories('../pdf');
        $files = File::allFiles('../pdf');
        foreach ($files as $file)
        {
            echo '<pre>';
            echo (string)$file, "\n";
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function letters()
    {   
        return view('pages/pdf')->with([
            'refNumber' => $refNumber,
            'dateMatched' => $finalDate,
            'clientName' => $clientName,
            'letterTemplateID' => $letterTemplateID,

            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function pdfUpload()
    {
        // Form uploads file to the server using $_POST
        // You get the filename from the post
        // $filename = $request->('fileName');
        // Put filename into PDF call
        // $pdf = new Pdf(public_path() . '/' . $filename);

        // initiate
        // $pdf = new Pdf(public_path() . '/dms.pdf');
        $pdf = new Pdf(public_path() . '/' . $filename);

        // convert to html string
        $html = $pdf->html();

        // echo $html;
        // die();

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
        // echo $finalDate;
        // die();

        // Finds substring inside string, looks for the word 'Dear'
        $clientName = substr($html, strpos($html, "Dear") + 6);
        $clientName = substr($clientName, 0, strpos($clientName, '</p>'));

        // Find Letter Template ID
        $letterTemplateID = substr($html, strpos($html, "TMP") - 0);
        $letterTemplateID = substr($letterTemplateID, 0, strpos($letterTemplateID, '</p>'));

        // Create new pdf object
        $letters = new letters;

        // Set the property for each required field
        $letters->uuid = '1';
        $letters->reference_id = $refNumber;
        $letters->template_id = $letterTemplateID;
        $letters->letter_date = $finalDate;

        // Create new pdf in database
        $letters->save();
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
