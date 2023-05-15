<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $csvContent = Helpers::getCsvContent(__DIR__ . '/houses.csv');

        foreach ($csvContent as $index => $row) {
            if ($index > 0) {
                $newHouse = new House();
                $newHouse->image = $row[0];
                $newHouse->reference = $row[1];
                $newHouse->address = $row[2];
                $newHouse->postal_code = $row[3];
                $newHouse->city = $row[4];
                $newHouse->state = $row[5];
                $newHouse->square_meters = $row[6];
                $newHouse->rooms = $row[7];
                $newHouse->bathrooms = $row[8];
                $newHouse->type = $row[9];
                $newHouse->description = $row[10];
                $newHouse->price = $row[11];
                $newHouse->is_available = $row[12];
                $newHouse->energy_rating = $row[13];
                $newHouse->save();
            }
        }
    }



}
