<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AccountController extends Controller
{
    public function index()
    {
        $title = "Ubah Akun";
        $users = User::where('id', auth()->user()->id)->get();
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
        return view('contents.accounts.index', compact('title', 'prov', 'districts', 'cities', 'provinces'));
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

        User::where('id', auth()->user()->id)->update($validatedData);

        return redirect('/accounts')->with('Berhasil', 'Data akun berhasil dirubah!');
    }

    public function password()
    {
        $title = "Ubah Kata Sandi";
        return view('contents.accounts.password', compact('title'));
    }

    public function updatePassword(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password'
        ]);

        $users = User::where('id', $id)->get();
        foreach($users as $user){

        }
        $check = Hash::check($request['password'], $user->password);
        if($check == true){    
            $user->update([
                'password' => Hash::make($request['new_password'])
            ]);
        }else{
            return redirect('/accounts/password')->with('Gagal', 'Kata sandi lama salah!');
        }

        return redirect('/accounts/password')->with('Berhasil', 'Kata sandi berhasil dirubah!');
    }
}
