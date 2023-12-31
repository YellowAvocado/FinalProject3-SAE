<?php

namespace App\Listeners;

use App\Events\UserLoggedInEvent;
use App\Notifications\UserLoggedInNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendLoginNotificatioListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(UserLoggedInEvent $event)
    {
        $user = $event->user;
        $user->notify(new UserLoggedInNotification($user));
    }
}
