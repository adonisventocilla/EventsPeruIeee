<?php

namespace App\Http\Controllers\Event;

use App\Models\RegistrationPayment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PaymentWay;
use Carbon\Carbon;

class RegistrationPaymentController extends Controller
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
        if(empty(session()->get('eventThemeDetail')))
        {
            return redirect()->route('eventThemeDetails.create');
        }
        
        return view('events.registrationpayments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session()->forget('registrationPayment');
        session()->forget('paymentway');

        $data = $request->validate([
            'startRegistration' => 'required',
            'endRegistration' => 'required',
            'maximun' => 'required',
        ]);

        $data['startRegistration'] = Carbon::parse($data['startRegistration']);
        $data['endRegistration'] = Carbon::parse($data['endRegistration']);
        
        if ($request->customRadioInline1) {
            //gratuito 1
            if(empty($request->session()->get('registrationPayment'))){
                $registrationPayment = new RegistrationPayment();
                $registrationPayment->fill($data);
                $paymentway = [
                    new PaymentWay(['price' => 0, 'type_id' => '1']),
                ];//Evidentemente no es necesario complicarse, el precio se hace 0 y el tipo 1, gratuito.
                
                $request->session()->put('registrationPayment', $registrationPayment);
                $request->session()->put('paymentway', $paymentway);
            }else{
                $registrationPayment = $request->session()->get('registrationPayment');
                $registrationPayment->startRegistration = $data->startRegistration;
                $registrationPayment->endRegistration = $data->endRegistration;
                $registrationPayment->maximun = $data->maximun;
                $paymentway->type_id = $data->type_id;
                $paymentway->price = $data->price;
                $request->session()->put('registrationPayment', $registrationPayment);
                $request->session()->put('paymentway', $paymentway);
            }
            
        } else {
             // pago (Aquí se entiende que 2<=x) es:
            /**
             * 2 - No ieee members, público general.
             * 3 - Estudiantes miembros del IEEE.
             * 4 - Miembros del IEEE, no estudiantes.
             */
            
            $data1 = $request->validate([
                'nonieeemembers' => 'required',
                'ieeestudentmembers' => 'required',
                'ieeemembers' => 'required',
            ]);

            if(empty($request->session()->get('registrationPayment'))){
                $registrationPayment = new RegistrationPayment();
                $paymentway = [
                    new PaymentWay(['price' => $data1['nonieeemembers'], 'type_id' => 2]),
                    new PaymentWay(['price' => $data1['ieeestudentmembers'], 'type_id' => 3]),
                    new PaymentWay(['price' => $data1['ieeemembers'], 'type_id' => 4]),
                ];

                $registrationPayment->fill($data);
                $request->session()->put('registrationPayment', $registrationPayment);
                $request->session()->put('paymentway', $paymentway);
                
            }else{
                $registrationPayment = $request->session()->get('registrationPayment');
                $paymentway = $request->session()->get('paymentway');
                $registrationPayment->startRegistration = $data['startRegistration'];
                $registrationPayment->endRegistration = $data['endRegistration'];
                $registrationPayment->maximun = $data['maximun'];
                $paymentway[0]['price'] = $data1['nonieeemembers'];
                $paymentway[0]['type_id'] = 2;
                $paymentway[1]['price'] = $data1['ieeestudentmembers'];
                $paymentway[1]['type_id'] = 3;
                $paymentway[2]['price'] = $data1['ieeemembers'];
                $paymentway[2]['type_id'] = 4;
                $request->session()->put('registrationPayment', $registrationPayment);
                $request->session()->put('paymentway', $paymentway);
            }

        }

        return redirect()->route('confirmations.show');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrationPayment  $registrationPayment
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrationPayment $registrationPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrationPayment  $registrationPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistrationPayment $registrationPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrationPayment  $registrationPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrationPayment $registrationPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrationPayment  $registrationPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrationPayment $registrationPayment)
    {
        //
    }
}
