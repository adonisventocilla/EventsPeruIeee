<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="logo">
                    <a href="{{ route('index') }}" title="Inicio">
                        <img src="{{ asset('img/logo_fixed.png') }}">
                    </a>
                </div>
                <span class="nav-control">
                    <i class="fa fa-bars"></i>
                </span>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="header-search">
                    <form action="#">
                        <div class="form-group">
                            <i class="icofont icofont-search"></i>
                            <input type="text" class="form-control" placeholder="Buscar">
                        </div>
                    </form>
                </div>
            </div>
            @guest
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                    <a href="{{ route('login') }}" class="btn btn-primary create-event-btn">Iniciar sesión</a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                    <a href="{{ route('register') }}" class="btn btn-outline-primary create-event-btn">Registro</a>
                </div>
            @endguest
            @auth
                <div class="col">
                    <div class="header-user-profile">
                        <div class="dropdown">
                            <div data-toggle="dropdown">
                                <p><span>{{ Auth::user()->nickname }}</span></p>
                                <img width="50px" height="50px" src="{{ Auth::user()->avatar_original ?? asset('assets/images/thumb/1.png') }}">
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('register.create', ['user' => Auth::user()]) }}">
                                        Configuración
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</div>