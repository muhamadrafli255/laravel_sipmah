<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BookController extends Controller
{
    public function index()
    {
        $title = "Daftar Buku";
        return view('contents.books.index', compact('title'));
    }

    public function create()
    {
        $title = "Tambah Buku";
        $categories = Category::get();
        $publishers = Publisher::get();
        return view('contents.books.create', compact('title', 'categories', 'publishers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'             =>  'required',
            'category_id'       =>  'required',
            'writer'            =>  'required',
            'condition_book'    =>  'required',
            'publisher_id'      =>  'required',
            'publication_year'  =>  'required',
            'synopsis'          =>  'required',
            'image'             =>  'required|image|file|max:5120',
        ]);

        $total = $request->quantity;

        for($i=0; $i<$total; $i++)
        {
            Book::create($validatedData);
        }
        return redirect('/books')->with('Berhasil', 'Buku '.$request->title.' berhasil ditambahkan!');
    }

    public function detail($id)
    {
        $title  = "Detail Buku";
        $books  = Book::where('id', $id)->get();
        return view('contents.books.detail', compact('title', 'books'));
    }

    public function edit($id)
    {
        $title      = "Ubah Buku";
        $books      = Book::where('id', $id)->get();
        $categories = Category::get();
        $publishers = Publisher::get();
        return view('contents.books.edit', compact('title', 'books', 'categories', 'publishers'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title'             =>  'required',
            'category_id'       =>  'required',
            'writer'            =>  'required',
            'condition_book'    =>  'required',
            'publisher_id'      =>  'required',
            'publication_year'  =>  'required',
            'synopsis'          =>  'required',
            'image'             =>  'image|file|max:5120',
        ]);

        if($request->image != null)
        {
            $image = $request->file('image');
            $validatedData['image'] = time().'.'.$image->extension();
        
            $destinationPath = public_path('/img/thumbnail');
            $img = Image::make($image->path());
            $img->resize(350, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$validatedData['image']);
    
            $destinationPath = public_path('/img/profile-images');
            $image->move($destinationPath, $validatedData['image']);

            Book::where('id', $request->id)->update($validatedData);
        }
        else
        {
            Book::where('id', $request->id)->update([
                'title'             =>  $validatedData['title'],
                'category_id'       =>  $validatedData['category_id'],
                'writer'            =>  $validatedData['writer'],
                'condition_book'    =>  $validatedData['condition_book'],
                'publisher_id'      =>  $validatedData['publisher_id'],
                'publication_year'  =>  $validatedData['publication_year'],
                'synopsis'          =>  $validatedData['synopsis'],
            ]);
        }

        return redirect('/books')->with('Berhasil', 'Buku dengan judul '.$request->title.' berhasil diperbarui!');
}

    public function delete()
    {
        
    }
}
