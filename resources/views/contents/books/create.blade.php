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
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <form action="/books/store" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Gambar Buku</p>
                    </div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid mb-4 rounded img-preview"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUfytN3doVZit6vSK5E3BngqpmSwoSADfK5Q&usqp=CAU" alt="" width="170px" height="170px">
                        <div class="small font-italic text-muted mb-4">JPG atau PNG ukuran kurang dari 5 MB</div>
                        <!-- Profile picture upload button-->
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image" onchange="previewImage()">
                                <label class="custom-file-label text-left" for="image">Unggah Foto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Buku</p>
                    </div>
                    <div class="card-body">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputTitle">Judul</label>
                                <input class="form-control" id="inputTitle" type="text"
                                    placeholder="Judul Buku" name="title" value="" required>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputCategory">Kategori</label>
                                    <select name="category_id" id="inputCategory" class="form-control">
                                        <option selected>Kategori Buku</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputWriter">Penulis</label>
                                    <input class="form-control" name="writer" id="inputWriter" type="text"
                                        placeholder="Penulis Buku" value="" required> 
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputStatus">Kondisi</label>
                                    <select name="condition_book" id="inputStatus" class="form-control">
                                        <option selected disabled>Kondisi Buku</option>
                                        <option value="1">Baik</option>
                                        <option value="2">Rusak</option>
                                        <option value="3">Hilang</option>
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputKuantitas">Kuantitas</label>
                                    <input class="form-control" name="quantity"  id="inputKuantitas" type="number"
                                        placeholder="Kuantitas Buku" value="" required> 
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPublisher">Penerbit</label>
                                    <select name="publisher_id" id="inputPublisher" class="form-control">
                                        <option selected>Penerbit Buku</option>
                                        @foreach ($publishers as $publisher)
                                        <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputYear">Tahun Terbit</label>
                                    <input class="form-control" name="publication_year" id="inputYear" type="number" min="1900" max="2022"
                                        placeholder="Tahun Terbit Buku" value="" required> 
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputDescription">Deskripsi</label>
                                <textarea name="synopsis" id="inputDescription" cols="30" rows="10" placeholder="Deskripsi Buku"
                                    class="form-control" required></textarea>
                            </div>
                            <!-- Save changes button-->
                            <div class="col-lg-12">
                                <div class="text-right">
                                    <a href="/books" class="btn btn-outline-secondary" type="button">Kembali</a>
                                    <button type="submit" class="btn btn-outline-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
