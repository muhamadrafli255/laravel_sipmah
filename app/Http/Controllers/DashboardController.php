<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowBooks;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('contents.index', compact('title', 'books', 'users', 'borrows', 'losts', 'damageds'));
    }
}
