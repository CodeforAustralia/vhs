<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Letters;
use App\Models\UserService;

class InboxController extends Controller
{
    /**
     * Show All letters.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    	$user = Auth::user();
    	$user_id = $user->id;;
    	$letter = Letters::first();
    	$user_services = UserService::where('user_id',$user_id)->get();


// get the total number of unread letters (for all services assigned to user)
    	$total_unread = 0;
    	foreach ($user_services as &$user_service) {
        $unreadForService = $user_service->service->numberUnread();
    		$total_unread = $total_unread + $unreadForService;
    	}

    	return view('pages/inbox/index')->with([
    		'AccountDetails' => $user,
    		'user_services' => $user_services,
    		'total_unread' => $total_unread,
      		'include_links' => true   // include links on summary of services and new letters
      	]);
    }
}
