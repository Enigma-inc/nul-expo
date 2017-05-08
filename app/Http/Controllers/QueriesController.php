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
    public function index()
    {
        $queries = Query::latest()->paginate(5);

        return view('queries.index', compact('queries'));
    }
    public function create()
    {
        return view('queries.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required|max:255',
    ]);

//dd($request->toArray());
      $query = Query::create([
            'name' => request('name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'message' => request('message')
            
        ]);
        
        Mail::to(['address' => 'info@nulistice.org.ls'])
              ->bcc(['address'=>'neo@enigma.co.ls'])
            ->send(new QueryReceived($query));

           $request->session()->flash('flash', "Thank you, we have received your message, we will get back soon");
           return redirect()->back();
    

    }

}
