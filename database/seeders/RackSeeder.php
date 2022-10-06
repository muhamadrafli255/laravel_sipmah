<?php

namespace Database\Seeders;

use App\Models\Rack;
use Illuminate\Database\Seeder;

class RackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rack::create([
            'code'      =>  'RCK - 01',
            'number'    =>  1,
        ]);
        Rack::create([
            'code'      =>  'RCK - 02',
            'number'    =>  2,
        ]);
        Rack::create([
            'code'      =>  'RCK - 03',
            'number'    =>  3,
        ]);
        Rack::create([
            'code'      =>  'RCK - 04',
            'number'    =>  4,
        ]);
        Rack::create([
            'code'      =>  'RCK - 05',
            'number'    =>  5,
        ]);
        Rack::create([
            'code'      =>  'RCK - 06',
            'number'    =>  6,
        ]);
        Rack::create([
            'code'      =>  'RCK - 07',
            'number'    =>  7,
        ]);
        Rack::create([
            'code'      =>  'RCK - 08',
            'number'    =>  8,
        ]);
        Rack::create([
            'code'      =>  'RCK - 09',
            'number'    =>  9,
        ]);
        Rack::create([
            'code'      =>  'RCK - 10',
            'number'    =>  10,
        ]);
    }
}
