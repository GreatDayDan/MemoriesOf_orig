@extends('layouts.selecteventlayout')
@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form name='f1' action="{{ url('/store') }}"  method="post">
            @csrf
            <fieldset form="f1" id="mo" name="events">
            <div class="form-group">
                <label for="event_id">Choose an Event</label>
                <select name="event_id" id="event_id" size="" class="form-control" onchange="chngdescr(1)"><option name="pid" value="'Select an Event'">Select an Event</option>
                    @foreach($eventmos as $eventmo)
                        <option name="pid" value="{{$eventmo->id}}" id="moEvent">{{$eventmo->eventname}}</option>
{{--                        <option name="pid" value="$eventmo->id" id="moEvent">$eventmo->eventname</option>--}}
                    @endforeach
                </select>
                <p>
                    <label id="instructions" for="NewEvent">Select an existing event from the list or enter a new event here.</label><br>
                    <input type="text" id="ename" name="NewEvent" width="600" value=""
                           placeholder="">
                </p>
                <p>
                    <label id="label4" for="DESCRIPTION">Description</label><br>
                    <textarea  rows="5" cols="50" form="f1" name="DESCRIPTION"
                               placeholder="This is events called with /events2 or /events3. Describe the event"
                               id="DESCRIPTION"></textarea>
                </p>

                <p>
                    <input type='submit' id='submit_id' name='submit_id'>
                </p>
            </div>
        </form>
      </fieldset>
    </div>
    <div id="description"
@endsection
