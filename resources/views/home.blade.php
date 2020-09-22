 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form style="height: 104px;" target="_top"
                  method="post" name="home">Sharing special memories<br>
                <br>
                We all have memories of people, places, things and/or events. Memories Of is a place where you can share those memories with friends and family. Something that you post might trigger a memory that they have of the same people, places, things and/or events.<br>
                For example:<br>
                Back in the 70's I was serving on the USS Holland (AS-32). During my tour of duty, the Holland was deployed to Diego Garcia, British Indian Ocean Territory (BIOT). Diego Garcia is a footprint shaped island with a large lagoon. We spent a year there one summer. Diego Garcia was not the end of the world. The end of the world was on another island about a mile away.<br>
                While we were there the Island's MWR committee hosted the 2nd semi-annual "Raft the Lagoon Race". I made a raft of Herculite. Three of my shipmates and I joined the many other teams in the race to the other side. We did good. We came in 2nd...from last. We all had a blast and burgers and beer.<br>
                I reminisced about this event and added it to MemoriesOf by entering a name for the event and a description.<br>
                Sometime later another user sees Raft the Lagoon in the dropdown list, clicks on the event name. The description is shown. The new user can request that an invite be sent to me.<br>
                In a similar fashon, Family Names can be matched.<br>
                So the purpose of MemoriesOf is to look for similar memories of other users. When another user shares his memories Of Diego Garcia and a close match is found, to send an invite to both users to correspond with each other.
{{----}}
            </form>

        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form style="height: 104px;" target="_top"
                              method="post" name="home">Sharing special memories<br>
                            <br>
                                 We all have memories of people, places, things and/or events. Memories Of is a place where you can share those memories with friends and family. Something that you post might trigger a memory that they have of the same people, places, things and/or events.<br>
                            For example:<br>
                            Back in the 70's I was serving on the USS Holland (AS-32). During my tour of duty, the Holland was deployed to Diego Garcia, British Indian Ocean Territory (BIOT). Diego Garcia is a footprint shaped island with a large lagoon. We spent a year there one summer. Diego Garcia was not the end of the world. The end of the world was on another island about a mile away.<br>
                            While we were there the Island's MWR committee hosted the 2nd semi-annual "Raft the Lagoon Race". I made a raft of Herculite. Three of my shipmates and I joined the many other teams in the race to the other side. We did good. We came in 2nd...from last. We all had a blast and burgers and beer.<br>
                            I reminisced about this event and added it to MemoriesOf by entering a name for the event and a description.<br>
                            Sometime later another user sees Raft the Lagoon in the dropdown list, clicks on the event name. The description is shown. The new user can request that an invite be sent to me.<br>
                            In a similar fashon, Family Names can be matched.<br>
                            So the purpose of MemoriesOf is to look for similar memories of other users. When another user shares his memories Of Diego Garcia and a close match is found, to send an invite to both users to correspond with each other.

                        </form>

                </div>


            </div>

        </div>
    </div>

</div>
<a href="{{ url('\events4') }}">Show Events</a>
@endsection
