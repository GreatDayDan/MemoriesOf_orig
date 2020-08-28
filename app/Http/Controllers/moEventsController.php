<?php
//2020.08.14
namespace App\Http\Controllers;

use App\Event;
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
        $moevents = moEvent::latest()->paginate(5);

        return view('moevents.index',compact('moevents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moevents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'moevent' => 'required',
            'detail' => 'required',
        ]);

        Event::create($request->all());

        return redirect()->route('moevents.index')
            ->with('success','moEvent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $moevent
     * @return \Illuminate\Http\Response
     */
    public function show(moEvent $moevent)
    {
        return view('moevents.show',compact('moevent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\event  $moevent
     * @return \Illuminate\Http\Response
     */
    public function edit(moevent $moevent)
    {
        return view('moevents.edit',compact('moevent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, moevent $moevent)
    {
        $request->validate([
            'moevent' => 'required',
            'detail' => 'required',
        ]);

        $moevent->update($request->all());

        return redirect()->route('moevents.index')
            ->with('success','moevent updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(moevent $moevent)
    {
        $moevent->delete();

        return redirect()->route('moevents.index')
            ->with('success','moevent deleted successfully');
    }
}
