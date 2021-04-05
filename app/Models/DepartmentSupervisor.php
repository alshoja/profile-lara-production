<?php

namespace App\Models;

use App\Models\User;
use App\Models\Employ;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DepartmentSupervisor extends Model
{
    use HasFactory;
    protected $fillable = [
        'depart_head_id',
        'dep_id',
        'supervisor_id'
    ];

    public function departmentSupervisors()
    {
        return $this->belongsTo(User::class, 'supervisor_id', 'id');
    }

    public function employs()
    {
        return $this->hasMany(Employ::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dep_id', 'id');
    }
    public function supervisors()
    {
        return $this->belongsTo(User::class, 'supervisor_id', 'id');
    }

    public function subUsers()
    {
        return $this->belongsTo(User::class, 'supervisor_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'supervisor_id', 'id');
    }
}
