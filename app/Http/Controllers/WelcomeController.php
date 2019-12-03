<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Goutte\Client as GoutteClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(GoutteClient $client)
    {
        $eventsAttended = 0;

        if (Auth::user()) {

            $eventsAttended = Auth::user()
                                    ->usertypes()
                                    ->where('role_id', '1')
                                    ->first()
                                    ->events()
                                    ->where('status', 1)
                                    ->get();

            if($eventsAttended->isEmpty()){

                $eventsAttended = 0;
            }

        }

        $events = Event::where('status', 1)->get();

        return view('welcome',[
            'events'         => $events,
        ]);
    }
}
