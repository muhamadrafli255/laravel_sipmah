<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'email', 'phone'];

    public function Book()
    {
        return $this->hasMany(Book::class);
    }

    public static function getPublishers($request)
    {
        $publishers = Publisher::select([
            'id',
            'name',
            'address',
            'email',
            'phone',
        ]);

        return $publishers;
    }
}
