<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="min-height: 100%; background-size: cover">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://js.braintreegateway.com/web/dropin/1.8.1/js/dropin.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Datepicker Files -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/github.min.css" />
    <link rel="stylesheet" href="https://tempusdominus.github.io/bootstrap-4/theme/css/tempusdominus-bootstrap-4.css" />
    
</head>
<body>
    <header>
        <div style="background-color: #00629B ">
            <table>
                    <tr>
                        <th><i style="color: white;" class="fas fa-phone-alt">&nbsp;<span style="font-family:unset">(+51-1) 424 - 7598</span></i>&nbsp;&nbsp;<i style="color: white;" class="fas fa-envelope">&nbsp;<span style="font-family:unset">informes@ieee.org.pe</span></i>&nbsp;&nbsp;<i style="color: white" class="fab fa-youtube"></i>&nbsp;&nbsp;<i style="color: white;" class="fab fa-facebook-f"></i></th>
                    </tr>
            </table>
        </div>
    </header>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img') }}/logoEventsIEEE.png" style="max-width: 13%;" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <!--{{ config('app.name', 'Laravel') }}-->

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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <small> ¡Bienvenido {{ explode(" ",Auth::user()->nickname)[0] }}!</small>
                            @if (Auth::user()->usertypes()->where('role_id', 2)->first())
                                <li class="nav-item" >

                                    <a class="nav-link" href="{{ url('/home') }}"> Principal <span class="sr-only">(current)</span></a>

                                </li>
                                <li class="nav-item" >

                                        <a class="nav-link" href="{{ url('/dashboard') }}"> Dashboard <span class="sr-only">(current)</span></a>

                                    </li>
                            @endif


                            <img class="rounded-circle" src="{{ Auth::user()->avatar_original ?? '' }}" alt="" height="40px" width="40px">




                            <li class="nav-item dropdown">


                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('register.create', ['user' => Auth::user()]) }}">
                                        Configuración

                                    </a>
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

        <main class="py-5" style="background-color: #1E8CCB;width: 100%; height: 100%;background-size:">
                @yield('content')
        </main>


        @yield('scripts')

    </div>
        <!-- Footer -->
        <footer class="page-footer font-small blue background-color:black">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Derechos Reservados 2019© |
          <a href=" "> Seccion Peru del IEEE</a>
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
</body>
</html>
