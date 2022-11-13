<?php

namespace App\Http\Controllers;

use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Beranda";
        $books = Book::where('condition_book', 1)->where('is_borrow', 0)->paginate(12);
        return view('contents.home', compact('title', 'books'));
    }
}
