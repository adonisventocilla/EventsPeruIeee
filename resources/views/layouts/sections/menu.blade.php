<div class="menu">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <nav class="topbar-nav">
                    <ul class="metismenu" id="metismenu">
                        <!--<li>
                            <a href="{{ route('index') }}">
                                <span class="fa fa-tachometer"></span> DASHBOARD
                            </a>
                        </li>-->
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                                <span class="fa fa-calendar-check-o"></span> Eventos
                            </a>
                            <ul aria-expanded="false">
                                @if (Auth::user()->usertypes()->where('role_id', 2)->first())
                                <li>
                                    <a href="{{ route('events.active') }}">Activos</a>
                                </li>
                                <li>
                                    <a href="{{ route('home') }}">Borradores</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{ route('events.my-events') }}">Mis Eventos</a>
                                </li>
                            </ul>
                        </li>
                        <!--
                        <li>
                            <a href="#">
                                <span class="fa fa-users"></span> Peoples
                            </a>
                        </li>
                    -->
                        <!--
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                                <span class="fa fa-envelope"></span> Messages
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="#">Inbox</a>
                                </li>
                                <li>
                                    <a href="#">Chat</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-calendar"></span> Calender
                            </a>
                        </li>
                        -->
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                                <span class="fa fa-cog"></span> Configuración
                            </a>
                            <ul aria-expanded="false">
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li>
                                    <a href="#">Payment</a>
                                </li>
                                <li>
                                    <a href="#">Notification</a>
                                </li>
                                <li>
                                    <a href="#">Personal</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>