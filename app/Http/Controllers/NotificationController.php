<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewLetter;
use Twilio as Twilio;
use App\Models\AccountDetails;
use App\Models\Letters;
use Illuminate\Notifications\Notification;

class NotificationController extends Controller
{
    //
    /**
     * Show the Account dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) {
    	$user = AccountDetails::where('id', $id)->get();
    	$letter = Letters::first();
		// Send Email notification
    	$notify = new NewLetter($letter, $user);
		// Send SMS Notification
		if($user[0]->mobile != NULL) {
			app('App\Http\Controllers\NotificationSMSController')->letterNotificationSMS($user, $id);
		}

    	return view('pages/emailNotification')->with([
    		'AccountDetails' => $user
    		]);
    }
}
