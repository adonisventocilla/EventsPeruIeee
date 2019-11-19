@extends('layouts.app')

@section('content')
{{
    session()->get('event')
}}
{{
    session()->get('location')
}}
{{
    session()->get('eventThemeDetail')
}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <form action="{{ route('registrationPayments.store') }}" method="POST">
                                @csrf
                                <h1 class="display-3" style="align-content: flex-end">¿Como será el evento?</h1>
                                <label for="date">Fecha de inicio:</label>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                        <input name="startRegistration"  type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <label for="date">Fecha de fin:</label>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                        <input name="endRegistration" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="maximun">Aforo:</label>
                                  <input type="number"
                                    class="form-control" name="maximun" id="maximun" aria-describedby="helpId" placeholder="">
                                  <small id="helpId" class="form-text text-muted">Cantidad de personas máxima</small>
                                </div>
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
                                        <div class="row">
                                            <div class="form-row">
                                                
                                              <label for="non-ieeemembers">Público general</label>
                                              <input type="number"
                                                class="form-control" name="nonieeemembers" id="non-ieeemembers" aria-describedby="helpId" placeholder="">
                                              <small id="helpId" class="form-text text-muted">Precio para las personas ajenas al IEEE</small>
                                            </div>
                                            <div class="form-row">
                                              <label for="ieeestudentmembers">Miembros estudiantiles</label>
                                              <input type="number"
                                                class="form-control" name="ieeestudentmembers" id="ieeestudentmembers" aria-describedby="helpId" placeholder="">
                                              <small id="helpId" class="form-text text-muted">Estudiantes miembros de IEEE</small>
                                            </div>
                                            <div class="form-row">
                                              <label for="ieeemembers">Miembros IEEE</label>
                                              <input type="number"
                                                class="form-control" name="ieeemembers" id="ieeemembers" aria-describedby="helpId" placeholder="">
                                              <small id="helpId" class="form-text text-muted">Todos los miembros de IEEE</small>
                                            </div>
                                        </div>
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