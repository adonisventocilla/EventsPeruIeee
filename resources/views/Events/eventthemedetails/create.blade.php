@extends('layouts.app')

@section('content')
{{
    session()->get('event')
}}
{{
    session()->get('location')
}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <form action="{{ route('eventThemeDetails.store') }}" method="POST">
                                
                                @csrf
                                <div class="form-group">
                                  <label for="theme">Tema</label>
                                  <input type="text"
                                    class="form-control" name="theme" id="theme" aria-describedby="helpId" placeholder="">
                                  <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="form-group">
                                  <label for="description">Descripción</label>
                                  <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="">
                                  <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-1">
                                            <label for="prefix">Prefijo</label>
                                            <input type="text" class="form-control" name="prefix" id="prefix" aria-describedby="helpId" placeholder="">
                                            <small id="helpId" class="form-text text-muted">Help text</small>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="firstname">Primer Nombre</label>
                                            <input type="text" class="form-control" name="firstname" id="firstname" aria-describedby="helpId" placeholder="">
                                            <small id="helpId" class="form-text text-muted">Help text</small>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="middlename">Segundo Nombre</label>
                                          <input type="text" class="form-control" name="middlename" id="middlename" aria-describedby="helpId" placeholder="">
                                          <small id="helpId" class="form-text text-muted">Help text</small>
                                        </div>
                                        <div class="form-group col-md-5">
                                          <label for="lastname">Apellido</label>
                                          <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="helpId" placeholder="">
                                          <small id="helpId" class="form-text text-muted">Help text</small>
                                        </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                      <label for="nickname">Nombre para mostrar</label>
                                      <input type="text" class="form-control" name="nickname" id="nickname" aria-describedby="helpId" placeholder="">
                                      <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="form-group">
                                      <label for="url">URL</label>
                                      <input type="text" class="form-control" name="url" id="url" aria-describedby="helpId" placeholder="">
                                      <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>
                                </div>
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