@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Panel de control de eventos</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a name="" id="" class="btn btn-primary" href="{{ route('events.create') }}" role="button">Crear nuevo evento</a>
                    <br>
                    @if ($eventsCreated)
                    <div class="form-group">
                        <h2>Eventos Registrados</h2>
                        
                        <div class="card-deck">
                            @foreach ($eventsCreated as $eventCreated)
                                
                                    <div class="card border-light mb-3" style="max-width: 15rem; margin-left: 5px; margin-right: 5px;">
                                        <img src="https://www.dickson-constant.com/medias/images/catalogue/api/6088-gris-680.jpg" height="100px" width="10px" class="card-img-top" alt="{{ $eventCreated->title }} image">
                                        <div class="card-body">
                                            <a href="{{ route('attendances.show', ['event_id' =>  $eventCreated->id ])  }}" ><h5 class="card-title">{{ $eventCreated->title }}</h5></a>
                                            <p class="card-text">{{ $eventCreated->description }}</p>
                                            
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Inicia en {{ $eventCreated->startTime }}</small>
                                        </div>
                                    </div>
                                
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
    </div>
</div>
@endsection
