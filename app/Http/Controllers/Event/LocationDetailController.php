<?php

namespace App\Http\Controllers\Event;

use App\Models\LocationDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ubigeo_peru;

class LocationDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (empty(session()->get('event'))) {
            return redirect()->route('events.index');
        }
        
        return view('events.locationdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session()->forget('location');
        
        $data = $request->validate([
            'addressLine1' => 'required',
            'city' => 'required',
            'roomNumber' => '',
            'building' => '',
            'url_map' => '',
        ]);
            $location['building'] = 'null';
            $location['addressLine2'] = 'null';
            $location['roomNumber'] = 'null';
            $location['city'] = 'null';
            $location['country'] = 'null';
            $location['province'] = 'null';
            $location['postalCode'] = 'null';

            try {
                if(empty($request->session()->get('location'))){
                    $location = new LocationDetail();
                    $location->fill($data);
                    $request->session()->put('location', $location);
                }else{
                    $location = $request->session()->get('location');
                    $location->addressLine1 = $request->addressLine1;
                    $location->addressLine2 = $request->addressLine2;
                    $location->city = $request->city;
                    $location->building = $request->building;
                    $location->roomNumber = $request->roomNumber;
                    $request->session()->put('location', $location);
        
                }
            } catch (\Throwable $th) {
                throw $th;
            }
        

        return redirect()->route('eventThemeDetails.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocationDetail  $locationDetail
     * @return \Illuminate\Http\Response
     */
    public function show(LocationDetail $locationDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocationDetail  $locationDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(LocationDetail $locationDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocationDetail  $locationDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocationDetail $locationDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocationDetail  $locationDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocationDetail $locationDetail)
    {
        //
    }
}
