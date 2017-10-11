<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\ExpoRegisterRequest;
use App\ExpoRegister;

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
    public function submitExpoRegistration(ExpoRegisterRequest $request)
    {

         ExpoRegister::create([
           'name'=>request('name'),
           'surname'=>request('surname'),
           'email'=>request('email'),
           'country'=>request('country'),
           'country_phone_code'=>request('phone-code'),
           'phone'=>request('phone'),
           'country_flag'=>request('country-flag'),
           'summary'=>request('summary')

         ]);

         return redirect('/expo-and-exhibition');
    }
}
