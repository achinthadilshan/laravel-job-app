<nav class="fixed top-0 z-20 w-full bg-white border-b border-slate-200 dark:bg-slate-900 start-0 dark:border-slate-600">
    <div class="flex flex-wrap items-center max-w-screen-xl p-4 mx-auto md:gap-6">
        <a href="{{route('jobs.index')}}" class="text-2xl font-semibold grow whitespace-nowrap dark:text-white text-slate-800">JOBs
        </a>
        <div class="flex gap-2 md:order-2">
            <button id="theme-toggle" type="button"
                class="px-3 py-2 text-sm rounded-lg text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 md:order-2">
                <i id="theme-toggle-dark-icon" class="hidden bi bi-moon-stars-fill"></i>
                <i id="theme-toggle-light-icon" class="hidden bi bi-sun-fill"></i>
            </button>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm rounded-lg text-slate-500 md:hidden bg-slate-100 dark:text-slate-400 dark:bg-slate-800"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 mt-4 font-medium border rounded-lg border-slate-100 md:p-0 bg-slate-50 md:gap-1 md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-slate-800 md:dark:bg-transparent dark:border-slate-700">
                <li>
                    <a href="#" class="block px-3 py-2 text-slate-900 dark:text-white ">Sign In</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-3 py-2 bg-transparent rounded-md dark:text-white text-slate-900 md:text-white md:bg-slate-700">Sign
                        Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
