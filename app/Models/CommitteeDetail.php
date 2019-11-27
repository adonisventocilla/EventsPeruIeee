<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommitteeDetail extends Model
{
    

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='committeedetail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'committeeType_id',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'committee_user','committeeDetail_id', 'user_id');
    }

    
}
