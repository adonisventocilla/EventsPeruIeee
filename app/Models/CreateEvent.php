<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreateEvent extends Model
{
    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='createevent';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userType_id',
        'event_id',
    ];

}
