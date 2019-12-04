@extends('layouts.app')

@section('title')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Borradores de eventos planificados</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
        <div class="col-xl-8">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="event-draft-table">
                            <div class="table-responsive">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @if ($eventsCreated)

                                <a name="" id="" class="btn btn-primary" href="{{ route('events.create') }}" role="button">
                                    Crear nuevo evento
                                </a>

                                <table class="table">
                                    @foreach ($eventsCreated as $eventCreated)
                                    
                                        <tr>
                                            <td class="name">
                                                Por {{ $eventCreated->usercreator()->first()->users()->first()->person()->first()->lastName }}
                                            </td>
                                            <td class="evemt-name">
                                                <a href="{{ route('events.edit', [ 
                                                    'events' => $eventCreated 
                                                    ]) }}">
                                                    {{ $eventCreated->title }}
                                                </a>
                                                    
                                                <span>(Borrador)</span>
                                            </td>
                                            <td class="date">July 12, 2018</td>
                                            <td>
                                                <div class="dropdown custom-dropdown">
                                                    <div data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{ route('events.publish', ['event' => $eventCreated]) }}" onclick="event.preventDefault();
                                                        document.getElementById('events-publish').submit();">
                                                        Publicar</a>
                                                            <form id="events-publish" action="{{ route('events.publish', ['event' => $eventCreated]) }}" method="POST" style="display: none;">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="hidden" value="{{ $eventCreated->id }}" name="event">
                                                            </form>
                                                        <a class="dropdown-item" href="#">Editar</a>
                                                        <a class="dropdown-item" href="#">Eliminar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    
                                    @endforeach

                                   

                                </table>
                                @else
                                    <p>No hay borradores planificados</p>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
@endsection
