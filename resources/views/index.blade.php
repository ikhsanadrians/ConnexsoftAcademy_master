@extends('layouts.master')
@section('content')
    <section id="container-main" class="container mx-auto lg:px-[80px]">
        <div class="main">
            <div class="main-text order-2 lg:order-1 md:order-2">
                <div class="inner">
                    <h1 class="lg:text-[3rem] md:text-[3rem] text-[2.7rem] text-[#292e53]">Belajar Coding Mudah Dan Gratis
                    </h1>
                    <p class="lg:text-[1.2rem] md:text-[1.15rem] text-[1.1rem] text-[#292e53] opacity-90">Tingkatkan
                        keterampilan
                        digital,
                        tambah
                        portofolio,
                        dan siapkan karir kamu untuk
                        jadi talenta digital
                        handal
                        bersama Connexsoft Academy #TwogetherWithConnexsoft</p>
                    <a href="#roadmap">
                        <button
                            class="mt-6 py-2 px-3 bg-gradient-to-r from-purple-800 font-semibold rounded-lg hover:scale-105 duration-200 hover:shadow-md to-purple-900 text-white tracking-wide">Learn
                            Now</button>
                    </a>
                </div>


            </div>
            <div class="main-vector relative select-none pointer-events-none block order-1 lg:order-2 md:order-1">

                <svg class="lg:block md:hidden hidden absolute -right-16 -z-10 drop-shadow-2xl" width="200"
                    height="200" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
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
                <img loading="lazy" src="{{ asset('images/centervectors.png') }}" alt="vector"
                    class="md:h-64 h-56 lg:h-80 select-none pointer-events-none">
                <svg class="lg:block hidden md:hidden absolute drop-shadow-2xl -bottom-20 -z-10" width="200"
                    height="200" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
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
    </section>
    <section id="roadmap" class="w-full h-full mt-[15rem] !-px-10">
        <div class="roadmap-section w-[100%] h-full pb-12 lg:h-[100vh] bg-gradient-to-r from-purple-600 to-purple-900">
            <div class="inner flex items-center  w-full h-full mx-auto container px-4 lg:px-[80px] py-16">
                <div class="wrapper-inner w-full h-full">
                    <div class="title md:w-[30rem] w-full lg:w-[30rem]">
                        <h1 id="title-roadmap-section" class="text-3xl">Alur Belajar Terbaik
                            Untuk Membangun Karir</h1>
                    </div>
                    <div class="cards-list mt-8 flex lg:flex-row md:flex-col flex-col sm:flex-col gap-8">
                        <div
                            class="card-1 w-[100%] lg:w-[33%] h-[25rem] bg-white rounded-xl hover:shadow-gray-400 hover:shadow-lg hover:scale-105 duration-300">
                            <div class="card-inner w-full h-full p-4">
                                <div class="card-thumbnail  h-2/4 rounded-2xl overflow-hidden">
                                    <img class="user-select-none pointer-events-none" loading="lazy"
                                        src="{{ asset('images/thumbnail_roadmap-2.png') }}" alt="img-card"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="cursor-pointer card-description h-1/2 pt-6 text-xl text-gray-800">
                                    <h1 id="card-description-title">
                                        Berkarir Sebagai FullStack Web Developer Javascript
                                    </h1>
                                    <p class="text-base font-medium">
                                        26 Courses ??? 86 Hours
                                    </p>
                                    <div class="tech-stack mt-8 flex gap-4">
                                        <div class="node">
                                            <img class="h-[36px]"
                                                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" />

                                        </div>
                                        <div class="monggo">
                                            <img class="h-[36px]"
                                                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" />
                                        </div>
                                        <div class="express">

                                            <img class="h-[36px]"
                                                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original.svg" />

                                        </div>
                                        <div class="vue">

                                            <img class="h-[36px]"
                                                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" />

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div
                            class="card-2 w-[100%] lg:w-[33%] h-[25rem] bg-white rounded-xl  hover:shadow-gray-400 hover:shadow-lg hover:scale-105 duration-300">
                            <div class="card-inner w-full h-full p-4">
                                <div class="card-thumbnail  h-2/4 rounded-2xl overflow-hidden">
                                    <img class="user-select-none pointer-events-none" loading="lazy"
                                        src="{{ asset('images/thumbnail_roadmap-1.png') }}" alt="img-card"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="card-description cursor-pointer pt-6  h-1/2 text-xl text-gray-800">
                                    <h1 id="card-description-title">
                                        Berkarir Sebagai Freelance UI/UX Designer
                                    </h1>
                                    <p class="text-base font-medium">
                                        12 Courses ??? 72 Hours
                                    </p>
                                    <div class="tech-stack flex gap-4 mt-8">
                                        <div class="figma">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                viewBox="0 0 36 36" fill="none">
                                                <g clip-path="url(#clip0_3931_3169)">
                                                    <path
                                                        d="M12.0039 36C15.3159 36 18.0039 33.312 18.0039 30V24H12.0039C8.69191 24 6.00391 26.688 6.00391 30C6.00391 33.312 8.69191 36 12.0039 36Z"
                                                        fill="#0ACF83" />
                                                    <path
                                                        d="M6.00391 18C6.00391 14.688 8.69191 12 12.0039 12H18.0039V24H12.0039C8.69191 24 6.00391 21.312 6.00391 18Z"
                                                        fill="#A259FF" />
                                                    <path
                                                        d="M6.00391 6C6.00391 2.688 8.69191 0 12.0039 0H18.0039V12H12.0039C8.69191 12 6.00391 9.312 6.00391 6Z"
                                                        fill="#F24E1E" />
                                                    <path
                                                        d="M18.0039 0H24.0039C27.3159 0 30.0039 2.688 30.0039 6C30.0039 9.312 27.3159 12 24.0039 12H18.0039V0Z"
                                                        fill="#FF7262" />
                                                    <path
                                                        d="M30.0039 18C30.0039 21.312 27.3159 24 24.0039 24C20.6919 24 18.0039 21.312 18.0039 18C18.0039 14.688 20.6919 12 24.0039 12C27.3159 12 30.0039 14.688 30.0039 18Z"
                                                        fill="#1ABCFE" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_3931_3169">
                                                        <rect width="24.0048" height="36" fill="white"
                                                            transform="translate(6)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="notion">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="36"
                                                viewBox="13.38 3.2 485.44 505.7" width="36">
                                                <path
                                                    d="m186.84 13.95c-79.06 5.85-146.27 11.23-149.43 11.86-8.86 1.58-16.92 7.59-20.71 15.5l-3.32 6.96.32 165.88.47 165.88 5.06 10.28c2.85 5.69 22.14 32.26 43.17 59.61 41.59 53.92 44.59 56.93 60.4 58.51 4.59.47 39.06-1.11 76.38-3.32 37.48-2.37 97.56-6.01 133.62-8.06 154.01-9.35 146.1-8.56 154.95-16.15 11.07-9.17 10.28 5.85 10.75-195.76.32-170.94.16-182.16-2.37-187.38-3-5.85-8.38-9.96-78.59-59.3-46.96-32.89-50.28-34.63-71.32-34.95-8.69-.31-80.48 4.43-159.38 10.44zm177.73 21.66c6.64 3 55.19 36.84 62.3 43.33 1.9 1.9 2.53 3.48 1.58 4.43-2.21 1.9-302.66 19.77-311.35 18.5-3.95-.63-9.8-3-13.12-5.22-13.76-9.33-47.91-37.32-47.91-39.37 0-5.38-1.11-5.38 132.83-15.02 25.62-1.74 67.68-4.9 93.3-6.96 55.49-4.43 72.1-4.27 82.37.31zm95.51 86.5c2.21 2.21 4.11 6.48 4.74 10.59.47 3.8.79 74.64.47 157.18-.47 141.68-.63 150.54-3.32 154.65-1.58 2.53-4.74 5.22-7.12 6.01-6.63 2.69-321.46 20.56-327.94 18.66-3-.79-7.12-3.32-9.33-5.53l-3.8-4.11-.47-152.75c-.32-107.21 0-154.65 1.27-158.92.95-3.16 3.32-6.96 5.38-8.22 2.85-1.9 21.51-3.48 85.71-7.27 45.07-2.53 114.8-6.8 154.81-9.17 95.17-5.86 94.86-5.86 99.6-1.12z" />
                                                <path
                                                    d="m375.48 174.45c-17.08 1.11-32.26 2.69-34 3.64-5.22 2.69-8.38 7.12-9.01 12.18-.47 5.22 1.11 5.85 18.18 7.91l7.43.95v67.52c0 40.16-.63 66.73-1.42 65.94-.79-.95-23.24-35.1-49.97-75.9-26.72-40.95-48.86-74.64-49.18-74.95-.32-.32-17.71.63-38.58 2.06-25.62 1.74-39.69 3.32-42.54 4.9-4.59 2.37-9.65 10.75-9.65 16.29 0 3.32 6.01 5.06 18.66 5.06h6.64v194.18l-10.75 3.32c-8.38 2.53-11.23 4.11-12.65 7.27-2.53 5.38-2.37 10.28.16 10.28.95 0 18.82-1.11 39.37-2.37 40.64-2.37 45.22-3.48 49.49-11.86 1.27-2.53 2.37-5.22 2.37-6.01 0-.63-5.53-2.53-12.18-4.11-6.8-1.58-13.6-3.16-15.02-3.48-2.69-.79-2.85-5.69-2.85-73.69v-72.9l48.07 75.43c50.44 79.06 56.77 88.08 64.52 92.03 9.65 5.06 34.16 1.58 46.49-6.48l3.8-2.37.32-107.84.47-108 8.38-1.58c9.96-1.9 14.55-6.48 14.55-14.39 0-5.06-.32-5.38-5.06-5.22-2.83.13-19.12 1.08-36.04 2.19z" />
                                            </svg>
                                        </div>
                                        <div class="tech">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="36"
                                                viewBox="0 0 36 36" fill="none">
                                                <rect width="36" height="36" fill="url(#pattern0)" />
                                                <defs>
                                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#image0_3900_3196" transform="scale(0.005)" />
                                                    </pattern>
                                                    <image id="image0_3900_3196" width="200" height="200"
                                                        xlink:href="data:image/png;base64,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" />
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="tech">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                viewBox="0 0 50 50" fill="none">
                                                <path
                                                    d="M25 1.66016C37.8906 1.66016 48.3203 12.0898 48.3203 24.9609C48.3203 37.832 37.8906 48.2812 25 48.2812C12.1094 48.2812 1.67969 37.8516 1.67969 24.9805C1.67969 12.1094 12.1094 1.66016 25 1.66016Z"
                                                    fill="#E74D89" />
                                                <path
                                                    d="M25 49.9414C11.2109 49.9414 0 38.75 0 24.9805C0 11.1914 11.2109 0 25 0C38.7891 0 50 11.1914 50 24.9609C50 38.7305 38.7891 49.9414 25 49.9414ZM46.0742 28.3789C45.3516 28.1445 39.4727 26.4063 32.7734 27.4609C35.5664 35.1172 36.6992 41.3672 36.9141 42.6562C41.7188 39.4336 45.1367 34.3164 46.0742 28.3789ZM33.3398 44.6289C33.0273 42.7539 31.7773 36.2305 28.7891 28.457C28.75 28.4766 28.6914 28.4961 28.6523 28.4961C16.6016 32.6953 12.2852 41.0352 11.8945 41.8164C15.5078 44.6289 20.0586 46.3086 25 46.3086C27.9492 46.3281 30.7812 45.7227 33.3398 44.6289ZM9.14062 39.2578C9.62891 38.4375 15.4883 28.75 26.5039 25.1758C26.7773 25.0781 27.0703 25 27.3438 24.9219C26.8164 23.7109 26.2305 22.5 25.6055 21.3086C14.9414 24.4922 4.58984 24.3555 3.65234 24.3359C3.65234 24.5508 3.63281 24.7656 3.63281 24.9805C3.65234 30.4688 5.72266 35.4688 9.14062 39.2578ZM4.10156 20.625C5.05859 20.6445 13.8477 20.6836 23.8477 18.0273C20.3125 11.7383 16.4844 6.46484 15.9375 5.70313C9.94141 8.51563 5.48828 14.0234 4.10156 20.625ZM20 4.25781C20.5859 5.03906 24.4727 10.3125 27.9687 16.7383C35.5664 13.8867 38.7695 9.58984 39.1602 9.04297C35.3906 5.70312 30.4297 3.67187 25 3.67187C23.2812 3.67187 21.6016 3.88672 20 4.25781ZM41.5234 11.5039C41.0742 12.1094 37.5 16.6992 29.6094 19.9219C30.0977 20.9375 30.5859 21.9727 31.0352 23.0078C31.1914 23.3789 31.3477 23.75 31.5039 24.1016C38.6133 23.2031 45.6641 24.6484 46.3672 24.7852C46.3086 19.7656 44.5117 15.1367 41.5234 11.5039Z"
                                                    fill="#B2215A" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div
                            class="card-3 cursor-pointer w-[100%]  lg:w-[33%] h-[25rem] bg-white rounded-xl  hover:shadow-gray-400 hover:shadow-lg hover:scale-105 duration-300">
                            <div class="card-inner w-full h-full p-4">
                                <div class="card-thumbnail h-2/4 rounded-2xl overflow-hidden">
                                    <img class="user-select-none pointer-events-none" loading="lazy"
                                        src="{{ asset('images/thumbnail_roadmap-3.png') }}" alt="img-card"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="card-description h-1/2 pt-6 text-xl text-gray-800">
                                    <h1 id="card-description-title">
                                        Berkarir Sebagai Mobile Application Developer
                                    </h1>
                                    <p class="text-base font-medium">
                                        22 Courses ??? 56 Hours</p>
                                    <div class="tech-stack  mt-8 flex gap-4">
                                        <div class="flutter">
                                            <img class="h-[36px]"
                                                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" />
                                        </div>
                                        <div class="figma">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                viewBox="0 0 36 36" fill="none">
                                                <g clip-path="url(#clip0_3931_3169)">
                                                    <path
                                                        d="M12.0039 36C15.3159 36 18.0039 33.312 18.0039 30V24H12.0039C8.69191 24 6.00391 26.688 6.00391 30C6.00391 33.312 8.69191 36 12.0039 36Z"
                                                        fill="#0ACF83" />
                                                    <path
                                                        d="M6.00391 18C6.00391 14.688 8.69191 12 12.0039 12H18.0039V24H12.0039C8.69191 24 6.00391 21.312 6.00391 18Z"
                                                        fill="#A259FF" />
                                                    <path
                                                        d="M6.00391 6C6.00391 2.688 8.69191 0 12.0039 0H18.0039V12H12.0039C8.69191 12 6.00391 9.312 6.00391 6Z"
                                                        fill="#F24E1E" />
                                                    <path
                                                        d="M18.0039 0H24.0039C27.3159 0 30.0039 2.688 30.0039 6C30.0039 9.312 27.3159 12 24.0039 12H18.0039V0Z"
                                                        fill="#FF7262" />
                                                    <path
                                                        d="M30.0039 18C30.0039 21.312 27.3159 24 24.0039 24C20.6919 24 18.0039 21.312 18.0039 18C18.0039 14.688 20.6919 12 24.0039 12C27.3159 12 30.0039 14.688 30.0039 18Z"
                                                        fill="#1ABCFE" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_3931_3169">
                                                        <rect width="24.0048" height="36" fill="white"
                                                            transform="translate(6)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="laravel">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                viewBox="0 0 50 52">
                                                <title>Logomark</title>
                                                <path
                                                    d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"
                                                    fill="#FF2D20" fill-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="firebase">
                                            <img class="h-[36px]"
                                                src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section id="exploreskill"
        class="lg:block hidden w-full h-[38rem] max-h-full pt-[5rem] mx-auto  lg:px-[80px] bg-slate-200">
        <div class="skill-sheet justify-center container mx-auto w-full">
            <div class="title mx-auto text-gray-800 text-3xl mb-8 lg:w-[25rem] w-full">
                <p class="text-center text-xl text-green-600 font-medium">#Mastering Skill</p>
                <h1 id="third-section" class="text-center mt-2">
                    Explore Skills Up to Date
                    Untuk Modal Bekerja
                </h1>
            </div>
            <div id="skill-list" class="skill-list-1 gap-2 mt-12 flex justify-center w-full flex-wrap h-full">
                <div id="py-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300">
                    <div class="inner p-2 flex items-center w-full h-full gap-2 cursor-pointer flex-wrap">

                        <svg height="75" width="75" viewBox="0 0 128 128">
                            <linearGradient id="python-original-a" gradientUnits="userSpaceOnUse" x1="70.252"
                                y1="1237.476" x2="170.659" y2="1151.089"
                                gradientTransform="matrix(.563 0 0 -.568 -29.215 707.817)">
                                <stop offset="0" stop-color="#5A9FD4"></stop>
                                <stop offset="1" stop-color="#306998"></stop>
                            </linearGradient>
                            <linearGradient id="python-original-b" gradientUnits="userSpaceOnUse" x1="209.474"
                                y1="1098.811" x2="173.62" y2="1149.537"
                                gradientTransform="matrix(.563 0 0 -.568 -29.215 707.817)">
                                <stop offset="0" stop-color="#FFD43B"></stop>
                                <stop offset="1" stop-color="#FFE873"></stop>
                            </linearGradient>
                            <path fill="url(#python-original-a)"
                                d="M63.391 1.988c-4.222.02-8.252.379-11.8 1.007-10.45 1.846-12.346 5.71-12.346 12.837v9.411h24.693v3.137H29.977c-7.176 0-13.46 4.313-15.426 12.521-2.268 9.405-2.368 15.275 0 25.096 1.755 7.311 5.947 12.519 13.124 12.519h8.491V67.234c0-8.151 7.051-15.34 15.426-15.34h24.665c6.866 0 12.346-5.654 12.346-12.548V15.833c0-6.693-5.646-11.72-12.346-12.837-4.244-.706-8.645-1.027-12.866-1.008zM50.037 9.557c2.55 0 4.634 2.117 4.634 4.721 0 2.593-2.083 4.69-4.634 4.69-2.56 0-4.633-2.097-4.633-4.69-.001-2.604 2.073-4.721 4.633-4.721z"
                                transform="translate(0 10.26)"></path>
                            <path fill="url(#python-original-b)"
                                d="M91.682 28.38v10.966c0 8.5-7.208 15.655-15.426 15.655H51.591c-6.756 0-12.346 5.783-12.346 12.549v23.515c0 6.691 5.818 10.628 12.346 12.547 7.816 2.297 15.312 2.713 24.665 0 6.216-1.801 12.346-5.423 12.346-12.547v-9.412H63.938v-3.138h37.012c7.176 0 9.852-5.005 12.348-12.519 2.578-7.735 2.467-15.174 0-25.096-1.774-7.145-5.161-12.521-12.348-12.521h-9.268zM77.809 87.927c2.561 0 4.634 2.097 4.634 4.692 0 2.602-2.074 4.719-4.634 4.719-2.55 0-4.633-2.117-4.633-4.719 0-2.595 2.083-4.692 4.633-4.692z"
                                transform="translate(0 10.26)"></path>
                            <radialGradient id="python-original-c" cx="1825.678" cy="444.45" r="26.743"
                                gradientTransform="matrix(0 -.24 -1.055 0 532.979 557.576)"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#B8B8B8" stop-opacity=".498"></stop>
                                <stop offset="1" stop-color="#7F7F7F" stop-opacity="0"></stop>
                            </radialGradient>
                            <path opacity=".444" fill="url(#python-original-c)"
                                d="M97.309 119.597c0 3.543-14.816 6.416-33.091 6.416-18.276 0-33.092-2.873-33.092-6.416 0-3.544 14.815-6.417 33.092-6.417 18.275 0 33.091 2.872 33.091 6.417z">
                            </path>
                        </svg>
                        <div class="title-desc px-2">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">Python</h1>
                            <p class="text-base text-gray-500">Data Science</p>
                        </div>
                    </div>
                </div>
                <div id="vue-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300">
                    <div class="inner p-2 flex items-center w-full h-full gap-2 cursor-pointer">
                        <svg width="75" height="75" viewBox="0 0 128 128">
                            <path
                                d="M0 8.934l49.854.158 14.167 24.47 14.432-24.47L128 8.935l-63.834 110.14zm126.98.637l-24.36.02-38.476 66.053L25.691 9.592.942 9.572l63.211 107.89zm-25.149-.008l-22.745.168-15.053 24.647L49.216 9.73l-22.794-.168 37.731 64.476zm-75.834-.17l23.002.009m-23.002-.01l23.002.01"
                                fill="none"></path>
                            <path d="M25.997 9.393l23.002.009L64.035 34.36 79.018 9.404 102 9.398 64.15 75.053z"
                                fill="#35495e"></path>
                            <path d="M.91 9.569l25.067-.172 38.15 65.659L101.98 9.401l25.11.026-62.966 108.06z"
                                fill="#41b883"></path>
                        </svg>
                        <div class="title-desc px-2">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">Vue</h1>
                            <p class="text-base text-gray-500">Front End Development</p>
                        </div>
                    </div>
                </div>
                <div id="lrvl-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300">
                    <div class="inner p-2 flex items-center w-full h-full gap-2 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 50 52">
                            <title>Logomark</title>
                            <path
                                d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"
                                fill="#FF2D20" fill-rule="evenodd" />
                        </svg>
                        <div class="title-desc px-2">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">Laravel</h1>
                            <p class="text-base text-gray-500">Back End Development</p>
                        </div>
                    </div>
                </div>
                <div id="figma-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300">
                    <div class="inner p-2 flex items-center w-full h-full gap-2 cursor-pointer">

                        <svg width="75" height="75" viewBox="0 0 128 128">
                            <path fill="#0acf83"
                                d="M45.5 129c11.9 0 21.5-9.6 21.5-21.5V86H45.5C33.6 86 24 95.6 24 107.5S33.6 129 45.5 129zm0 0">
                            </path>
                            <path fill="#a259ff"
                                d="M24 64.5C24 52.6 33.6 43 45.5 43H67v43H45.5C33.6 86 24 76.4 24 64.5zm0 0"></path>
                            <path fill="#f24e1e"
                                d="M24 21.5C24 9.6 33.6 0 45.5 0H67v43H45.5C33.6 43 24 33.4 24 21.5zm0 0"></path>
                            <path fill="#ff7262" d="M67 0h21.5C100.4 0 110 9.6 110 21.5S100.4 43 88.5 43H67zm0 0"></path>
                            <path fill="#1abcfe"
                                d="M110 64.5c0 11.9-9.6 21.5-21.5 21.5S67 76.4 67 64.5 76.6 43 88.5 43 110 52.6 110 64.5zm0 0">
                            </path>
                        </svg>
                        <div class="title-desc">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">Figma</h1>
                            <p class="text-base text-gray-500">UI/UX Design</p>
                        </div>
                    </div>
                </div>
                <div id="flutter-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300">
                    <div class="inner p-2 flex items-center w-full h-full gap-2 cursor-pointer">

                        <svg width="75" height="75" viewBox="0 0 128 128">
                            <g fill="#3FB6D3">
                                <path
                                    d="M12.3 64.2L76.3 0h39.4L32.1 83.6zM76.3 128h39.4L81.6 93.9l34.1-34.8H76.3L42.2 93.5z">
                                </path>
                            </g>
                            <path fill="#27AACD" d="M81.6 93.9l-20-20-19.4 19.6 19.4 19.6z"></path>
                            <path fill="#19599A" d="M115.7 128L81.6 93.9l-20 19.2L76.3 128z"></path>
                            <linearGradient id="flutter-original-a" gradientUnits="userSpaceOnUse" x1="59.365"
                                y1="116.36" x2="86.825" y2="99.399">
                                <stop offset="0" stop-color="#1b4e94"></stop>
                                <stop offset=".63" stop-color="#1a5497"></stop>
                                <stop offset="1" stop-color="#195a9b"></stop>
                            </linearGradient>
                            <path fill="url(#flutter-original-a)" d="M61.6 113.1l30.8-8.4-10.8-10.8z"></path>
                        </svg>

                        <div class="title-desc px-2">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">Flutter</h1>
                            <p class="text-base text-gray-500">Cross Platform Apps</p>
                        </div>
                    </div>
                </div>
                <div id="golang-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300">
                    <div class="inner p-2 flex items-center w-full h-full gap-2 cursor-pointer">
                        <svg width="75" height="75" viewBox="0 0 128 128">
                            <g fill="#00acd7" fill-rule="evenodd">
                                <path
                                    d="M11.156 54.829c-.243 0-.303-.122-.182-.303l1.273-1.637c.12-.182.424-.303.666-.303H34.55c.243 0 .303.182.182.364l-1.03 1.576c-.121.181-.424.363-.606.363zM2.004 60.404c-.242 0-.303-.12-.182-.303l1.273-1.636c.121-.182.424-.303.667-.303h27.636c.242 0 .364.182.303.364l-.485 1.454c-.06.243-.303.364-.545.364zM16.67 65.98c-.242 0-.302-.182-.181-.364l.848-1.515c.122-.182.364-.363.607-.363h12.12c.243 0 .364.181.364.424l-.12 1.454c0 .243-.243.425-.425.425zM79.58 53.738c-3.819.97-6.425 1.697-10.182 2.666-.91.243-.97.303-1.758-.606-.909-1.03-1.576-1.697-2.848-2.303-3.819-1.878-7.516-1.333-10.97.91-4.121 2.666-6.242 6.605-6.182 11.514.06 4.849 3.394 8.849 8.182 9.516 4.121.545 7.576-.91 10.303-4 .545-.667 1.03-1.394 1.636-2.243H56.064c-1.272 0-1.575-.788-1.151-1.818.788-1.879 2.242-5.03 3.09-6.606.183-.364.607-.97 1.516-.97h22.06c-.12 1.637-.12 3.273-.363 4.91-.667 4.363-2.303 8.363-4.97 11.878-4.364 5.758-10.06 9.333-17.273 10.303-5.939.788-11.454-.364-16.302-4-4.485-3.394-7.03-7.879-7.697-13.454-.788-6.606 1.151-12.546 5.151-17.758 4.303-5.636 10-9.212 16.97-10.485 5.697-1.03 11.151-.363 16.06 2.97 3.212 2.121 5.515 5.03 7.03 8.545.364.546.122.849-.606 1.03z">
                                </path>
                                <path
                                    d="M99.64 87.253c-5.515-.122-10.546-1.697-14.788-5.334-3.576-3.09-5.818-7.03-6.545-11.697-1.091-6.848.787-12.909 4.909-18.302 4.424-5.819 9.757-8.849 16.97-10.122 6.181-1.09 12-.484 17.272 3.091 4.788 3.273 7.757 7.697 8.545 13.515 1.03 8.182-1.333 14.849-6.97 20.546-4 4.06-8.909 6.606-14.545 7.757-1.636.303-3.273.364-4.848.546zm14.424-24.485c-.06-.788-.06-1.394-.182-2-1.09-6-6.606-9.394-12.363-8.06-5.637 1.272-9.273 4.848-10.606 10.545-1.091 4.727 1.212 9.515 5.575 11.454 3.334 1.455 6.667 1.273 9.879-.363 4.788-2.485 7.394-6.364 7.697-11.576z"
                                    fill-rule="nonzero"></path>
                            </g>
                        </svg>
                        <div class="title-desc">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">Golang</h1>
                            <p class="text-base text-gray-500">Back End Development</p>
                        </div>
                    </div>
                </div>
                <div id="react-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300 flex justify-center">
                    <div class="inner py-2 px-2  flex items-center  w-full h-full gap-2 cursor-pointer">
                        <svg width="75" height="75" viewBox="0 0 128 128">
                            <g fill="#61DAFB">
                                <circle cx="64" cy="64" r="11.4"></circle>
                                <path
                                    d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3.6-2.4 1.1-4.8 1.5-7.1 2.1-13.2-.2-22.5-6.6-26.1-1.9-1.1-4-1.6-6.4-1.6-7 0-15.9 5.2-24.9 13.9-9-8.7-17.9-13.9-24.9-13.9-2.4 0-4.5.5-6.4 1.6-6.4 3.7-8.7 13-6.6 26.1.4 2.3.9 4.7 1.5 7.1-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3-.6 2.4-1.1 4.8-1.5 7.1-2.1 13.2.2 22.5 6.6 26.1 1.9 1.1 4 1.6 6.4 1.6 7.1 0 16-5.2 24.9-13.9 9 8.7 17.9 13.9 24.9 13.9 2.4 0 4.5-.5 6.4-1.6 6.4-3.7 8.7-13 6.6-26.1-.4-2.3-.9-4.7-1.5-7.1 2.4-.7 4.7-1.4 6.9-2.3 12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8zM92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3-.3 2.1-.8 4.3-1.4 6.6-5.2-1.2-10.7-2-16.5-2.5-3.4-4.8-6.9-9.1-10.4-13 7.4-7.3 14.9-12.3 21-12.3 1.3 0 2.5.3 3.5.9zM81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6-3.7.3-7.4.4-11.2.4-3.9 0-7.6-.1-11.2-.4-2.2-3.2-4.2-6.4-6-9.6-1.9-3.3-3.7-6.7-5.3-10 1.6-3.3 3.4-6.7 5.3-10 1.8-3.2 3.9-6.4 6.1-9.6 3.7-.3 7.4-.4 11.2-.4 3.9 0 7.6.1 11.2.4 2.2 3.2 4.2 6.4 6 9.6 1.9 3.3 3.7 6.7 5.3 10-1.7 3.3-3.4 6.6-5.3 10zm8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3-3.4.8-7 1.4-10.8 1.9 1.2-1.9 2.5-3.9 3.6-6 1.2-2.1 2.3-4.2 3.4-6.2zM64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3 2.3.1 4.6.2 6.9.2 2.3 0 4.6-.1 6.9-.2-2.2 2.9-4.5 5.7-6.9 8.3zm-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9 1.1-3.3 2.3-6.8 3.8-10.3 1.1 2 2.2 4.1 3.4 6.1 1.2 2.2 2.4 4.1 3.6 6.1zm-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3 3.4-.8 7-1.4 10.8-1.9-1.2 1.9-2.5 3.9-3.6 6-1.2 2.1-2.3 4.2-3.4 6.2zM64 30.2c2.4 2.6 4.7 5.4 6.9 8.3-2.3-.1-4.6-.2-6.9-.2-2.3 0-4.6.1-6.9.2 2.2-2.9 4.5-5.7 6.9-8.3zm22.2 21l-3.6-6c3.8.5 7.4 1.1 10.8 1.9-1.1 3.3-2.3 6.8-3.8 10.3-1.1-2.1-2.2-4.2-3.4-6.2zM31.7 35c-1.7-10.5-.3-17.9 3.8-20.3 1-.6 2.2-.9 3.5-.9 6 0 13.5 4.9 21 12.3-3.5 3.8-7 8.2-10.4 13-5.8.5-11.3 1.4-16.5 2.5-.6-2.3-1-4.5-1.4-6.6zM7 64c0-4.7 5.7-9.7 15.7-13.4 2-.8 4.2-1.5 6.4-2.1 1.6 5 3.6 10.3 6 15.6-2.4 5.3-4.5 10.5-6 15.5C15.3 75.6 7 69.6 7 64zm28.5 49.3c-4.1-2.4-5.5-9.8-3.8-20.3.3-2.1.8-4.3 1.4-6.6 5.2 1.2 10.7 2 16.5 2.5 3.4 4.8 6.9 9.1 10.4 13-7.4 7.3-14.9 12.3-21 12.3-1.3 0-2.5-.3-3.5-.9zM96.3 93c1.7 10.5.3 17.9-3.8 20.3-1 .6-2.2.9-3.5.9-6 0-13.5-4.9-21-12.3 3.5-3.8 7-8.2 10.4-13 5.8-.5 11.3-1.4 16.5-2.5.6 2.3 1 4.5 1.4 6.6zm9-15.6c-2 .8-4.2 1.5-6.4 2.1-1.6-5-3.6-10.3-6-15.6 2.4-5.3 4.5-10.5 6-15.5 13.8 4 22.1 10 22.1 15.6 0 4.7-5.8 9.7-15.7 13.4z">
                                </path>
                            </g>
                        </svg>
                        <div class="title-desc">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">React</h1>
                            <p class="text-base text-gray-500">Front End Development</p>
                        </div>
                    </div>
                </div>
                <div id="unity-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300 flex justify-center">
                    <div class="inner py-2 px-2  flex items-center  w-full h-full gap-2 cursor-pointer">

                        <svg width="75" height="75" viewBox="0 0 128 128">
                            <path
                                d="M82.48 63.578l22.418-38.402 10.832 38.402-10.832 38.398zm-10.926 6.238l22.422 38.402-39.047-9.922-28.211-28.48zM93.969 18.93L71.555 57.34H26.719L54.93 28.855zm32 31.582L112.293.031 61.25 13.559l-7.555 13.18-15.336-.109L1 63.582l37.359 36.949h.004l15.324-.113 7.57 13.176 51.035 13.527 13.676-50.473-7.762-13.07zm0 0"
                                fill="#110B09"></path>
                        </svg>

                        <div class="title-desc">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">Unity</h1>
                            <p class="text-base text-gray-500">Game Dev</p>
                        </div>
                    </div>
                </div>
                <div id="kotlin-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300">
                    <div class="inner py-2 px-2  flex items-center w-full h-full gap-2 cursor-pointer">
                        <svg width="75" height="75" viewBox="0 0 128 128">
                            <linearGradient id="kotlin-original-a" gradientUnits="userSpaceOnUse" x1="-11.899"
                                y1="48.694" x2="40.299" y2="-8.322">
                                <stop offset="0" stop-color="#1c93c1"></stop>
                                <stop offset=".163" stop-color="#2391c0"></stop>
                                <stop offset=".404" stop-color="#378bbe"></stop>
                                <stop offset=".696" stop-color="#587eb9"></stop>
                                <stop offset=".995" stop-color="#7f6cb1"></stop>
                            </linearGradient>
                            <path fill="url(#kotlin-original-a)" d="M0 0h65.4L0 64.4z"></path>
                            <linearGradient id="kotlin-original-b" gradientUnits="userSpaceOnUse" x1="43.553"
                                y1="149.174" x2="95.988" y2="94.876">
                                <stop offset="0" stop-color="#1c93c1"></stop>
                                <stop offset=".216" stop-color="#2d8ebf"></stop>
                                <stop offset=".64" stop-color="#587eb9"></stop>
                                <stop offset=".995" stop-color="#7f6cb1"></stop>
                            </linearGradient>
                            <path fill="url(#kotlin-original-b)" d="M128 128L64.6 62.6 0 128z"></path>
                            <linearGradient id="kotlin-original-c" gradientUnits="userSpaceOnUse" x1="3.24"
                                y1="95.249" x2="92.481" y2="2.116">
                                <stop offset="0" stop-color="#c757a7"></stop>
                                <stop offset=".046" stop-color="#ca5a9e"></stop>
                                <stop offset=".241" stop-color="#d66779"></stop>
                                <stop offset=".428" stop-color="#e17357"></stop>
                                <stop offset=".6" stop-color="#e97c3a"></stop>
                                <stop offset=".756" stop-color="#ef8324"></stop>
                                <stop offset=".888" stop-color="#f28817"></stop>
                                <stop offset=".982" stop-color="#f48912"></stop>
                            </linearGradient>
                            <path fill="url(#kotlin-original-c)" d="M0 128L128 0H64.6L0 63.7z"></path>
                        </svg>


                        <div class="title-desc">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">Kotlin</h1>
                            <p class="text-base text-gray-500">Android App Development</p>
                        </div>
                    </div>
                </div>
                <div id="kotlin-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300">
                    <div class="inner py-2 px-2  flex items-center w-full h-full gap-2 cursor-pointer">

                        <svg width="75" height="75" viewBox="0 0 128 128">
                            <path fill="#F34F29"
                                d="M124.737 58.378L69.621 3.264c-3.172-3.174-8.32-3.174-11.497 0L46.68 14.71l14.518 14.518c3.375-1.139 7.243-.375 9.932 2.314 2.703 2.706 3.461 6.607 2.294 9.993l13.992 13.993c3.385-1.167 7.292-.413 9.994 2.295 3.78 3.777 3.78 9.9 0 13.679a9.673 9.673 0 01-13.683 0 9.677 9.677 0 01-2.105-10.521L68.574 47.933l-.002 34.341a9.708 9.708 0 012.559 1.828c3.778 3.777 3.778 9.898 0 13.683-3.779 3.777-9.904 3.777-13.679 0-3.778-3.784-3.778-9.905 0-13.683a9.65 9.65 0 013.167-2.11V47.333a9.581 9.581 0 01-3.167-2.111c-2.862-2.86-3.551-7.06-2.083-10.576L41.056 20.333 3.264 58.123a8.133 8.133 0 000 11.5l55.117 55.114c3.174 3.174 8.32 3.174 11.499 0l54.858-54.858a8.135 8.135 0 00-.001-11.501z">
                            </path>
                        </svg>



                        <div class="title-desc">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">Git</h1>
                            <p class="text-base text-gray-500">
                                Version Control
                            </p>
                        </div>
                    </div>
                </div>
                <div id="threeJs-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300">
                    <div class="inner py-2 px-2  flex items-center w-full h-full gap-2 cursor-pointer">


                        <svg width="75" height="75" viewBox="0 0 128 128">
                            <g color="#000" font-weight="400" font-family="sans-serif">
                                <path
                                    style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1"
                                    d="M16.219 15.762a1.129 1.129 0 00-1.076 1.399l24.394 98.742a1.129 1.129 0 001.879.544l73.386-70.59a1.129 1.129 0 00-.47-1.899L16.55 15.806a1.129 1.129 0 00-.331-.044zm1.584 2.754l94.024 27.07-70.566 67.877-23.458-94.947z"
                                    overflow="visible"></path>
                                <path
                                    style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1"
                                    d="M65.137 29.84a1.129 1.129 0 00-.807.315L27.654 65.46a1.129 1.129 0 00.471 1.898L76.984 81.44a1.129 1.129 0 001.409-1.355L66.21 30.698a1.129 1.129 0 00-1.073-.858zm-.651 3.3L75.734 78.73l-45.104-13L64.486 33.14z"
                                    overflow="visible"></path>
                                <path
                                    style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1"
                                    d="M46.914 47.313a1.129 1.129 0 00-1.076 1.399l6.054 24.531a1.129 1.129 0 001.88.543l18.222-17.563a1.129 1.129 0 00-.472-1.898l-24.277-6.968a1.129 1.129 0 00-.331-.044zm1.583 2.751l20.522 5.89L53.614 70.8l-5.117-20.736z"
                                    overflow="visible"></path>
                                <path
                                    style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;isolation:auto;mix-blend-mode:normal;solid-color:#000;solid-opacity:1"
                                    d="M40.902 22.809a1.129 1.129 0 00-.807.316L21.873 40.687a1.129 1.129 0 00.472 1.898l24.273 6.969a1.129 1.129 0 001.408-1.356l-6.051-24.53a1.129 1.129 0 00-1.073-.86zm-.65 3.3l5.114 20.736-20.517-5.89 15.403-14.847zM89.453 36.793a1.129 1.129 0 00-.806.316L70.423 54.67a1.129 1.129 0 00.472 1.899l24.274 6.968a1.129 1.129 0 001.408-1.356l-6.05-24.53a1.129 1.129 0 00-1.074-.859zm-.65 3.3l5.114 20.737L73.4 54.94l15.403-14.846zM52.944 71.864a1.129 1.129 0 00-.74.315L33.982 89.742a1.129 1.129 0 00.472 1.898l24.278 6.968a1.129 1.129 0 001.407-1.355l-6.055-24.531a1.129 1.129 0 00-1.14-.858zm-.582 3.3l5.118 20.737-20.522-5.89 15.404-14.846z"
                                    overflow="visible"></path>
                            </g>
                        </svg>
                        <div class="title-desc">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">Three JS</h1>
                            <p class="text-base text-gray-500">
                                Web 3d Modeling
                            </p>
                        </div>
                    </div>
                </div>
                <div id="threeJs-bread"
                    class="skill-bread python w-full h-full hover:ring-2 hover:ring-blue-600 duration-300">
                    <div class="inner py-2 px-2  flex items-center w-full h-full gap-2 cursor-pointer">



                        <svg width="75" height="75" viewBox="0 0 128 128">
                            <path fill="#659AD3"
                                d="M115.4 30.7L67.1 2.9c-.8-.5-1.9-.7-3.1-.7-1.2 0-2.3.3-3.1.7l-48 27.9c-1.7 1-2.9 3.5-2.9 5.4v55.7c0 1.1.2 2.4 1 3.5l106.8-62c-.6-1.2-1.5-2.1-2.4-2.7z">
                            </path>
                            <path fill="#03599C"
                                d="M10.7 95.3c.5.8 1.2 1.5 1.9 1.9l48.2 27.9c.8.5 1.9.7 3.1.7 1.2 0 2.3-.3 3.1-.7l48-27.9c1.7-1 2.9-3.5 2.9-5.4V36.1c0-.9-.1-1.9-.6-2.8l-106.6 62z">
                            </path>
                            <path fill="#fff"
                                d="M85.3 76.1C81.1 83.5 73.1 88.5 64 88.5c-13.5 0-24.5-11-24.5-24.5s11-24.5 24.5-24.5c9.1 0 17.1 5 21.3 12.5l13-7.5c-6.8-11.9-19.6-20-34.3-20-21.8 0-39.5 17.7-39.5 39.5s17.7 39.5 39.5 39.5c14.6 0 27.4-8 34.2-19.8l-12.9-7.6z">
                            </path>
                        </svg>

                        <div class="title-desc">
                            <h1 class="font-bold text-xl text-slate-800" id="title-bread">C lang</h1>
                            <p class="text-base text-gray-500">
                                Kernel Development
                            </p>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <section id="mentor" class="w-full h-full !-px-10">
        <div class="mentor-section w-[100%] h-full pb-12 lg:h-[70vh] bg-slate-200">
            <div class="inner flex items-center  w-full h-full mx-auto container px-4 lg:px-[80px] py-16">
                <div class="wrapper-inner w-[100%] h-full">
                    <div class="wrapper-title lg:w-[43%] w-full">
                        <h1 id="title-mentor-section" class="text-3xl text-gray-800">
                            Belajar Dengan Mentor Expert Terbaik Di Bidangnya
                        </h1>
                    </div>
                    <div class="mentor-list w-full flex lg:flex-row flex-col sm:flex-row mt-8 gap-4">
                        <div class="mentor-el bg-white shadow-sm basis-[33%] h-60 rounded-lg hover:scale-105 duration-300 hover:ring-1 hover:ring-purple-600">
                            <div class="mentor-inner w-full h-full flex justify-center p-8">
                                <div class="mentor-wrapper-profile w-full h-full flex flex-col items-center gap-2">
                                    <div
                                        class="mentor-pic overflow-hidden w-16 h-16 rounded-full ring-2 ring-purple-500 ring-offset-2 user-select-none pointer-events-none">
                                        <img src="{{ asset('images/mentorPicture/rlorenzo.jpeg') }}" alt=""
                                            class="w-full h-full user-select-none pointer-events-none">
                                    </div>
                                    <div class="mentor-name cursor-pointer">
                                        <h1 class="font-extrabold text-center text-xl font-[#1f2937]">Rafael Lorenzo</h1>
                                        <p class="text-slate-500 text-center">UI/UX Designer</p>
                                    </div>
                                    <div class="mentor-rating">
                                        <div class="flex items-center">
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>First star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Second star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Third star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fourth star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400 dark:text-gray-500"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <title>Fifth star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mentor-ray bg-white basis-[33%] shadow-sm h-60 rounded-lg hover:scale-105 duration-300 hover:ring-1 hover:ring-purple-600">
                            <div class="mentor-inner w-full h-full flex justify-center p-8">
                                <div class="mentor-wrapper-profile w-full h-full flex flex-col items-center gap-2">
                                    <div
                                        class="mentor-pic overflow-hidden w-16 h-16 rounded-full ring-2 ring-purple-500 ring-offset-2 user-select-none pointer-events-none">
                                        <img src="{{ asset('images/mentorPicture/dudungs.png') }}" alt=""
                                            class="w-full h-full user-select-none pointer-events-none">
                                    </div>
                                    <div class="mentor-name cursor-pointer">
                                        <h1 class="font-extrabold text-center text-xl font-[#1f2937]">Raya Arrizky</h1>
                                        <p class="text-slate-500 text-center">Flutter Developer Lead</p>
                                    </div>
                                    <div class="mentor-rating">
                                        <div class="flex items-center">
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>First star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Second star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Third star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fourth star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400 dark:text-gray-500"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <title>Fifth star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mentor-san bg-white basis-[33%] shadow-sm h-60 rounded-lg hover:scale-105 duration-300 hover:ring-1 hover:ring-purple-600">
                            <div class="mentor-inner w-full h-full flex justify-center p-8">
                                <div class="mentor-wrapper-profile w-full h-full flex flex-col items-center gap-2">
                                    <div
                                        class="mentor-pic overflow-hidden w-16 h-16 rounded-full ring-2 ring-purple-500 ring-offset-2 user-select-none pointer-events-none">
                                        <img src="{{ asset('images/mentorPicture/aing.png') }}" alt=""
                                            class="w-full h-full user-select-none pointer-events-none">
                                    </div>
                                    <div class="mentor-name cursor-pointer">
                                        <h1 class="font-extrabold text-center text-xl font-[#1f2937]">Ikhsan Adrians</h1>
                                        <p class="text-slate-500">Senior Backend Engineer</p>
                                    </div>
                                    <div class="mentor-rating">
                                        <div class="flex items-center">
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>First star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Second star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Third star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fourth star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400 dark:text-gray-500"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <title>Fifth star</title>
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="quiz" class="w-full h-full !-px-10">
        <div class="quiz-section w-[100%] pb-12 h-[100vh] bg-slate-200 py-8">
            <div class="inner flex items-center  w-full h-full mx-auto container px-4 lg:px-[80px]">
              <div class="quiz-container w-full h-full">
                <div class="quiz-title">
                    <h1 id="title-quiz-section" class="text-3xl text-gray-800">Kerjakan Quiz-Quiz Menarik</h1>
                </div>
                <div class="quiz-example-container flex lg:flex-row flex-col w-full h-full gap-4 mt-8">
                    <div class="quiz-1 bg-white shadow-lg basis-1/2 p-6 relative rounded-lg">
                       <div class="quiz-corner-title font-semibold absolute top-6 rounded-md left-0 bg-yellow-400  -rotate-[25deg] px-4">
                         <p>JavaScript</p>
                       </div>
                       <div class="quiz-dificulity absolute top-6 right-8">
                          <p>Easy</p>
                       </div>
                       <div>
                          <pre>
                            <code class="language-javascript">
