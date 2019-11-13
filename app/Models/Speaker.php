<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='speaker';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'person_id',
        'institute_id',
    ];

}
