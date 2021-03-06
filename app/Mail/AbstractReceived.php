<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class AbstractReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $abstract;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($abstract,$user)
    {
        $this->abstract=$abstract;
        $this->user=$user;
        

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
        return $this->from($this->user->email)
                    ->markdown('emails.abstract-received')
                    ->attach(public_path()."/submitted-abstracts/".$this->abstract->doc_path);
    }
}
