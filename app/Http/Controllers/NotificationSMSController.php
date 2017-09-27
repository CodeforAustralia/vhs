<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Bus\Queueable;
use App\Http\Controllers\Controller;
use Twilio;

class NotificationSMSController extends Controller
{
    //
    use Queueable;
	protected $user;

	public function __construct($letter, $user)
	{
		//
        $this->letter = $letter;
        $this->user = $user;
	}

	public function create($letter, $user)
	{
		$formattedMessage = $this->formatMessage($letter, $user);
		$this->sendMessage($formattedMessage);
		return redirect()->route('/');
	}

	private function sendMessage($letter, $user)
	{
		$twilioPhoneNumber = config('services.twilio')['twilioPhoneNumber'];
		$userMobileNumber = $user['mobile'];
		$this->letter->account->messages->sendMessage(
			$twilioPhoneNumber,
			$userMobileNumber,
			$message
			);
	}

	private function formatMessage($letter, $user)
	{
		return
		"New letter received for " .$this->user['firstName']."" .
		// "Call $name at $phone. " .
		// "Message: $message";
		"Message: You have a new letter from VHS";
	}
}
