<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Publisher()
    {
        return $this->belongsTo(Publisher::class);
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
}
