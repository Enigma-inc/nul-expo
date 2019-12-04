<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\ExpoRegisterRequest;
use  App\Http\Requests\ExhibitionRegisterRequest;
use App\ExpoRegister;
use App\ExhibitionRegister;
use Riazxrazor\LaravelSweetAlert\LaravelSweetAlert;

use Illuminate\Support\Facades\Mail;
use App\Mail\StallApplication;
use App\Mail\HackathonApplication;

class ExhibitionController extends Controller
{
    public function index()
    {
        return view('pages.expo-exhibition.index');
    }
    public function registerExpoView()
    {
        return view('pages.expo-exhibition.register-expo');
    }
    public function registerExhibitionView()
    {
      return view('pages.expo-exhibition.register-exhibition');
    }
    
    public function submitExpoRegistration(ExpoRegisterRequest $request)
    {

        try {
          $stall = ExpoRegister::create([
            'name'=>request('name'),
            'surname'=>request('surname'),
            'email'=>request('email'),
            'country'=>request('country'),
            'country_phone_code'=>request('phone-code'),
            'phone'=>request('phone'),
            'country_flag'=>request('country-flag'),
            'summary'=>request('summary'),
            'status'=>0
          ]);

          Mail::to(env('MAIL_TO'))->send(new StallApplication($stall));
          return view('pages.thank-you.index');

        } catch (Exception $e) {
          LaravelSweetAlert::setMessage([
                'title' => 'Oops!',
                'text'=>'An error occured please try again',
                'type' => 'error'
            ]);
        }
    }

    public function submitExhibitionRegistration(ExhibitionRegisterRequest $request)
    {


        try {
          $hackathon = ExhibitionRegister::create([
            'names'=>request('names'),
            'members'=>request('members'),
            'email'=>request('email'),
            'country'=>request('country'),
            'country_phone_code'=>request('phone-code'),
            'phone'=>request('phone'),
            'country_flag'=>request('country-flag'),
            'status'=>0

          ]);

          Mail::to(env('MAIL_TO'))->send(new HackathonApplication($hackathon));

           return view('pages.thank-you.index');


        } catch (Exception $e) {
          LaravelSweetAlert::setMessage([
              'title' => 'Oops!',
              'text'=>'An error occured please try again',
              'type' => 'error'
          ]);

        }
    }

    public function thankYou()
    {
        return view('pages.thank-you.index');
    }
    public function live()
    {
        return view('pages.live');
    }

   
}
