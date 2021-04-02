<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
		'product_type',
        'quantity_kg',
        'quantity_g',
        'quantity_ml',
        'quantity_digit',
        'manufacture_type',
        'shipped_type',
        'profile_id'
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
