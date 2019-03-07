<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailUserBank extends Mailable
{
    use Queueable, SerializesModels;

    public $event;
    public $session;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event,$session)
    {
        $this->event = $event;
        $this->session = $session;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.user_bank');
    }
}
