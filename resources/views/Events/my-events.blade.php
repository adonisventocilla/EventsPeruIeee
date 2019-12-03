@extends('layouts.app')

@section('title')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tus eventos</h1>
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
                            @include('Events.partials.event-card', [
                                'events' => $event
                            ])
                        @endforeach
                    @else
                        <p>No te has registrado a ningún evento</p>
                    @endif
                	
                </div>
            </div>
        </div>
    </div>

@endsection