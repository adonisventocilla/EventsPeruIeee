<?php

namespace App\Http\Controllers\Attend;

use Illuminate\Http\Request;
use Braintree_Transaction;
use App\Http\Controllers\Controller;
use Braintree;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentsController extends Controller
{
    

    public function process(Request $request)
    {
        
        $userRole = Auth::user()->usertypes()->where('role_id', '1')->first();

        $gateway = new Braintree\Gateway([
            'environment' => env('BRAINTREE_ENV'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY')
        ]);
        
        $amount = $request->amount;
        $nonce = $request->payment_method_nonce;
        
        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'customer' => [
                'firstName' => Auth::user()->person()->first()->firstName,
                'lastName' => Auth::user()->person()->first()->lastName,
                'email' => Auth::user()->email,
            ],
            'options' => [
                'submitForSettlement' => true
            ]
        ]);
        
        if ($result->success) {
            $transaction = $result->transaction;
            // header("Location: transaction.php?id=" . $transaction->id);
            
            DB::beginTransaction();
            try {
                $userRole->events()
                                ->attach([
                                    $request->eventId => ['paymentway_id' => $userRole->role_id]
                                ]);
            } catch (\Throwable $th) {
                DB::rollBack();
                throw $th;
            }
            DB::commit();

            return redirect()->route('index');
        } else {
            $errorString = "";
            foreach ($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }
            // $_SESSION["errors"] = $errorString;
            // header("Location: index.php");
            return back()->withErrors('An error occurred with the message: '.$result->message);
        }
    }
}
