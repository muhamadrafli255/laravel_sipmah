<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::truncate();
        $json = File::get('database/data/districts.json');
        $districts = json_decode($json);

        foreach ($districts as $district)
        {
            District::create([
                'id'        =>  $district->id,
                'city_id'   =>  $district->city_id,
                'name'      =>  $district->name
            ]);
        }
    }
}
