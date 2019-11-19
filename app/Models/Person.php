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
        'email_verified_at',
        'status',
        'institute_id',
        'document_id',
        'phone_id',
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'person_id');
    }
}
