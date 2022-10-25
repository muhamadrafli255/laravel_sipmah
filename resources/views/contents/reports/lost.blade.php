@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/reports">Laporan</a></li>
            @foreach ($borrows as $borrow)
            <li class="breadcrumb-item"><a href="/borrows/{{ $borrow->id }}">{{ $borrow->Borrow->code }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
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
                        <img class="img-fluid rounded mb-3" src="/img/book-images/{{ $borrow->Book->image }}" alt="" width="188px" height="188px">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4 mb-xl-0">
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
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Nama Pengembali</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $borrow->Returner->name }}</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Petugas Pengembali</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ $borrow->ReturnOfficer->name }}</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Tanggal Kembali</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: {{ date('d F Y', strtotime($borrow->return_date)) }}</h6>
                            </div>
                            {{-- End No Telepon Detail --}}
                            {{-- No Telepon Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Status Peminjaman</h6>
                            </div>
                            <div class="col-lg-9 mb-4">
                                @if ($borrow->status_borrow == 1)
                                <h6 class="text-muted">: <span class="badge badge-warning">Sedang Dipinjam</span></h6>
                                @else
                                <h6 class="text-muted">: <span class="badge badge-success">Sudah Dikembalikan</span></h6>
                                @endif
                            </div>
                            {{-- End No Telepon Detail --}}
                            <div class="col-lg-12 mt-3 mb-2">
                                <div class="float-right">
                                    <a href="/reports" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/borrows/{{ $borrow->id }}/return" class="btn btn-sm btn-outline-success">Pengembalian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection