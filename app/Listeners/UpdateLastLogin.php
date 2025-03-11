<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use Carbon\Carbon;

class UpdateLastLogin
{
    public function handle(UserLoggedIn $event)
    {
        if ($event->user) {
            $istTime = Carbon::now('Asia/Kolkata');
            $event->user->update([
                'last_login_at' =>  $istTime

            ]);

        }
    }
}
