<div class="form-group">
    <form action="{{ route('events.store') }}" method="POST">
            @csrf
        <table class="table">
            <tbody>
                <tr>
                    <td colspan="3">
                        @if (isset($event))
                        <div class="alert alert-success" role="alert">
                                <strong>{{ $event }}</strong>
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="">Título</label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Curso de programación : IEEExtreme">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </td>
                    <td>
                        <div class="form-group">
                        <label for="eventCategory_id">Categoría:</label>
                        <select class="form-control" name="eventCategory_id" id="eventCategory_id">
                            <option value="-1"> Seleccionar </option>
                            <option></option>
                            <option></option>
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Fecha de inicio:</label>
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                <input name="startTime"  type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td colspan="2">
                        <label for="date">Fecha de fin:</label>
                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                <input name="endTime" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2"/>
                                <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
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
                        <label for="description">Descripción:</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                    </td>
                </tr>
                    <td colspan="3">
                        <div class="form-group">
                        <label for="header">Cabecera:</label>
                        <textarea class="form-control" name="header" id="header" rows="3"></textarea>
                        </div>
                    </td>
                <tr>
                    <td colspan="3">
                        <div class="form-group">
                        <label for="footer">Pie de página:</label>
                        <textarea class="form-control" name="footer" id="footer" rows="3"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="form-group">
                        <label for="agenda">Agenda:</label>
                        <textarea class="form-control" name="agenda" id="agenda" rows="3"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="form-group">
                        <label for="keywords">Palabras clave:</label>
                        <input type="text" name="keywords" id="keywords" class="form-control" placeholder="keywords" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                        </div>
                    </td>
                </tr>
                <tr>
                        <div class="form-check">
                    <td>
                        
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="inviteStudents" id="inviteStudents" value="checkedValue">
                            Invitar a estudiantes
                        </label>
                            
                        
                    </td>
                    <td>
                        <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remotelyAccessible" id="remotelyAccessible" value="checkedValue">
                                Accesible remotamente
                        </label> 
                    </td>
                        </div>
                    <td>
                        
                    </td>
                </tr>
            </tbody>
            
        </table>
        <button type="submit" class="btn btn-primary">Continuar</button>
    </form>

    
</div>             
        
