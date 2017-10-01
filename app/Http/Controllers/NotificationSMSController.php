<?php

namespace App\Http\Controllers;


require base_path().'/vendor/autoload.php';
use App\Http\Controllers\Controller;
use Aloha\Twilio\Twilio;
use App\User as User;
use Aloha\Twilio\TwilioInterface;
use Twilio\Rest\Client; 
use Autoload;
use Log;

class NotificationSMSController extends Controller
{
    //
	protected $message;



	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
     * Test the name of the command
     */
	public function letterNotificationSMS($user)
	{
		$user = User::find($user);
		$user_mobile = $user[0]['mobile'];
		
		$this->sendMessage(
			$user,
			$user_mobile,
			'This messages is to notify you that you have a new mail from VHS. Please login to the website'
			);
	}

	private function sendMessage($user, $user_mobile, $messageBody)
	{
		$account_sid = env('TWILIO_SID', ''); 
		$auth_token = env('TWILIO_TOKEN', ''); 
		$fromNumber = env('TWILIO_FROM', ''); 
		$MessagingServiceSid = env('TWILIO_MessagingServiceSid', ''); 
		$client = new Twilio($account_sid, $auth_token, $fromNumber); 

		$messageParams = array(
			'Body' => $messageBody
			);

		try {
			$messages = $client->message(
				$user_mobile,
				$messageParams
				);
		} catch (Exception $e) {
			Log::error($e->getMessage());
		}

		return;
	}

}
