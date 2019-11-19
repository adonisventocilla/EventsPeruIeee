@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    
                    <a name="" id="" class="btn btn-primary" href="{{ route('events.index') }}" role="button">Crear nuevo evento</a>

                    <a name="" id="" class="btn btn-primary" href="" role="button">asfasfd</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
