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
            'presentation_title' => request('presentation_title'),
            'room' => request('room'),
            'time' => request('time'),
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

        $rerisEvent->presentation_title = $request->input('presentation_title');
        $rerisEvent->room = $request->input('room');
        $rerisEvent->time = $request->input('time');

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
