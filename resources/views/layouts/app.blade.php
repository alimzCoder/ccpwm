<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="flex justify-between items-center shadow-md h-16">
        <div class="m-2 text-2xl font-black">Candy Cave POS And Warehouse</div>
        <div class="flex gap-5 m-2">
            @if (!\Illuminate\Support\Facades\Auth::check())
                <a class="hover:text-green-500" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
            @if (!\Illuminate\Support\Facades\Auth::check())
                <a class="hover:text-red-500" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="flex items-center gap-4">
                      <span class="rounded-full shadow-md px-4 py-2">{{\Illuminate\Support\Facades\Auth::user()->name[0]}}</span>
                    <form action="{{route('logout')}}"method="post">
                        @csrf
                    <button class="bg-red-500 text-sm text-white px-6 py-2">logout</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
    <div class="flex flex-col h-screen justify-between">
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="pb-44 bg-gray-200">
        </footer>
    </div>

</body>
</html>
