<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexsoft Academy | Belajar Coding Mudah</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('js\js-lib\highlight.js-main\src\highlight.js') }}">
    <link rel="shortcut icon" href="{{ asset('images/logoconnexsoft2.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
        @include('components.header')
        <div class=" w-full h-full py-[10px] px-0 relative">
            @yield('content')
        </div>
        <div class="mb-96"></div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/styles/sunburst.css"></script>
</body>

</html>
