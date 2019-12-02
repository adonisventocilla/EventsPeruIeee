<?php

namespace App\Http\Controllers\Event;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
    public function create()
    {
        session()->forget('event');

        return view('events.create');
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
            'title' => 'required|unique:event|max:255',
            'description' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            'header',
            'footer',
            'agenda',
            'status',
            'timeZone',
            'keywords',
        ], [
            'title.required' => 'Es necesario un título ',
            'description.required' => 'Escribe una descripción del evento',
            'startTime.required' => 'Escoge un tiempo de inicio',
            'endTime.required' => 'Escoge un timepo de fin',

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
        $data['status'] = 0; //Inactivo
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


        return redirect()->route('locationDetails.create');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $registred = 0;

        if (Auth::check() AND Auth::user()->id) {

            try {
                $eventsAttended = Auth::user()->usertypes()
                                            ->where('role_id', '1')
                                            ->first()
                                            ->events()
                                            ->where('event_id', $event->id)
                                            ->get()
                                            ->first();
                if ($eventsAttended) {

                    $registred = 1;
                }
            } catch (\Throwable $th) {

                $registred = 0;
            }
        }

        return view('events.show', [
            'event'     => $event,
            'registred' => $registred,
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
        $data = $request->validate([
            'title' => 'required|unique:event|max:255',
            'description' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            'header',
            'footer',
            'agenda',
            'timeZone',
            'keywords',
            'inviteStudents',
            'remotelyAccessible',
            'status',
            'eventSubCategory_id',
            'eventCategory_id',
        ],[
            'title.required' => 'Es necesario un título ',
            'description.required' => 'Escribe una descripción del evento',
            'startTime.required' => 'Escoge un tiempo de inicio',
            'endTime.required' => 'Escoge un timepo de fin',
        ]);

        $event->update([
            'title' => $data['title'],
            'startTime' => $data['startTime'],
            'endTime' => $data['endTime'],
            'timeZone' => $data['timeZone'],
            'description' => $data['description'],
            'header' => $data['header'],
            'footer' => $data['footer'],
            'agenda' => $data['agenda'],
            'keywords' => $data['keywords'],
            'inviteStudents' => $data['inviteStudents'],
            'remotelyAccessible' => $data['remotelyAccessible'],
            'eventSubCategory_id' => $data['eventSubCategory_id'],
            'eventCategory_id' => $data['eventCategory_id'],
        ]);


            return ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {

        $event->update(['status' => 0]);
    }
}
