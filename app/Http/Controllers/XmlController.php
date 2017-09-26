<?php

namespace App\Http\Controllers;
use App\Models\Templates;
use Illuminate\Http\Request;

class XmlController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function templatesXmlUpload($filename)
    {
    	// $xml = XmlParser::load(public_path() . '/xml/' . $filename);

    	$xmlPath = public_path() . '/xml/templates/' . $filename;

    	$xml1 = simplexml_load_file($xmlPath);

    	$data = $xml1->templates->row;

    	foreach ($data as $row) {
    		$templates = new Templates;

            $templates->template_id = $row->template_id;
            $templates->summary = $row->summary;
            $templates->action_needed = $row->action_needed;

            $templates->save();
        }
    }
}
