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

    public static function getCategories($request)
    {   
        $categories = Category::select([
            'id',
            'name',
        ]);

        if(isset($request->rack_id)){
            $categories->where('rack_id', $request['rack_id']);
        }

        return $categories;
    }


    public function racks()
    {
        return $this->belongsToMany(Rack::class)->withPivot('rack_id');
    }
}
