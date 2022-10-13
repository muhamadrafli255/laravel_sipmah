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
            'number'        =>  'required',
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
        $categories = DB::table('category_rack')->where('rack_id', $id);
        return view('contents.racks.edit', compact('title', 'categories'));
    }

    public function delete()
    {

    }
}
