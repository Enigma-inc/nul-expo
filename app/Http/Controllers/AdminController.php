<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;

class AdminController extends Controller
{
    public function index()
    {
      $submissions=Submission::with(['abstracts'])->get();
    //  return $submissions;
      return view('admin.home')->with(['submissions'=>$submissions]);
    }


}
