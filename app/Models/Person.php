<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='person';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'timeZone',
        'email_verified_at',
        'status',
        'institute_id',
        'user_id',
    ];

}
