<header class="h-[4rem] w-full bg-white">
    <div class="header-inner w-full h-full lg:pl-[80px] lg:pr-[80px] pt-14 flex items-center justify-between">
        <div class="header-icon">
            <a href="#">
                <img src="{{ asset('images/icon.png') }}" class="h-12" alt="iconacademy">
            </a>
        </div>
        <div class="header-menu">
            <ul class="flex gap-12 text-gray-700">
                <a href="" class="relative" id="courseshref">
                    <li class="cursor-pointer flex font-semibold items-center gap-1 hover:text-purple-600 ">
                        <div class="menu-course">
                            <p>Courses</p>
                        </div>
                        <ion-icon name="caret-down-outline"></ion-icon>
                    </li>
                    <div class="dropdown-courses absolute shadow-lg border-[1.2px] border-slate-200 rounded-lg p-4">
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
                    <div class="dropdown-exercise absolute shadow-lg border-[1.2px] border-slate-200 rounded-lg p-4">
                        <ul class="flex flex-col gap-2">
                            <li class="hover:text-purple-600 font-semibold duration-200 text-gray-500 mb-2">HTML
                                Exercise
                            </li>
                            <li class="hover:text-purple-600 font-semibold duration-200 text-gray-500 mb-2">Javascript
                                Exercise</li>
                            <li class="hover:text-purple-600 font-semibold duration-200 text-gray-500 mb-2">
                                CSS Exercise
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
        <div class="header-login">
            <button
                class="flex items-center gap-1 bg-white border-[.9px] rounded-lg border-purple-700 py-1 px-2 font-bold text-purple-700 hover:bg-gradient-to-r hover:from-purple-500 duration-300 hover:to-purple-700 hover:text-white">
                <ion-icon name="log-in-outline"></ion-icon>Sign Up
            </button>
        </div>
    </div>
</header>
