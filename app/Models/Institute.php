<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='institute';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'section_id',
    ];

}
