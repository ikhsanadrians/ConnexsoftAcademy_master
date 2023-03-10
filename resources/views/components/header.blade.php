<header class="h-[4rem] w-full bg-white">
    <div
        class="container mx-auto header-inner w-full h-full lg:pl-[80px] lg:pr-[80px] pt-14 flex items-center justify-between">
        <div class="header-icon">
            <a href="#">
                <img src="{{ asset('images/icon.png') }}" class="h-12 md:block hidden lg:block" alt="iconacademy">
                <img src="{{ asset('images/logoconnexsoft.png') }}" class="h-16 md:hidden lg:hidden block"
                    alt="iconacademy">
            </a>
        </div>
        <div class="header-menu lg:block hidden">
            <ul class="flex gap-12 text-gray-700">
                <a href="" class="relative" id="courseshref">
                    <li class="cursor-pointer flex items-center gap-1 hover:text-purple-600 ">
                        <div class="menu-course">
                            <p>Courses</p>
                        </div>
                        <ion-icon name="caret-down-outline"></ion-icon>
                    </li>
                    <div
                        class="dropdown-courses absolute shadow-lg border-[1.2px] bg-white border-slate-200 rounded-lg p-4">
                        <ul class="flex flex-col gap-8">
                            <li class="hover:text-purple-600 font-semibold duration-200 text-gray-500 mb-2">Web
                                Development
                            </li>
                            <li class="hover:text-purple-600 font-semibold duration-200 text-gray-500 mb-2">Mobile
                                Development</li>
                            <li class="hover:text-purple-600 font-semibold duration-200 text-gray-500 mb-2">UI/UX Design
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="" id="exercisehref">
                    <li class="cursor-pointer flex items-center gap-1 hover:text-purple-600">
                        <div class="menu-exercise">
                            <p>Exercise</p>
                        </div>
                        <ion-icon name="caret-down-outline"></ion-icon>
                    </li>
                    <div
                        class="dropdown-exercise absolute shadow-lg bg-white border-[1.2px] border-slate-200 rounded-lg p-4">
                        <ul class="flex flex-col gap-2">
                            <li class="hover:text-purple-600 font-semibold duration-200 text-gray-500 mb-2">HTML
                                Exercise
                            </li>
                            <li class="hover:text-purple-600 font-semibold duration-200 text-gray-500 mb-2">Javascript
                                Exercise</li>
                            <li class="hover:text-purple-600 font-semibold duration-200 text-gray-500 mb-2">
                                CSS Exercise
                            </li>
                            <li class="hover:text-purple-600 font-semibold duration-200 text-gray-500 mb-2">
                                PHP Exercise
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="">
                    <li class="cursor-pointer flex items-center gap-1 hover:text-purple-600">
                        <div class="menu-category">
                            <p>Categories</p>
                        </div>
                        <ion-icon name="caret-down-outline"></ion-icon>
                    </li>
                </a>
                <a href="">
                    <li class="cursor-pointer hover:text-purple-600">
                        <div class="menu-about">
                            <p>About</p>
                        </div>
                    </li>
                </a>
            </ul>


        </div>
        <div class="header-login lg:block hidden">
            <div class="inner flex items-center gap-6">
                <button
                    class="font-semibold text-purple-500 hover:scale-105 hover:underline-offset-2 hover:underline duration-500">
                    Sign In
                </button>
                <button
                    class="flex items-center gap-1 hover:scale-105 bg-white border-[.9px] rounded-lg border-purple-700 py-1 px-2 font-bold text-purple-700 hover:bg-gradient-to-r hover:from-purple-500 duration-300 hover:to-purple-700 hover:text-white">
                    <ion-icon name="log-in-outline"></ion-icon>Sign Up
                </button>
            </div>

        </div>
        <div
            class="header-hamburger lg:hidden block hover:text-white hover:shadow-sm hover:bg-gradient-to-r hover:from-purple-500 hover:to-purple-600 duration-200 rounded-2xl md:block bg-gray-200 h-12 w-12 flex items-center justify-center">
            <ion-icon name="menu" class="text-4xl"></ion-icon>
        </div>
    </div>
</header>
