@extends('layouts.master')
@section('content')
    <img src="{{ asset('images/bg-home-hero.png') }}" alt="hero" class="absolute -z-10 left-0 top-28">
    <div class="main">
        <div class="main-text order-2 lg:order-1 md:order-2">
            <div class="inner">
                <h1 class="lg:text-[3rem] md:text-[3rem] text-[2.7rem] text-[#292e53]">Belajar Coding Mudah Dan Gratis</h1>
                <p class="lg:text-[1.2rem] md:text-[1.15rem] text-[1.1rem] text-[#292e53] opacity-90">Tingkatkan keterampilan
                    digital,
                    tambah
                    portofolio,
                    dan siapkan karir kamu untuk
                    jadi talenta digital
                    handal
                    bersama Connexsoft Academy #TwogetherWithConnexsoft</p>
                <button
                    class="mt-6 py-2 px-3 bg-gradient-to-r from-purple-800 font-semibold rounded-lg hover:scale-105 duration-200 hover:shadow-md to-purple-900 text-white tracking-wide">Learn
                    Now</button>
            </div>


        </div>
        <div class="main-vector relative select-none pointer-events-none block order-1 lg:order-2 md:order-1">

            <svg class="lg:block md:hidden hidden absolute -right-16 -z-10 drop-shadow-2xl" width="200" height="200"
                viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <clipPath id="shape">
                        <path fill="currentColor"
                            d="M780,585.5Q704,671,636.5,782Q569,893,451.5,840.5Q334,788,252,704Q170,620,191,507.5Q212,395,249,262.5Q286,130,436,71Q586,12,670,149.5Q754,287,805,393.5Q856,500,780,585.5Z">
                        </path>
                    </clipPath>
                </defs>
                <g clip-path="url(#shape)">
                    <path fill="#714ffc"
                        d="M780,585.5Q704,671,636.5,782Q569,893,451.5,840.5Q334,788,252,704Q170,620,191,507.5Q212,395,249,262.5Q286,130,436,71Q586,12,670,149.5Q754,287,805,393.5Q856,500,780,585.5Z" />
                </g>
            </svg>
            <img src="{{ asset('images/centervectors.png') }}" alt="vector"
                class="md:h-64 h-56 lg:h-80 select-none pointer-events-none">
            <svg class="lg:block hidden md:hidden absolute drop-shadow-2xl -bottom-20 -z-10" width="200" height="200"
                viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <clipPath id="shape">
                        <path fill="currentColor"
                            d="M893,620.5Q787,741,677,811Q567,881,440,852.5Q313,824,281.5,707.5Q250,591,197.5,481Q145,371,209,238.5Q273,106,413,153.5Q553,201,712.5,194.5Q872,188,935.5,344Q999,500,893,620.5Z">
                        </path>
                    </clipPath>
                </defs>
                <g clip-path="url(#shape)">
                    <path fill="#4d466b"
                        d="M893,620.5Q787,741,677,811Q567,881,440,852.5Q313,824,281.5,707.5Q250,591,197.5,481Q145,371,209,238.5Q273,106,413,153.5Q553,201,712.5,194.5Q872,188,935.5,344Q999,500,893,620.5Z" />
                </g>
            </svg>
        </div>


    </div>
@endsection
