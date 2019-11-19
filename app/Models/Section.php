<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='section';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'region_id',
    ];

    public function institutes()
    {
        return $this->hasMany('App\Models\Institute', 'section_id');
    }
    public function region()
    {
        return $this->belongsTo('App\Models\Region', 'region_id');
    }

}
