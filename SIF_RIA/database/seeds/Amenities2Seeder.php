<?php

namespace Database\Seeders;
use App\Amenity2;
use Illuminate\Database\Seeder;

class Amenities2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities2 = [
            [
                'name' => 'Regular Seating'
            ],
            [
                'name' => 'Coffee Break'
            ],
            [
                'name' => 'Custom Badge'
            ],
            [
                'name' => 'Cake'
            ],
            [
                'name' => 'Birthday Makeup'
            ],
            [
                'name' => 'After Party'
            ],
        ];

        foreach($amenities2 as $amenity2)
        {
            Amenity2::create($amenity2);
        }
    }
}
