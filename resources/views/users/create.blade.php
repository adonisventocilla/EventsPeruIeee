@extends('layouts.app')

@section('title')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registro de datos adicionales</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="needs-validation" action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="firstName">Primer Nombre</label>
                <input name="firstname" type="text" class="form-control" id="firstName" placeholder="Primer Nombre" value="{{ $user->person->firstName ?? '' }}" required>
                <div class="invalid-feedback">
                    Un primer nombre válido es requerido.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="middlename">Segundo Nombre <span class="text-muted">(Opcional)</span></label>
                <input name="middlename" type="text" class="form-control" id="middlename" placeholder="Segundo Nombre" value="{{ $user->person->middleName ?? '' }}">
                <div class="invalid-feedback">
                    Un segundo nombre válido es requerido.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="lastName">Apellidos</label>
                <input name="lastname" type="text" class="form-control" id="lastName" placeholder="Apellidos" value="{{ $user->person->lastName ?? '' }}" required>
                <div class="invalid-feedback">
                    Apellido válido es requerido.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="username">Nickname</label>
                <div class="input-group">
                    <input name="nickname" type="text" class="form-control" id="username" placeholder="Nickname" value="{{ $user->nickname }}" required>
                    <div class="invalid-feedback">
                        Your username is required.
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" value="{{ $user->email }}" disabled>
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="document">Documento de Identidad</label>
                <input value="{{ $user->person()->first()->document()->first()->number ?? '' }}" type="number" class="form-control" name="document" placeholder="Documento de Identidad" min="0" maxlength="8" required>
                @error('document')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="institute">Institución</label>
                <select class="custom-select" name="institute" id="institute" required>
                    <option value="-1" selected>Seleccione</option>
                    @foreach ($institutes as $institute)
                        <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                    @endforeach
                </select>
                @error('institute')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="phone">Número telefónico</label>
                <input value="{{ $user->person()->first()->phone()->first()->number ?? '' }}" type="number" class="form-control" name="phone" id="phone" placeholder="Número telefónico" min="0" maxlength="15" required>
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label style="opacity: 0">.</label>
                <div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection