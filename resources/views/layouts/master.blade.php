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
    <link rel="stylesheet"
    href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
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
    <script src="{{ asset('js/js-lib/jquery.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset('js/quiz.js') }}"></script>
    <script>
        hljs.highlightAll();
    </script>


</body>

</html>
