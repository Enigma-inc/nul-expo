<?php

namespace App\Http\Controllers;

use App\RerisEvent;
use Illuminate\Http\Request;
use App\Events\RerisEventStatusChange;

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
    public function index(Request $request, $status = 1)
    {
        $rerisEvents = RerisEvent::where('status', '=', $status)->get();

        if ($request->wantsJson()) {
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
            'title' => request('presentationTitle'),
            'room' => request('room'),
            'time' => request('time'),
            'session_title' => request('sessionTitle'),
            'keynote' => request('keynote'),
            'chair' => request('chair'),
            'chair_country' => request('chairCountry'),
            'chair_country_flag' => request('chairCountryFlag'),
            'presenter' => request('presenter'),
            'presenter_country' => request('presenterCountry'),
            'presenter_country_flag' => request('presenterCountryFlag')
        ]);

        if ($request->wantsJson()) {
            return $rerisEventObject;
        }
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
    public function edit(Request $request,$id)
    {
        $rerisEventObject = RerisEvent::find($id);
        if ($request->wantsJson()) {
            return $rerisEventObject;
        }

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
        $rerisEvent = RerisEvent::findorfail($id);

        $rerisEvent->title = $request->input('presentationTitle');
        $rerisEvent->room = $request->input('room');
        $rerisEvent->time = $request->input('time');
        $rerisEvent->keynote = $request->input('keynote');
        $rerisEvent->session_title = $request->input('sessionTitle');
        $rerisEvent->chair = $request->input('chair');
        $rerisEvent->chair_country = $request->input('chairCountry');
        $rerisEvent->chair_country_flag = $request->input('chairCountryFlag');
        $rerisEvent->presenter = $request->input('presenter');
        $rerisEvent->presenter_country = $request->input('presenterCountry');
        $rerisEvent->presenter_country_flag = $request->input('presenterCountryFlag');
        $rerisEvent->save();

        broadcast(new RerisEventStatusChange());

        if ($request->wantsJson()) {
            return $rerisEvent;
        }

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
