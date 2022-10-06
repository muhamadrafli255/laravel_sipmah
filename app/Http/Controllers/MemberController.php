<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $title = "Daftar Anggota";
        return view('contents.members.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Anggota";
        return view('contents.members.create', compact('title'));
    }

    public function store()
    {

    }

    public function detail()
    {
        $title = "Detail Anggota";
        return view('contents.members.detail', compact('title'));
    }

    public function edit()
    {
        $title = "Ubah Anggota";
        return view('contents.members.edit', compact('title'));
    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}
