<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowBooks extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Book()
    {
        return $this->belongsTo(Book::class);
    }

    public function Returner()
    {
        return $this->belongsTo(User::class, 'returner_id');
    }

    public function ReturnOfficer()
    {
        return $this->belongsTo(User::class, 'return_officer_id');
    }

    public function Borrow()
    {
        return $this->belongsTo(Borrow::class);
    }

    public static function getBorrows($request)
    {
        $borrows = BorrowBooks::select([
            'id',
            'borrow_id',
            'book_id',
            'status_borrow',
        ])->latest();

        return $borrows;
    }

    public static function getReportBorrows($request)
    {
        $borrows = BorrowBooks::select([
            'id',
            'book_id',
            'borrow_id',
            'estimated_return',
            'created_at',
        ])->where('status_borrow', 1);

        if(isset($request['startDate'])){
            $borrows->whereBetween('created_at', [$request['startDate'], $request['endDate']]);
        }

        return $borrows;
    }

    public static function getReportDamaged($request)
    {
        $borrows = BorrowBooks::select([
            'id',
            'book_id',
            'borrow_id',
            'return_date',
        ])->where('return_condition', 2);

        if(isset($request['startDate'])){
            $borrows->whereBetween('created_at', [$request['startDate'], $request['endDate']]);
        }

        return $borrows;
    }

    public static function getReportLost($request)
    {
        $borrows = BorrowBooks::select([
            'id',
            'book_id',
            'borrow_id',
            'return_date',
        ])->where('return_condition', 3);

        if(isset($request['startDate'])){
            $borrows->whereBetween('created_at', [$request['startDate'], $request['endDate']]);
        }

        return $borrows;
    }
}
