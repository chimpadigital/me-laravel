<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailAdminPendig extends Mailable
{
    use Queueable, SerializesModels;

    public $event;
    public $session;
    public $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event,$session,$id)
    {
        $this->event = $event;
        $this->session = $session;
        $this->id = $id;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Procesando pago de Incripción')->view('mails.admin_pending');
    }
}
