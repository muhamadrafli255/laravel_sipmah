<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name'      =>  'Republika',
            'address'   =>  'Jakarta Selatan',
            'email'     =>  'redaksipab@bukurepublika.id',
            'phone'     =>  21781912728,
        ]);
        Publisher::create([
            'name'      =>  'Mediakita',
            'address'   =>  'Jakarta Selatan',
            'email'     =>  'naskah@mediakita.com',
            'phone'     =>  7451644,
        ]);
        Publisher::create([
            'name'      =>  'Bentang Pustaka',
            'address'   =>  'Yogyakarta',
            'email'     =>  'promosi@bentangpustaka.com',
            'phone'     =>  2747370635,
        ]);
        Publisher::create([
            'name'      =>  'Gramedia',
            'address'   =>  'Jakarta',
            'email'     =>  'customercare@gramedia.com',
            'phone'     =>  2178312728,
        ]);
    }
}
