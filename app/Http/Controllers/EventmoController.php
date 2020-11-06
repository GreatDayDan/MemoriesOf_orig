<?php

namespace App\Http\Controllers;

use App\Models\Eventmo;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class EventmoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        Log::debug('gdd 05.1 eventmos index() EventmoController');
        $eventmos = Eventmo::all()->SortBy('eventname');
        log::debug('gdd 05.2 found ' . $eventmos->count() . ' events.');
        return view('eventmo.selectevent', compact(['eventmos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        Log::info('gdd 06 event.create EventmoController');
        return view('eventmo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {   ini_set('memory_limit', '4G'); // or you could use 1G
        log::debug('gdd 07.1: ');
//        log::debug('gdd 07.11: ' . print_r($request,true));

        $validator = Validator::make($request->all(), [
            'eventname' => 'required',
            'description' => 'required'
        ]);

        log::debug('gdd 07.11: ');
//        dd($validator);
        if ($validator->fails()) {

            Log::debug('gdd 07.12 failed id: ' . $request->id);
//            Session::flash('error', $validator->messages()->first());
//            return redirect()->back()->withInput();
            return redirect('/');


            // finally store our user
//        $this->validate(request(), [/
        } else {
            // store

            Log::debug('gdd 07.13 succeeded id: ' . $request->id);

            $eventmo = new eventmo(array(
                'userid' => $request->get('userid'),
                'postsid' => $request->get('postsid'),
                'eventname' => $request->get('eventname'),
                'description' => $request->get('description')));
//        dd($request);

//            Log::debug('gdd 07.14 id: ' . $eventmo->id);
            $eventmo->save();
//            Log::debug('gdd 07.15 saved. Return to events view' . $eventmo->id);
//    s    return view ('events');
    return redirect('/selectevent')->with('success', 'event saved!');

            // redirect
//            Session::flash('message', 'Successfully created Event!');
            return Redirect::to('frontpage');
        }
    }
//         return back()->withSuccess('Event added successfullyz!');



            /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventmo  $eventmo
     * @return \Illuminate\Http\Response
     */
    public function show(Eventmo $eventmo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventmo  $eventmo
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventmo $eventmo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventmo  $eventmo
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, eventmo $eventmo)
    {
        Log::info('gdd 10 event update() eventmoController  ' . $eventmo->id);
        $request->validate([
            'event_name' => 'required',
            'description' => 'required'
        ]);
        $eventmo->id = $request->get('id');
        $eventmo->event_name = $request->get('event_name');
        $eventmo->user->id = $request->get('user->id');
        $eventmo->posts->id = $request->get('posts->id');
        $eventmo->description = $request->get('description');
        $eventmo->save();
        return redirect('/event')->with('success', 'event updated!');
    }

//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Models\Eventmo  $eventmo
//     * @return \Illuminate\Http\Response
//     */
    public function destroy(Eventmo $eventmo)
    {
        //
    }
}
