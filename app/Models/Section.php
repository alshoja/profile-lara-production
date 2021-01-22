<?php

namespace App\Models;

use App\Models\Employ;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->hasOne(Department::class);
    }

    public function employs()
    {
        return $this->hasMany(Employ::class);
    }
}
