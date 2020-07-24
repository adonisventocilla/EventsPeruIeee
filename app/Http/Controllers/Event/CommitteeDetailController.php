<?php

namespace App\Http\Controllers\Event;

use App\Models\CommitteeDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class CommitteeDetailController extends Controller
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
        $committeeTypes = DB::select("SELECT id,name FROM COMMITTEETYPE");
        return view('events.committeedetails.create', compact('committeeTypes'));
    }

    public function createCommittee(Request $request)
    {
        
        

        dd();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'committee' => 'required|min:1',
            'people' => 'required|email|exists:user,email',
        ],[
            'committee.required' => 'Elige un comité',
            'committee.min' => 'Elige un comité',
            'people.required' => 'Escribe un correo',
            'people.email' => 'Debe ser un email',
            'people.exists' => 'Ingresa un correo registrado'
        ]);
        
        $eventId = session()->get('event_id');

        DB::beginTransaction();
            try {
                $committee = CommitteeDetail::firstOrCreate([
                    'committeeType_id' => $data['committee'],
                    'event_id' => $eventId,
                    ]);
                $name = DB::select('SELECT name FROM COMMITTEETYPE WHERE id=' . $data['committee']);
                $committee->users()->attach([User::where('email', $data['people'])->first()->id]);
            } catch (\Throwable $th) {
                DB::rollBack();
                throw $th;
            }
        DB::commit();
        session()->forget('event_id');
        session()->flash('status', 'Has agregado correctamente a' . $data['people'] . ' al ' . $name);
        return redirect()->route('attendances.show',['attendevent' => $eventId]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommitteeDetail  $committeeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CommitteeDetail $committeeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommitteeDetail  $committeeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CommitteeDetail $committeeDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommitteeDetail  $committeeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommitteeDetail $committeeDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommitteeDetail  $committeeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommitteeDetail $committeeDetail)
    {
        //
    }
}
