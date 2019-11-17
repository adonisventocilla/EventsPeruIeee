@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <form action="{{ route('events.store') }}" method="POST">
                                {{ csrf_field() }}
                                @csrf
                                {{ $event }}
                                Estos son todos los datos obtenidos en cada paso
                                Desea Guardarlos??
                                <button class="btn btn-primary" type="submit">
                                    Guardar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
