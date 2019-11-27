<?php

namespace App\Http\Controllers\Event;

use App\Models\Speaker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Institute;
use App\Models\Person;
use App\User;
use Illuminate\Support\Facades\DB;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.speakers.create',[
            'institutes' => Institute::all(),
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
        $request->validate([
            'people' => 'required|email',
            'institute' => 'required|min:1'
        ],[
            'institute.min' => 'Escoge la institución perteneciente'
        ]);
        $eventId = session()->get('event_id');
        $speaker = User::where('email',$request->people)->first();
        DB::beginTransaction();
        try {
            Event::find($eventId)->speakers()->saveMany([
                new Speaker([
                    'user_id' => $speaker->id,
                    'institute_id' => $request->institute,
                    'speakerDetail_id' => 1,
                ])
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        DB::commit();
        session()->forget('event_id');
        session()->flash('status', 'Has agregado correctamente a' . $request->people . ' como ponente' );
        return redirect()->route('attendances.show',['attendevent' => $eventId]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function show(Speaker $speaker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function edit(Speaker $speaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speaker $speaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speaker $speaker)
    {
        //
    }
}
