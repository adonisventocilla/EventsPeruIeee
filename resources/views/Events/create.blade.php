@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="card">
                        <div class="card-body">
                <div class="form-group">
                        <form action="{{ route('events.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    @if (isset($event))
                                    <div class="alert alert-success" role="alert">
                                            <strong>{{ $event }}</strong>
                                        </div>
                                    @endif
                                
                                    <div class="form-group">
                                    <label for="">Título</label><i class="fas fa-exclamation-circle"></i>
                                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Curso de programación : IEEExtreme" required>
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    {{-- <div class="form-group">
                                    <label for="eventCategory_id">Categoría:</label>
                                    <select class="form-control" name="eventCategory_id" id="eventCategory_id">
                                        <option value="-1"> Seleccionar </option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                    </div> --}}
                                
                                    <div class="form-row" style="width: 100%;">
                                            <div class="form-group col-md-6">
                                                    <label for="date">Fecha de inicio:</label><i class="fas fa-exclamation-circle"></i>
                                                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest" aria-disabled="true">
                                                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                                                    <input name="startTime" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                                                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                    @error('startTime')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            
                                                
                                                <div class="form-group col-md-6">
                                                        <label for="date">Fecha de fin:</label><i class="fas fa-exclamation-circle"></i>
                                                    <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                                            <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                                                    <input name="endTime" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                                                                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                    @error('endTime')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                    </div>
                                    
                                    

                                    <div class="form-group">
                                        <label for="description">Descripción:</label><i class="fas fa-exclamation-circle"></i>
                                        <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="header">Cabecera:</label>
                                        <textarea class="form-control" name="header" id="header" rows="3"></textarea>
                                    </div>
                            </div>
                            <div class="form-group col-md-6">
                                    
                                    
                                        <div class="form-group">
                                            <label for="footer">Pie de página:</label>
                                            <textarea class="form-control" name="footer" id="footer" rows="3"></textarea>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="agenda">Agenda:</label>
                                            <textarea class="form-control" name="agenda" id="agenda" rows="3"></textarea>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="keywords">Palabras clave:</label>
                                            <input type="text" name="keywords" id="keywords" class="form-control" placeholder="keywords" aria-describedby="helpId">
                                            
                                        </div>
                                
                                        <div class="form-check">
                                    
                                                <div class="form-group col-md-6">
                                        
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="inviteStudents" id="inviteStudents" value="checkedValue">
                                                Invitar a estudiantes
                                            </label>
                                                </div>
                                            
                                                <div class="form-group col-md-6">
                                            <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="remotelyAccessible" id="remotelyAccessible" value="checkedValue">
                                                    Accesible remotamente
                                            </label> 
                                                </div>
                                        </div>
                            </div>
                        </div>
                                    
                                
                                    
                                
                        
                
                    <button type="submit" class="btn btn-primary">Continuar</button>
                </form>
                @include('layouts.events.eventbar')
            </div>
                        </div>
                </div></div></div></div>        
@endsection

@section('scripts')

@endsection
     
        
