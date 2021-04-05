<?php

namespace App\Models;

use App\Models\User;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employ extends Model
{
    use HasFactory;

    public function subUsers()
    {
        return $this->belongsTo(User::class, 'employ_id', 'id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'employ_id', 'id');
    }
}
