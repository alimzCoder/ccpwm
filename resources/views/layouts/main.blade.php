<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Starter Dashboard Layout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.css"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
</head>
<body class="antialiased text-gray-900 bg-white">


        <div class="bg-gray-100 w-full h-16 shadow-lg flex justify-between items-center">
               <div class="ml-2 text-2xl font-medium">Candy Cave POS & Warehouse</div>
               <div class="flex gap-6 px-4">
                   @if(!\Illuminate\Support\Facades\Auth::check())
                   <span><a class="hover:text-blue-500" href="{{route('login')}}">login</a></span>
                   <span><a class="hover:text-blue-500" href="{{route('register')}}">Register</a></span>
                   @else
                       <span><a class="hover:text-red-500" href="/logout">Logout</a></span>
                   @endif
               </div>
        </div>

        <main class="mt-6">
            @yield('content')
        </main>

</body>
</html>
