@extends('layouts.web')

@section('content')
    {{-- Login Form --}}
    <section class="w-full max-w-xl bg-slate-100 dark:bg-slate-800 place-self-center">
        <div class="px-6 py-8 mx-auto">
            <div class="bg-white rounded-lg shadow dark:bg-slate-900 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-slate-800 md:text-2xl dark:text-white">
                        Login
                    </h1>
                    <form method="POST" action="/authenticate">
                        @csrf
                        <div class="space-y-4 md:space-y-6">
                            {{-- Email --}}
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-600 focus:border-slate-600 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                                    placeholder="name@company.com">

                                <p class="mt-1 text-sm text-red-500">{{ $errors->first('email') }}</p>
                            </div>
                            {{-- Password --}}
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-slate-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password"
                                    class="bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-slate-600 focus:border-slate-600 block w-full p-2.5 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500"
                                    placeholder="••••••••">

                                <p class="mt-1 text-sm text-red-500">{{ $errors->first('password') }}</p>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-slate-700 hover:bg-slate-800 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-slate-800 dark:hover:bg-slate-700">Login</button>
                            <p class="text-sm font-light text-slate-600 dark:text-slate-400">
                                Don't have an account? <a href="{{ route('register') }}"
                                    class="font-medium text-slate-600 hover:underline dark:text-slate-400">Register here</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
