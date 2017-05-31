<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitSpeakerDetailsRequest;
use App\Submission;
use App\User;
use App\AbstractDoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\AbstractReceived;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Riazxrazor\LaravelSweetAlert\LaravelSweetAlert;

class AbstractController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abstracts = Submission::orderBy('updated_at','DESC')->paginate(6);

        return view('pages.abstract.viewabstracts', compact('abstracts'));
    }



    public function profile()
    {
        $abstracts=Submission::where('user_id',Auth::User()->id)->first()
                    ->abstracts()->paginate(2);
        return view('profile')->with('abstracts',$abstracts);
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
    public function abstractUploadPage($conference)
    {
        return view('pages.abstract.upload')->with(['conference'=>$conference]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadAbstract(Request $request,User $user)
    {
       $this->validate($request, [
        'title' => 'required|max:255',
        'file' => 'required',
        ]);
       
        $submission= $user->submission;
        $file=$request->file('file');
        $name= str_slug(Carbon::now()->toDayDateTimeString())
               ."-".$file->getClientOriginalName();
        $file->move('submitted-abstracts',$name);


        //Add Document To Submitted Docs
       $abstract= AbstractDoc::create([
            'doc_path'=>$name,
            'title'=>$request["title"],
            'conference'=>strtoupper($request['conference']),
            'comment'=>$request['comment'],
            'submission_id'=>$submission->id
        ]);


        /// Send email
        Mail::to(['address' => 'thamaetm@gmail.com','address' => 'info@nulistice.org.ls'])
              ->bcc(['address'=>'neo@enigma.co.ls'])
              ->send(new AbstractReceived($abstract,Auth::User()));

         LaravelSweetAlert::setMessage([
                        'title' => 'Success',
                         'text'=>'Thank you, your abstract was submitted, we shall get back to you',
                        'type' => 'success'
                    ]);
       return redirect('/profile');


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
