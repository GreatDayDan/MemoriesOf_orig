<?php

namespace App\Http\Controllers;

use App\Moevent;
use Illuminate\Http\Request;


class MoeventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Moevent = Moevent::latest()->paginate(5);

        return view('Moevent.index',compact('Moevent'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Moevent.create');
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
            'Moevent' => 'required',
            'detail' => 'required',
        ]);

        Moevent::create($request->all());

        return redirect()->route('Moevent.index')
            ->with('success','Event created successfully.');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Moevent  $Moevent
     * @return \Illuminate\Http\Response
     */
    public function show(Moevent $moEvent)
    {
        return view('Moevent.show',compact('Moevent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Moevent  $Moevent
     * @return \Illuminate\Http\Response
     */
    public function edit(Moevent $Moevent)
    {
        return view('Moevent.edit',compact('Moevent'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Moevent  $Moevent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moevent $moEvent)
    {
        $request->validate([
            'Moevent' => 'required',
            'detail' => 'required',
        ]);

        $Moevent->update($request->all());

        return redirect()->route('Moevent.index')
            ->with('success','event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Moevent  $moEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moevent $moEvent)
    {
        $Moevent->delete();

        return redirect()->route('Moevent.index')
            ->with('success','event deleted successfully');
    }
}
