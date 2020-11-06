<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        $userid = Auth::id();
        if (! isset($userid)){
            $userid = 0;}

        Log::debug('gdd 05.1 families ');
        Log::debug('gdd 05.2 family $userId: '. $userid );
        $families = Family::all()->SortBy('familyname');
        log::debug('gdd 05.3 found ' . $families->count() . ' families.');
        return view('family.selectfamily', compact(['families']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('family.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        log::debug('gdd 07.1: ');
        ini_set('memory_limit', '4G'); // or you could use 1G
//        $userid = Auth::id();
//        if (!isset($userid)) {
//            $userid = -1;
//        }
        $user = auth()->user();

//        log::debug('gdd 07.11: ' . print_r($request,true));

//        $validator = Validator::make($request->all(), [
//            'familyname' => 'required',
//            'description' => 'required',
//            'userid => required|numeric'
//        ]);
//
//        log::debug('gdd 07.11: ');
////        dd($validator);
//        if ($validator->fails()) {
//
//            Log::debug('gdd 07.12 failed id: ' . $request->id);
////            Session::flash('error', $validator->messages()->first());
////            return redirect()->back()->withInput();
//            return redirect('/');
//
//
//            // finally store our user
////        $this->validate(request(), [/
//        } else {
//            // store

//           Log::debug('gdd 07.13 succeeded id: ' . $request->request->#parameters->_token);

            $family = new family(array(
//                'userid' => $request->get('userid'),
                'userid' => '1',
                'eventid' => $request->get('eventid'),
                'postsid' => $request->get('postsid'),
                'familyname' => $request->get('NewFamily'),
                'description' => $request->input('DESCRIPTION')));
//        $name = $request->input('name');
        dd($family);
            Log::debug('gdd 07.14 id: ' . $family->id);
            $family->save();
            Log::debug('gdd 07.15 saved. Return to family view' . $family->id);
//        return view ('events');
            return redirect('/selectfamily')->with('success', 'family saved!');

            // redirect
//            Session::flash('message', 'Successfully created Event!');
            return Redirect::to('family.frontpage');
//        }
    }
//         return back()->withSuccess('Event added successfullyz!');


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function show(Family $family)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function edit(Family $family)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Family $family)
    {
        Log::info('gdd 10 event update() eventmoController  ' . $family->id);
        $request->validate([
            'familyname' => 'required',
            'description' => 'required'
        ]);
        $family->id = $request->get('id');
        $family->familyname = $request->get('event_name');
        $family->userid = $request->get('user->id');
        $family->postsid = $request->get('posts->id');
        $family->description = $request->get('description');
        $family->save();
        return redirect('/family')->with('success', 'family updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function destroy(Family $family)
    {
        //
    }
}
