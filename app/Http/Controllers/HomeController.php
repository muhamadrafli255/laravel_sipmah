<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $title = "Beranda";
        $books = Book::where('condition_book', 1)->where('is_borrow', 0)->get();
        if($request->ajax()){
            $book = Book::where('condition_book', 1)->where('is_borrow', 0)->where('title','LIKE','%'.$request->book_name.'%')->get();
            if(count($book) > 0){
                foreach($book as $b)
            {
                $output = "
                <a href='/books/$b->id' class='text-decoration-none text-black-50 mx-auto'>
                <div class='col-12 col-xl-3 col-lg-4 col-md-6 col-sm-12'>
                    <div class='card mb-5' style='width: 15rem;''>
                        <img src='/img/book-images/$b->image' class='card-img-top' alt='$b->image' height='380' width='180'>
                        <div class='card-body'>
                            <h5 class='card-title'>$b->title</h5>
                            <p class='card-text'>By : $b->writer</p>
                            </div>
                        </div>
                    </div>
                </a>
                ";
            }
            }else{
                $output = "
                <div class='mx-auto text-center'>
                <h3>Tidak ada data ditemukan!</h3>
            </div>
            ";
            }
            return $output;
        }

            return view('contents.home', compact('title', 'books'));
        }
    }