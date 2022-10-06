<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $title = "Laporan";
        return view('contents.reports.index', compact('title'));
    }

    public function borrowed()
    {
        $title = "Detail Sedang Dipinjam";
        return view('contents.reports.borrowed', compact('title'));
    }

    public function books()
    {
        $title = "Paling Banyak Dipinjam";
        return view('contents.reports.books', compact('title'));
    }

    public function members()
    {
        $title = "Peminjaman Peranggota";
        return view('contents.reports.members', compact('title'));
    }
}
