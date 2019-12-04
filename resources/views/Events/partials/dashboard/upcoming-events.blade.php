<div class="upcoming-events">
        <div class="table-responsive">
            <table class="table">
                @if ($events->isEmpty())
                    <p>No hay registros</p>
                @else
                    @foreach ($events as $event)
                        <tr>
                                
                            <td><img src="@if ($event->image()->first())
                                {{ asset(Storage::url($event->image()->first()->imageDir))  }}
                                @else
                                {{ asset('assets/images/thumb/1.png') }}
                                @endif" alt=""></td>
                            <td>{{ $event->title }}
                                <a href="#"><i class="icofont icofont-social-google-map"></i>{{ $event->locationDetails()->first()->building }}</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                
            </table>
        </div>
    </div>