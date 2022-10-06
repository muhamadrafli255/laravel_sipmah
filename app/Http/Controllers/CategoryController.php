<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = "Daftar Kategori";
        return view('contents.categories.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Kategori";
        return view('contents.categories.create', compact('title'));
    }

    public function store()
    {

    }

    public function detail()
    {
        $title = "Detail Kategori";
        return view('contents.categories.detail', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Kategori";
        return view('contents.categories.edit', compact('title'));
    }

    public function delete()
    {
        
    }
}
