<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rack;
use App\Models\RackCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index()
    {
        $title = "Daftar Kategori";
        return view('contents.categories.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Kategori";
        return view('contents.categories.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'  =>  'required|unique:categories'
        ]);

        $category = Category::create($validatedData);


        return redirect('/categories')->with('Berhasil', 'Kategori '.$request->name.' dengan kode '.$category->code.' berhasil ditambahkan!');
    }

    public function detail($id)
    {
        $title = "Detail Kategori";
        $categories = Category::where('id', $id)->get();
        return view('contents.categories.detail', compact('title', 'categories'));
    }

    public function edit($id)
    {
        $title = "Ubah Kategori";
        $categories = Category::where('id', $id)->get();
        $racks = Rack::get();
        return view('contents.categories.edit', compact('title', 'categories', 'racks'));
    }

    public function update(Request $request, $id)
    {
        $validatedData  =   $request->validate([
            'name'  =>  'required',
        ]);

        Category::where('id', $id)->update($validatedData);

        return redirect('/categories')->with('Berhasil', 'Kategori '.$request->name.' berhasil dirubah!');
    }

    public function delete($id)
    {
        $categories = Category::where('id', $id)->get();
        foreach($categories as $category)
        {
        if($category->Book->count() >= 1){
            return redirect('/categories')->with('Gagal', 'Masih ada buku didalam kategori ' .$category->name.','.' silahkan kosongkan terlebih dahulu!');
        }
        else
        {
            $category->delete();
            return redirect('/categories')->with('Berhasil', 'Kategori ' .$category->name. ' berhasil dihapus!');
        }
        }
    }
}
