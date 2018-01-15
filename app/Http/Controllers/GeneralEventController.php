<?php

namespace App\Http\Controllers;

use App\GeneralEvent;
use App\RerisEvent;
use App\NulisticeEvent;
use Illuminate\Http\Request;

class GeneralEventController extends Controller
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
       
        if($request->wantsJson()){
            $generalEvents = GeneralEvent::where('status','=',1)->latest()->get();
            return $generalEvents;
        }
        
        $generalEvents = GeneralEvent::latest()->get();
        return view('admin.events.general.index')
               ->with('generalEvents', $generalEvents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.general.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $generalEventObject = GeneralEvent::create([
            'presentation_title' => request('presentation_title'),
            'room' => request('room'),
            'time' => request('time'),
            'body' => request('body')
        ]);

        return redirect()->route('generalEvents.index');
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
        $generalEventObject = GeneralEvent::find($id);

        return view('admin.events.general.edit')
               ->with('generalEventObject', $generalEventObject);
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
        $generalEvent = GeneralEvent::find($id);

        $generalEvent->presentation_title = $request->input('presentation_title');
        $generalEvent->room = $request->input('room');
        $generalEvent->time = $request->input('time');
        $generalEvent->body = $request->input('body');

        $generalEvent->save();

        return redirect()->route('generalEvents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedEvent = GeneralEvent::find($id)
                                     ->delete();
        
        return redirect()->route('generalEvents.index');


    }

    public function toggleStatus(Request $request,$id){

        $type=request('type');

         if($type == "nulistice"){

            $event = NulisticeEvent::findorfail($id);
            $event->status =! $event->status;
            $event->save();
            return $event;

         }else if($type == "reris"){

            $event = RerisEvent::findorfail($id);
            $event->status =! $event->status;
            $event->save();
            return $event;

         }
         else{
            $event = GeneralEvent::findorfail($id);
            $event->status =!$event->status;
            $event->save();
            return $event;
         }
    }
}
