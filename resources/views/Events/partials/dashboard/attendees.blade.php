<div class="upcoming-events">
    <!--
        <div class="row">
            <div class="col-xl-4">
                <h6>This Week</h6>
                <h4 class="color-primary">$5500.00</h4>
            </div>
            <div class="col-xl-4">
                <h6>Previous Week</h6>
                <h4 class="color-primary">$6550.00</h4>
            </div>
        </div>
    -->
        <div class="table-responsive m-t-15">
            <table class="table">
                @if (empty($attendees))
                    <p>No hay registrados aún</p>
                @else
                    @foreach ($attendees as $attendant)
                        <tr>
                            <td><img src="{{ $attendeant->avatar_original ?? asset('assets/images/thumb/1.png') }}" width="50px" alt=""></td>
                            <td>{{ $attendant->person()->first()->firstName }}
                                <a href=""> {{ $attendant->email }}</a>
                            </td>
                            <td>{{ $attendant->person()->first()->document()->first()->number ?? 'vacío' }}</td>
                            <td>{{ $attendant->person()->first()->phone()->first()->number ?? 'vacío' }}</td>
                            <td>
                                <div class="dropdown custom-dropdown">
                                    <div data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                @endif
                
            <!--
                <tr>
                    <td><img src="../assets/images/thumb/1.png" alt=""></td>
                    <td>John Doe
                        <a href="#"> Event Name Here</a>
                    </td>
                    <td>X1</td>
                    <td>165</td>
                    <td>
                        <div class="dropdown custom-dropdown">
                            <div data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            -->
            </table>
        </div>
    </div>