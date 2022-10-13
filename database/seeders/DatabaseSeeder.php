<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(ProvinceSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(SubDistrictSeeder::class);

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(CategorySeeder::class);
        $this->call(BookSeeder::class);
        $this->call(RackSeeder::class);
        $this->call(RackCategoriesSeeder::class);
        $this->call(PublisherSeeder::class);
    }
}
