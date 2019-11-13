<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HostDetail extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='hostdetail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'contactEmail',
        'cosponsor',
        'extraContactInformation',
        'surveyUrl',
        'institute_id',
    ];

}
