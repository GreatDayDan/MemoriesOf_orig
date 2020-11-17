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
    private function getuserid(){
        $userid = Auth::id();
        if (! isset($userid)){
            $userid = -10;}

    }
    private function getuser(){
        $user = Auth::user();
        if (! isset($user)){
            $user = null;}

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        Log::debug('gdd 05.1 families ');
//        Log::debug('gdd 05.2 family $userId: '. $userid );
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
        log::debug('gdd 07.1: family.store ');
        ini_set('memory_limit', '4G'); // or you could use 1G


//        log::debug('gdd 07.11: ' . print_r($request,true));
//dd($userid);
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
//            $family = new family(array(
////                'userid' => $request->get('userid'),
//                'userid' => $request->get('userid'),
//                'eventid' => $request->get('eventid'),
//                'postsid' => $request->get('postsid'),
//                'familyname' => $request->get('familyname'),
//                'description' => $request->get('DESCRIPTION')));
//            $name = $request->input('familyname');
//           dd($family);

        $family = new family(array(
            'userid' => 1,
            'eventid' => -13,
            'postsid' => -13,
            'familyname' => "My 3rd Fam",
            'description' => "My 3rd  descr."));

        Log::debug('gdd 07.14 id: ' . $family->id);
            log::debug('$family: '. var_dump($family));
            $family->save();
            Log::debug('gdd 07.15 saved. Return to family view, family->id: ' . $family->id);
//        return view ('events');
            return redirect('/selectfamily')->with('success', 'family saved!');

            // redirect
//            Session::flash('message', 'Successfully created Event!');
            return Redirect::to('frontpage');
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

//Illuminate\Http\Request {#43 ▼
//    #json: null
//    #convertedFiles: null
//    #userResolver: Closure($guard = null) {#1226 ▶}
//    #routeResolver: Closure() {#1235 ▶}
//    +attributes: Symfony\Component\HttpFoundation\ParameterBag {#45 ▶}
//        +request: Symfony\Component\HttpFoundation\ParameterBag {#44 ▼
//            #parameters: array:7 [▼
//            "_token" => "PFaBtTfejnuVE0qQN91Si8e6Ey6PnO5vZ1w5unhk"
//      "family_id" => "'Select a family'"
//      "NewFamily" => "Submit"
//      "postid" => null
//      "eventid" => null
//      "description" => "my descr"
//      "userId" => "1"
//    ]
//  }
//  +query: Symfony\Component\HttpFoundation\InputBag {#51 ▼
//            #parameters: []
//        }
//  +server: Symfony\Component\HttpFoundation\ServerBag {#47 ▶}
//            +files: Symfony\Component\HttpFoundation\FileBag {#48 ▶}
//                +cookies: Symfony\Component\HttpFoundation\InputBag {#46 ▼
//                    #parameters: array:2 [▶]
//                }
//  +headers: Symfony\Component\HttpFoundation\HeaderBag {#49 ▶}
//                    #content: null
//                    #languages: null
//                    #charsets: null
//                    #encodings: null
//                    #acceptableContentTypes: null
//                    #pathInfo: "/storefamily"
//                    #requestUri: "/storefamily"
//                    #baseUrl: ""
//                    #basePath: null
//                    #method: "POST"
//                    #format: null
//                    #session: Illuminate\Session\Store {#1264 ▼
//                    #id: "DgduzZyJ75cehLMkeDaTmhy1j8P4TpMuqjRdsglx"
//                    #name: "memoriesof_session"
//                    #attributes: array:3 [▶]
//                    #handler: Illuminate\Session\FileSessionHandler {#1263 ▶}
//                    #started: true
//                }
//  #locale: null
//  #defaultLocale: "en"
//  -preferredFormat: null
//                -isHostValid: true
//                -isForwardedValid: true
//                -isSafeContentPreferred: null
//  basePath: ""
//  format: "html"
//}
