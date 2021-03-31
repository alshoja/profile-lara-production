<?php

namespace App\Models;

use App\Models\Product;
use App\Models\TimeLine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function timeline()
    {
        return $this->hasMany(TimeLine::class, 'profile_id', 'id');
    }
}
