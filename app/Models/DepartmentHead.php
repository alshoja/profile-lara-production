<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department_head extends Model
{
    use HasFactory;

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
