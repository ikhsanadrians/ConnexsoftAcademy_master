<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexsoft Academy</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logoconnexsoft2.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
        @include('components.header')
        <div class="container mx-auto py-[10px] lg:px-[80px]">
            @yield('content')
        </div>
    </div>
</body>

</html>
