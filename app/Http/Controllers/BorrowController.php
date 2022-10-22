<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Borrow;
use App\Models\BorrowBooks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BorrowController extends Controller
{
    public function index()
    {
        $title = "Daftar Peminjaman";
        return view('contents.borrows.index', compact('title',));
    }

    public function create()
    {
        $title = "Tambah Peminjaman";
        $books = Book::where('is_borrow', false)->get();
        $users = User::get();
        return view('contents.borrows.create', compact('title', 'books', 'users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'borrow_date'           =>  'required',
            'borrower_id'           =>  'required',
            'book_id'               =>  'required',
            'estimated_returned'    =>  'required',
        ]);
        
        $validatedData['book_id'] = array_filter($validatedData['book_id']);
        $validatedData['estimated_returned'] = array_filter($validatedData['estimated_returned']);

        $borrows = Borrow::create([
            'borrower_id'       =>  $validatedData['borrower_id'],
            'borrow_officer_id' =>  $request->user()->id,
            'status_borrow'     =>  1,
            'borrow_date'       =>  $validatedData['borrow_date'],
        ]);

        $books = $validatedData['book_id'];
        $returns = $validatedData['estimated_returned'];
        $bp = [];
        foreach($books as $book){
                $bp[] = $book;
        }
        $data = [];
        foreach($returns as $index => $return){
            $data[] = [
                'borrow_id'         =>  $borrows->id,
                'book_id'           =>  $bp[$index],
                'estimated_return'  =>  $return,
                'is_return'         =>  false,
                'return_condition'  =>  null
            ];
        }
        DB::table('borrow_books')->insert($data);
        foreach($bp as $b){
            Book::where('id', $b)->update(['is_borrow' => true]);
        }
        $users = User::where('id', $request->borrower_id)->get();
        foreach($users as $user){
            return redirect('/borrows')->with('Berhasil', 'Peminjaman buku oleh '.$user->name.' berhasil ditambahkan!');
        }
    }

    public function detail($id)
    {
        $title      = "Detail Peminjaman";
        $borrows    = BorrowBooks::where('id', $id)->get();
        return view('contents.borrows.detail', compact('title', 'borrows'));
    }

    public function edit($id)
    {
        $title = "Ubah Peminjaman";
        $borrows = BorrowBooks::where('id', $id)->get();
        $books  = Book::where('is_borrow', false)->get();
        $users  = User::get();
        return view('contents.borrows.edit', compact('title', 'borrows', 'books', 'users'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'book_id'   =>  'required',
            'borrower_id'   =>  'required',
            'estimated_return'  =>  'required|date'
        ]);
        $borrows = BorrowBooks::where('id', $request->id)->get();
        foreach($borrows as $borrow){
            Book::where('id', $borrow->book_id)->update(['is_borrow' => false]);
        }

        Book::where('id', $request->book_id)->update(['is_borrow' => true]);

        BorrowBooks::where('id', $request->id)->update([
            'book_id'   =>  $validatedData['book_id'],
            'estimated_return'  => $validatedData['estimated_return'],
        ]);

        foreach($borrows as $borrow){
            Borrow::where('id', $borrow->borrow_id)->update(['borrower_id' => $validatedData['borrower_id']]);
        }

        return redirect('/borrows')->with('Berhasil', 'Peminjaman berhasil diperbarui!');
    }

    public function return($id)
    {
        $title      = "Pengembalian Buku";
        $borrows    = BorrowBooks::where('id', $id)->get();
        $users      = User::get();
        return view('contents.borrows.return', compact('title', 'borrows', 'users'));
    }

    public function returned(Request $request)
    {
        $validatedData = $request->validate([
            'returner_id'       =>  'required',
            'return_date'        =>  'required|date',
            'return_condition'  =>  'required',
        ]);

        BorrowBooks::where('id', $request->id)->update([
            'returner_id'       =>  $validatedData['returner_id'],
            'return_officer_id' =>  $request->user()->id,
            'return_date'       =>  $validatedData['return_date'],
            'return_condition'  =>  $validatedData['return_condition'],
            'status_borrow'     =>  2,
            'is_return'         =>  true,
        ]);

        $borrows = BorrowBooks::where('id', $request->id)->get();
        foreach($borrows as $borrow){
            Book::where('id', $borrow->book_id)->update(['is_borrow' => false]);
        }

        return redirect('/borrows')->with('Berhasil', 'Peminjaman berhasil dikembalikan!');
    }
}
