<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();
        $json = File::get('database/data/cities.json');
        $cities = json_decode($json);

        foreach ($cities as $city)
        {
            City::create([
                'id'            =>  $city->id,
                'province_id'   =>  $city->province_id,
                'name'          =>  $city->name
            ]);
        }
    }
}
