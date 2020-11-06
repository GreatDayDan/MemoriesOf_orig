<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>base</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    @livewireStyles
</head>
<body>
<div class="container">
    @yield('main')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
@livewireScripts
</body>
</html>
