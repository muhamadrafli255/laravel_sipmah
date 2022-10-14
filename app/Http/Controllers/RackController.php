<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RackController extends Controller
{
    public function index()
    {
        $title = "Daftar Rak";
        return view('contents.racks.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Rak";
        $categories = Category::get();
        return view('contents.racks.create', compact('title', 'categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'number'        =>  'required|unique:racks',
        ]);

        $racks = Rack::create([
            'number'    =>  $validatedData['number'],
        ]);

        $categories = $request->categories;
        if($categories != null)
        {
        $data = [];
        foreach($categories as $category){
            $data[] = [
                'rack_id'       =>  $racks->id,
                'category_id'   =>  $category,
            ];
        }
        DB::table('category_rack')->insert($data);
        return redirect('/racks')->with('Berhasil', 'Rak '.$request->number.' berhasil ditambahkan!');
        }
        return redirect('/racks')->with('Berhasil', 'Rak '.$request->number.' berhasil ditambahkan!');
    }

    public function detail($id)
    {
        $title = "Detail Rak";
        $racks = Rack::where('id', $id)->get();
        return view('contents.racks.detail', compact('title', 'racks'));
    }

    public function rackCategories($categoryId)
    {
        $title = "Detail Kategori";
        $categories = Category::where('id', $categoryId)->get();
        return view('contents.categories.detail', compact('title', 'categories'));
    }

    public function edit($id)
    {
        $title = "Ubah Rak";
        $racks = Rack::where('id', $id)->get();
        $category = Category::select(['id','name'])->get();
        return view('contents.racks.edit', compact('title', 'racks', 'category'));
    }

    public function update(Request $request, $id)
    {
        if($request->categories == null)
        {
            DB::table('category_rack')->where('rack_id', $id)->delete();
            return redirect('/racks')->with('Berhasil', 'Rak '.$request->number.' berhasil dirubah!');
        }
        else
        {
            DB::table('category_rack')->where('rack_id', $id)->delete();
            $categories = $request->categories;
            $data = [];
            foreach($categories as $category){
            $data[] = [
                'rack_id'       =>  $id,
                'category_id'   =>  $category,
            ];
            }
            DB::table('category_rack')->insert($data);
            return redirect('/racks')->with('Berhasil', 'Rak '.$request->number.' berhasil dirubah!');
        }
    }

    public function delete($id)
    {   
        $racks = DB::table('category_rack')->where('rack_id', $id)->get();
        if($racks->count() == 0)
        {
            Rack::where('id', $id)->delete();
            return redirect('/racks')->with('Berhasil', 'Rak, berhasil dihapus!');
        }
        else
        {
            return redirect('/racks')->with('Gagal', 'Masih ada kategori di dalam rak, silahkan kosongkan terlebih dahulu!');
        }               
    }
}