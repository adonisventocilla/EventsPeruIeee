<?php

namespace App\Http\Controllers\Event;

use App\Models\CommitteeDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('events.committeedetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
