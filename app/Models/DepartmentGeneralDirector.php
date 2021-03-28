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

    public function users()
    {
        return $this->belongsTo(User::class, 'general_director_id', 'id');
    }

    public function subUsers()
    {
        return $this->belongsTo(User::class, 'general_director_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dep_id', 'id');
    }
}
