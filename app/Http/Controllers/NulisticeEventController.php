<?php

namespace App\Http\Controllers;

use App\NulisticeEvent;
use Illuminate\Http\Request;

class NulisticeEventController extends Controller
{

    // function __construct(){
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$status=1)
    {
        $nulisticeEvents = NulisticeEvent::where('status', '=', $status)->get();

        if($request->wantsJson()){
            return $nulisticeEvents;
        }
        return view('admin.events.nulistice.index')
                ->with('nulisticeEvents', $nulisticeEvents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.nulistice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $nulisticeEventObject = NulisticeEvent::create([
            'session_title'=>request('session_title'),
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

        return redirect()->route('nulisticeEvents.index');
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
        $nulisticeEventObject = NulisticeEvent::find($id);

        return view('admin.events.nulistice.edit')
               ->with('nulisticeEventObject', $nulisticeEventObject);
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
        $nulisticeEvent = NulisticeEvent::find($id);

        $nulisticeEvent->title = $request->input('title');
        $nulisticeEvent->room = $request->input('room');
        $nulisticeEvent->time = $request->input('time');
        $nulisticeEvent->keynote = $request->input('keynote');
        $nulisticeEvent->session_title = $request->input('session_title');
        $nulisticeEvent->chair = $request->input('chair');
        $nulisticeEvent->chair_country = $request->input('chair_country');
        $nulisticeEvent->chair_country_flag = $request->input('chair-country-flag');
        $nulisticeEvent->presenter = $request->input('presenter');
        $nulisticeEvent->presenter_country = $request->input('presenter_country');
        $nulisticeEvent->presenter_country_flag = $request->input('presenter-country-flag');
        

        $nulisticeEvent->save();

        return redirect()->route('nulisticeEvents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedEvent = NulisticeEvent::find($id)
                                     ->delete();
        
        return redirect()->route('nulisticeEvents.index');


    }
}
