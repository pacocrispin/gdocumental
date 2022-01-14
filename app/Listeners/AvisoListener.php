<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\AvisoNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class AvisoListener
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
    public function handle($event)
    {
        User::all()
            ->except($event->aviso->user_id)
            ->each(function(User $user) use ($event){
                FacadesNotification::send($user,new AvisoNotification($event->aviso));
            //Notification::send($users, new InvoicePaid($invoice))
            });
    }
}
