<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname',
        'email',
        'person_id',
        'password',
        'provider',
        'provider_id',
        'avatar',
        'avatar_original',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function person()
    {
        return $this->belongsTo('App\Models\Person', 'person_id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'usertype', 'user_id', 'role_id');
    }

    public function usertypes()
    {
        return $this->hasMany('App\Models\UserType','user_id');
    }

    
}
