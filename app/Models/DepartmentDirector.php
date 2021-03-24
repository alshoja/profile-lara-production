<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentDirector extends Model
{
    use HasFactory;
    protected $fillable = [
        'general_director_id',
        'dep_id',
        'director_id'
    ];

    public function directors()
    {
        return $this->belongsTo(User::class, 'director_id', 'id');
    }
}
