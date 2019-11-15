@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <section>
                            @if (isset($step))
                                @switch($step)
                                @case(1)
                                        @include('events.hostdetails.create')
                                    @break
                                @case(2)
                                    
                                    @break
                                @default
                                    
                                @endswitch
                            @else
                                @include('events.create')
                            @endif
                        </section>
                        <section>
                                <div class="container" aria-disabled="true">
                                        <div class="stepwizard py-4">
                                            <div class="stepwizard-row setup-panel row" aria-disabled="true">
                                                <div class="stepwizard-step col text-center">
                                                    @if (isset($step))
                                                        <a class="btn btn-primary btn-success rounded-circle " aria-disabled="true">1</a>
                                                    @else
                                                        <a class="btn btn-primary btn-outline-primary rounded-circle " aria-disabled="true">1</a>
                                                    @endif
                                                    
                                                    <p>Paso 1</p>
                                                </div>
                                                <div class="stepwizard-step col text-center">
                                                    @if (isset($step) && $step==1)
                                                        <a class="btn btn-primary btn-outline-primary rounded-circle " aria-disabled="true">2</a>
                                                        
                                                    @else
                                                        @if (isset($step) && $step==2)
                                                            <a class="btn btn-primary btn-success rounded-circle " aria-disabled="true">1</a>
                                                        @else
                                                            <a class="btn btn-secondary rounded-circle" disabled="disabled" disabled>2</a>
                                                        @endif
                                                    @endif
                                                    
                                                    
                                                    <p>Paso 2</p>
                                                </div>
                                                <div class="stepwizard-step col text-center">
                                                    <a class="btn btn-secondary rounded-circle" disabled="disabled">3</a>
                                                    <p>Paso 3</p>
                                                </div>
                                                <div class="stepwizard-step col text-center">
                                                    <a class="btn btn-secondary rounded-circle" disabled="disabled">4</a>
                                                    <p>Paso 4</p>
                                                </div>
                                                <div class="stepwizard-step col text-center">
                                                    <a class="btn btn-secondary rounded-circle" disabled="disabled">5</a>
                                                    <p>Paso 5</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    
                        </section>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
@stop