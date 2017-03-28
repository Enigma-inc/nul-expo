<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home.index');
    }

    public function schedule()
    {
        return view('pages.schedule.index');
    }

    public function speakers()
    {
        return view('pages.speakers.index');
    }

    public function sponsors()
    {
        return view('pages.sponsors.index');
    }

    public function contacts()
    {
        return view('pages.contacts.index');
    }

    public function booking()
    {
        return view('pages.booking.index');
    }
}
