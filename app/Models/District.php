<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'name'];

    public function City()
    {
        return $this->hasMany(City::class);
    }

    public function SubDistrict()
    {
        return $this->belongsTo(SubDistrict::class);
    }
}
