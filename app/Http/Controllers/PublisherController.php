<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $title = "Daftar Penerbit";
        return view('contents.publishers.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Penerbit";
        return view('contents.publishers.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      =>  'required',
            'address'   =>  'required',
            'email'     =>  'required|email',
            'phone'     =>  'required',    
        ]);

        Publisher::create($validatedData);

        return redirect('/publishers')->with('Berhasil', 'Penerbit '.$request->name.' berhasil ditambahkan');
    }

    public function detail($id)
    {
        $title = "Detail Penerbit";
        $publishers =   Publisher::where('id', $id)->get();
        return view('contents.publishers.detail', compact('title', 'publishers'));
    }

    public function edit($id)
    {
        $title = "Ubah Penerbit";
        $publishers =   Publisher::where('id', $id)->get();
        return view('contents.publishers.edit', compact('title', 'publishers'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'      =>  'required|min:5|max:15',
            'address'   =>  'required',
            'email'     =>  'required|email',
            'phone'     =>  'required|min:6|max:14', 
        ]);

        Publisher::where('id', $id)->update($validatedData);

        return redirect('/publishers')->with('Berhasil', 'Penerbit '.$request->name.' berhasil dirubah');
    }

    public function delete($id)
    {
        $publishers = Publisher::where('id', $id)->get();
        foreach($publishers as $publisher)
        {
        if($publisher->Book->count() == 0)
        {
            $publisher->delete();
            return redirect('/publishers')->with('Berhasil', 'Penerbit '.$publisher->name.' berhasil dihapus!');
        }
        else
        {
            return redirect('/publishers')->with('Gagal', 'Masih ada buku di penerbit '.$publisher->name.' silahkan kosongkan terlebih dahulu!');
        }
        }
    }
}
