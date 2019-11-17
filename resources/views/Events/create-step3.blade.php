@extends('layouts.app')

@section('content')
{{ $event }}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <form action="{{ route('event-store-step3') }}" method="POST">
                                {{ csrf_field() }}
                                @csrf
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    direccion
                                                </label>
                                                <input value="{{ $address1->name ?? '' }}" class="form-control" id="title" name="address1" type="text">
                                                    <small class="form-text text-muted" id="helpId">
                                                        Help text
                                                    </small>
                                                </input>
                                            </td>
                                        </tr>
                                       
                                       <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    direccion 2 
                                                </label>
                                                <input value="{{ $address2->name ?? '' }}" class="form-control" id="title" name="address2" type="text">
                                                </input>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    cuidad
                                                </label>
                                                <input class="form-control" id="title" name="ciudad" type="text">
                                                </input>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    edificio
                                                </label>
                                                <input class="form-control" id="title" name="edificio" type="text">
                                                </input>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    # de habitacion
                                                </label>
                                                <input class="form-control" id="title" name="numero_habitaciones" type="text">
                                                </input>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    URL del mapa
                                                </label>
                                                <input class="form-control" id="title" name="url_map" type="text">
                                                </input>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <button class="btn btn-primary" type="submit">
                                    Continuar
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
