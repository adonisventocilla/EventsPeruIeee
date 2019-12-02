<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/images/logo.png') }}">
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
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <a href="#" class="btn btn-primary create-event-btn" data-toggle="modal" data-target="#creat-event">Nuevo Evento</a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="header-user-profile">
                    <div class="dropdown">
                        <div data-toggle="dropdown">
                            <p> Revenue :
                                <span>$2500.00</span></p>
                            <img src="{{ asset('assets/images/thumb/1.png') }}">
                        </div>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">My Profile</a>
                            <a class="dropdown-item" href="#">Notifications <span class="badge badge-danger">5</span></a>
                            <a class="dropdown-item" href="#">Event Created</a>
                            <a class="dropdown-item" href="#">Event Attended </a>
                            <a class="dropdown-item" href="#">Elements</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>