<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;
use DateTime;

class AuthLoginListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SlotWasModified  $event
     * @return void
     */
    public function handle($event)
    {
      $user = Auth::user();
      $user->last_logged_in = $user->currently_logged_in;
      $user->currently_logged_in = new DateTime;
      $user->save();
    }
}
