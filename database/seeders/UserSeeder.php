<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'identifier_number' =>  216662166621,
            'name'              =>  'Admin',
            'email'             =>  'admin@sipmah.id',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('password'),
            'status'            =>  1,
            'phone'             =>  83890876434,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Kp Cigarantang RT02 RW12'
        ]);
        $admin->assignRole('admin');

        $officer = User::create([
            'identifier_number' =>  216662177621,
            'name'              =>  'Petugas',
            'email'             =>  'petugas@sipmah.id',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('password'),
            'status'            =>  1,
            'phone'             =>  83890812334,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Kp Cigarantang RT02 RW12'
        ]);
        $officer->assignRole('officer');

        $member = User::create([
            'identifier_number' =>  3013519123,
            'name'              =>  'Irsyad Hidayat',
            'email'             =>  'irsyad.hidayat@member.com',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('0aaa3048'),
            'status'            =>  1,
            'phone'             =>  8915007323241,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Kp Solokan Gawir RT01 RW14'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  292134141,
            'name'              =>  'Jane Riyanti',
            'email'             =>  'jane.riyanti0909@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  2,
            'password'          =>  Hash::make('a174be98    '),
            'status'            =>  1,
            'phone'             =>  812568483995,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Pasar Cikapundung No. 14'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  53124325150,
            'name'              =>  'Pandu Wisesa',
            'email'             =>  'pandu.an@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('055ffd8295'),
            'status'            =>  1,
            'phone'             =>  83854326975,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Kp Solokan Lebak RT09 RW12'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531244345330,
            'name'              =>  'Guntur Surya Pratama',
            'email'             =>  'gntrsryprtama@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('055fpoll8295'),
            'status'            =>  1,
            'phone'             =>  838543261290,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Pasar Lebak No. 98'
        ]);
        $member->assignRole('member');
    }
}
