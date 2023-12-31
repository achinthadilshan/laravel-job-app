@extends('layouts.web')

@section('content')
    {{-- job detail card --}}
    <section class="px-4 py-8">
        <div class="flex flex-col max-w-screen-xl gap-4 p-4 mx-auto bg-white rounded-lg dark:bg-slate-900">
            <div class="flex items-center justify-between mb-8">
                <a href="{{ route('jobs.index') }}"
                    class="flex items-center justify-center gap-2 px-4 py-2 rounded-md dark:text-white text-slate-900 w-fit dark:bg-slate-800 bg-slate-200">
                    <i class="bi bi-arrow-left"></i>
                    Back
                </a>
                @auth
                    <div class="flex items-center gap-2">
                        <a href="{{ route('jobs.edit', ['job' => $job]) }}"
                            class="flex items-center justify-center gap-2 px-4 py-2 rounded-md dark:text-white text-slate-900 w-fit dark:bg-slate-800 bg-slate-200">
                            <i class="bi bi-pencil-fill"></i>
                            Edit
                        </a>
                        <form method="POST" action="{{ route('jobs.destroy', ['job' => $job]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="flex items-center justify-center gap-2 px-4 py-2 rounded-md dark:text-white text-slate-900 w-fit dark:bg-slate-800 bg-slate-200">
                                <i class="bi bi-trash-fill"></i>
                                Delete
                            </button>
                        </form>
                    </div>
                @endauth
            </div>
            <div class="flex flex-col gap-3 md:flex-row md:gap-4">
                <img src="{{ $job->image ? asset('storage/' . $job->image) : asset('images/no-image.png') }}" alt=""
                    class="object-cover object-center w-16 h-16 rounded-full">
                <div class="flex flex-col gap-1">
                    <div class="text-xl font-medium leading-none text-slate-900 dark:text-white">{{ $job->title }}</div>
                    <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">{{ $job->company }}</p>
                </div>
            </div>
            <ul>
                <li class="flex gap-2 text-slate-600 dark:text-slate-400">
                    <i class="bi bi-envelope"></i>
                    <a href="mailto:{{ $job->email }}">{{ $job->email }}</a>
                </li>
                <li class="flex gap-2 text-slate-600 dark:text-slate-400">
                    <i class="bi bi-globe"></i>
                    <a href="{{ $job->website }}" target="_blank">{{ $job->website }}</a>
                </li>
            </ul>
            <ul class="flex gap-4">
                <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                    <i class="bi bi-briefcase"></i>
                    <span>{{ $job->type }}</span>
                </li>
                <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                    <i class="bi bi-geo-alt"></i>
                    <span>{{ $job->city }}</span>
                </li>
            </ul>
            <x-tags :tagsCSV="$job->tags" />
            <div class="flex items-end grow">
                <div class="text-xs text-slate-400 dark:text-slate-600">Posted on {{ $job->created_at }}</div>
            </div>
            <hr>
            <p class="text-slate-900 dark:text-slate-400">{{ $job->description }}</p>
        </div>
    </section>
@endsection
