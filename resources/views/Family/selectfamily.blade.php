@extends('layouts.selecteventlayout')
@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form name='f1' action="{{ url('/storefamily') }}"  method="post">
            @csrf
            <fieldset form="f1" id="mo" name="family">
            <div class="form-group">
                <label for="family_id">Choose a Family</label>
                <select name="family_id" id="family_id" class="form-control" onchange="chngfamilydescr(1)">
                        <option name="pid" value="'Select a family'">Select an family</option>
                    @foreach($families as $family)
                        <option name="pid" value="{{$family->id}}" id="family">{{$family->familyname}}</option>

{{--                    <option name="pid" value="$family->id" id="family">$family->familyname</option>--}}
                    @endforeach
                </select>
                <p>
                    <label id="instructions" for="Newfamily">Select an existing family from the list or enter a new family here.</label><br>
                    <input type="text" id="ename" name="NewFamily" width="600" value=""
                           placeholder="">
                </p>
                <p>
                    <label id="label4" for="DESCRIPTION">Description</label><br>
                    <textarea  rows="5" cols="50" form="f1" name="DESCRIPTION"
                               placeholder="Describe the family"
                               id="DESCRIPTION">
                    </textarea>
                </p>
                <p>
                    <input type="hidden" id="familyname" name="fname" value="{{$family->familyname}}"
                           array('description'->{{$family->description}},
                                'postid'->{{$family->postid}},
                                'eventid'->{{$family->eventid}},
                                'userid'->{{$family->userid}}
                    )><br><br>
                </p>
                <p>
                    <input type='submit' id='submit_id' name='NewFamily'>
                </p>
            </div>
          </fieldset>
        </form>
    </div>
@endsection
