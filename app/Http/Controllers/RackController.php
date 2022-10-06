<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RackController extends Controller
{
    public function index()
    {
        $title = "Daftar Rak";
        return view('contents.racks.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Rak";
        return view('contents.racks.create', compact('title'));
    }

    public function store()
    {

    }

    public function detail()
    {
        $title = "Detail Rak";
        return view('contents.racks.detail', compact('title'));
    }

    public function rackCategories()
    {
        $title = "Detail Kategori";
        return view('contents.categories.detail', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Rak";
        return view('contents.racks.edit', compact('title'));
    }

    public function delete()
    {

    }
}
