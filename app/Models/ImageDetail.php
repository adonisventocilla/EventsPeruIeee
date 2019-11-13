<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageDetail extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='imagedetail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'imageDir',
    ];
}
