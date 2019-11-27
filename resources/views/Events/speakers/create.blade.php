@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('speakers.store') }}" method="POST">
                            @csrf
                            <div class="form-check">
                                <div class="form-group">
                                    <label for="people">Agregue personas designadas como ponentes:</label>
                                    <input type="text" class="form-control" name="people" id="people" aria-describedby="helpId" placeholder="someone@example.com">
                                    <small id="helpId" class="form-text text-muted">Coloque el correo de la persona</small>
                                @error('people')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="institute">Institución</label>
                                <select class="custom-select" name="institute" id="institute">
                                    <option value="-1" selected>Selecciona</option>
                                    @foreach ($institutes as $institute)
                                    <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                                    @endforeach
                                </select>
                                @error('institute')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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