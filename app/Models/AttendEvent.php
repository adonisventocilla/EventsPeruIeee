<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendEvent extends Model
{
    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='attendevent';

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
