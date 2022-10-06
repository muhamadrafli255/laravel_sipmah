<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $title = "Daftar Penerbit";
        return view('contents.publishers.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Penerbit";
        return view('contents.publishers.create', compact('title'));
    }

    public function store()
    {

    }

    public function detail()
    {
        $title = "Detail Penerbit";
        return view('contents.publishers.detail', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Penerbit";
        return view('contents.publishers.edit', compact('title'));
    }

    public function delete()
    {
        
    }
}
