<?php

namespace App\Http\Controllers;

use App\moevent;
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
        Log::info('Moevent index()');
        $moevent = moevent::latest()->paginate(5);

        return view('moevent.index',compact('moevent'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {Log::info('Moevent create()');
        return view('moevent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  Log::info('Moevent store()');  {
        $request->validate([
            'moevent' => 'required',
            'detail' => 'required',
        ]);

        moevent::create($request->all());

        return redirect()->route('moevent.index')
            ->with('success','Event created successfully.');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\moevent  $moevent
     * @return \Illuminate\Http\Response
     */
    public function show(moevent $moevent)
    {  Log::info('Moevent show()');
        return view('moevent.show',compact('moevent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\moevent  $moevent
     * @return \Illuminate\Http\Response
     */
    public function edit(moevent $moevent)
    { Log::info('Moevent edit()');
        return view('moevent.edit',compact('moevent'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\moevent  $moevent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, moevent $moevent)
    { Log::info('Moevent update()');
        $request->validate([
            'moevent' => 'required',
            'detail' => 'required',
        ]);

        $moevent->update($request->all());

        return redirect()->route('moevent.index')
            ->with('success','event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\moevent  $moevent
     * @return \Illuminate\Http\Response
     */
    public function destroy(moevent $moevent)
    { Log::info('Moevent destroy()');
        $moevent->delete();

        return redirect()->route('moevent.index')
            ->with('success','event deleted successfully');
    }
}
