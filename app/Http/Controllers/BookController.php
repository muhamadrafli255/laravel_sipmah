<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = "Daftar Buku";
        return view('contents.books.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Buku";
        return view('contents.books.create', compact('title'));
    }

    public function store()
    {

    }

    public function detail()
    {
        $title = "Detail Buku";
        return view('contents.books.detail', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Buku";
        return view('contents.books.edit', compact('title'));
    }

    public function delete()
    {
        
    }
}
