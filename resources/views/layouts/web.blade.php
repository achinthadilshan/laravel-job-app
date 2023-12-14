<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name') }} </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    {{-- Alpine Js --}}
    <script src="https://unpkg.com/alpinejs" defer></script>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    {{-- header --}}
    @yield('header')
</head>

<body class="bg-slate-100 dark:bg-slate-800">
    <main>
        {{-- navbar --}}
        @include('partials.navbar')

        {{-- content --}}
        <div class="mt-[4.5rem] body-height">
            @yield('content')
        </div>

        {{-- footer --}}
        @include('partials.footer')
    </main>

    @if (session('status'))
        <x-alert :message="session('status')" />
    @endif

    {{-- footer --}}
    @yield('footer')
</body>

</html>
