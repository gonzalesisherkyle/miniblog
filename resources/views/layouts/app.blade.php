<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MiniBlog</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .navbar {
            background-color: #6495ED;
        }
        .underlined {
            border: none;
            border-bottom: 1px solid #000;
            border-radius: 0;
            outline: none;
            box-shadow: none;
            margin: 0; 
            width: 100%;
        }
        .btn {
            border-radius: 0;
        }
        .navbar-light .navbar-brand,
        .navbar-light .navbar-text,
        .navbar-light .navbar-nav .nav-link {
            color: #f0f0f0; /* Set your desired almost white color */
        }
        input {
            width: 100%;
        }       
    </style>
</head>
<body>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-skyblue shadow-sm">
            <div class="container">
                <a class="navbar-brand mr-auto" href="{{ url('/') }}" style="font-size: 28px; font-weight: bold;">
                    MiniBlog
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        @else
                            <li class="nav-item">
                                <span class="nav-link">Hi&nbsp;{{ auth()->user()->username }}!</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="nav-link">Logout</button>
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
