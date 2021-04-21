<?php

namespace App\Models;

use App\Models\Product;
use App\Models\TimeLine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nationality',
        'dob',
        'gender',
        'place_birth', 
        'address',
        'referal_name',
        'product_type',
        'passport_no', 
        'passport_issue', 
        'date_issue', 
        'residency',
        'location', 
        'date_expiry', 
        'uid', 
        'proffession',
        'belongs_to',
        'dep_id',
        'section_id'
    ];

    public static function updateData($id, $data)
    {
        DB::table('profiles')->where('id', $id)->update($data);
    }

    public function products()
    {
        return $this->hasMany(Product::class,'profile_id', 'id');
    }

    public function timeline()
    {
        return $this->hasMany(TimeLine::class, 'profile_id', 'id');
    }

    public function trackings()
    {
        return $this->hasMany(TrackProfile::class, 'profile_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dep_id', 'id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    // public function trackingsWithHigherId()
    // {
    //     return $this->hasMany(TrackProfile::class, 'profile_id', 'id')->latest();
    // }
}
