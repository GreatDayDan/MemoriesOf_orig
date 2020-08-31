<?php

namespace App\Http\Controllers;

use App\moEvents;
use Illuminate\Http\Request;

class moEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::latest()->paginate(5);

        return view('events.index',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    {
        $request->validate([
            'event' => 'required',
            'detail' => 'required',
        ]);

        Events::create($request->all());

        return redirect()->route('events.index')
            ->with('success','Event created successfully.');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\moEvents  $moEvents
     * @return \Illuminate\Http\Response
     */
    public function show(moEvents $moEvents)
    {
        return view('events.show',compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\moEvents  $moEvents
     * @return \Illuminate\Http\Response
     */
    public function edit(moEvents $moEvents)
    {
        return view('events.edit',compact('event'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\moEvents  $moEvents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, moEvents $moEvents)
    {
        $request->validate([
            'event' => 'required',
            'detail' => 'required',
        ]);

        $events->update($request->all());

        return redirect()->route('events.index')
            ->with('success','event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\moEvents  $moEvents
     * @return \Illuminate\Http\Response
     */
    public function destroy(moEvents $moEvents)
    {
        $events->delete();

        return redirect()->route('events.index')
            ->with('success','event deleted successfully');
    }
}
