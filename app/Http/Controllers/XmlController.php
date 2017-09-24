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
    public function xmlUpload($filename)
    {
    	// $xml = XmlParser::load(public_path() . '/xml/' . $filename);

    	$xmlPath = public_path() . '/xml/' . $filename;

    	$xml1 = simplexml_load_file($xmlPath);

    	$data = $xml1->templates->row;

    	echo '<pre>';
    	echo print_r($data, true);

    	foreach ($data as $row) {
    		echo print_r($row);
    	}
    	die;

    	$users = $xml->parse([
    		
    		]);

    	foreach($users as $user) {
    		print_r('<pre>');
    		var_dump($user);
    		print_r('<pre>');
    		
    	}
    	die;

    	$templates = new Templates;

    	$templates->template_id = $user['template_id'];
    	$templates->summary = $user['summary'];
    	$templates->action_needed = $user['action_needed'];

    	$templates->save();

    }
}
