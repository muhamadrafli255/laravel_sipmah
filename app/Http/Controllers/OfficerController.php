<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class OfficerController extends Controller
{
    public function index()
    {
        $title = "Daftar Petugas";
        return view('contents.officers.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Petugas";
        $users = User::where('role_id', 3)->get();
        return view('contents.officers.create', compact('title','users'));
    }

    public function getUser(Request $request)
    {
        $users = User::where('id', $request->user_id)->get();
            foreach($users as $user){
                echo "$user->email";
            }
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
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

            $users = User::where('id', $request->user_id)->get();
            foreach($users as $user){
                $user->syncRoles('officer');
            }
            User::where('id', $request->user_id)->update([
                'role_id'   =>  2,
                'image'     =>  $validatedData['image']
            ]);
            return redirect('officers')->with('Berhasil', 'Anggota '.$user->name.' berhasil dijadikan petugas!');
        }
        else{
            $users = User::where('id', $request->user_id)->get();
            foreach($users as $user){
                $user->syncRoles('officer');
            }
            User::where('id', $request->user_id)->update([
                'role_id'   =>  2,
            ]);
            return redirect('officers')->with('Berhasil', 'Anggota '.$user->name.' berhasil dijadikan petugas!');
        }
        
    }

    public function detail($id)
    {
        $title = "Detail Petugas";
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
        return view('contents.officers.detail', compact('title', 'users', 'districts', 'cities', 'provinces'));
    }

    public function edit($id)
    {
        $title = "Ubah Petugas";
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
        return view('contents.officers.edit', compact('title', 'users', 'districts', 'cities', 'provinces', 'prov'));
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
            'sub_district_id'       =>  'required',
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

        return redirect('/officers')->with('Berhasil', 'Petugas '. $request->name . ' berhasil dirubah!');
    }

    public function delete($id)
    {
        $users = User::where('id', $id)->get();
        foreach($users as $user)
        {
            $user->syncRoles('member');
        }

        User::where('id', $id)->update(['role_id' => 3]);
        return redirect('/officers')->with('Berhasil', 'Petugas '.$user->name.' berhasil diberhentikan sebagai petugas!');
    }
}
