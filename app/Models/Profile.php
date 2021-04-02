<?php

namespace App\Models;

use App\Models\Product;
use App\Models\TimeLine;
use Illuminate\Support\Facades\Auth;
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

    public function trackings()
    {
        $query = $this->hasMany(TrackProfile::class, 'profile_id', 'id');
        if (Auth::user()->role == "supervisor") {
            $query->where('status', 'pending')
                ->where('from', 'employ')
                ->orWhere('status', 'rejected');
        }
        if (Auth::user()->role == "department_head") {
            $query->where('status', 'pending')
                ->where('from', 'supervisor')
                ->orWhere('status', 'rejected');
        }
        if (Auth::user()->role == "director") {
            $query->where('status', 'pending')
                ->where('from', 'department_head')
                ->orWhere('status', 'rejected');
        }
        if (Auth::user()->role == "general_director") {
            $query->where('status', 'pending')
                ->where('from', 'director')
                ->orWhere('status', 'rejected');
        }
        if (Auth::user()->role == "employ") {
            $query->where('status', 'rejected')
                ->where('from', 'employ');
        }
        return  $query;
    }
}
