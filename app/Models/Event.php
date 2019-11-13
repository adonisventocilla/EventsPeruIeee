<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='event';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'startTime',
        'endTime',
        'timeZone',
        'description',
        'header',
        'footer',
        'agenda',
        'keywords',
        'inviteStudents',
        'remotelyAccessible',
        'status',
        'eventSubCategory_id',
        'eventCategory_id',
    ];
}
