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
            'book_id'           =>  2,
            'borrower_id'       =>  8,
            'borrow_officer_id' =>  1,
            'return_officer_id' =>  2,
            'status_borrow'     =>  2,
            'borrow_date'       =>  '2022-08-10',
            'estimated_return'  =>  '2022-08-15',
            'return_date'       =>  '2022-08-14',
            'return_condition'  =>  1,
        ]);
        Borrow::create([
            'book_id'           =>  4,
            'borrower_id'       =>  9,
            'borrow_officer_id' =>  1,
            'return_officer_id' =>  1,
            'status_borrow'     =>  2,
            'borrow_date'       =>  '2022-08-12',
            'estimated_return'  =>  '2022-08-18',
            'return_date'       =>  '2022-08-18',
            'return_condition'  =>  1,
        ]);
        Borrow::create([
            'book_id'           =>  5,
            'borrower_id'       =>  3,
            'borrow_officer_id' =>  1,
            'return_officer_id' =>  1,
            'status_borrow'     =>  2,
            'borrow_date'       =>  '2022-08-15',
            'estimated_return'  =>  '2022-08-20',
            'return_date'       =>  '2022-08-20',
            'return_condition'  =>  1,
        ]);
    }
}
