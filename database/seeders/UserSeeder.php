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
            'identifier_number' =>  2022098789098765,
            'name'              =>  'Admin',
            'email'             =>  'admin@sipmah.id',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('password'),
            'status'            =>  1,
            'phone'             =>  83890876434,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Kp Cigarantang RT02 RW12',
            'role_id'           =>  1,
        ]);
        $admin->assignRole('admin');

        $officer = User::create([
            'identifier_number' =>  216622121,
            'name'              =>  'Petugas',
            'email'             =>  'petugas@sipmah.id',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('password'),
            'status'            =>  1,
            'phone'             =>  83890812334,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Kp Cigarantang RT02 RW12',
            'role_id'           =>  2,
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
            'address'           =>  'Kp Solokan Gawir RT01 RW14',
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
            'identifier_number' =>  531243250,
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
            'identifier_number' =>  531345330,
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

        $member = User::create([
            'identifier_number' =>  531345331,
            'name'              =>  'Wika Khalimah Pertiwi',
            'email'             =>  'wikakhprtw@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  2,
            'password'          =>  Hash::make('025fdsadll8295'),
            'status'            =>  1,
            'phone'             =>  838523261290,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Pasar Tonggoh No. 98'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345332,
            'name'              =>  'Rahmat Saepulloh',
            'email'             =>  'rahmatsaepulloh19@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('025#$sdsll8295'),
            'status'            =>  1,
            'phone'             =>  838520521290,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Solokan Jeruk No.99'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345333,
            'name'              =>  'Badru Samrodu',
            'email'             =>  'badrusams09@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('025dd9sll8295'),
            'status'            =>  1,
            'phone'             =>  838520527329,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Babakan Sari No.81'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345334,
            'name'              =>  'Rahma Afifah',
            'email'             =>  'rahmaafif4h@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  2,
            'password'          =>  Hash::make('025#$3l8295'),
            'status'            =>  1,
            'phone'             =>  838520098126,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Babakan Banteng No.12'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345335,
            'name'              =>  'Dezana Putriana',
            'email'             =>  'dezanput@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  2,
            'password'          =>  Hash::make('098*&3l8295'),
            'status'            =>  1,
            'phone'             =>  838576281126,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Babakan Banteng No.15'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345336,
            'name'              =>  'Andara Amanda Queensha',
            'email'             =>  'andaraaq@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  2,
            'password'          =>  Hash::make('0973$*%h295'),
            'status'            =>  1,
            'phone'             =>  8385760174637,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'KP BOJONG TANJUNG RT03 RW15'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345337,
            'name'              =>  'Elsa Putri Pertiwi',
            'email'             =>  'pertiwielsa22@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  2,
            'password'          =>  Hash::make('097305tr695'),
            'status'            =>  1,
            'phone'             =>  8385761298437,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'KP BOJONG TANJUNG RT03 RW15'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345338,
            'name'              =>  'Rahayu Purwanti',
            'email'             =>  'rahayupurw@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  2,
            'password'          =>  Hash::make('af13d277'),
            'status'            =>  1,
            'phone'             =>  8385761195437,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Kp Junti Hilir'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345339,
            'name'              =>  'Bagiya Hardiansyah',
            'email'             =>  'ardianto.tantri@yahoo.co.id',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('142f658b'),
            'status'            =>  1,
            'phone'             =>  8317850298437,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'KP CIBORERANG'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345340,
            'name'              =>  'Reksa Ramadan',
            'email'             =>  'aareksaramadan@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('c4bfee63'),
            'status'            =>  1,
            'phone'             =>  8317859852905,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'KP SINDANG SARI'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345341,
            'name'              =>  'Candra Hidayat',
            'email'             =>  'Candra12Hidayat@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('0ba1bb22'),
            'status'            =>  1,
            'phone'             =>  8319783652905,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Babakan Walungan No.10'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345342,
            'name'              =>  'Rizky Perdana',
            'email'             =>  'rizkyperdana@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('0#3dss$avb2'),
            'status'            =>  1,
            'phone'             =>  8319781209837,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Babakan Sagara No.10'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345343,
            'name'              =>  'Rury Aditya Pamungkas',
            'email'             =>  'ruryadityapamungkas12@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('0#3988d2vb2'),
            'status'            =>  1,
            'phone'             =>  8319781876548,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Babakan Legok No.10'
        ]);
        $member->assignRole('member');

        $member = User::create([
            'identifier_number' =>  531345344,
            'name'              =>  'Muhammad Azkiya Ramdani',
            'email'             =>  'akuazki12@gmail.com',
            'email_verified_at' =>  now(),
            'gender'            =>  1,
            'password'          =>  Hash::make('0#3ss4d2vb2'),
            'status'            =>  1,
            'phone'             =>  8319709346548,
            'sub_district_id'   =>  3204180009,
            'address'           =>  'Babakan Nenggar No.19'
        ]);
        $member->assignRole('member');
    }
}
