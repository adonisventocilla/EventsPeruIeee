<?php

namespace App\Http\Controllers\Event;

use App\Models\EventThemeDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventThemeDetailController extends Controller
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
        if (empty(session()->get('location'))) {
            return redirect()->route('locationDetails.create');
        }

        return view('events.eventthemedetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session()->forget('eventThemeDetail');

        $data = $request->validate([
            'theme' => 'required',
            'description' => 'required',
            'prefix' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'nickname' => 'required',
            'url' => 'required',
        ]);


        if(empty($request->session()->get('eventThemeDetail'))){
            $eventThemeDetail = new EventThemeDetail();
            $eventThemeDetail->fill($data);
            $request->session()->put('eventThemeDetail', $eventThemeDetail);
            
        }else{
            $eventThemeDetail = $request->session()->get('eventThemeDetail');
            $eventThemeDetail->theme = $data->theme;
            $eventThemeDetail->themedescription = $data->themedescription;
            $eventThemeDetail->prefix = $data->prefix;
            $eventThemeDetail->firstname = $data->firstname;
            $eventThemeDetail->middlename = $data->middlename;
            $eventThemeDetail->lastname = $data->lastname;
            $eventThemeDetail->nickname = $data->nickname;
            $eventThemeDetail->url = $data->url;
            $request->session()->put('eventThemeDetail', $eventThemeDetail);
        }

        return redirect()->route('registrationPayments.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventThemeDetail  $eventThemeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(EventThemeDetail $eventThemeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventThemeDetail  $eventThemeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(EventThemeDetail $eventThemeDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventThemeDetail  $eventThemeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventThemeDetail $eventThemeDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventThemeDetail  $eventThemeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventThemeDetail $eventThemeDetail)
    {
        //
    }
}
