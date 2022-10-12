<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, AutoNumberTrait;

    protected $fillable = ['code','name'];

    public function getAutoNumberOptions()
    {
        return [
            'code'  =>  [
                'format'    =>  'CTG - ?',
                'length'    =>  2
            ]
            ];
    }

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
