@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Panel de control de eventos</div>
                <div class="card-body">

                    <a name="CommitteeCreate" id="CommitteeCreate" class="btn btn-primary" href="{{ route('committeeDetails.create') }}" role="button">Organizar Comites</a>

                    <table class="table table-inverse table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Número telefónico</th>
                                <th>Documento de identidad</th>
                                <th>Institución</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($attendees as $attendant)
                                    <tr>
                                        <td>
                                            {{
                                                $attendant->firstName
                                            }}
                                            {{
                                                $attendant->middleName
                                            }}
                                            {{
                                                $attendant->lastName
                                            }}
                                        </td>
                                        <td>
                                            {{
                                                $attendant->user()->first()->email
                                            }}
                                        </td>
                                        <td>
                                            {{
                                                $attendant->phone()->first()->number
                                            }}
                                        </td>
                                        <td>
                                            {{
                                                $attendant->document()->first()->number
                                            }}
                                        </td>
                                        <td>
                                            {{
                                                $attendant->institute_id ?? 'No definido'
                                            }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                    
                    
                </div>
            </div>
    </div>
</div>
@endsection