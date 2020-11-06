<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>layouts.layout</title>

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
            height: 100vh;
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
            font-size: 84px;
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
            /*position: absolute;*/
            right: 300px;
            left: 250px;
            top: 0;
            /*font-family: 'Nunito', sans-serif;*/
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-weight: 50;;
        }
    </style>
    @stack('head')
    @livewireStyles
    <script>

        function chngdescr(pid){
            const chdescr = document.getElementById("event_id");
            // alert('alert 1');
            {{--//use pid to get the description--}}
            chdescr.addEventListener("change", function () {
                    alert('alert 2');
                    const idx = chdescr.options[chdescr.selectedIndex].value;
                    alert('alert 2');
                    const pid = chdescr.options[idx].value;
                    alert('alert 3');
                    let currentEvent = jevents.findIndex((event, pid) => event.id == pid);
                    alert('alert 4');
                    let description = jevents[currentEvent].description;
                    alert('alert 5');
                    let descriptionField = document.getElementById("description");
                    alert('alert 6');
                    descriptionField.value = description;
                    alert('Descr: ' + descriptionField.value);
                }
            )
        }

    function setCustomData(componetname, newvalue) {
        var dataholder = document.getElementById("dataholder");

        var show = msglist.dataset.listSize;
        msglist.dataset.listSize = +show+3;
    }
    </script>
</head>
<body>

@yield('content')
@stack('scripts')
@livewireScripts
</body>
</html>
