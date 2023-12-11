@extends('layouts.web')

@section('content')
    {{-- hero section --}}
    <section class="bg-white dark:bg-slate-900">
        <form>
            <div class="max-w-screen-sm px-4 py-16 mx-auto">
                <h1 class="mb-4 text-3xl font-extrabold leading-none text-center dark:text-white text-slate-800">Igniting
                    Opportunities,
                    Empowering Futures</h1>
                <p class="mb-8 leading-none text-center dark:text-slate-400 text-slate-500">Fueling Your Path to Success
                    in the Dynamic
                    Landscape of Employment.</p>
                <label for="job-search-input"
                    class="mb-2 text-sm font-medium sr-only text-slate-900 dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <i class="bi bi-search text-slate-500 dark:text-slate-400"></i>
                    </div>
                    <input type="search" id="job-search-input"
                        class="block w-full p-4 text-sm border rounded-lg text-slate-900 border-slate-300 ps-10 bg-slate-50 focus:ring-slate-500 focus:border-slate-500 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                        placeholder="Search Jobs..." required>
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-slate-800 dark:hover:bg-slate-900 dark:focus:ring-slate-800">Search</button>
                </div>
            </div>
        </form>
    </section>

    {{-- job section --}}
    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto">
            <h2 class="mb-8 text-2xl font-bold dark:text-white text-slate-900">Discover Opportunities</h2>
            {{-- jobs --}}
            <div class="grid gap-y-4 gap-x-6 md:grid-cols-2">
                <div
                    class="flex flex-col gap-4 p-4 bg-white border rounded-lg shadow-lg border-slate-100 dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex flex-col gap-3 xl:flex-row xl:gap-4">
                        <img src="https://picsum.photos/200" alt=""
                            class="object-cover object-center w-16 h-16 rounded-full">
                        <div class="flex flex-col gap-1">
                            <a href="#" class="text-xl font-medium leading-none text-slate-900 dark:text-white">Senior
                                Software
                                Developer - Laravel</a>
                            <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">Xypherlabs</p>
                        </div>
                    </div>
                    <ul class="flex gap-4">
                        <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                            <i class="bi bi-briefcase"></i>
                            <span>Fulltime</span>
                        </li>
                        <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                            <i class="bi bi-geo-alt"></i>
                            <span>Colombo</span>
                        </li>
                    </ul>
                    <ul class="flex flex-wrap items-center gap-1">
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">Laravel</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">Python</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">React</a>
                        </li>
                    </ul>
                    <div class="flex items-end grow">
                        <div class="text-xs text-slate-400 dark:text-slate-600">Posted on 08/12/23</div>
                    </div>
                </div>
                <div
                    class="flex flex-col gap-4 p-4 bg-white border rounded-lg shadow-lg border-slate-100 dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex flex-col gap-3 xl:flex-row xl:gap-4">
                        <img src="https://picsum.photos/200" alt=""
                            class="object-cover object-center w-16 h-16 rounded-full">
                        <div class="flex flex-col gap-1">
                            <a href="#" class="text-xl font-medium leading-none text-slate-900 dark:text-white">Senior
                                Software
                                Developer - Laravel</a>
                            <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">Xypherlabs</p>
                        </div>
                    </div>
                    <ul class="flex gap-4">
                        <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                            <i class="bi bi-briefcase"></i>
                            <span>Fulltime</span>
                        </li>
                        <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                            <i class="bi bi-geo-alt"></i>
                            <span>Colombo</span>
                        </li>
                    </ul>
                    <ul class="flex flex-wrap items-center gap-1">
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">Laravel</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">Python</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">React</a>
                        </li>
                    </ul>
                    <div class="flex items-end grow">
                        <div class="text-xs text-slate-400 dark:text-slate-600">Posted on 08/12/23</div>
                    </div>
                </div>
                <div
                    class="flex flex-col gap-4 p-4 bg-white border rounded-lg shadow-lg border-slate-100 dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex flex-col gap-3 xl:flex-row xl:gap-4">
                        <img src="https://picsum.photos/200" alt=""
                            class="object-cover object-center w-16 h-16 rounded-full">
                        <div class="flex flex-col gap-1">
                            <a href="#" class="text-xl font-medium leading-none text-slate-900 dark:text-white">Senior
                                Software
                                Developer - Laravel</a>
                            <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">Xypherlabs</p>
                        </div>
                    </div>
                    <ul class="flex gap-4">
                        <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                            <i class="bi bi-briefcase"></i>
                            <span>Fulltime</span>
                        </li>
                        <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                            <i class="bi bi-geo-alt"></i>
                            <span>Colombo</span>
                        </li>
                    </ul>
                    <ul class="flex flex-wrap items-center gap-1">
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">Laravel</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">Python</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">React</a>
                        </li>
                    </ul>
                    <div class="flex items-end grow">
                        <div class="text-xs text-slate-400 dark:text-slate-600">Posted on 08/12/23</div>
                    </div>
                </div>
                <div
                    class="flex flex-col gap-4 p-4 bg-white border rounded-lg shadow-lg border-slate-100 dark:border-slate-800 dark:bg-slate-900">
                    <div class="flex flex-col gap-3 xl:flex-row xl:gap-4">
                        <img src="https://picsum.photos/200" alt=""
                            class="object-cover object-center w-16 h-16 rounded-full">
                        <div class="flex flex-col gap-1">
                            <a href="#" class="text-xl font-medium leading-none text-slate-900 dark:text-white">Senior
                                Software
                                Developer - Laravel</a>
                            <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">Xypherlabs</p>
                        </div>
                    </div>
                    <ul class="flex gap-4">
                        <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                            <i class="bi bi-briefcase"></i>
                            <span>Fulltime</span>
                        </li>
                        <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                            <i class="bi bi-geo-alt"></i>
                            <span>Colombo</span>
                        </li>
                    </ul>
                    <ul class="flex flex-wrap items-center gap-1">
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">Laravel</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">Python</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">React</a>
                        </li>
                    </ul>
                    <div class="flex items-end grow">
                        <div class="text-xs text-slate-400 dark:text-slate-600">Posted on 08/12/23</div>
                    </div>
                </div>
            </div>

            {{-- pagination --}}
            <nav aria-label="Page navigation example">
                <ul class="inline-flex justify-end w-full h-10 mt-8 -space-x-px text-base">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-10 px-4 leading-tight bg-white border text-slate-500 border-slate-300 ms-0 border-e-0 rounded-s-lg hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-10 px-4 leading-tight bg-white border text-slate-500 border-slate-300 hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-10 px-4 leading-tight bg-white border text-slate-500 border-slate-300 hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="flex items-center justify-center h-10 px-4 text-blue-600 border border-slate-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-slate-700 dark:bg-slate-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-10 px-4 leading-tight bg-white border text-slate-500 border-slate-300 hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-10 px-4 leading-tight bg-white border text-slate-500 border-slate-300 hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-10 px-4 leading-tight bg-white border text-slate-500 border-slate-300 rounded-e-lg hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
