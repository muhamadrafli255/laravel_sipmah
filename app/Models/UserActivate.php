<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivate extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'token'];

    public function User()
    {
        return $this->hasMany(User::class);
    }
}
