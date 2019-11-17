@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <form action="{{ route('event-store-step1') }}" method="POST">
                                {{ csrf_field() }}
                                @csrf
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <label for="">
                                                    Título
                                                </label>
                                                <input value="{{{ $event->title ?? '' }}}" class="form-control" id="title" name="title" placeholder="Curso de programación : IEEExtreme" type="text">
                                                    <small class="form-text text-muted" id="helpId">
                                                        Help text
                                                    </small>
                                                </input>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="date">
                                                    Fecha de inicio:
                                                </label>
                                                <div class="form-group">
                                                    <div class="input-group date" data-target-input="nearest" id="datetimepicker1">
                                                        <input class="form-control datetimepicker-input" data-target="#datetimepicker1" name="startTime" type="text"/>
                                                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-calendar">
                                                                </i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <label for="date">
                                                    Fecha de fin:
                                                </label>
                                                <div class="form-group">
                                                    <div class="input-group date" data-target-input="nearest" id="datetimepicker2">
                                                        <input class="form-control datetimepicker-input" data-target="#datetimepicker2" name="endTime" type="text"/>
                                                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-calendar">
                                                                </i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div class="form-group">
                                                    <label for="description">
                                                        Descripción:
                                                    </label>
                                                    <textarea class="form-control" id="description" name="description" rows="3">
                                                    </textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
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
