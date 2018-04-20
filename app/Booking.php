<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
use App\Room;

class Booking extends Model
{
    public function customers() {
        return $this->belongsTo(Customer::class);
    }
    public function rooms() {
        return $this->belongsTo(Room::class);
    }
}
