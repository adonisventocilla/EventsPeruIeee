@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <form action="{{ route('eventThemeDetails.store') }}" method="POST">
                              
                                @csrf
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <div class="form-group">
                                          <label for="theme">Tema</label><i class="fas fa-exclamation-circle"></i>
                                          <input type="text"
                                            class="form-control" name="theme" id="theme" aria-describedby="helpId" placeholder="" required>
                                          <small id="helpId" class="form-text text-muted">Help text</small>
                                        </div>
                                        <div class="form-group">
                                          <label for="description">Descripción</label><i class="fas fa-exclamation-circle"></i>
                                          <textarea class="form-control" name="description" id="description" rows="6" required></textarea>
                                        </div>
                                        
                                  </div>
                                  <div class="form-group col-md-6">
                                      <div class="form-row">
                                          <div class="form-group col-md-2">
                                              <label for="prefix">Prefijo</label><i class="fas fa-exclamation-circle"></i>
                                              <input type="text" class="form-control" name="prefix" id="prefix" aria-describedby="helpId" placeholder="" required>
                                              <small id="helpId" class="form-text text-muted">Help text</small>
                                          </div>
                                          <div class="form-group col-md-5">
                                              <label for="firstname">Primer Nombre</label><i class="fas fa-exclamation-circle"></i>
                                              <input type="text" class="form-control" name="firstname" id="firstname" aria-describedby="helpId" placeholder="" required>
                                              <small id="helpId" class="form-text text-muted">Help text</small>
                                          </div>
                                          <div class="form-group col-md-5">
                                            <label for="middlename">Segundo Nombre</label><i class="fas fa-exclamation-circle"></i>
                                            <input type="text" class="form-control" name="middlename" id="middlename" aria-describedby="helpId" placeholder="" required>
                                            <small id="helpId" class="form-text text-muted">Help text</small>
                                          </div>
                                          
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-12">
                                          <label for="lastname">Apellido</label><i class="fas fa-exclamation-circle"></i>
                                          <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="helpId" placeholder="" required>
                                          <small id="helpId" class="form-text text-muted">Help text</small>
                                        </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="nickname">Nombre para mostrar</label><i class="fas fa-exclamation-circle"></i>
                                        <input type="text" class="form-control" name="nickname" id="nickname" aria-describedby="helpId" placeholder="" required>
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="url">URL</label>
                                        <input type="text" class="form-control" name="url" id="url" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                                
                                
                                <button class="btn btn-primary" type="submit">
                                    Continuar
                                </button>
                            </form>
                            @include('layouts.events.eventbar', [ 'step' => 2])
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection