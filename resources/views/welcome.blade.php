@extends('layouts.app')
@section('content')
<div class="container" >
        <table class="table-responsive">
                <tbody>
                    <tr>
                        <td rowspan="@if ($eventsAttended)
                            4
                        @else
                            2
                        @endif">
                                <div class="card mb-3" style="max-width: 540px; margin-right: 35px;">
                                <div class="row no-gutters">
                                  <div class="col-md-4">
                                    <img src="https://www.dickson-constant.com/medias/images/catalogue/api/6088-gris-680.jpg" height="100%" class="card-img" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Eventos Próximos</h5>
                                      <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como una entrada natural a contenido adicional. Este contenido es un poco más largo.</p>
                                      <p class="card-text"><small class="text-muted">Última actualización hace 3 mins</small></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </td>
                        @if ($eventsAttended)
                        <td><h2>Eventos Registrados</h2></td>
                    </tr>
                    <tr>
                        <td>
                            
                            @foreach ($eventsAttended as $eventAttended)
                            
                                        <div class="card-deck">
                                            <div class="card border-light mb-3" style="max-width: 15rem; margin-left: 5px; margin-right: 5px;">
                                                <img src="https://www.dickson-constant.com/medias/images/catalogue/api/6088-gris-680.jpg" height="100px" width="10px" class="card-img-top" alt="{{ $eventAttended->title }} image">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $eventAttended->title }}</h5>
                                                    <p class="card-text">{{ $eventAttended->description }}</p>
                                                    <a href="{{ route('events.show', ['event' =>  $eventAttended ])  }}" class="btn btn-primary">Ver más</a>
                                                    
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">Inicia en {{ $eventAttended->startTime }}</small>
                                                </div>
                                            </div>
                                        </div>
                            @endforeach
                        
                        
                        
                        </td>
                    </tr>
                    
                    <tr>
                    @endif
                        <td><h2>Eventos Disponibles</h2></td>
                    </tr>
                    <tr>    
                        <td>
                                <div class="card-deck">
                            @foreach ($events as $event)
                            
                                        
                                            <div class="card mb-3" style="max-width: 15rem;margin-left: 5px; margin-right: 5px;">
                                                <img src="https://www.dickson-constant.com/medias/images/catalogue/api/6088-gris-680.jpg" height="100px" width="10px" class="card-img-top" alt="{{ $event->title }} image">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $event->title }}</h5>
                                                    <p class="card-text">{{ $event->description }}</p>
                                                    <a href="{{ route('events.show', ['event' =>  $event ])  }}" class="btn btn-primary">Ver más</a>
                                                    
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-muted">Inicia en {{ $event->startTime }}</small>
                                                </div>
                                            </div>
                                        
                            
                            @endforeach
                        </div>
                        </td>
                    </tr>
                </tbody>
        </table>
        
            
            
</div>
@endsection