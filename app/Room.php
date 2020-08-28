<?php

namespace App;

use App\Booking;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table  = 'rooms';
    protected $fillable = ['room_number', 'branch_id', 'status', 'room_type'];

    public function bookings()
    {
        return $this->HasOne(Booking::class, 'room_id');
    }
}