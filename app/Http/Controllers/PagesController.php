<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class PagesController extends Controller
{
    public function home()
    {
        $slideImages= array("slide-2.jpg","slide-3.jpg","slide-4.jpg","slide-5.jpg");
         shuffle($slideImages);
        return view('pages.home.index')->with('slide', $slideImages[0]);;
    }

    public function committees()
    {
        return view('pages.committees.index');
    }
    public function welcomeNote()
    {
      return view('pages.welcome-note.index');
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

    public function blog()
    {
        return view('pages.blog.index');
    }

    public function accomodation()
    {
        return view('pages.accomodation.index');
    }

    public function nulistice_concept()
    {
        return view('pages.conference.nulistice-concept');
    }

    public function reris_concept(){
        return view('pages.conference.reris-concept');
    }

    public function loadAbstractPage()
    {
        return view('pages.abstract.index');

    }


    public function fees()
    {
        return view('pages.fees.index');
    }

    public function download()
    {
        $fileName = Input::get("file-name");

        $filePath = public_path() . "/docs/" . $fileName . ".pdf";
        if( file_exists($filePath)){
            $headers = array(
                'Content-Type: application/pdf',
            );
            return Response::download($filePath, $fileName . '.pdf', $headers);
        }
        else{
           return back();
        }


    }
}
