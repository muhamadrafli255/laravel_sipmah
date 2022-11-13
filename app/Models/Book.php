<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, AutoNumberTrait;

    protected $guarded = ['id'];

    public function getAutoNumberOptions()
    {
        return [
            'code'  =>  [
                'format'    =>  'BK - ?',
                'length'    =>  4
            ]
            ];
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function BorrowBooks()
    {
        return $this->hasMany(BorrowBooks::class);
    }

    public static function getBooksOnCategories($request)
    {
        $books = Book::select([
            'id',
            'category_id',
            'image',
            'title',
        ]);

        if(isset($request['categoryId']))
        {
            $books->where('category_id', $request['categoryId']);
        }

        return $books;
    }

    public static function getBooksOnPublishers($request)
    {
        $books = Book::select([
            'id',
            'category_id',
            'image',
            'title',
        ]);

        if(isset($request['publisher_id']))
        {
            $books->where('publisher_id', $request['publisher_id']);
        }

        return $books;
    }

    public static function getBooks()
    {
        $books = Book::select([
            'id',
            'code',
            'category_id',
            'publisher_id',
            'title',
            'writer',
            'image',
            'publication_year',
        ]);

        return $books;
    }
}
