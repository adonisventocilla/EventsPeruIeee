<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventThemeDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='eventthemedetail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'name',
        'description',
    ];
}
