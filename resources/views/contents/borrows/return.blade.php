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
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/borrows">Peminjaman</a></li>
            @foreach ($borrows as $borrow)
            <li class="breadcrumb-item active" aria-current="page">{{ $borrow->Borrow->code }}</li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4 mt-4">
                <!-- Profile picture card-->
                <div class="card">
                    <div class="card-header"><p class="h5 text-gray-800">Gambar Buku</p></div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid rounded mb-2" src="/img/book-images/{{ $borrow->Book->image }}" alt="" width="112px" height="112px"></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 py-4">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h5 text-gray-800">Detail Peminjaman</p></div>
                    <div class="card-body">
                        <div class="row">
                            {{-- NIS / NUPTK Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kode Peminjaman</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $borrow->Borrow->code }}</h6>
                            </div>
                            {{-- END NIS / NUPTK Detail --}}
                            {{-- Full Name Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Judul Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $borrow->Book->title }}</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Nama Peminjam</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $borrow->Borrow->Borrower->name }}</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Petugas Peminjam</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $borrow->Borrow->BorrowOfficer->name }}</h6>
                            </div>
                            {{-- End Full Name Detail --}}
                            {{-- Email Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Tanggal Pinjam</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ date('d F Y', strtotime($borrow->Borrow->borrow_date)) }}</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Estimasi Dikembalikan</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ date('d F Y', strtotime($borrow->estimated_return)) }}</h6>
                            </div>
                            {{-- End No Telepon Detail --}}
                            {{-- No Telepon Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Status Peminjaman</h6>
                            </div>
                            <div class="col-lg-9 mb-4">
                                <h6 class="text-muted">: 
                                    @if ($borrow->status_borrow == 1)
                                    <span class="badge badge-warning">Sedang Dipinjam</span>
                                    @else
                                    <span class="badge badge-success">Sudah Dikembalikan</span>
                                    @endif
                                </h6>
                            </div>
                            @endforeach
                            {{-- End No Telepon Detail --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4 py-2">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Pengembalian</p>
                    </div>
                    <div class="card-body">
                            <div class="col-lg-12 mb-4">
                                <form action="/borrows/{{ $borrow->id }}/return" method="POST">
                                @csrf
                                <label for="selectBorrower">Nama Pengembali</label>
                                <select name="returner_id" id="selectBorrower" class="form-control @error('returner_id')
                                    is-invalid
                                @enderror">
                                <option>Nama | NIS/NUPTK</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }} | {{ $user->identifier_number }}
                                </option>
                                @endforeach
                                </select>
                                @error('returner_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Form Row-->
                            <!-- Form Group (first name)-->
                            <div class="col-lg-12 mb-4">
                                <div class="form-group" id="simple-date1">
                                    <label for="dateReturn">Tanggal Kembali</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <input type="text" name="return_date" class="form-control @error('return_date')
                                            is-invalid
                                        @enderror" id="dateReturn" placeholder="Masukkan Tanggal Pengembalian">
                                        @error('return_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-4">
                                <label for="selectCondition">Kondisi</label>
                                <select name="return_condition" id="selectCondition" class="form-control @error('return_condition')
                                    is-invalid
                                @enderror">
                                <option>Pilih Kondisi</option>
                                <option value="1">Baik</option>
                                <option value="2">Rusak</option>
                                <option value="3">Hilang</option>
                                </select>
                                @error('return_condition')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
@endsection