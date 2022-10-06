<?php

namespace App\Http\Controllers;

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
        return view('contents.borrows.create', compact('title'));
    }

    public function store()
    {

    }

    public function detail()
    {
        $title = "Detail Peminjaman";
        return view('contents.borrows.detail', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Peminjaman";
        return view('contents.borrows.edit', compact('title'));
    }

    public function delete()
    {
        
    }
}
