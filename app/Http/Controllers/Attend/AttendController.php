<?php

namespace App\Http\Controllers\Attend;

use App\Models\AttendEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\User;
use Illuminate\Support\Facades\DB;

class AttendController extends Controller
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
    public function create(Event $event)
    {

        return view('attend.create', [
            'event' => $event
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
        // dd($request->userId . "   asfasd  " .  $request->eventId);

        // $userRole = User::find($request->userId)->roles()->where('role.id', '1')->first();
        $userRole = User::find($request->userId)->usertypes()->where('role_id', '1')->first();

        DB::beginTransaction();
        try {
             $userRole->events()->attach([
                 $request->eventId => ['paymentway_id' => $userRole->role_id]
                 ]);    
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        DB::commit();


        // dd($userRole->events()->get()->first());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\attendevent  $attendevent
     * @return \Illuminate\Http\Response
     */
    public function show(attendevent $attendevent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\attendevent  $attendevent
     * @return \Illuminate\Http\Response
     */
    public function edit(attendevent $attendevent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\attendevent  $attendevent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attendevent $attendevent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\attendevent  $attendevent
     * @return \Illuminate\Http\Response
     */
    public function destroy(attendevent $attendevent)
    {
        //
    }
}
