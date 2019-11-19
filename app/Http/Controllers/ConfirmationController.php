<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            $registrationPayments->paymentways()->saveMany(session()->get('paymentway'));
            
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        DB::commit();
        dd('Debe haber salido bién');
        return view('/home');
    }
}
