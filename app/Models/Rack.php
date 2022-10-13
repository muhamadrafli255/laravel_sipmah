<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rack extends Model
{
    use HasFactory, AutoNumberTrait;

    protected $fillable = ['code', 'number'];

    public function getAutoNumberOptions()
    {
        return [
            'code'  =>  [
                'format'    =>  'RCK - ?',
                'length'    =>  2
            ]
            ];
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withPivot('rack_id');
    }

    public static function getRacks()
    {
        $racks = Rack::select([
            'id',
            'code',
            'number',
        ]);

        return $racks;
    }

    public static function getCategoriesOnRack($request)
    {  
        $categories = Category::with('racks')->select([
            'id',
            'name',
        ]);
        $categories->whereHas('racks', function($query) use($request){
            $query->where('rack_id', $request['rackId']);
        })->get();
        // if(isset($request->rackId)){
        //     $id = $request->rackId;
        //     $categories->whereHas('racks', function($query) use($id){
        //         $query->wherePivot('rack_id', 7);
        //     })->get();
            // $categories->where('racks.categories', function($query) use($request){
            //     $query->wherePivot('rack_id', $request->rackId);
            // });
        // }
        return $categories;
    }
}