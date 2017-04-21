<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitSpeakerDetailsRequest;
use App\Submission;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\AbstractReceived;
use Illuminate\Support\Facades\Storage;

class AbstractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.abstract.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadAbstract(Request $request,User $user)
    {
        $submission= $user->submission;
        $file=$request->file('file');
        $name= $file->getClientOriginalName();
        $file->move('submitted-abstracts',$name);


        //Update user profile
        $submission->abstract=$name;
        $submission->save();


        /// Send email
        Mail::to('neo@enigma.co.ls')->send(new AbstractReceived(Auth::User()));

        return redirect()->route('profile');


    }


    public function submitSpeakerDetails(SubmitSpeakerDetailsRequest $request)
    {
         $currentUser=Auth::User();
         $submission=Auth::User()->submission;

          $submission->title=$request->title;
          $submission->name=$request->name;
          $submission->surname=$request->surname;
          $submission->organisation=$request->organisation;
          $submission->country=$request->country;
          $submission->country_flag=$request['country-flag'];
          $submission->phone=$request->phone;
          $submission->phone_code=$request['phone-code'];
          $submission->save();

          //Marked details as Updated

        $currentUser->details_captured=1;
        $currentUser->save();
        return redirect('/profile');


    }

    public function enableEditProfile(User $user)
    {
        $user->details_captured=0;
        $user->save();
        return redirect('/profile');

    }

    public function downloadAbstract()
    {
        $fileName = Input::get("file-name");
        $filePath = public_path() . "/submitted-abstracts/" . $fileName;


        if( file_exists($filePath)){
            $headers = array(
                'Content-Type: '.Storage::mimeType("/submitted-abstracts/" .$fileName),
            );
            return Response::download($filePath, $fileName,$headers);
        }
        else{
            return back();
        }


    }


    
}
