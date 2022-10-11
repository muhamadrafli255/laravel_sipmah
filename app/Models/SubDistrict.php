<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    use HasFactory;

    protected $fillable = ['district_id', 'name'];

    public function District()
    {
        return $this->hasMany(District::class);
    }

    public function User()
    {
        return $this->hasMany(User::class);
    }
}
