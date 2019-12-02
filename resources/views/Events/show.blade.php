@extends('layouts.app')

@section('content')
<!-- Modal -->
<div class="container">
        <div class="modal-content">
            <div class="row">
                <div class="col-lg-8 p-r-0">

                    <div class="card text-white m-b-0">
                        <img class="card-img" src="../assets/images/modal/event.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <h2 class="m-t-5">{{ $event->title }}</h2>
                                </div>
                                <div class="col-auto">
                                    @if ($registred)
                                      <button class="btn btn-primary" disabled>¡Ya estás registrado!</button>
                                    
                                    @else
                                      <a class="btn btn-primary" href="{{ route('attendances.create', ['events' => $event ]) }}" >Inscribirse</a>
                                    @endif
                                </div>
                                
                
            
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 p-l-0">
                    <div class="card event-card box-0 m-b-0">
                        <div class="test">

                            <div class="card-header">
                                <div class="media">
                                    <img class="mr-3 img-fluid" width="43px" height="43px" src="{{ $event->usercreator->first()->users()->first()->avatar ?? 'admin/assets/images/modal/author1.png' }}" alt="placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0">Por {{ $event->usercreator()->first()->users()->first()->person()->first()->lastName }}</h3>
                                        <p>5 min ago</p>
                                    </div>
                                    <!--
                                    <div class="dropdown custom-dropdown">
                                        <div data-toggle="dropdown" aria-disabled="true">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right" aria-disabled="true">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                  -->
                                </div>
                                <p class="m-t-10">
                                  {{ $event->description }}
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <h5>Date</h5>
                                        <p>June 16, 2018</p>
                                    </div>
                                    <div class="col-auto">
                                        <h5>Locación</h5>
                                        <p>{{ $event->locationDetails()->first()->building }}</p>
                                    </div>
                                    <div class="col-auto">
                                        <h5>Tickets</h5>
                                        <p>Disponible 26/ {{ $event->registrationPayments()->first()->maximun }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-sponsor">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h4>Sponsor by</h4>
                                        <div class="card-sponsor-img">
                                            <a >
                                                <img class="img-fluid" src="../assets/images/events/card-foot1.png" alt="placeholder image">
                                            </a>
                                            <a >
                                                <img class="img-fluid" src="../assets/images/events/card-foot2.png" alt="placeholder image">
                                            </a>
                                            <a >
                                                <img class="img-fluid" src="../assets/images/events/card-foot3.png" alt="placeholder image">
                                            </a>
                                            <a >
                                                <img class="img-fluid" src="../assets/images/events/card-foot4.png" alt="placeholder image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        @if ($event->registrationPayments()->first()->paymentways()->where('type_id', 1)->first())
                                            <p>Gratuito</p>
                                        @else
                                            <p>Pago</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @if (!$event->registrationPayments()->first()->paymentways()->where('type_id', 1)->first())
                                <div class="card-header">
                                    <div class="media">
                                        
                                        <div class="media-body">
                                            <table class="table">
                                            @foreach ($event->registrationPayments()->first()->paymentways()->get() as $item)
                                                
                                                    <tr>
                                                        
                                                        <td>
                                                            @switch($item->type_id )
                                                                @case(2)
                                                                    General
                                                                    @break
                                                                @case(3)
                                                                    Miembro estudiantil del IEEE
                                                                    @break
                                                                @default
                                                                    Miembro del IEEE
                                                            @endswitch
                                                        </td>
                                                        <td>{{ $item->price }}</td>
                                                    </tr>
                                                
                                            @endforeach
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!--
                            <div class="card-footer">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-heart"></i>126
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-comment"></i>03
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pull-right">
                                    <a href="#">
                                        <i class="fa fa-bar-chart"></i>Insights</a>
                                </div>
                            </div>
                            
                            
                            <div class="card-header">
                                <div class="media">
                                    <img class="mr-3 img-fluid" src="../assets/images/modal/author1.png" alt="placeholder image">
                                    <div class="media-body">
                                        <h3 class="mt-0">By John Doe</h3>
                                        <p>5 min ago</p>
                                    </div>

                                    <div class="dropdown custom-dropdown">
                                        <div data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>

                                </div>
                                <p class="m-t-10">Integer id elementum tortor. Mauris quis lobortis arcu. Cras hendrerit.
                                </p>
                            </div>
                          --> 
                        </div>
                        <!--
                        <div class="char-type">
                            <form class="d-flex justify-content-center" action="#" method="post">
                                <img class="mr-3 img-fluid" src="../assets/images/modal/author1.png" alt="placeholder image">
                                <input type="text" class="form-control mr-3" placeholder="Type Here...">
                                <button class="btn btn-danger">SEND</button>
                            </form>
                        </div>
                      -->

                    </div>
                </div>
            </div>



        </div>
</div>
  @csrf
@endsection