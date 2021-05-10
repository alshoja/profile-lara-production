<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackProfile extends Model
{
    protected $fillable = [
        'from',
        'profile_id',
        'at_end_user',
        'status',
        'status',
        'is_rejected',
        'is_rejected_by'
    ];
    use HasFactory;

    public function sign()
    {
        return $this->belongsTo(User::class, 'owned_by', 'id')->select(array('id','name','sign','email'));
    }
}
