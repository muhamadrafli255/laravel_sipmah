<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['province_id', 'name'];

    public function Province()
    {
        return $this->hasMany(Province::class);
    }

    public function District()
    {
        return $this->belongsTo(District::class);
    }
}
