<?php

namespace Database\Seeders;

use App\Models\RackCategories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RackCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_rack')->insert([
            'rack_id'       =>  1,
            'category_id'   =>  1,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  1,
            'category_id'   =>  2,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  1,
            'category_id'   =>  3,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  2,
            'category_id'   =>  4,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  2,
            'category_id'   =>  5,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  3,
            'category_id'   =>  6,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  3,
            'category_id'   =>  7,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  3,
            'category_id'   =>  8,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  3,
            'category_id'   =>  9,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  4,
            'category_id'   =>  10,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  4,
            'category_id'   =>  11,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  4,
            'category_id'   =>  12,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  4,
            'category_id'   =>  13,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  5,
            'category_id'   =>  14,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  5,
            'category_id'   =>  15,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  5,
            'category_id'   =>  16,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  6,
            'category_id'   =>  17,
        ]);
        DB::table('category_rack')->insert([
            'rack_id'       =>  6,
            'category_id'   =>  18,
        ]);
    }
}
