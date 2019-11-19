@extends('layouts.app')
@section('content')

<div class="container" >
    <div class="row justify-content-center">
        @foreach ($events as $event)
            <div class="col-md-4">
                <div class="container-fluid">
                    <div class="card-deck">
                        <div class="card w-50" style="width: 18rem;">
                            <img src="https://www.dickson-constant.com/medias/images/catalogue/api/6088-gris-680.jpg" class="card-img-top" alt="{{ $event->title }} image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text">{{ $event->description }}</p>
                                <a href="{{ route('events.show', ['event' =>  $event ])  }}" class="btn btn-primary">Ver más</a>
                                
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Inicia en {{ $event->startTime }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection