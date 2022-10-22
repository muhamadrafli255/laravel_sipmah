<?php

namespace Database\Seeders;

use App\Models\BorrowBooks;
use Illuminate\Database\Seeder;

class BorrowBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BorrowBooks::create([
            'borrow_id'         =>  1,
            'book_id'           =>  3,
            'estimated_return'  =>  "2022-10-25",
            'is_return'         => true,
            'returner_id'       =>  5,
            'return_officer_id' =>  1,
            'return_date'       =>  "2022-10-25",
            'return_condition'  =>  1,
            'status_borrow'     =>  2,
        ]);
        BorrowBooks::create([
            'borrow_id'         =>  2,
            'book_id'           =>  4,
            'estimated_return'  =>  "2022-10-21",
            'is_return'         => true,
            'returner_id'       =>  5,
            'return_officer_id' =>  1,
            'return_date'       =>  "2022-10-21",
            'return_condition'  =>  2,
            'status_borrow'     =>  2,
        ]);
        BorrowBooks::create([
            'borrow_id'         =>  3,
            'book_id'           =>  5,
            'estimated_return'  =>  "2022-10-29",
            'is_return'         => true,
            'returner_id'       =>  5,
            'return_officer_id' =>  1,
            'return_date'       =>  "2022-10-29",
            'return_condition'  =>  3,
            'status_borrow'     =>  2,
        ]);
        BorrowBooks::create([
            'borrow_id'         =>  3,
            'book_id'           =>  6,
            'estimated_return'  =>  "2022-10-12",
            'is_return'         => false,
        ]);
        BorrowBooks::create([
            'borrow_id'         =>  3,
            'book_id'           =>  1,
            'estimated_return'  =>  "2022-11-10",
            'is_return'         => false,
        ]);
    }
}
