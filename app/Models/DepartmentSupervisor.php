<?php

namespace App\Models;

use App\Models\User;
use App\Models\Employ;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department_supervisor extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function employs()
    {
        return $this->hasMany(Employ::class);
    }
}
