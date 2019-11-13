<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocationDetail extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='locationdetail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'addressLine1',
        'building',
        'addressLine2',
        'roomNumber',
        'city',
        'country',
        'province',
        'postalCode',
    ];

}
