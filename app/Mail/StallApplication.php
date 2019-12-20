<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class StallApplication extends Mailable
{
    use Queueable, SerializesModels;
    public $stall;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($stall)
    {
        $this->stall = $stall;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->stall['email'])
            ->markdown('emails.stall-application');
    }
}
