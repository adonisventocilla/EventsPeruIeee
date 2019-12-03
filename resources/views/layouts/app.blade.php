<!Doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Dashboard') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700">
    <link rel="stylesheet" href="{{ asset('assets/icons/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icons/icofont/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
</head>

<body>

    @include('layouts.sections.header')

    @auth
        @include('layouts.sections.menu')
    @endauth

    @yield('title')

    <main class="content-body">
        @yield('content')
    </main>

    @include('layouts.sections.footer')

    @include('layouts.sections.modals')

    @yield('scripts')

    <!-- Common JS -->
    <script src="{{ asset('assets/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
</body>

</html>