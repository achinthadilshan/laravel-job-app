@extends('layouts.web')

@section('content')
    {{-- job detail card --}}
    <section class="px-4 py-8">
        <div class="max-w-screen-lg px-4 py-8 mx-auto bg-white rounded-lg md:px-8 dark:bg-slate-900">
            <h2 class="text-2xl font-semibold text-center text-slate-900 dark:text-white">Create a Job</h2>
            <p class="mb-6 text-center text-slate-600 dark:text-slate-400">Establish a job posting to identify the most
                qualified candidate for your esteemed organization.</p>
            <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-6 md:grid-cols-2">
                    <div class="md:col-span-2">
                        <label for="title" class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Job
                            Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}"
                            class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-600 focus:border-slate-600 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                            placeholder="Ex: Senior Software Engineer">

                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('title') }}</p>

                    </div>
                    <div>
                        <label for="company"
                            class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Company</label>
                        <input type="text" name="company" id="company" value="{{ old('company') }}"
                            class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-600 focus:border-slate-600 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                            placeholder="Ex: Apple Inc.">

                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('company') }}</p>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-slate-900 dark:text-white" for="image">Company
                            Logo</label>
                        <input
                            class="block w-full text-sm border rounded-lg cursor-pointer text-slate-900 border-slate-300 bg-slate-50 dark:text-slate-400 focus:outline-none dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400"
                            id="image" name="image" type="file">
                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('image') }}</p>
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-600 focus:border-slate-600 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                            placeholder="Ex: test@test.com">

                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('email') }}</p>
                    </div>
                    <div>
                        <label for="website"
                            class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Website</label>
                        <input type="text" name="website" id="website" value="{{ old('website') }}"
                            class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-600 focus:border-slate-600 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                            placeholder="Ex: www.test.com">

                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('website') }}</p>
                    </div>
                    <div>
                        <label for="city"
                            class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">City</label>
                        <input type="text" name="city" id="city" value="{{ old('city') }}"
                            class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-600 focus:border-slate-600 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                            placeholder="Ex: New York">

                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('city') }}</p>
                    </div>
                    <div>
                        <label for="type"
                            class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Type</label>
                        <select id="type" name="type" value="{{ old('type') }}"
                            class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500">
                            <option selected disabled>Choose...</option>
                            <option value="fulltime">Fulltime</option>
                            <option value="part_time">Part Time</option>
                            <option value="contract">Contract</option>
                        </select>

                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('type') }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <label for="tags" class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Tags
                            (Comma separated)</label>
                        <input type="text" name="tags" id="tags" value="{{ old('tags') }}"
                            class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-600 focus:border-slate-600 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                            placeholder="Ex: Laravel, Java, Python">

                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('tags') }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Description</label>
                        <textarea id="description" name="description" rows="6"
                            class="block p-2.5 w-full text-sm text-slate-900 bg-slate-50 rounded-lg border border-slate-300 focus:ring-slate-500 focus:border-slate-500 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                            placeholder="Write a job description here...">{{ old('description') }}</textarea>

                        <p class="mt-1 text-sm text-red-500">{{ $errors->first('description') }}</p>
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="text-white bg-slate-700 hover:bg-slate-800 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-slate-800 dark:hover:bg-slate-700">Create</button>
                </div>
            </form>
        </div>
    </section>
@endsection
