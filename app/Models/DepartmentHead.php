<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DepartmentHead extends Model
{
    use HasFactory;
    protected $fillable = [
        'depart_head_id',
        'dep_id',
        'director_id'
    ];

    public function departmentHeads()
    {
        return $this->belongsTo(User::class, 'depart_head_id', 'id');
    }
}
