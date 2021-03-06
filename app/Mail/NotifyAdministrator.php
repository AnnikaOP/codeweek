<?php

namespace App\Mail;

use App\Event;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdministrator extends Mailable
{
    use Queueable, SerializesModels;


    public $notifications_count;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($notifications_count)
    {
        $this->notifications_count = $notifications_count;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject($this->notifications_count . " Activities to be added to the Calendar")
            ->markdown('emails.en.notify-administrator');
    }
}
