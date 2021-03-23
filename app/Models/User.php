<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'image',
        'sign',
        'can_add_user',
        'suspended'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function directors()
    {
        return $this->hasMany(User::class);
    }

    public function generalDirectors()
    {
        return $this->belongsTo(Users::class,'general_director_id','id');
    }

    public function departmentHeads()
    {
        return $this->hasMany(User::class);
    }

    public function supervisors()
    {
        return $this->hasMany(User::class);
    }

    public function employs()
    {
        return $this->hasMany(User::class);
    }
}
