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

    public function speakers()
    {
        return $this->hasMany('App\Models\Speaker', 'event_id');
    }

    public function committees()
    {
        return $this->hasMany('App\Models\CommitteeDetail', 'event_id');
    }

    public function locationDetails()
    {
        return $this->hasMany('App\Models\LocationDetail');
    }

    public function image()
    {
        return $this->hasOne('App\Models\ImageDetail');
    }

    public function eventThemeDetails()
    {
        return $this->hasMany('App\Models\EventThemeDetail', 'event_id');
    }

    public function registrationPayments()
    {
        return $this->hasOne('App\Models\RegistrationPayment', 'event_id');
    }

    public function usertypes()
    {
        return $this->belongsToMany('App\Models\UserType', 'attendevent', 'event_id', 'userType_id');
    }

    public function usercreator()
    {
        return $this->belongsToMany('App\Models\UserType', 'createevent', 'event_id', 'userType_id');
    }
}
