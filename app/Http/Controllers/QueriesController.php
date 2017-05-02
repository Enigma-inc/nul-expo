<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Query;
use Illuminate\Http\Request;
use App\Mail\QueryReceived;
use Illuminate\Support\Facades\Storage;

class QueriesController extends Controller
{
    //
    public function create(Request $request)
    {
        $query = Query::create([
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message')
        ]);
        
        Mail::to(['email'=>'seramerammeleke@gmail.com'])
            ->send(new QueryReceived($query));
    
        return redirect()->back();

    }

}
