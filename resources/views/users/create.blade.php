@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">Registra datos adicionales</div>
                    <div class="card-body">
                            <div class="container">
                                    <div class="py-5 text-center">
                                      <img class="d-block mx-auto mb-4" src="{{ asset('img') }}/logoEventsIEEE.png" alt="" width="225" height="72">
                                      <h2>Registro de datos adicionales</h2>
                                      <p class="lead">Completalo de la mejor manera.</p>
                                    </div>
                              
                                    <div class="row">
                                      
                                      <div class="col-md-12 order-md-1">
                                        <h4 class="mb-3">Datos necesarios</h4>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form class="needs-validation" action="{{ route('register.store') }}" method="POST" novalidate>
                                            @csrf
                                          <div class="row">
                                            <div class="col-md-3 mb-3">
                                              <label for="firstName">Primer Nombre</label>
                                              <input name="firstname" type="text" class="form-control" id="firstName" placeholder="" value="{{ $user->person->firstName ?? '' }}" required>
                                              <div class="invalid-feedback">
                                                Un primer nombre válido es requerido.
                                              </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="lastName">Segundo Nombre</label>
                                                <input name="middlename" type="text" class="form-control" id="lastName" placeholder="" value="{{ $user->person->middleName ?? '' }}">
                                                <div class="invalid-feedback">
                                                    Un segundo nombre válido es requerido.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                              <label for="lastName">Nombre</label>
                                              <input name="lastname" type="text" class="form-control" id="lastName" placeholder="" value="{{ $user->person->lastName ?? '' }}" required>
                                              <div class="invalid-feedback">
                                                Apellido válido es requerido.
                                              </div>
                                            </div>
                                          </div>
                              
                                          <div class="mb-3">
                                            <label for="username">Nickname</label>
                                            <div class="input-group">
                                              <input name="nickname" type="text" class="form-control" id="username" placeholder="Username" value="{{ $user->nickname }}">
                                              <div class="invalid-feedback" style="width: 100%;">
                                                Your username is required.
                                              </div>
                                            </div>
                                          </div>
                              
                                          <div class="mb-3">
                                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                            <input type="email" class="form-control" id="email" placeholder="you@example.com" value="{{ $user->email }}" disabled>
                                            <div class="invalid-feedback">
                                              Please enter a valid email address for shipping updates.
                                            </div>
                                          </div>
                              
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="document">Documento de identidad</label>
                                          <input value="{{ $user->person()->first()->document()->first()->number ?? '' }}" type="number" class="form-control" name="document" id="" aria-describedby="helpId" placeholder="">
                                          @error('document')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
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
                                        
                                        
                                        <div class="form-group col-md-4">
                                          <label for="">Número telefónico</label>
                                          <input value="{{ $user->person()->first()->phone()->first()->number ?? '' }}" type="number" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
                                          @error('phone')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                            </div>
                    </div>
                </div>
        </div>
</div>
@endsection