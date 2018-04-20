<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function hotels() {
        return $this->belongsTo(Hotel::class);
    }

	public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function promotions(Room $room) {
		if ($room->promos==1) {
			return "<br /><h6 class='text-info'>*Promos / Special Conditions Available</h6>";
		}
	}

    public static function lowest_price(Hotel $hotel){
    	$lowest = Room::where('hotel_id',$hotel->id)->orderBy('price', 'asc')->first();
    	return ceil( $lowest->price / 100 );
/*
    	strval($lowest->price);
    	return substr($price,0,-2) . "." . substr($price,-2);
*/
    }

}
