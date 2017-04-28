<?php

namespace App\Http\Controllers;

use App\Query;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    //
    public function store(Request $request)
    {
        $query = Query::create([
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message')
        ]);

        return redirect()->back();
    }
}
