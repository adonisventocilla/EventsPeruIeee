@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <form action="{{ route('locationDetails.store') }}" method="POST">
                                
                                @csrf
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label for="addressLine1">Dirección</label><i class="fas fa-exclamation-circle"></i>
                                        <input value="{{ $addressLine1->name ?? '' }}" type="text" name="addressLine1" id="addressLine1" class="form-control" placeholder="" aria-describedby="helpId" required>
                                        <small id="helpId" class="text-muted">Help text</small>
                                        @error('addressLine1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="city">Ciudad:</label><i class="fas fa-exclamation-circle"></i>
                                        <input type="text" class="form-control" name="city" id="city" aria-describedby="helpId" placeholder="" required>
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                        @error('city')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="building">Edificio:</label>
                                        <input type="text" class="form-control" name="building" id="building" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                      </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label for="roomNumber">Número de habitación</label>
                                        <input type="number" class="form-control" name="roomNumber" id="roomNumber" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                      </div>
                                      <div class="form-group">
                                        <label for="url">URL:</label>
                                        <input type="url" class="form-control" name="url" id="url" aria-describedby="helpId" placeholder="">
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                      </div>
                                </div>
                              </div>
                                
                                
                                
                                <button class="btn btn-primary" type="submit">
                                    Continuar
                                </button>
                            </form>
                            @include('layouts.events.eventbar', [ 'step' => 1])
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection


