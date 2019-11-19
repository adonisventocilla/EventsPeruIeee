<?php

namespace App\Http\Controllers\Event;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class EventController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        session()->forget('event');

        return view('events.index', [
            'step' => $request->step,
            'event_id' => $request->event_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session()->forget('event');

        $data = $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'Seleccione una opción',
        ]);
        
        if (isset($request['inviteStudents'])) {
            $data['inviteStudents'] = 1;
        }else {
            $data['inviteStudents'] = 0;
        }

        if (isset($request['remotelyAccessible'])) {
            $data['remotelyAccessible'] = 1;
        } else {
            $data['remotelyAccessible'] = 0;
        }
        
        
        $data['timeZone'] = $request['timeZone'];
        $data['description'] = $request['description'];
        $data['header'] = $request['header'];
        $data['footer'] = $request['footer'];
        $data['agenda'] = $request['agenda'];
        $data['status'] = 1; //Activo
        $event['timeZone'] = 'pe';//Zona horaria
        $data['keywords'] = $request['keywords'];
        $data['startTime'] = Carbon::parse($request['startTime']);
        $data['endTime'] = Carbon::parse($request['endTime']);

        if(empty($request->session()->get('event'))){
            $event = new Event();
            $event->fill($data);
            $request->session()->put('event', $event);
        }else{
            $event = $request->session()->get('event');
            $event->fill($data);
            $request->session()->put('event', $event);
        }

        // $event = Event::create([
        //     'title' => $data['title'],
        //     'startTime' => Carbon::parse($data['startTime']),
        //     'endTime' => Carbon::parse($data['endTime']),
        //     'timeZone' => 'pe',
        //     'description' => $data['description'],
        //     'header' => $data['header'],
        //     'footer' => $data['footer'],
        //     'agenda' => $data['agenda'],
        //     'keywords' => $data['keywords'],
        //     'inviteStudents' => $data['inviteStudents'],
        //     'remotelyAccessible' => $data['remotelyAccessible'],
        //     'status' => 0, //Desactivado aún.
        //     'eventSubCategory_id' => null,
        //     'eventCategory_id' => null,
        // ]);


        return redirect()->route('locationDetails.create');
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 
    public function postCreateStep4(Request $request)
    {
        
        
    }


    public function createStep5(Request $request)
    {
        $event = $request->session()->get('event');
        return view('events.create-step5',compact('event',$event));
    }


    public function storeAllDatesEvent(Request $request)
    {
        $event = $request->session()->get('event');
        $event->save();

        dd($event);
        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        
        return view('events.show', [
            'event' => $event,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
