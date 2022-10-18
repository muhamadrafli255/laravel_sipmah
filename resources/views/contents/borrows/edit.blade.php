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
            <li class="breadcrumb-item"><a href="/borrows">Peminjaman</a></li>
            @foreach ($borrows as $borrow)
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <form action="/borrows/{{ $borrow->id }}/update" method="POST">
            @csrf
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Buku</p>
                    </div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid rounded mb-4"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUfytN3doVZit6vSK5E3BngqpmSwoSADfK5Q&usqp=CAU"
                            alt="" width="75px" height="75px">
                        <!-- Profile picture upload button-->
                        <div class="form-group">
                            <label for="ubahBuku">Ubah Buku</label>
                            <select name="book_id" id="selectBooks" class="form-control">
                                <option value="{{ $borrow->book_id }}">{{ $borrow->Book->code }} | {{ $borrow->Book->title }}</option>
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ $book->code }} | {{ $book->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Peminjaman</p>
                    </div>
                    <div class="card-body">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="selectBorrower">Nama Peminjam</label>
                                <select name="borrower_id" id="selectBorrower" class="form-control">
                                    <option value="{{ $borrow->borrower_id }}">{{ $borrow->user->name }} | {{ $borrow->user->identifier_number }}</option>
                                    @foreach ($users as $user)ß
                                    <option value="{{ $user->id }}">{{ $user->name }} | {{ $user->identifier_number }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-lg-12">
                                    <label class="small mb-1" for="estimatedReturned">Estimasi Dikembalikan</label>
                                    <input type="text" class="form-control" name="estimated_return" id="estimatedReturned" value="{{ $borrow->estimated_return }}" placeholder="Masukkan Tanggal Estimasi Dikembalikan" required>
                                </div>
                            </div>
                                <!-- Form Group (last name)-->
                            <!-- Save changes button-->
                            <div class="col-lg-12">
                                <div class="text-right">
                                    <a href="/borrows" class="btn btn-sm btn-outline-secondary" type="button">Kembali</a>
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Ubah</button>
                                </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
