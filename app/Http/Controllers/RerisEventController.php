<?php

namespace App\Http\Controllers;

use App\RerisEvent;
use Illuminate\Http\Request;

class RerisEventController extends Controller
{

    // function __construct(){
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rerisEvents = RerisEvent::latest()->get();

        if($request->wantsJson()){
            return $rerisEvents;
        }
        return view('admin.events.reris.index')
                ->with('rerisEvents', $rerisEvents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.reris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $rerisEventObject = RerisEvent::create([
            'title' => request('title'),
            'room' => request('room'),
            'time' => request('time'),
            'session_title' => request('session_title'),
            'keynote' => request('keynote'),
            'chair' => request('chair'),
            'chair_country' => request('chair_country'),
            'chair_country_flag' => request('chair-country-flag'),
            'presenter' => request('presenter'),
            'presenter_country' => request('presenter_country'),
            'presenter_country_flag' => request('presenter-country-flag')
        ]);

        return redirect()->route('rerisEvents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rerisEventObject = RerisEvent::find($id);

        return view('admin.events.reris.edit')
               ->with('rerisEventObject', $rerisEventObject);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rerisEvent = RerisEvent::find($id);

        $rerisEvent->title = $request->input('title');
        $rerisEvent->room = $request->input('room');
        $rerisEvent->time = $request->input('time');
        $rerisEvent->keynote = $request->input('keynote');
        $rerisEvent->session_title = $request->input('session_title');
        $rerisEvent->chair = $request->input('chair');
        $rerisEvent->chair_country = $request->input('chair_country');
        $rerisEvent->chair_country_flag = $request->input('chair-country-flag');
        $rerisEvent->presenter = $request->input('presenter');
        $rerisEvent->presenter_country = $request->input('presenter_country');
        $rerisEvent->presenter_country_flag = $request->input('presenter-country-flag');

        $rerisEvent->save();

        return redirect()->route('rerisEvents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedEvent = RerisEvent::find($id)
                                     ->delete();
        
        return redirect()->route('rerisEvents.index');


    }
}