let x = 2;
for(let i = 0; i < 10; i++){
    if(x < 10){
      x += i - 1;
    }
}
                            </code>
                          </pre>
                       </div>
                       <div class="quiz-question">
                          <p class="text-lg">Output apa yang akan dihasilkan code berikut?</p>
                       </div>
                       <div class="quiz-answers-list flex gap-2 w-full mt-2">
                           <div data="cr" class="answer cursor-pointer hover:bg-slate-300 rounded-lg bg-slate-200 basis-[33%] h-16 font-bold items-center flex justify-center" id="answer-1">
                               <h1>11</h1>
                           </div>
                           <div data="icr" class="answer cursor-pointer hover:bg-slate-300 rounded-lg bg-slate-200 basis-[33%] h-16 font-bold items-center flex justify-center" id="answer-2">
                               <h1>9</h1>
                           </div>
                           <div data="icr" class="answer cursor-pointer hover:bg-slate-300 rounded-lg bg-slate-200 basis-[33%] h-16 font-bold items-center flex justify-center" id="answer-3">
                               <h1>5</h1>
                           </div>
                       </div>
                    </div>

                    <div class="quiz-2 basis-1/2 relative rounded-lg bg-white p-8 shadow-lg">
                        <div class="quiz-corner-title font-semibold absolute top-6 rounded-md left-0 bg-[#356a96] text-white -rotate-[25deg] px-4">
                            <p>Python</p>
                          </div>
                          <div class="quiz-dificulity absolute top-6 right-8">
                            <p>Medium</p>
                         </div>
                        <div id="quiz-exe-contain" class="quiz-question p-8 mt-8 relative overflow-hidden bg-[#282c34] text-white rounded-lg">
                            <span id="incorrect" class="hidden bg-red-300 text-red-600 text-lg font-bold absolute top-0 left-0 w-full h-full p-4" id="quiz-exe-incorrect">
                                <h1>Maaf Jawabanmu Salah</h1>
                                <button id="btnIncorrect" class="absolute bottom-4 right-4 text-base flex items-center">Coba Lagi<ion-icon name="arrow-forward"></ion-icon></button>
                            </span>
                            <span id="correct" class="hidden bg-green-300 text-green-600 text-lg font-bold absolute top-0 left-0 w-full h-full p-4" id="quiz-exe-incorrect">
                                <h1>Hore Jawabanmu Benar!</h1>
                                <button id="btnCorrect" class="absolute bottom-4 right-4 text-base flex items-center">Next<ion-icon name="arrow-forward"></ion-icon></button>
                            </span>
                            <span id="quiz-exe">
                                <h1 class="text-lg"><span></span>txt = "hello dunia!"</h1>
                                x = <input id="quiz-exes" type="text" class="font-semibold border-2 rounded-sm px-1 text-slate-900 border-slate-200 w-[70px] ml-1" maxlength="6">
                            </span>
                        </div>
                        <div class="quiz-hint mt-8">
                            <h1 class="text-lg">Ambilah karakter pertama dari variable string txt!</h1>
                        </div>
                        <div class="answer-action flex gap-2">
                            <div class="submit-answers mt-4 flex items-center gap-2 bg-gradient-to-r p-2 max-w-fit text-white cursor-pointer rounded-xl font-bold from-green-400 to-cyan-500">
                                <ion-icon name="send"></ion-icon>
                                <h1>Kirim Jawaban</h1>
                            </div>
                            <div class="show-answers mt-4 flex items-center gap-2 bg-gradient-to-r p-2 max-w-fit text-white cursor-pointer rounded-xl font-bold from-purple-500 to-purple-600">
                                <ion-icon name="eye"></ion-icon>
                                <h1>Tunjukan Jawaban</h1>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </section>


    @endsection
