@extends('layouts.app')

@section('content')
{{ $data['title'] }}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <form action="" method="POST">
                                
                                {{ csrf_field() }}
                                
                                @csrf
                                
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    comite
                                                </label>
                                                <input value="{{ $comite->name ?? '' }}" class="form-control" id="title" name="comite" type="text">
                                                    <small class="form-text text-muted" id="helpId">
                                                        Help text
                                                    </small>
                                                </input>
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    correo
                                                </label>
                                                <input class="form-control" id="title" name="correo" type="text">
                                                </input>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    colaborador
                                                </label>
                                                <input class="form-control" id="title" name="colaborador" type="text">
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
