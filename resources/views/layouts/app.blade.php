<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="data:image/png;base64,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" width="200" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('registro') }}">Registro</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>






    <script>
        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });

    </script>




@yield('scripts')


</body>
</html>
