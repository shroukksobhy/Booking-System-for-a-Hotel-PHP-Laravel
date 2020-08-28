<?php

namespace App;

use App\Guest;
use App\Room;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = 'bookings';
    protected $fillable = ['guest_id', 'room_id', 'check-in', 'check-out', 'created_at'];


    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
    public function customer()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }
}