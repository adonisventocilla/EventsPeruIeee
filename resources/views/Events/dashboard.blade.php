@extends('layouts.app')

@section('content')
<div class="content-body">
        <div class="container">
            <div class="row">
            
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Imagen del evento</h4>
                        <!--
                            <div class="row">
                                <div class="col-xl-4">
                                    <h6>This Week</h6>
                                    <h4 class="color-primary">$5500.00</h4>
                                </div>
                                <div class="col-xl-4">
                                    <h6>Previous Week</h6>
                                    <h4 class="color-primary">$6550.00</h4>
                                </div>
                            </div>
                        -->
                            <div class="event-card-img">
                                <a>
                                    <img class="img-fluid" src="{{ asset('assets/images/events/event-main.jpg') }}" width="570px" height="830px" alt="placeholder image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <!--
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-15">TICKETS</h4>
                            <div class="tickets text-center m-t-50">
                                <div class="position-relative d-inline-block  m-b-50">
                                    <div id="circle"></div>
                                    <div class="seat-content">
                                        <h2>90</h2>
                                        <span>Sold Seats</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <h6>Total Seats</h6>
                                        <h4 class="color-primary">$5500.00</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6>Sold Seats</h6>
                                        <h4 class="color-primary">$6550.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            -->
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-15">Eventos en camino</h4>
                            @include('Events.partials.dashboard.upcoming-events', [
                                'events' => Auth::user()->usertypes()->where('role_id',2)->first()->eventscreated()->get(),
                            ])
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-15">Asistentes</h4>
                            
                                @include('Events.partials.dashboard.attendees',[
                                    'attendees' => $attendees
                                ] )
                            
                        </div>
                    </div>
                </div>
            <!--
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-15">Total Seats</h4>
                            <div class="total-seats text-center m-t-50">
                                <div class="position-relative d-inline-block m-b-50">
                                    <div id="circle1"></div>
                                    <div class="seat-content">
                                        <h2>350</h2>
                                        <span>Total Sells</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <h6>Total Seats</h6>
                                        <h4 class="color-primary">$5500.00</h4>
                                    </div>
                                    <div class="col-6">
                                        <h6>Sold Seats</h6>
                                        <h4 class="color-primary">$6550.00</h4>
                                    </div>
                                </div>


                            </div>
                            <h5 class="m-t-30 m-b-15">Sold Seats <span class="pull-right">95</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height:4px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Online Sells</h4>
                            <div class="row">
                                <div class="col">
                                    <h6>Rough Cost</h6>
                                    <h4 class="color-primary">$5500.00</h4>
                                </div>
                            </div>
                        <div id="simple-line-chart2" class="ct-chart ct-golden-section"></div>
                    </div>
                </div>
            -->
            <!--
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">EMAIL COMPAIGN</h4>
                            <div class="campaign-progress">
                                <p class="m-t-15 m-b-5">Send Emails <span class="pull-right">+165</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height:4px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                                <p class="m-t-15 m-b-5">Clicks <span class="pull-right">+355</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height:4px;" role="progressbar"><span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            -->
                </div>
            </div>

        </div>
    </div>
@endsection