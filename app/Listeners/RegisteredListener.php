<?php

namespace App\Listeners;

use App\Notifications\EmailVerificationNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisteredListener implements ShouldQueue
{
    public function handle(Registered $event)
    {
        $user = $event->user;
        $user->laravelNotify(new EmailVerificationNotification());
    }
}
