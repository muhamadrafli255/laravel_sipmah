<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\BorrowBooks;
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

    public function borrowed($id)
    {
        $title = "Detail Sedang Dipinjam";
        $borrows = BorrowBooks::where('id', $id)->get();
        return view('contents.reports.borrowed', compact('title', 'borrows'));
    }

    public function damaged($id)
    {
        $title = "Detail Dikembalikan Rusak";
        $borrows = BorrowBooks::where('id', $id)->get();
        return view('contents.reports.damaged', compact('title', 'borrows'));
    }

    public function lost($id)
    {
        $title = "Detail Dikembalikan Hilang";
        $borrows = BorrowBooks::where('id', $id)->get();
        return view('contents.reports.lost', compact('title', 'borrows'));
    }
}
