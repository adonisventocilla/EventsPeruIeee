@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h1 class="display-4">{{ session()->get('event')->title }}</h1>
                    
                        <form action="{{ route('confirmations.store') }}" method="POST">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                @csrf
                                <p>{{ session()->get('event')->description }}</p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Inicio</th>
                                            <th>Fin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ Session::get('event')->startTime }}</td>
                                            <td>{{ Session::get('event')->endTime }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="container-fluid">
                                    <p>{{ Session::get('event')->header }}</p>
                                        <div class="card">
                                            <img class="card-img-top" src="https://www.dickson-constant.com/medias/images/catalogue/api/6088-gris-680.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Agenda</h4>
                                                <p class="card-text">Esta es la agenda del evento</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">{{ Session::get('event')->agenda}}</li>
                                            </ul>
                                        </div>
                                    <p>{{ Session::get('event')->footer }}</p>
                                </div>
                                <p><strong>Palabras clave:</strong></p>
                                <p>{{ Session::get('event')->keywords }}</p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Invitación a estudiantes</th>
                                            <th>Permitir acceso de manera remota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>@if (Session::get('event')->inviteStudents)
                                                Activado
                                            @else
                                                Desactivado
                                            @endif</td>
                                            <td>@if (Session::get('event')->remotelyAccessible)
                                                Activado
                                            @else
                                                Desactivado
                                            @endif</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group col-md-6">
                                    <h4>Locación</h4>
                                    <table class="table table-striped table-inverse table-responsive">
                                       
                                            <tbody>
                                                <tr>
                                                    <td scope="row">Dirección :</td>
                                                    <td scope="now">Edificio :</td>
                                                    <td scope="now">Número de habitación :</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ Session::get('location')->addressLine1 }} ({{ Session::get('location')->city }})</td>
                                                    <td>{{ Session::get('location')->building ?? 'No existe' }} </td>
                                                    <td>{{ Session::get('location')->numberRoom ?? 'No tiene'  }} </td>
                                                </tr>
                                            </tbody>
                                    </table>
                                <h4>Detalles de tema del evento</h4>
                                <table class="table">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Tema</td>
                                            <td>{{ Session::get('eventThemeDetail')->theme }}</td>
                                        </tr>
                                        <tr>
                                            <td>Detalles</td>
                                            <td>{{ Session::get('eventThemeDetail')->description }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Ponente principal(Nickname)
                                            </td>
                                            <td >
                                                <a href="{{ Session::get('eventThemeDetail')->url }}">
                                                    {{ Session::get('eventThemeDetail')->prefix }}. {{ Session::get('eventThemeDetail')->firstname }}
                                                    {{ Session::get('eventThemeDetail')->middlename }} {{ Session::get('eventThemeDetail')->lastname }}
                                                    ({{ Session::get('eventThemeDetail')->nickname }})
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>Detalles del registro y pagos del evento:</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Inicio del registro</th>
                                            <th>Fin del registro</th>
                                            <th>Aforo máximo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">{{ Session::get('registrationPayment')->startRegistration }}</td>
                                            <td>{{ Session::get('registrationPayment')->endRegistration }}</td>
                                            <td>{{ Session::get('registrationPayment')->maximun }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h4>Detalles de maneras de pago</h4>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Público</th>
                                            <th>Precio</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (Session::get('paymentway')[0]->price == 0)
                                            <tr>
                                                    <td>General</td>
                                                <td>Gratuito</td>
                                                
                                            </tr>
                                        @else
                                            @foreach (Session::get('paymentway') as $item)
                                                <tr>
                                                    
                                                    <td>@switch($item->type_id )
                                                        @case(1)
                                                            General
                                                            @break
                                                        @case(2)
                                                            Miembro studiantil del IEEE
                                                            @break
                                                        @default
                                                            Miembro del IEEE
                                                    @endswitch</td>
                                                    <td>{{ $item->price }}</td>
                                                </tr>
                                            @endforeach
                                            
                                        @endif
                                        
                                       
                                    </tbody>
                                </table>

                                   
                            </div>                                

                            <input type="submit" value="Confirmar" class="btn btn-primary">
                        </div>
                        </form>
                        @include('layouts.events.eventbar', [ 'step' => 4])
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
