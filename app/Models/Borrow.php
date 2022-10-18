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

    public function User()
    {
        return $this->belongsTo(User::class, 'borrower_id');
    }

    public function Book()
    {
        return $this->belongsTo(Book::class);
    }

    public static function getBorrows()
    {
        $borrows = Borrow::select([
            'id',
            'book_id',
            'borrower_id',
            'borrow_date',
            'status_borrow',
        ]);

        return $borrows;
    }
}
