<header class="h-[4rem] w-full bg-white">
    <div class="header-inner w-full h-full lg:pl-[80px] lg:pr-[80px] pt-14 flex items-center justify-between">
        <div class="header-icon">
            <img src="{{ asset('images/icon.png') }}" class="h-12" alt="iconacademy">
        </div>
        <div class="header-menu">
            <ul class="flex gap-12 text-gray-700">
                <a href="">
                    <li class="cursor-pointer flex items-center gap-1">
                        <div class="menu-course">
                            <p>Courses</p>
                        </div>
                        <ion-icon name="caret-down-outline"></ion-icon>
                    </li>
                </a>
                <a href="">
                    <li class="cursor-pointer flex items-center gap-1">
                        <div class="menu-exercise">
                            <p>Exercise</p>
                        </div>
                        <ion-icon name="caret-down-outline"></ion-icon>
                    </li>
                </a>
                <a href="" cl>
                    <li class="cursor-pointer flex items-center gap-1">
                        <div class="menu-category">
                            <p>Categories</p>
                        </div>
                        <ion-icon name="caret-down-outline"></ion-icon>
                    </li>
                </a>
                <a href="">
                    <li class="cursor-pointer">
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
