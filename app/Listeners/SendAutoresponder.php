<?php

namespace App\Listeners;

use App\Events\MessageWasCreated;
use App\Mail\MensajeMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendAutoresponder implements ShouldQueue
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
    public function handle(MessageWasCreated $event)
    {
        //dd($event->mensaje);

        Mail::to('mimail@correo.com')->send(new MensajeMail());
    }
}
