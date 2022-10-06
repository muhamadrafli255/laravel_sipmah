<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Novel'
        ]);
        Category::create([
            'name' => 'Agama'
        ]);
        Category::create([
            'name' => 'Biologi'
        ]);
        Category::create([
            'name' => 'Teknologi'
        ]);
        Category::create([
            'name' => 'Fisika'
        ]);
        Category::create([
            'name' => 'Matematika'
        ]);
        Category::create([
            'name' => 'Filosofi'
        ]);
        Category::create([
            'name' => 'Dongeng'
        ]);
        Category::create([
            'name' => 'Puisi'
        ]);
        Category::create([
            'name' => 'Karya Ilmiah'
        ]);
        Category::create([
            'name' => 'Bahasa Arab'
        ]);
        Category::create([
            'name' => 'Bahasa Inggriss'
        ]);
        Category::create([
            'name' => 'Bahasa Jepang'
        ]);
        Category::create([
            'name' => 'Bahasa Indonesia'
        ]);
        Category::create([
            'name' => 'Kimia'
        ]);
        Category::create([
            'name' => 'Ilmu Sosial'
        ]);
        Category::create([
            'name' => 'Ilmu Politik'
        ]);
        Category::create([
            'name' => 'Ekonomi'
        ]);
        Category::create([
            'name' => 'Hukum'
        ]);
    }
}
