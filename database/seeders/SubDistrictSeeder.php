<?php

namespace Database\Seeders;

use App\Models\SubDistrict;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubDistrict::truncate();
        $json = File::get('database/data/sub_districts.json');
        $subDistricts = json_decode($json);

        foreach ($subDistricts as $sb)
        {
            SubDistrict::create([
                'id'            =>  $sb->id,
                'district_id'   =>  $sb->district_id,
                'name'          =>  $sb->name
            ]);
        }
    }
}
