<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationPayment extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='registration_payment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'startRegistration',
        'endRegistration',
        'maximun',
    ];

    public function paymentways()
    {
        return $this->hasMany('App\Models\PaymentWay', 'registration_Payment_id');
    }
}
