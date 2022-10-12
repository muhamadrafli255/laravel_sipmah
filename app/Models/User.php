<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function SubDistrict()
    {
        return $this->belongsTo(SubDistrict::class);
    }

    public static function getMembers($request)
    {
        $members = User::select(
            [
                'id',
                'identifier_number',
                'name',
                'email',
                'status',
            ])->where('role_id', 3);

            return $members;
    }

    public static function getOfficers($request)
    {
        $officers = User::select(
            [
                'id',
                'identifier_number',
                'name',
                'email',
                'status',
                'role_id',
            ])->where('role_id', 2);

            return $officers;
    }
}
