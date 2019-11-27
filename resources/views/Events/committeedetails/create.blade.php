@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    
                    <div class="form-group">
                        
                        <form action="{{ route('committeeDetails.store') }}" method="POST">
                            @csrf
                            <div class="form-check">
                                
                                    <div class="form-group">
                                      <label for="committee">Escoja el comité que desea agregar al evento:</label>
                                      <select class="form-control" name="committee" id="committee">
                                            <option value="-1">Seleccione</option>
                                        @foreach ($committeeTypes as $committeeType)
                                            <option value="{{ $committeeType->id }}" >{{ $committeeType->name }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="people">Agregue personas designadas a los comites:</label>
                                      <input type="text" class="form-control" name="people" id="people" aria-describedby="helpId" placeholder="someone@example.com">
                                      <small id="helpId" class="form-text text-muted">Coloque el correo de la persona</small>
                                      
                                    </div>
                                
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
