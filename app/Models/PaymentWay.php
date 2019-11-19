<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentWay extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='paymentway';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price',
        'type_id',
        'registration_Payment_id',
    ];


}
