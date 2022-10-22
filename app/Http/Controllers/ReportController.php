<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ReportController extends Controller
{
    public function index()
    {
        $title  = "Laporan";
        $start  = Carbon::now()->startOfMonth()->format('Y-m-d H:i:s');
        $end    = Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');
        if(request()->date != ''){
            $date   = explode(' - ' ,request()->date);
            $start  = Carbon::parse($date[0])->format('Y-m-d').' 00:00:01';
            $end    = Carbon::parse($date[1])->format('Y-m-d').' 23:59:00';
        }
        return view('contents.reports.index', compact('title', 'start', 'end'));
    }

    public function filter()
    {
        $title = "Laporan";

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
