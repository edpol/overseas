<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'name'    => "Sunset Key Guest Cottages",
			'address' => "245 Front Street, Key West, USA",
			'image'   => "image1.jpg",
			'tax'     => 7,
			'stars'   => 5,
        ]);
        DB::table('hotels')->insert([
            'name'    => "Sanibel Sunset Beach Inn",
			'address' => "3287 West Gulf Drive, Sanbibel, USA",
			'image'   => "image2.jpg",
			'tax'     => 8,
			'stars'   => 2,
        ]);
        DB::table('hotels')->insert([
            'name'    => "Setai",
			'address' => "2001 Collins Avenue, Miami Beach, USA",
			'image'   => "image3.jpg",
			'tax'     => 14,
			'stars'   => 5,
        ]);
    }
}
