<?php

namespace App\Http\Controllers;

use App\Query;
use Illuminate\Http\Request;

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

        return redirect()->back();
    }
}
