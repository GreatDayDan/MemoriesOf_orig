<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

{{--        <title>{{ config('app.name', 'MemoriesOf, app') }}</title>--}}
        <title>app</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
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
            .container {
                max-width: 350px;
                margin: 50px auto;
                text-align: center;
            }

            input[type="submit"] {
                margin-bottom: 20px;
            }

            .select-block {
                width: 300px;
                margin: 110px auto 30px;
                position: relative;
            }

            select {
                width: 100%;
                height: 50px;
                font-size: 100%;
                font-weight: bold;
                cursor: pointer;
                background-color: #1A33FF;
                border: none;
                border-radius: 4px;
                color: white;
                appearance: none;
                padding: 8px 38px 10px 18px;
                -webkit-appearance: none;
                -moz-appearance: none;
                transition: color 0.3s ease, background-color 0.3s ease, border-bottom-color 0.3s ease;
            }

            /* For IE <= 11 */
            select::-ms-expand {
                display: none;
            }

            .selectIcon {
                top: 7px;
                right: 15px;
                width: 30px;
                height: 36px;
                padding-left: 5px;
                pointer-events: none;
                position: absolute;
                transition: background-color 0.3s ease, border-color 0.3s ease;
            }

            .selectIcon svg.icon {
                transition: fill 0.3s ease;
                fill: white;
            }

            select:hover,
            select:focus {
                color: #000000;
                background-color: white;
            }

            select:hover~.selectIcon,
            select:focus~.selectIcon {
                background-color: white;
            }

            select:hover~.selectIcon svg.icon,
            select:focus~.selectIcon svg.icon {
                fill: #1A33FF;
            }
        </style>

        @livewireStyles

        <!-- Scripts -->
        <script  type="text/javascript"   src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>

        {{--<script  type="text/javascript"   src="E:\wamp64\www\dans2\public\js\chngdescr.js(selObject)"></script>--}}


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
{{--            @livewire('navigation-dropdown')--}}
{{----}}
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
{{--                    {{ $header }}--}}
                </div>
            </header>

            <!-- Page Content -->
            <main>

                @yield('content')
                @show
{{--                {{ $slot }}--}}
            </main>
        </div>

{{--        @stack('modals')--}}
        @livewireScripts
    </body>
</html>
