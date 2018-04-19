<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void

	If the tax rate is the same regardless of the room tax should be on other table

     */
    public function run()
    {
		$room = 1;
		DB::table('rooms')->insert([ 'hotel'=>1, 'name'=>"ROOM " . $room++,                      'price'=>59292,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>1, 'name'=>"ROOM " . $room++,                      'price'=>63799,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>1, 'name'=>"ROOM " . $room++,                      'price'=>68499,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>1, 'name'=>"ROOM " . $room++,                      'price'=>68499,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>1, 'name'=>"ROOM " . $room++,                      'price'=>72899,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>1, 'name'=>"ROOM " . $room++,                      'price'=>77699,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>1, 'name'=>"ROOM " . $room++,                      'price'=>82199,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>1, 'name'=>"ROOM " . $room++,                      'price'=>161999, 'availability' => 1, 'promos'=>1, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>1, 'name'=>"ROOM " . $room++,                      'price'=>202499, 'availability' => 1, 'promos'=>1, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>1, 'name'=>"ROOM " . $room++,                      'price'=>238999, 'availability' => 1, 'promos'=>1, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);

		DB::table('rooms')->insert([ 'hotel'=>2, 'name'=>"ROOM " . $room++,                      'price'=>59292,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>2, 'name'=>"ROOM " . $room++,                      'price'=>63799,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>2, 'name'=>"ROOM " . $room++,                      'price'=>68499,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>2, 'name'=>"ROOM " . $room++,                      'price'=>68499,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>2, 'name'=>"ROOM " . $room++,                      'price'=>72899,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>2, 'name'=>"ROOM " . $room++,                      'price'=>77699,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>2, 'name'=>"ROOM " . $room++,                      'price'=>82199,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>2, 'name'=>"ROOM " . $room++,                      'price'=>161999, 'availability' => 1, 'promos'=>1, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>2, 'name'=>"ROOM " . $room++,                      'price'=>202499, 'availability' => 1, 'promos'=>1, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>2, 'name'=>"ROOM " . $room++,                      'price'=>238999, 'availability' => 1, 'promos'=>1, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);

		DB::table('rooms')->insert([ 'hotel'=>3, 'name'=>"STUDIO SUITE CITY VIEW",               'price'=>59292,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>3, 'name'=>"STUDIO SUITE COURTYARD",               'price'=>63799,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>3, 'name'=>"STUDIO SUITE PARTIAL OCEAN VIEW",      'price'=>68499,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>3, 'name'=>"JUNIOR SUITE",                         'price'=>68499,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>3, 'name'=>"1 BEDROOM SUITE CITY VIEW",            'price'=>72899,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>3, 'name'=>"1 BEDROOM SUITE COURTYARD VIEW",       'price'=>77699,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>3, 'name'=>"BI-LEVEL SUIT",                        'price'=>82199,  'availability' => 1, 'promos'=>0, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>3, 'name'=>"1 BEDROOM SUITE OCEAN VIEW",           'price'=>161999, 'availability' => 1, 'promos'=>1, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>3, 'name'=>"2 BEDROOM CITY &amp; OCEAN VIEW SUITE",'price'=>202499, 'availability' => 1, 'promos'=>1, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);
		DB::table('rooms')->insert([ 'hotel'=>3, 'name'=>"2 BEDROOM OCEAN VIEW SUITE",           'price'=>238999, 'availability' => 1, 'promos'=>1, 'offers'=>1, 'penalty'=>3, 'image'=>"image4.jpg" ]);

/*  promos=0 ""
 *  promos=1 "*Promos / Special Conditions Available"
 *
 *  offers=0 ""
 *  offers=1 "Meal Plan: Breakfast included"
 *
 *  penalty=0 ""
 *  penalty=3 "Penalty of 1 booked night(s) when cancelling after Nov 26, 1018 04:00 PM" 3 days before time stamp
 */
    }
 
}

