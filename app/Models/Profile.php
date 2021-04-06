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
        'citizen_status',
        'citizen_location',
        'citizen_id',
        'citizen_uid',
        'passport_no',
        'passport_type',
        'entered_by',
        'bought_by',
        'entity',
        'entry_date',
        'entity_location',
        'shipping_no',
        'coming_from',
        'going_to',
        'final_destination',
        'profile_image',
        'product_image',
        'doc_image',
        'record_status',
        'record_dep_transfer',
        'note',
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
        return $this->hasMany(Product::class);
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
