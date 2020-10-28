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

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset ('images/logo-hirez.png') }}"/>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-green-900 ">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="container mx-auto flex  items-center" >
                    <div class="pr-2">
                        <img src="{{ asset ('images/logo-hirez.png') }}" alt="Broadworth logo" width="70" height="70">
                    </div>
                    <div>
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                </div>

                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <div class = "flex mx-auto">
                        @guest
                            <div class ="flex mx-auto pr-2">
                                <div class ="pr-2">
                                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </div>

                                @if (Route::has('register'))
                                    <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </div>

                        @else
                            <div class ="flex mx-auto pr-2">
                                <div class="pr-2">
                                    <span>{{ Auth::user()->name }}</span>
                                </div>

                                <a href="{{ route('logout') }}"
                                   class="no-underline hover:underline"
                                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </div>

                        @endguest
                    </div>

                </nav>
            </div>
        </header>

        <div class="container mx-auto">
            @yield('header')
            @yield('content')
            @yield('footer')
        </div>


    </div>
</body>
</html>
