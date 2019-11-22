@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <form action="{{ route('registrationPayments.store') }}" method="POST">
                                @csrf
                                <h2 class="display-3" style="align-content: flex-end">¿Como será el evento?</h2>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                                
                                                <label for="date">Fecha de inicio:</label><i class="fas fa-exclamation-circle"></i>
                                                <div class="form-group">
                                                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                                        <input name="startRegistration"  type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" required/>
                                                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="date">Fecha de fin:</label><i class="fas fa-exclamation-circle"></i>
                                                <div class="form-group">
                                                    <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                                        <input name="endRegistration" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2" required/>
                                                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                  <label for="maximun">Aforo:</label><i class="fas fa-exclamation-circle"></i>
                                                  <input type="number"
                                                    class="form-control" name="maximun" id="maximun" aria-describedby="helpId" placeholder="" required>
                                                  <small id="helpId" class="form-text text-muted">Cantidad de personas máxima</small>
                                                </div>
                                        </div>
                                
                                <div class="form-group col-md-6 row justify-content-center" style="margin-left: 10px;">

                                
                                <p>
                                
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="1" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="customRadioInline1">Gratuito</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="0" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <label class="custom-control-label" for="customRadioInline2">De pago</label>
                                </div>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body ">
                                            <div class="form-group row">
                                              <label for="non-ieeemembers" class="col-sm-4 col-form-label col-form-label-sm">Público general</label><i class="fas fa-exclamation-circle"></i>
                                              <div class="col-sm-7">
                                                    <input type="number"
                                                    class="form-control" name="nonieeemembers" id="non-ieeemembers" aria-describedby="helpId" placeholder="">
                                                  <small id="helpId" class="form-text text-muted">Precio para las personas ajenas al IEEE</small>
                                              </div>
                                              
                                            </div>
                                            <div class="form-group row">
                                              <label for="ieeestudentmembers" class="col-sm-4 col-form-label col-form-label-sm">Miembros estudiantiles</label><i class="fas fa-exclamation-circle"></i>
                                              <div class="col-sm-7">
                                              <input type="number"
                                                class="form-control" name="ieeestudentmembers" id="ieeestudentmembers" aria-describedby="helpId" placeholder="">
                                              <small id="helpId" class="form-text text-muted">Estudiantes miembros de IEEE</small>
                                              </div>
                                            </div>
                                            <div class="form-group row col-md-14">
                                              <label for="ieeemembers" class="col-sm-4 col-form-label col-form-label-sm">Miembros IEEE</label><i class="fas fa-exclamation-circle"></i>
                                              <div class="col-sm-7">
                                              <input type="number"
                                                class="form-control" name="ieeemembers" id="ieeemembers" aria-describedby="helpId" placeholder="">
                                              <small id="helpId" class="form-text text-muted">Todos los miembros de IEEE</small>
                                              </div>
                                            </div>
                                    </div>
                                </div>

                                </div>

                                
                        </div>
                        <button class="btn btn-primary" type="submit">
                                Continuar
                            </button>
                    </form>
                    @include('layouts.events.eventbar', [ 'step' => 3])
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection