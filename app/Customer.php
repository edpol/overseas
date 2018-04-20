<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Booking;

class Customer extends Model
{
    public function bookings() {
        return $this->hasMany(Booking::class);
    }

}
