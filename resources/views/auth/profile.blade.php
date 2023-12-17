@extends('layouts.web')

@section('content')
    <section class="px-4 py-8">
        <div class="grid max-w-screen-xl mx-auto place-items-center">

            <div
                class="flex flex-col items-center gap-4 px-6 py-8 bg-white rounded-lg shadow dark:bg-slate-900 dark:border-slate-700">
                <img class="object-cover object-center w-16 h-16 rounded-lg" src="{{ asset('images/no-image.png') }}" />
                <ul>
                    <li class="flex items-center gap-4 text-slate-600 dark:text-slate-400">
                        <div class="flex-grow font-semibold">Name:</div>
                        {{ $user->name }}
                    </li>
                    <li class="flex items-center text-slate-600 dark:text-slate-400">
                        <div class="flex-grow font-semibold">Jobs:</div>
                        {{ count($jobs) }}
                    </li>
                </ul>
            </div>
    </section>
@endsection
