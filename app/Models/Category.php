<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function Book()
    {
        return $this->hasMany(Book::class);
    }

    public static function getCategories()
    {   
        $categories = Category::select([
            'id',
            'name',
        ]);

        return $categories;
    }
}
