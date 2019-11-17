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



    /*public function create(Request $request)
    {
        return view('events.index', [
            'step' => $request->step,
            'event_id' => $request->event_id
        ]);
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        
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
        $data['keywords'] = $request['keywords'];
        $data['startTime'] = $request['startTime'];
        $data['endTime'] = $request['endTime'];


        $event = Event::create([
            'title' => $data['title'],
            'startTime' => Carbon::parse($data['startTime']),
            'endTime' => Carbon::parse($data['endTime']),
            'timeZone' => 'pe',
            'description' => $data['description'],
            'header' => $data['header'],
            'footer' => $data['footer'],
            'agenda' => $data['agenda'],
            'keywords' => $data['keywords'],
            'inviteStudents' => $data['inviteStudents'],
            'remotelyAccessible' => $data['remotelyAccessible'],
            'status' => 0, //Desactivado aún.
            'eventSubCategory_id' => null,
            'eventCategory_id' => null,
        ]);

        return redirect()->route('events.create', [
            'step' => 1,
            'event_id' => $event->id
            ]);
    }*/

    public function createStep1(Request $request)
    {
        $event = $request->session()->get('event');
        return view('events.create-step1',compact('event'));
    }

    public function postCreateStep1(Request $request)
    {

        $validatedData = $request->validate([
            
            'title' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            /*'timeZone' => 'required',*/
            'description' => 'required',
            /*'header' => 'required',
            'footer' => 'required',
            'agenda' => 'required',
            'keywords' => 'required',
            'inviteStudents' => 'required',
            'remotelyAccessible' => 'required'*/
        ]);

        if(empty($request->session()->get('event'))){
            $event = new Event();
            $event->fill($validatedData);
            $request->session()->put('event', $event);
        }else{
            $event = $request->session()->get('event');
            $event->fill($validatedData);
            $request->session()->put('event', $event);
        }

        return redirect('/events/create-step2');

    }

    public function createStep2(Request $request)
    {
        $event = $request->session()->get('event');
        return view('events.create-step2',compact('event'));
    }

    
    public function postCreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            
            'comite' => 'required',
            'correo' => 'required',
            'colaborador' => 'required',
        ]);

        if(empty($request->session()->get('event'))){
            $event = new Event();
            $event->fill($validatedData);
            $request->session()->put('event', $event);
        }else{
            $event = $request->session()->get('event');
            $event->comite = $request->comite;
            $event->correo = $request->correo;
            $event->colaborador = $request->colaborador;
            $request->session()->put('event', $event);
        }

        return redirect('/events/create-step3');
    }

   
    public function createStep3(Request $request)
    {
        $event = $request->session()->get('event');
        return view('events.create-step3',compact('event', $event));
    }

    public function postCreateStep3(Request $request)
    {
        $validatedData = $request->validate([
            
            'address1' => 'required',
            'address2' => 'required',
            'ciudad' => 'required',
        ]);

        if(empty($request->session()->get('event'))){
            $event = new Event();
            $event->fill($validatedData);
            $request->session()->put('event', $event);
        }else{
            $event = $request->session()->get('event');
            $event->address1 = $request->address1;
            $event->address2 = $request->address2;
            $event->ciudad = $request->ciudad;
            $event->edificio = $request->edificio;
            $event->numero_habitaciones = $request->numero_habitaciones;
            $event->url_map = $request->url_map;
            $request->session()->put('event', $event);

        }

        return redirect('/events/create-step4');
    }

    public function createStep4(Request $request)
    {
        $event = $request->session()->get('event');

        return view('events.create-step4',compact('event', $event));
    }

    public function postCreateStep4(Request $request)
    {
        
        $validatedData = $request->validate([
            
            'tema' => 'required',
            'profesor_dist' => 'required',
            'descripcion_tema' => 'required',
        ]);

        if(empty($request->session()->get('event'))){
            $event = new Event();
            $event->fill($validatedData);
            $request->session()->put('event', $event);
        }else{
            $event = $request->session()->get('event');
            $event->tema = $request->tema;
            $event->profesor_dist = $request->profesor_dist;
            $event->descripcion_tema = $request->descripcion_tema;
            $event->prefijo = $request->prefijo;
            $event->nombre = $request->nombre;
            $event->apellido_paterno = $request->apellido_paterno;
            $event->apellido_materno = $request->apellido_materno;
            $event->url_compañia = $request->url_compañia;
            $request->session()->put('event', $event);

        }

        return redirect('/events/create-step5');
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
