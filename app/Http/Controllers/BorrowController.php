<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index()
    {
        $title = "Daftar Peminjaman";
        return view('contents.borrows.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Peminjaman";
        $books = Book::get();
        $users = User::get();
        return view('contents.borrows.create', compact('title', 'books', 'users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'book_id'               =>  'required',
            'borrower_id'           => 'required',
            'borrow_date'           => 'required',
            'estimated_returned'    =>  'required',
        ]);

        Borrow::create([
            'book_id'               =>  $validatedData['book_id'],
            'borrower_id'           =>  $validatedData['borrower_id'],
            'borrow_officer_id'     =>  $request->user()->id,
            'borrow_date'           =>  $validatedData['borrow_date'],
            'estimated_return'    =>  $validatedData['estimated_returned']
        ]);

        return redirect('/borrows')->with('Berhasil', 'Peminjaman berhasil ditambahkan!');
    }

    public function detail($id)
    {
        $title      = "Detail Peminjaman";
        $borrows    = Borrow::where('id', $id)->get();
        foreach($borrows as $borrow){
            $borrowofficers = User::where('id', $borrow->borrow_officer_id)->get();
            $returnofficers = User::where('id', $borrow->return_officer_id)->get();
            $returners      = User::where('id', $borrow->returner_id)->get();
        }
        return view('contents.borrows.detail', compact('title', 'borrows', 'borrowofficers', 'returnofficers', 'returners'));
    }

    public function edit($id)
    {
        $title = "Ubah Peminjaman";
        $borrows = Borrow::where('id', $id)->get();
        $books   = Book::get();
        $users   = User::get();
        return view('contents.borrows.edit', compact('title', 'borrows', 'books', 'users'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'book_id'   =>  'required',
            'borrower_id'   =>  'required',
            'estimated_return'  =>  'required|date'
        ]);

        Borrow::where('id', $request->id)->update($validatedData);

        return redirect('/borrows')->with('Berhasil', 'Peminjaman berhasil diperbarui!');
    }

    public function return($id)
    {
        $title      = "Pengembalian Buku";
        $borrows    = Borrow::where('id', $id)->get();
        $users = User::get();
        foreach($borrows as $borrow){
            $borrowofficers = User::where('id', $borrow->borrow_officer_id)->get();
            $returnofficers = User::where('id', $borrow->return_officer_id)->get();
        }
        return view('contents.borrows.return', compact('title', 'borrows', 'borrowofficers', 'returnofficers', 'users'));
    }

    public function returned(Request $request)
    {
        $validatedData = $request->validate([
            'returner_id'       =>  'required',
            'return_date'        =>  'required|date',
            'return_condition'  =>  'required',
        ]);

        Borrow::where('id', $request->id)->update([
            'returner_id'       =>  $validatedData['returner_id'],
            'return_date'       =>  $validatedData['return_date'],
            'return_condition'  =>  $validatedData['return_condition'],
            'return_officer_id' =>  $request->user()->id,
            'status_borrow'     =>  2,
        ]);

        return redirect('/borrows')->with('Berhasil', 'Peminjaman berhasil dikembalikan!');
    }
}
