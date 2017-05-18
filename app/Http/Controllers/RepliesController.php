<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Reply;
use Illuminate\Http\Request;
use App\Mail\ReplyReceived;
use Illuminate\Support\Facades\Storage;

class RepliesController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'reply' => 'required|max:255',
    ]);

      $reply = Reply::create([
            'name' => request('name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'reply' => request('reply')
            
        ]);
        
        Mail::to($request->user()->email)
              ->bcc(['address'=>'neo@enigma.co.ls'])
            ->send(new ReplyReceived($reply));

           $request->session()->flash('flash', "Thank you, we have received your message, we will get back soon");
           return route('/messages');

    }
}
