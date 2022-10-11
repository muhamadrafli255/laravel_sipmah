<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'category_id'       =>  1,
            'code'              =>  'BK - 0001',
            'title'             =>  'Pergi',
            'synopsis'          =>  'Sebuah kisah tentang menemukan tujuan,
                                    ke mana hendak pergi, melalui kenangan
                                    demi kenangan masa lalu, pertarungan
                                    hidup-mati, untuk memutuskan ke mana
                                    langkah kaki akan dibawa.',
            'publisher_id'      =>  1,
            'condition_book'    =>  1,
            'publication_year'  =>  2018, 
            'image'             =>  '/image/pergi.jpg',
        ]);
        Book::create([
            'category_id'       =>  1,
            'code'              =>  'BK - 0002',
            'title'             =>  'Novel Pangeran tak Berharap Mahkota',
            'synopsis'          =>  'Blurb Kesempurnaan tidak terletak  pada kerupawanan dan harta yang melimpah. Fakta ini sering kali dikesampingkan, termasuk oleh Sultan, seorang pemuda kaya raya yang menjalani hidup bak pangeran dengan segala kemudahan dan kemewahan, namun tak sepenuhnya bahagia. Dengan kesederhanaan dan kebaikannya, Bunga seakan dihadirkan oleh sang Maha Pencipta untuk melucuti keangkuhan Sultan. Namun, takdir memisahkan keduanya ketika bibit cinta mulai tumbuh. Sudikah Bunga menunggu dan membalas cinta Sultan? Seperti apa perjalanan Sultan dalam mencari kebahagiaan dan menemukan jati dirinya?',
            'publisher_id'      =>  1,
            'condition_book'    =>  1,
            'publication_year'  =>  2018, 
            'image'             =>  '/image/pergi.jpg',
        ]);
        Book::create([
            'category_id'       =>  1,
            'code'              =>  'BK - 0003',
            'title'             =>  'Orang - Orang Biasa',
            'synopsis'          =>  'Novel “Orang-Orang Biasa” menceritakan rencana perampokan di Kota Belantik. Kota Belantik sendiri merupakan kota yang bisa dikatakan naif.',
            'publisher_id'      =>  1,
            'condition_book'    =>  1,
            'publication_year'  =>  2019, 
            'image'             =>  '/image/oob.jpg',
        ]);
    }
}
