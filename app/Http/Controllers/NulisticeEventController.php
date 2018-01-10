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
    public function index(Request $request)
    {
        $nulisticeEvents = NulisticeEvent::latest()->get();

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
            'title' => request('title'),
            'room' => request('room'),
            'time' => request('time'),
            'body' => request('body')
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
        $nulisticeEvent->body = $request->input('body');

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
