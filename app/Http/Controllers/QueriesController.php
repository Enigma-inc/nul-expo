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
        $queries = Query::latest()->get();

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
        'message' => 'required|max:255',
    ]);

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
