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
                            <form action="{{ route('event-store-step4') }}" method="POST">
                                {{ csrf_field() }}
                                @csrf
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    tema a tratar
                                                </label>
                                                <input value="{{ $event->tema ?? '' }}" class="form-control" id="title" name="tema" type="text">
                                                    <small class="form-text text-muted" id="helpId">
                                                        Help text
                                                    </small>
                                                </input>
                                            </td>
                                        </tr>
                                       
                                       <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    profesor distinguido
                                                </label>
                                                <input value="{{ $event->profesor_dist ?? '' }}" class="form-control" id="title" name="profesor_dist" type="text">
                                                </input>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    descripcion_tema
                                                </label>
                                                <input class="form-control" id="title" name="descripcion_tema" type="text">
                                                </input>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    prefijo
                                                </label>
                                                <input class="form-control" id="title" name="prefijo" type="text">
                                                </input>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    nombre
                                                </label>
                                                <input class="form-control" id="title" name="nombre" type="text">
                                                </input>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    apellido_paterno
                                                </label>
                                                <input class="form-control" id="title" name="apellido_paterno" type="text">
                                                </input>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    apellido_materno
                                                </label>
                                                <input class="form-control" id="title" name="apellido_materno" type="text">
                                                </input>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    URL_compañia
                                                </label>
                                                <input class="form-control" id="title" name="url_compañia" type="text">
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
