@extends('layouts.web')

@section('content')
    {{-- job detail card --}}
    <section class="px-4 py-8">
        <div class="flex flex-col max-w-screen-xl gap-4 p-4 mx-auto bg-white rounded-lg dark:bg-slate-900">
            <a href="#"
                class="flex items-center justify-center gap-2 px-4 py-2 mb-8 rounded-md dark:text-white text-slate-900 w-fit dark:bg-slate-800 bg-slate-200">
                <i class="bi bi-arrow-left"></i>
                Back
            </a>
            <div class="flex flex-col gap-3 md:flex-row md:gap-4">
                <img src="https://picsum.photos/200" alt="" class="object-cover object-center w-16 h-16 rounded-full">
                <div class="flex flex-col gap-1">
                    <a href="#" class="text-xl font-medium leading-none text-slate-900 dark:text-white">Senior
                        Software
                        Developer - Laravel</a>
                    <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">Xypherlabs</p>
                </div>
            </div>
            <ul>
                <li class="flex gap-2 text-slate-600 dark:text-slate-400">
                    <i class="bi bi-envelope"></i>
                    <a href="mailto:test@test.com">test@test.com</a>
                </li>
                <li class="flex gap-2 text-slate-600 dark:text-slate-400">
                    <i class="bi bi-globe"></i>
                    <a href="#" target="_blank">www.test.com</a>
                </li>
            </ul>
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
                    <a href="#" class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">Laravel</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">Python</a>
                </li>
                <li>
                    <a href="#" class="px-3 py-1 text-sm leading-none text-white rounded-2xl bg-slate-700">React</a>
                </li>
            </ul>
            <div class="flex items-end grow">
                <div class="text-xs text-slate-400 dark:text-slate-600">Posted on 08/12/23</div>
            </div>
            <hr>
            <p class="text-slate-900 dark:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                praesentium totam, esse ipsum fuga odit deserunt commodi rerum fugit illo autem maiores tempora minima
                explicabo nemo eius, natus voluptatem perspiciatis!</p>
            <p class="text-slate-900 dark:text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                praesentium totam, esse ipsum fuga odit deserunt commodi rerum fugit illo autem maiores tempora minima
                explicabo nemo eius, natus voluptatem perspiciatis!</p>
        </div>
    </section>
@endsection
