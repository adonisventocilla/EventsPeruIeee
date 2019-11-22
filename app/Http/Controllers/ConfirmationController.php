<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class ConfirmationController extends Controller
{
    public function show()
    {
        return view('events.confirmation.show');
    }

    public function store(Request $request)
    {
        
        DB::beginTransaction();
        try {
            $event = session()->get('event');
            $location = session()->get('location');
            ///////////ERRORES CORREGIDOS EN LOS CONTROLADORES PROPIOS
            $event['status'] = 0;
            $event['timeZone'] = 'pe';
            $event['startTime'] = Carbon::parse($event['startTime']);
            $event['endTime'] = Carbon::parse($event['entTime']);
            $location['addressLine1'] = 'safd';
            $location['building'] = 'null';
            $location['addressLine2'] = 'null';
            $location['roomNumber'] = 'null';
            $location['city'] = 'null';
            $location['country'] = 'null';
            $location['province'] = 'null';
            $location['postalCode'] = 'null';
            ///////////////
            $event->save();
            $event->locationDetails()->saveMany([
                $location,
                ]);
            $event->save();
            $event->eventThemeDetails()->saveMany([
                session()->get('eventThemeDetail')
                ]);
            $event->save();
            $registrationPayments = session()->get('registrationPayment');
            $event->registrationPayments()->save($registrationPayments);
            $event->save();
            $userRole = User::find(session()->get('userId'))->usertypes()->where('role_id', '2')->first();
            $userRole->eventscreated()->attach([$event->id]);
            $registrationPayments->paymentways()->saveMany(session()->get('paymentway'));
            
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        DB::commit();
        session()->forget('event');
        session()->forget('location');
        session()->forget('eventThemeDetail');
        session()->forget('registrationPayment');
        session()->forget('paymentway');

        session()->flash('status', 'Task was successful!');
        
        return redirect('/home');
    }
}
