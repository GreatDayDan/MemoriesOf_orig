<?php
//2020.08.14
namespace App\Http\Controllers;

use App\Mo_Event;
use Illuminate\Http\Request;

class Mo_EventController extends Controller
{
    protected $table = 'mo_events';
//$mo_Event = mo_Event::latest()->get();
$Mo_Event = new Mo_Event();
    public function index()
    {
        @Mo_Event = Mo_Event::latest()->get();

        return view('Mo_Event.index', ['Mo_Event' => $Mo_Event]);
//        $mo_Events = mo_Event::latest()->paginate(5);
//
//        return view('mo_Events.index',compact('mo_Events'))
//            ->with('i', (request()->input('page', 1) - 1) * 5);
//
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mo_Event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mo_Event' => 'required',
            'detail' => 'required',
        ]);

        Event::create($request->all());

        return redirect()->route('$mo_Event.index')
            ->with('success', 'mo_Event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Event $mo_Event
     * @return \Illuminate\Http\Response
     */
    public function show($id) // Show a single resource
    {
        $mo_Event = mo_Event::find($id);

        return view('mo_Event.show', ['mo_Event' => $mo_Event]);
    }

//    public function show(mo_Event $mo_Event)
//    {
//        return view('mo_Events.show',compact('mo_Event'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\event $mo_Event
     * @return \Illuminate\Http\Response
     */
    public function edit(mo_Event $mo_Event) {
        return view('mo_Event.edit', compact('mo_Event'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\event $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mo_Event $mo_Event)
    {
        $request->validate([
            'mo_Event' => 'required',
            'detail' => 'required',
        ]);

        $mo_Event->update($request->all());

        return redirect()->route('mo_Events.index')
            ->with('success', 'mo_Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(mo_Event $mo_Event)
    {
        $mo_Event->delete();

        return redirect()->route('mo_Event.index')
            ->with('success', 'mo_Event deleted successfully');
    }
}
}
