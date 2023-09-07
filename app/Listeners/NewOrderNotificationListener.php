<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\NewOrderEvent;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\NewOrderNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class NewOrderNotificationListener
{
    /**
     * Create the event listener.
     */
    use InteractsWithQueue;

    // in your event listener or wherever you trigger the notification
public function handle(NewOrderEvent $event)
{
    $admin = User::where('id', 1)->first(); // assuming 'is_admin' identifies an admin user
    if ($admin) {
        $admin->notify(new NewOrderNotification($event->order));
    }
}

}