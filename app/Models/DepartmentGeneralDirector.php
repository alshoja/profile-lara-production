<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentGeneralDirector extends Model
{
    use HasFactory;
    protected $fillable = [
        'general_director_id',
        'dep_id',
    ];
}
