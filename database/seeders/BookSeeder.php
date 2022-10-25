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
            'writer'            =>  'Tere Liye',
            'publisher_id'      =>  1,
            'is_borrow'         =>  true,
            'condition_book'    =>  1,
            'publication_year'  =>  2018, 
            'image'             =>  'pergi.jpeg',
        ]);
        Book::create([
            'category_id'       =>  1,
            'code'              =>  'BK - 0002',
            'title'             =>  'Novel Pangeran tak Berharap Mahkota',
            'synopsis'          =>  'Blurb Kesempurnaan tidak terletak  pada kerupawanan dan harta yang melimpah. Fakta ini sering kali dikesampingkan, termasuk oleh Sultan, seorang pemuda kaya raya yang menjalani hidup bak pangeran dengan segala kemudahan dan kemewahan, namun tak sepenuhnya bahagia. Dengan kesederhanaan dan kebaikannya, Bunga seakan dihadirkan oleh sang Maha Pencipta untuk melucuti keangkuhan Sultan. Namun, takdir memisahkan keduanya ketika bibit cinta mulai tumbuh. Sudikah Bunga menunggu dan membalas cinta Sultan? Seperti apa perjalanan Sultan dalam mencari kebahagiaan dan menemukan jati dirinya?',
            'writer'            =>  'KH Adrian Mafatihallah Karim',
            'publisher_id'      =>  1,
            'condition_book'    =>  1,
            'publication_year'  =>  2018, 
            'image'             =>  'pangerantb.jpeg',
        ]);
        Book::create([
            'category_id'       =>  1,
            'code'              =>  'BK - 0003',
            'title'             =>  'Orang - Orang Biasa',
            'synopsis'          =>  'Novel “Orang-Orang Biasa” menceritakan rencana perampokan di Kota Belantik. Kota Belantik sendiri merupakan kota yang bisa dikatakan naif.',
            'writer'            =>  'Andrea Hirata',
            'publisher_id'      =>  5,
            'condition_book'    =>  1,
            'publication_year'  =>  2019, 
            'image'             =>  'orangorangbiasa.jpeg',
        ]);
        Book::create([
            'category_id'       =>  1,
            'code'              =>  'BK - 0005',
            'title'             =>  'Amba',
            'synopsis'          =>  'Tahun 2006: Amba pergi ke Pulau Buru. Ia mencari orang yang dikasihinya, yang memberinya seorang anak di luar nikah. Laki-laki itu Bhisma, dokter lulusan Leipzig, Jerman Timur, yang hilang karena ditangkap pemerintah Orde Baru dan dibuang ke Pulau Buru. Ketika kamp tahanan politik itu dibubarkan dan para tapol dipulangkan, Bhisma tetap tak kembali.',
            'writer'            =>  'Laksmi Pamuntjak',
            'publisher_id'      =>  4,
            'condition_book'    =>  2,
            'publication_year'  =>  2017, 
            'image'             =>  'amba.jpeg',
        ]);
        Book::create([
            'category_id'       =>  1,
            'code'              =>  'BK - 0006',
            'title'             =>  'Dilan 1 (Dia Adalah Dilanku Tahun 1990)',
            'synopsis'          =>  'Dilan: Dia adalah Dilanku tahun 1990 adalah sebuah novel karya Pidi Baiq yang diterbitkan oleh Penerbit Pastel Books. Novel tersebut menjadi buku dengan penjualan terbaik di Gramedia, serta diadaptasi ke dalam sebuah film yang berjudul Dilan 1990.',
            'writer'            =>  'Pidi Baiq',
            'publisher_id'      =>  5,
            'condition_book'    =>  3,
            'publication_year'  =>  2014, 
            'image'             =>  'dilan1990.jpeg',
        ]);
        Book::create([
            'category_id'       =>  6,
            'code'              =>  'BK - 0007',
            'title'             =>  'Matematika Kelas X',
            'synopsis'          =>  'Buku ini merupakan buku pelajaran matematika untuk kelas X SMK/SMA.',
            'writer'            =>  'Bornok Sinaga, Pardomuan N.J.M Sinambela, Andri Kristianto Sitanggang, Tri Andri Hutapea, Sudianto Manulang, Lasker Pengarapan Sinaga, Mangara Simanjorang',
            'publisher_id'      =>  6,
            'is_borrow'         =>  true,
            'condition_book'    =>  1,
            'publication_year'  =>  2017, 
            'image'             =>  'mtkkelas10.png',
        ]);
        Book::create([
            'category_id'       =>  14,
            'code'              =>  'BK - 0008',
            'title'             =>  'Bahasa Indonesia Kelas X',
            'synopsis'          =>  'Buku ini merupakan buku pelajaran bahasa indonesia untuk kelas X SMK/SMA.',
            'writer'            =>  'Suherli, Maman Suryaman, Aji Septiaji, Istiqomah',
            'publisher_id'      =>  6,
            'condition_book'    =>  1,
            'publication_year'  =>  2017, 
            'image'             =>  'bindokelasx.png',
        ]);
    }
}
