<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HackathonBooked extends Mailable
{
    use Queueable, SerializesModels;
    public $hackathon;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($hackathon)
    {
        $this->hackathon = $hackathon;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->hackathon['email'])
            ->markdown('emails.hackathon-booked');
    }
}
