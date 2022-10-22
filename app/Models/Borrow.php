<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory, AutoNumberTrait;

    protected $guarded = ['id'];

    public function getAutoNumberOptions()
    {
        return [
            'code'  =>  [
                'format'    =>  'PMJ - ?',
                'length'    =>  4
            ]
            ];
    }

    public function BorrowBooks()
    {
        return $this->hasMany(BorrowBooks::class);
    }

    public function Borrower()
    {
        return $this->belongsTo(User::class, 'borrower_id');
    }

    public function BorrowOfficer()
    {
        return $this->belongsTo(User::class, 'borrow_officer_id');
    }

    public static function getReportBorrows($request)
    {
        $borrows = Borrow::select([
            'id',
            'book_id',
            'borrower_id',
            'estimated_return',
            'created_at',
        ])->where('status_borrow', 1);

        if(isset($request['startDate'])){
            $borrows->whereBetween('created_at', [$request['startDate'], $request['endDate']]);
        }

        return $borrows;
    }
}
