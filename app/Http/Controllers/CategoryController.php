<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function detail($id)
    {
        $title = "Detail Kategori";
        $categories = Category::where('id', $id)->get();
        return view('contents.categories.detail', compact('title', 'categories'));
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
