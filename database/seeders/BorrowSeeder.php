<?php

namespace Database\Seeders;

use App\Models\Borrow;
use Illuminate\Database\Seeder;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Borrow::create([
            'borrower_id'       =>  5,
            'borrow_officer_id' =>  1,
            'borrow_date'       =>  '2022-10-21',
        ]);
        Borrow::create([
            'borrower_id'       =>  5,
            'borrow_officer_id' =>  1,
            'borrow_date'       =>  '2022-10-17',
        ]);
        Borrow::create([
            'borrower_id'       =>  5,
            'borrow_officer_id' =>  1,
            'borrow_date'       =>  '2022-10-25',
        ]);
    }
}
