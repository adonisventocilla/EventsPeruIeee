<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\User;
use Goutte\Client as GoutteClient;
use Illuminate\Http\Request;
use Symfony\Component\BrowserKit\Client;
use Throwable;

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
        if (session()->has('userId')) {
            $eventsAttended = User::find(session()->get('userId'))->usertypes()->where('role_id', '1')->first()->events()->get();
            if($eventsAttended->isEmpty())
            {
                $eventsAttended = 0;
            }
        }
        
        $events = Event::All();
        return view('welcome',[
            'events' => $events,
            'eventsAttended' => $eventsAttended,
            ]);
    }
}
