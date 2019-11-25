<?php

namespace App\Http\Controllers\Attend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    use Braintree_Transaction;

    public function process(Request $request)
    {
        $payload = $request->input('payload', false);
        $nonce = $payload['nonce'];

        $status = Braintree_Transaction::sale([
            'amount' => '10.00',
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        return response()->json($status);
    }
}
