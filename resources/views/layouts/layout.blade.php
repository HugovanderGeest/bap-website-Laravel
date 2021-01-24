<html lang="nl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUCK</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset("assets/css/noscript.css") }}" />
    </noscript>


</head>

<!-- <body class="is-preload"> -->

<body>


    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm black">
            <!-- <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->

                <!-- Right Side Of Navbar -->
                <ul class="naviegatie">
                    <!-- Authentication Links -->

                    <img class="logo" src="images/thumbs/logo.png" alt="">



                    @guest

                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                    <li class="nav-item "><a class="nav-none" href="{{ route('info') }}">Info</a></li>

                    </li>
                    @if (Route::has('register'))
                    <a class=" nav-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>

                        <a href="{{route('logout')}}"></a>



                        <form id="logout-form " action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <li class="nav-item nav-none">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                    </li>

                    <li class="nav-item "><a class="nav-none" href="{{ route('info') }}">Info</a></li>
                    <li class="nav-item "><a class="nav-none" href="{{ route('upload.form') }}">upload</a></li>


                    @endguest
                </ul>
            </div>
    </div>
    </nav>
    </header>



    <!--Main -->
    <div id="main">
        @yield('content')
        <div class="footer">
            @yield ('footer')
        </div>
    </div>



    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.poptrox.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</html>