<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountDetails;
use lluminate\Notifications\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Letters;
use App\User as User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewLetter;
use Twilio as Twilio;

class NotificationController extends Controller
{
    //
    /**
     * Show the Account dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) {
        // Get the user detail
        $user = AccountDetails::where('id', $id)->first();
        // Get the letter
        $letter = Letters::first();
		// Send Email notification
        $notify = $user->notify(new NewLetter($letter, $user));

        $user_mobile = $user->mobile;

        // Send SMS Notification
        if($user->mobile != NULL) {
            app('App\Http\Controllers\NotificationSMSController')->letterNotificationSMS($user, $id);
        }

        return view('pages/emailNotification')->with([
            'AccountDetails' => $user
          ]);
    }
}
