<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Person extends Model
{
    
    use Eloquence;
  
    // default fields to search
    protected $searchableColumns = ['lastName'];


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
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'person_id');
    }

    public function phone()
    {
        return $this->hasOne('App\Models\Phone','person_id');
    }

    public function document()
    {
        return $this->hasOne('App\Models\Document', 'person_id');
    }
}
