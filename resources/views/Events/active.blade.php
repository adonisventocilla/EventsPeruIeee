@extends('layouts.app')

@section('title')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Eventos Activos organizados por ti</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <div class="row">
                    @if (!$events->isEmpty())
                        @foreach ($events as $event)
                            <div class="col-lg-4">
                                <div class="card event-card">
                                    <div class="event-card-img">
                                        <a href="{{ route('events.dashboard', ['event' =>  $event ]) }}">
                                            <img class="img-fluid" src="{{ asset('assets/images/events/event-main.jpg') }}" alt="placeholder image">
                                        </a>
                                        <h4>{{ $event->title }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-auto">
                                                <h5>Descripción</h5>
                                                <p>{{ $event->description }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <h5>Inicia</h5>
                                                <p>{{ format_date($event->startTime, 'l j F') }}</p>
                                            </div>
                                            <div class="col-auto">
                                                <h5>Finaliza</h5>
                                                <p>{{ format_date($event->endTime, 'l j F')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-sponsor">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h4>Sponsor by</h4>
                                                <div class="card-sponsor-img">
                                                    <a href="#">
                                                        <img class="img-fluid" src="{{ asset('assets/images/events/card-foot1.png') }}" alt="placeholder image">
                                                    </a>
                                                    <a href="#">
                                                        <img class="img-fluid" src="{{ asset('assets/images/events/card-foot2.png') }}" alt="placeholder image">
                                                    </a>
                                                    <a href="#">
                                                        <img class="img-fluid" src="{{ asset('assets/images/events/card-foot3.png') }}" alt="placeholder image">
                                                    </a>
                                                    <a href="#">
                                                        <img class="img-fluid" src="{{ asset('assets/images/events/card-foot4.png') }}" alt="placeholder image">
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
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No se encuentran eventos activos</p>
                    @endif
                	
                </div>
            </div>
        </div>
    </div>

@endsection