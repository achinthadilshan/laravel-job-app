@extends('layouts.web')

@section('content')
    {{-- hero section --}}
    <section class="bg-white dark:bg-slate-900">
        <form action="/">
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
                    <input type="search" name="search" id="job-search-input"
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
            @if (count($jobs) == 0)
                <div class="p-4 text-xl text-center dark:text-slate-600 text-slate-400">No jobs available at the moment
                </div>
            @else
                <div class="grid gap-y-4 gap-x-6 md:grid-cols-2">
                    @foreach ($jobs as $job)
                        <x-job-card :job="$job" />
                    @endforeach
                </div>

                {{-- pagination --}}
                <div class="py-4 mt-8">
                    {{ $jobs->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
