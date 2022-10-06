<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function index()
    {
        $title = "Daftar Petugas";
        return view('contents.officers.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Petugas";
        return view('contents.officers.create', compact('title'));
    }

    public function store()
    {

    }

    public function detail()
    {
        $title = "Detail Petugas";
        return view('contents.members.detail', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Petugas";
        return view('contents.officers.edit', compact('title'));
    }

    public function delete()
    {
        
    }
}
