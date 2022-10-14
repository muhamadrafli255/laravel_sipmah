@extends('app.main')

@section('script')
    @include('components.scripts.preview')
@endsection

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 ml-4 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/books">Buku</a></li>
            @foreach ($books as $book)
            <li class="breadcrumb-item"><a href="/books/{{ $book->id }}">{{ $book->title  }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <form action="/books/{{ $book->id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Gambar Buku</p>
                    </div>
                    <div class="card-body text-center">
                        <img class="img-fluid rounded mb-4 img-preview"
                            src="/img/book-images/{{ $book->image }}"
                            alt="{{ $book->image }}" width="170px" height="170px">
                        <div class="small font-italic text-muted mb-4">JPG atau PNG ukuran kurang dari 5 MB</div>
                        <!-- Profile picture upload button-->
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image')
                                    is-invalid
                                @enderror" name="image" id="image" onchange="previewImage()">
                                <label class="custom-file-label text-left" for="image">Unggah Foto</label>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Buku</p>
                    </div>
                    <div class="card-body">
                            <div class="mb-3">
                                <label class="small mb-1" for="inputTitle">Judul</label>
                                <input class="form-control @error('title')
                                    is-invalid
                                @enderror" id="inputTitle" type="text" name="title" placeholder="Judul Buku"
                                    value="{{ $book->title }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputCategory">Kategori</label>
                                    <select name="category_id" id="inputCategory" class="form-control @error('category_id')
                                        is-invalid
                                    @enderror">
                                        <option value="{{ $book->category_id }}" selected>{{ $book->Category->name }}</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputWriter">Penulis</label>
                                    <input class="form-control @error('writer')
                                        is-invalid
                                    @enderror" id="inputWriter" type="text" name="writer" placeholder="Penulis Buku"
                                        value="{{ $book->writer }}" required>
                                        @error('writer')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-12">
                                    <label class="small mb-1" for="inputStatus">Kondisi</label>
                                    <select name="condition_book" id="inputStatus" class="form-control @error('condition_book')
                                        is-invalid
                                    @enderror">
                                        <option value="1">Baik</option>
                                        <option value="2">Rusak</option>
                                        <option value="3">Hilang</option>
                                    </select>
                                    @error('condition_book')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPublisher">Penerbit</label>
                                    <select name="publisher_id" id="inputPublisher" class="form-control">
                                        <option value="{{ $book->publisher_id }}">{{ $book->Publisher->name }}</option>
                                        @foreach ($publishers as $publisher)                                            
                                        <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputYear">Tahun Terbit</label>
                                    <input class="form-control" id="inputYear" type="number" name="publication_year" min="1900" max="2022"
                                        placeholder="Tahun Terbit Buku" value="{{ $book->publication_year }}" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputDescription">Sinopsis</label>
                                <textarea name="synopsis" id="inputDescription" cols="30" rows="10" placeholder="Deskripsi Buku"
                                    class="form-control" required>{{ $book->synopsis }}</textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-right">
                                    <a href="/books" class="btn btn-outline-secondary" type="button">Kembali</a>
                                    <button type="submit" class="btn btn-outline-primary">Ubah</button>
                                </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
