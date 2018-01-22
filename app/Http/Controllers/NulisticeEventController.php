<?php

namespace App\Http\Controllers;

use App\NulisticeEvent;
use Illuminate\Http\Request;
use App\Http\Requests\ConferenceEventRequest;
use App\Events\NulisticeEventStatusChange;

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
    public function store(ConferenceEventRequest $request)
    {
        
        $nulisticeEventObject = NulisticeEvent::create([
            'session_title'=>request('sessionTitle'),
            'title' => request('presentationTitle'),
            'room' => request('room'),
            'time' => request('time'),
            'keynote' => request('keynote'),
            'chair' => request('chair'),
            'chair_country' => request('chairCountry'),
            'chair_country_flag' => request('chairCountryFlag'),
            'presenter' => request('presenter'),
            'presenter_country' => request('presenterCountry'),
            'presenter_country_flag' => request('presenterCountryFlag')
        ]);
        if ($request->wantsJson()) {
            return  $nulisticeEventObject;
        }
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
    public function edit(Request $request,$id)
    {
        
        $nulisticeEventObject = NulisticeEvent::find($id);
        if ($request->wantsJson()) {
            return $nulisticeEventObject;
        }
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
    public function update(ConferenceEventRequest $request, $id)
    {
        $nulisticeEvent = NulisticeEvent::findorfail($id);

        $nulisticeEvent->title = $request->input('presentationTitle');
        $nulisticeEvent->room = $request->input('room');
        $nulisticeEvent->time = $request->input('time');
        $nulisticeEvent->keynote = $request->input('keynote');
        $nulisticeEvent->session_title = $request->input('sessionTitle');
        $nulisticeEvent->chair = $request->input('chair');
        $nulisticeEvent->chair_country = $request->input('chairCountry');
        $nulisticeEvent->chair_country_flag = $request->input('chairCountryFlag');
        $nulisticeEvent->presenter = $request->input('presenter');
        $nulisticeEvent->presenter_country = $request->input('presenterCountry');
        $nulisticeEvent->presenter_country_flag = $request->input('presenterCountryFlag');     
        $nulisticeEvent->save();
        
        broadcast(new NulisticeEventStatusChange());

        if ($request->wantsJson()) {
            return $nulisticeEvent;
        }

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
