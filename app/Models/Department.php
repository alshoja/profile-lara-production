<?php

namespace App\Models;

use App\Models\User;
use App\Models\Section;
use App\Models\Department_supervisor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    public function sections()
    {
        return $this->hasMany(Section::class,'dep_id');
    }

    public function supervisors()
    {
        return $this->hasMany(Department_supervisor::class);
    }

    public function gds()
    {
        return $this->hasMany(DepartmentGeneralDirector::class,'dep_id','id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class,'dep_id');
    }
    
}
