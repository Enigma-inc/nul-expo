<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Mail;
use App\Mail\StallBought;
use App\Mail\HackathonBooked;
use Flash;
use App\Proceeding;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function live()
    {
        return view('pages.live');
    }
    public function home()
    {
        $slideImages = array("slide-2.jpg", "slide-3.jpg", "slide-4.jpg", "slide-5.jpg");
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
    public function team()
    {
        return view('pages.team.index');
    }
    // public function schedule()
    // {
    //     return view('pages.schedule.index');
    // }

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

    public function reris_concept()
    {
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
        if (file_exists($filePath)) {
            $headers = array(
                'Content-Type: application/pdf',
            );
            return Response::download($filePath, $fileName . '.pdf', $headers);
        } else {
            return back();
        }


    }
    public function downloadProceedings()
    {
        $fileName = Input::get("file-name");

        $filePath = public_path() . "/docs/nulistice-2018-proceedings/" . $fileName;
        if (file_exists($filePath)) {
            $headers = array(
                'Content-Type: application/pdf',
            );
            return Response::download($filePath, $fileName, $headers);
        } else {
            return back();
        }


    }
    public function proceedings()
    {
        $proceedings = Proceeding::orderBy('index')->get();
        return view('pages.proceedings.index')->with(['proceedings' => $proceedings]);
    }

    public function events(){
        return view('pages.events.index');
    }

    public function buyStall()
    {
        return view('pages.events.stalls.buy-stall');
    }

    public function hackathonApply()
    {
        return view('pages.events.hackathon.apply');
    }

    public function submitStallRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:30',
            'description' => 'required|string'
            // 'g-recaptcha-response' => 'required|captcha',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            // Flash::error('Email not sent. Please confirm all required fields.');
            return redirect(route('events'))
                ->withErrors($validator)
                ->withInput();
        }

        $stall = $request->all();

        Mail::to('info@gmail.com')->send(new StallBought($stall));

        // Flash::success('Email sent successfully. Our consultant will get back to you as soon as possible.');
        return redirect(route('events'));
    }

    public function applyForHackathon(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:30',
            'members' => 'required|integer|between:1,5'
            // 'g-recaptcha-response' => 'required|captcha',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            // Flash::error('Email not sent. Please confirm all required fields.');
            return redirect(route('events'))
                ->withErrors($validator)
                ->withInput();
        }

        $hackathon = $request->all();

        Mail::to('info@gmail.com')->send(new HackathonBooked($hackathon));

        // Flash::success('Email sent successfully. Our consultant will get back to you as soon as possible.');
        return redirect(route('events'));
    }
}
