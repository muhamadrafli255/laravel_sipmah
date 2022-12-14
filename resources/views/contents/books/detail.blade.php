@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/books">Buku</a></li>
            @foreach ($books as $book)
            <li class="breadcrumb-item active" aria-current="page">{{ $book->title }}</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header"><p class="h5 text-gray-800">Gambar Buku</p></div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                            <img class="img-account-profile rounded mb-4" src="{{ asset('img/book-images/' . $book->image) }}" alt="{{ $book->image }}" height="290px" width="200px">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4 py-2">
                    <div class="card-header"><p class="h5 text-gray-800">Detail Buku</p></div>
                    <div class="card-body">
                        <div class="row">
                            {{-- NIS / NUPTK Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kode Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $book->code }}</h6>
                            </div>
                            {{-- END NIS / NUPTK Detail --}}
                            {{-- Full Name Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Judul Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $book->title }}</h6>
                            </div>
                            {{-- End Full Name Detail --}}
                            {{-- Email Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Sinopsis Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $book->synopsis }}</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kategori Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                    <h6 class="text-muted">: {{ $book->Category->name }}</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Penulis</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $book->writer }}</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Penerbit Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $book->Publisher->name }}</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Tahun Terbit</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $book->publication_year }}</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kondisi Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                @if ($book->condition_book == 1)
                                <h6 class="text-muted">: <span class="badge badge-success">Baik</span></h6>
                                @elseif ($book->condition_book == 2)
                                <h6 class="text-muted">: <span class="badge badge-warning">Rusak</span></h6>
                                @elseif ($book->condition_book == 3)
                                <h6 class="text-muted">: <span class="badge badge-danger">Hilang</span></h6>
                                @endif
                            </div>
                            <div class="col-lg-12 mt-2 mb-1">
                                @if (auth()->user()->role_id == 1)
                                <div class="float-right">
                                    <a href="/books" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/books/{{ $book->id }}/edit" class="btn btn-sm btn-outline-primary">Ubah</a>
                                    <a href="/books/{{ $book->id }}/delete" class="btn btn-sm btn-outline-danger">Hapus</a>
                                </div>
                                @elseif(auth()->user()->role_id == 2)
                                <div class="float-right">
                                    <a href="/books" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/books/{{ $book->id }}/edit" class="btn btn-sm btn-outline-primary">Ubah</a>
                                    <a href="/books/{{ $book->id }}/delete" class="btn btn-sm btn-outline-danger">Hapus</a>
                                </div>
                                @else
                                <div class="float-right">
                                    <a href="/books" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection