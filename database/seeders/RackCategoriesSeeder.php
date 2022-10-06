<?php

namespace Database\Seeders;

use App\Models\RackCategories;
use Illuminate\Database\Seeder;

class RackCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RackCategories::create([
            'rack_id'       =>  1,
            'category_id'   =>  1,
        ]);
        RackCategories::create([
            'rack_id'       =>  1,
            'category_id'   =>  2,
        ]);
        RackCategories::create([
            'rack_id'       =>  1,
            'category_id'   =>  3,
        ]);
        RackCategories::create([
            'rack_id'       =>  2,
            'category_id'   =>  4,
        ]);
        RackCategories::create([
            'rack_id'       =>  2,
            'category_id'   =>  5,
        ]);
        RackCategories::create([
            'rack_id'       =>  3,
            'category_id'   =>  6,
        ]);
        RackCategories::create([
            'rack_id'       =>  3,
            'category_id'   =>  7,
        ]);
        RackCategories::create([
            'rack_id'       =>  3,
            'category_id'   =>  8,
        ]);
        RackCategories::create([
            'rack_id'       =>  3,
            'category_id'   =>  9,
        ]);
        RackCategories::create([
            'rack_id'       =>  4,
            'category_id'   =>  10,
        ]);
        RackCategories::create([
            'rack_id'       =>  4,
            'category_id'   =>  11,
        ]);
        RackCategories::create([
            'rack_id'       =>  4,
            'category_id'   =>  12,
        ]);
        RackCategories::create([
            'rack_id'       =>  4,
            'category_id'   =>  13,
        ]);
        RackCategories::create([
            'rack_id'       =>  5,
            'category_id'   =>  14,
        ]);
        RackCategories::create([
            'rack_id'       =>  5,
            'category_id'   =>  15,
        ]);
        RackCategories::create([
            'rack_id'       =>  5,
            'category_id'   =>  16,
        ]);
        RackCategories::create([
            'rack_id'       =>  6,
            'category_id'   =>  17,
        ]);
        RackCategories::create([
            'rack_id'       =>  6,
            'category_id'   =>  18,
        ]);
    }
}
