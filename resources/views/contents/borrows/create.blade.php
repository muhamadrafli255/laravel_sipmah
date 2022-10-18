@extends('app.main')

@section('style')
<link rel="stylesheet" href="/css/chosen.min.css">
@endsection
@section('script')
@include('components.scripts.choosen')
@include('components.scripts.momentjs')
@include('components.scripts.datepicker')
@endsection

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 ml-4 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/books">Peminjaman</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <form action="/borrows/store" method="POST">
        @csrf
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Buku</p>
                    </div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid rounded mb-5"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUfytN3doVZit6vSK5E3BngqpmSwoSADfK5Q&usqp=CAU"
                            alt="" width="170px" height="170px">
                        <!-- Profile picture upload button-->
                        <div class="form-group">
                            <div class="col-12">
                            <label for="selectBooks">Pilih Buku</label>
                            <select name="book_id" id="selectBooks" class="form-control @error('book_id')
                                is-invalid
                            @enderror">
                                <option value="">Judul Buku</option>
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ $book->code }} | {{ $book->title }}</option>
                                @endforeach
                            </select>
                            @error('book_id')
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
                <!-- Account details card-->
                <div class="card mb-4 py-2">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Peminjaman</p>
                    </div>
                    <div class="card-body">
                            <div class="col-lg-12 mb-4">
                                <label for="selectBorrower">Nama Peminjam</label>
                                <select name="borrower_id" id="selectBorrower" class="form-control @error('borrower_id')
                                    is-invalid
                                @enderror">
                                    <option value="">Nama | NIS/NUPTK</option>
                                    @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }} | {{ $user->identifier_number }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('borrower_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Form Row-->
                            <!-- Form Group (first name)-->
                            <div class="col-lg-12 mb-4">
                                <div class="form-group" id="simple-date1">
                                    <label for="dateBorrow">Tanggal Pinjam</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <input type="text" name="borrow_date" class="form-control @error('borrow_date')
                                            is-invalid
                                        @enderror" id="dateBorrow" placeholder="Masukkan Tanggal Peminjaman">
                                        @error('borrow_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-4">
                                <div class="form-group" id="simple-date1">
                                    <label for="estimatedReturned">Estimasi Dikembalikan</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <input type="text" name="estimated_returned" class="form-control @error('estimated_returned')
                                            is-invalid
                                        @enderror" id="estimatedReturned" placeholder="Masukkan Tanggal Estimasi Dikembalikan">
                                        @error('estimated_returned')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Form Group (last name)-->
                            <!-- Save changes button-->
                            <div class="col-lg-12">
                                <div class="text-right">
                                    <a href="/borrows" class="btn btn-sm btn-outline-secondary"
                                        type="button">Kembali</a>
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
