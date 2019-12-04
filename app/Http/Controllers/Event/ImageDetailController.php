<?php

namespace App\Http\Controllers\Event;

use App\Models\ImageDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class ImageDetailController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $path = $request->file('imagen')->store('events/'. $request->id, 'public');
        $event = Event::find($request->id);

        if ($event->image()->first()) {
            $event->image()->first()->update([
                'imageDir' => $path
            ]);
        } else {
            $event->image()->save(
                new ImageDetail(['imageDir' => $path]),
            );
        }
        
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageDetail  $imageDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ImageDetail $imageDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageDetail  $imageDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageDetail $imageDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageDetail  $imageDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImageDetail $imageDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageDetail  $imageDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageDetail $imageDetail)
    {
        //
    }
}
