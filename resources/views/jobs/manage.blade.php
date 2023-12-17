@extends('layouts.web')

@section('content')
    <section class="px-4 py-8">
        <div class="max-w-screen-xl px-6 py-8 mx-auto space-y-6 bg-white rounded-lg dark:bg-slate-900">

            @if (count($jobs) == 0)
                <div class="text-center text-slate-400 dark:text-slate-600">You don't have any job yet. Click <a
                        href="{{ route('jobs.create') }}"
                        class="text-blue-600 underline dark:text-blue-500 underline-offset-2">here</a> to create a
                    new job.</div>
            @else
                <h1 class="text-xl font-semibold leading-tight tracking-tight text-slate-800 md:text-2xl dark:text-white">
                    Manage your jobs
                </h1>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs uppercase text-slate-700 bg-slate-50 dark:bg-slate-700 dark:text-slate-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Job Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                                <tr class="bg-white border-b dark:bg-slate-800 dark:border-slate-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium truncate text-slate-900 whitespace-nowrap dark:text-white ">
                                        {{ $job->title }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            <a href="{{ route('jobs.edit', ['job' => $job]) }}"
                                                class="text-blue-600 underline dark:text-blue-500 underline-offset-2">Edit</a>

                                            <form method="POST" action="{{ route('jobs.destroy', ['job' => $job]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 underline dark:text-red-500 underline-offset-2">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </section>
@endsection
