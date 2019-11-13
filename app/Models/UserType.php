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
        'type',
        'user_id',
    ];

}
