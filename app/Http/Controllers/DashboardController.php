<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\BorrowBooks;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dasbor';
        $books = Book::get();
        $users = User::get();
        $damageds = Book::where('condition_book', 2)->get();
        $losts = Book::where('condition_book', 3)->get();
        $borrows = BorrowBooks::where('status_borrow', 1)->get();
        $label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        $labels = json_encode($label);
        for($month = 1; $month < 13; $month++){
            $chartBorrows = collect(DB::select("select count(id) as count from borrow_books where month(created_at) = '$month'"))->first();
            $totalBorrows[] = $chartBorrows->count; 
        }
        $good = Book::where('condition_book', 1)->get();
        $damaged = Book::where('condition_book', 2)->get();
        $lost = Book::where('condition_book', 3)->get();
        $good_count = count($good);
        $damaged_count = count($damaged);
        $lost_count = count($lost);
        return view('contents.index', compact('title', 'books', 'users', 'borrows', 'losts', 'damageds', 'label', 'totalBorrows', 'good_count', 'damaged_count', 'lost_count'));
    }
}
