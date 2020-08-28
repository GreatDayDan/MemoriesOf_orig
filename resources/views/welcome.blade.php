<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 75vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 25px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .mo {
                position: absolute;
                right: 300px;
                left: 50px;
                /*font-family: 'Nunito', sans-serif;*/
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                font-weight: 50;
            }
        </style>
    </head>
    <body>

    <div class="title m-b-md">
        MemoriesOf
    </div>
    <div class="mo">
            We all have memories of people, places, things and/or events. Memories Of is a place where you can share those memories with friends and family. Something that you post might trigger a memory that they have of the same people, places, things and/or events.<br>
            For example:<br>
            Back in the 70's I was serving on the USS Holland (AS-32). During my tour of duty, the Holland was deployed to Diego Garcia, British Indian Ocean Territory (BIOT). Diego Garcia is a footprint shaped island with a large lagoon. We spent a year there one summer. Diego Garcia was not the end of the world. The end of the world was on another island about a mile away.<br>
            While we were there the Island's MWR committee hosted the 2nd semi-annual "Raft the Lagoon Race". I made a raft of Herculite. Three of my shipmates and I joined the many other teams in the race to the other side. We did good. We came in 2nd...from last. We all had a blast and burgers and beer.<br>
            I reminisced about this event and added it to MemoriesOf by entering a name for the event and a description.<br>
            Sometime later another user sees Raft the Lagoon in the dropdown list, clicks on the event name. The description is shown. The new user can request that an invite be sent to me.<br>
            In a similar fashon, Family Names can be matched.<br>
            So the purpose of MemoriesOf is to look for similar memories of other users. When another user shares his memories Of Diego Garcia and a close match is found, to send an invite to both users to correspond with each other.
       </div>
     <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ route('moevents') }}">Show Events</a>
{{--                    <a href="{{ route('mofamilies') }}">Show Families</a>--}}
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://vapor.laravel.com">Vapor</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </body>
</html>
