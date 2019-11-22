<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='usertype';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'user_id',
    ];

    public function events()
    {
        return $this->belongsToMany('App\Models\Event', 'attendevent','userType_id','event_id');
    }

    public function eventscreated()
    {
        return $this->belongsToMany('App\Models\Event', 'createevent', 'userType_id','event_id');
    }

    public function attendevents()
    {
        return $this->hasMany('App\Models\AttendEvent','userType_id');
    }
}
