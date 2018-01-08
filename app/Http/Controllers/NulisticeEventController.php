<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NulisticeEvent;

class NulisticeEventController extends Controller
{
     public function index()
     {
         $events=NulisticeEvent::latest()->firstorfail();

         return $events;
     }
}
