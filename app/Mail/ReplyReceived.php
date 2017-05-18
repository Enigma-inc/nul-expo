<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class ReplyReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $query;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $query)
    {
        $this->user=$user;
        $this->query=$query;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->user->email)
                    ->subject($this->query->subject)
                    ->markdown('emails.reply-received');
    }
}