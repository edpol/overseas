<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function hotels() {
        return $this->belongsTo(Hotel::class);
    }

    public function lowest_price(Hotel $hotel){
    	$alltherooms = Room::find($hotel->id);
    	$lowestPrice = Room::where($hotel->id)->orderBy('price', 'desc')->first();
    	return $lowestPrice;
    }
}
