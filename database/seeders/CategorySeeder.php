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
            'code' => 'CTG - 01',  
            'name' => 'Novel'
        ]);
        Category::create([
            'code' => 'CTG - 02',  
            'name' => 'Agama'
        ]);
        Category::create([
            'code' => 'CTG - 03',  
            'name' => 'Biologi'
        ]);
        Category::create([
            'code' => 'CTG - 04',  
            'name' => 'Teknologi'
        ]);
        Category::create([
            'code' => 'CTG - 05',  
            'name' => 'Fisika'
        ]);
        Category::create([
            'code' => 'CTG - 06',  
            'name' => 'Matematika'
        ]);
        Category::create([
            'code' => 'CTG - 07',  
            'name' => 'Filosofi'
        ]);
        Category::create([
            'code' => 'CTG - 08',  
            'name' => 'Dongeng'
        ]);
        Category::create([
            'code' => 'CTG - 09',  
            'name' => 'Puisi'
        ]);
        Category::create([
            'code' => 'CTG - 10',  
            'name' => 'Karya Ilmiah'
        ]);
        Category::create([
            'code' => 'CTG - 11',  
            'name' => 'Bahasa Arab'
        ]);
        Category::create([
            'code' => 'CTG - 12',  
            'name' => 'Bahasa Inggriss'
        ]);
        Category::create([
            'code' => 'CTG - 13',  
            'name' => 'Bahasa Jepang'
        ]);
        Category::create([
            'code' => 'CTG - 14',  
            'name' => 'Bahasa Indonesia'
        ]);
        Category::create([
            'code' => 'CTG - 15',  
            'name' => 'Kimia'
        ]);
        Category::create([
            'code' => 'CTG - 16',  
            'name' => 'Ilmu Sosial'
        ]);
        Category::create([
            'code' => 'CTG - 17',  
            'name' => 'Ilmu Politik'
        ]);
        Category::create([
            'code' => 'CTG - 18',  
            'name' => 'Ekonomi'
        ]);
        Category::create([
            'code' => 'CTG - 19',  
            'name' => 'Hukum'
        ]);
    }
}
