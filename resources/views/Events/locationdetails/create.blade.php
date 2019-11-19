@extends('layouts.app')

@section('content')
{{ session()->get('event') }}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <form action="{{ route('locationDetails.store') }}" method="POST">
                                
                                @csrf
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    direccion
                                                </label>
                                                <input value="{{ $addressLine1->name ?? '' }}" class="form-control" id="title" name="addressLine1" type="text">
                                                    <small class="form-text text-muted" id="helpId">
                                                        Help text
                                                    </small>
                                            </td>
                                        </tr>
                                       
                                       

                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    ciudad
                                                </label>
                                                <input class="form-control" id="title" name="city" type="text">
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    edificio
                                                </label>
                                                <input class="form-control" id="title" name="building" type="text">
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    # de habitacion
                                                </label>
                                                <input class="form-control" id="title" name="numero_habitaciones" type="text">
                                                
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
