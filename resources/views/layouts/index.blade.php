<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @yield('css')
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .btn-login {
            background-color: rgb(146, 234, 199);
            margin: 0px 5px 3px 2px;
            border-radius: 3px;
        }

        .btn-login a {
            text-decoration: none;
            color: #000000
        }

        .btn-login:hover {
            background-color: rgb(221, 239, 232);
        }
    </style>
</head>

<body class="antialiased">

    <div>
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <span class="btn-login">
                    <a href="{{ route('login') }}">LOGIN</a>
                </span>
            @endif

            @if (Route::has('register'))
                <span class="btn-login">
                    <a href="{{ route('register') }}">REGISTER</a>
                </span>
            @endif
        @else
            <span class="btn-login">
                <a href="#">
                    {{ Auth::user()->name }}
                </a>
            </span>

            <span class="btn-login">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    LOGOUT
                </a>
            </span>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest
    </div>

    @include('layouts.header')
    <div class="container">

        @yield('content')

    </div>
    @include('layouts.footer')
    <script src="{{ asset('home/script.js') }}"></script>
    @yield('script')
</body>

</html>
