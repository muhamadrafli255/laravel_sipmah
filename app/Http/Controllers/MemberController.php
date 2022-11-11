<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\District;
use App\Models\Province;
use Illuminate\Support\Str;
use App\Models\UserActivate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class MemberController extends Controller
{
    public function index()
    {
        $title = "Daftar Anggota";
        return view('contents.members.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Anggota";
        $provinces = Province::get();
        return view('contents.members.create', compact('title', 'provinces'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'identifier_number' =>  'required|min:8|max:16|unique:users',
            'name'              =>  'required',
            'gender'            =>  'required',
            'email'             =>  'required|email|unique:users',
            'phone'             =>  'required|min:11|max:13|unique:users',
            'address'           =>  'required',
            'sub_district_id'   =>  'required',
            'image'             =>  'image|file|max:5120',
        ]);

        if($request->image != null)
        {
            $image = $request->file('image');
            $validatedData['image'] = time().'.'.$image->extension();
        
            $destinationPath = public_path('/img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(315, 512, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$validatedData['image']);
    
            $destinationPath = public_path('/img/profile-images');
            $image->move($destinationPath, $validatedData['image']);
            
            $user = User::create(
                [
                    'identifier_number' =>  $validatedData['identifier_number'],
                    'name'              =>  $validatedData['name'],
                    'gender'            =>  $validatedData['gender'],
                    'email'             =>  $validatedData['email'],
                    'phone'             =>  $validatedData['phone'],
                    'address'           =>  $validatedData['address'],
                    'sub_district_id'   =>  $validatedData['sub_district_id'],
                    'image'             =>  $validatedData['image'],
                    'password'          =>  Hash::make(Str::random(25)),
                ]
            );
            $user->assignRole('member');
        }
        else
        {
            $user = User::create(
                [
                    'identifier_number' =>  $validatedData['identifier_number'],
                    'name'              =>  $validatedData['name'],
                    'gender'            =>  $validatedData['gender'],
                    'email'             =>  $validatedData['email'],
                    'phone'             =>  $validatedData['phone'],
                    'address'           =>  $validatedData['address'],
                    'sub_district_id'   =>  $validatedData['sub_district_id'],
                    'status'            =>  1,
                    'password'          =>  Hash::make(Str::random(25)),
                ]
            );
            $user->assignRole('member');
        }

        if($user == true)
        {
            $generateToken = UserActivate::create([
                'user_id' => $user->id,
                'token' => Str::random(16),
            ]);

            $token = $generateToken->token;
            Mail::send('contents.mail.activation', ['token' => $token, 'name' => $request->name], function($message) use($request){
                $message->to($request->email)->subject('Aktivasi Akun SIPMah');
            });

        return redirect('/members')->with('Berhasil', 'Anggota ' . $request->name . ' berhasil ditambahkan!');
        }else
        {
            return back();
        }
    }

    public function detail($id)
    {
        $title = "Detail Anggota";
        $users = User::where('id', $id)->get();
        foreach($users as $user){
            $districts = District::where('id', $user->SubDistrict->district_id)->get();
        }
        foreach($districts as $district){
            $cities = City::where('id', $district->city_id)->get();
        }
        foreach($cities as $city){
            $provinces = Province::where('id', $city->province_id)->get();
        }
        return view('contents.members.detail', compact('title', 'users', 'districts', 'cities', 'provinces'));
    }

    public function edit($id)
    {
        $title = "Ubah Anggota";
        $users = User::where('id', $id)->get();
        $prov = Province::get();
        foreach($users as $user){
            $districts = District::where('id', $user->SubDistrict->district_id)->get();
        }
        foreach($districts as $district){
            $cities = City::where('id', $district->city_id)->get();
        }
        foreach($cities as $city){
            $provinces = Province::where('id', $city->province_id)->get();
        }
        return view('contents.members.edit', compact('title', 'users', 'districts', 'cities', 'provinces', 'prov'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'identifier_number' =>  'required|min:8|max:16',
            'name'              =>  'required',
            'gender'            =>  'required',
            'email'             =>  'required|email',
            'phone'             =>  'required|min:11|max:13',
            'address'           =>  'required',
            'sub_district_id'   =>  'required',
            'image'             =>  'image|file|max:5120',
        ]);

        if($request->image != null)
        {
            $image = $request->file('image');
            $validatedData['image'] = time().'.'.$image->extension();
        
            $destinationPath = public_path('/img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(315, 512, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$validatedData['image']);
    
            $destinationPath = public_path('/img/profile-images');
            $image->move($destinationPath, $validatedData['image']);
        }

        User::where('id', $request->id)->update($validatedData);

        return redirect('/members')->with('Berhasil', 'Anggota '. $request->name . ' berhasil dirubah!');
    }

    public function updateStatus($id)
    {
        $user = User::where('id', $id)->get();
        foreach($user as $data)
        if($data->status == 0){
            User::where('id', $id)->update(['status' => 1]);
        }
        else
        {
            User::where('id', $id)->update(['status' => 0]); 
        }

        return redirect('/members')->with('Berhasil', 'Status anggota ' . $data->name . ' berhasil diperbarui!');
    }

    public function delete()
    {
        
    }

    public function mailReset($id)
    {
        $getData = User::where('id', $id)->get();
        foreach($getData as $data)
        $generateToken = UserActivate::create([
            'user_id'   =>  $data->id,
            'token'     =>  Str::random(16),
        ]);

        $token = $generateToken->token;
        Mail::send('contents.mail.forgot', ['token' => $token, 'name' => $data->name], function($message) use($data){
                $message->to($data->email)->subject('Atur Ulang Kata Sandi');
        });

        return redirect('/members')->with('Berhasil', 'Tautan atur ulang kata sandi berhasil
                                        dikirim ke anggota ' . $data->name);
    }
}
