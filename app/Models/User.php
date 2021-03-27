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
        'suspended',
        'create',
        'update',
        'delete',
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
        return $this->belongsTo(Users::class, 'general_director_id', 'id');
    }

    public function gdRelation()
    {
        return $this->hasMany(DepartmentGeneralDirector::class, 'general_director_id', 'id');
    }

    public function departmentRelation()
    {
        return $this->hasMany(DepartmentDirector::class, 'director_id', 'id');
    }

    public function dhRelation()
    {
        return $this->hasMany(DepartmentHead::class, 'depart_head_id', 'id');
    }

    public function superRelation()
    {
        return $this->hasMany(DepartmentSupervisor::class, 'supervisor_id', 'id');
    }
}
