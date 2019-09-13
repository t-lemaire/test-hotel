<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'room_id',
        'from_date',
        'to_date',

    ];


    protected $dates = [
        'from_date',
        'to_date',
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    protected $with = ['user', 'room'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/reservations/'.$this->getKey());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
