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

    public static function updateData($id,$data){
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
