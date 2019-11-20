@extends('layouts.app')

@section('content')
<form action="{{ route('attendances.store') }}" method="POST">
<input type="hidden" name="eventId" value="{{ $event->id }}">
<input type="hidden" name="userId" value="{{ session()->get('userId') }}">
  @csrf
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
    
      <div class="container marketing">
    
        <!-- START THE FEATURETTES -->
    
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">{{ $event->title }}<span class="text-muted">{{ $event->startTime }}</span></h2>
            <p class="lead">{{ $event->description }}</p>
            @if ($registred)
                ¡Ya estás registrado!
            @else
              <button type="submit" class="btn btn-primary">Incribirse</button>
            @endif
            
          </div>
          <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
          </div>

        </div>
    
    
        <hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
      </div><!-- /.container -->
    
    
</form>    
@endsection