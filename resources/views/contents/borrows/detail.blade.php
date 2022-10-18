@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/borrows">Peminjaman</a></li>
            @foreach ($borrows as $borrow)
            <li class="breadcrumb-item active" aria-current="page">{{ $borrow->code }}</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h5 text-gray-800">Gambar Buku</p></div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid rounded mb-1" src="/img/book-images/{{ $borrow->Book->image }}" alt="" width="223px" height="223px"></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h5 text-gray-800">Detail Peminjaman</p></div>
                    <div class="card-body">
                        <div class="row">
                            {{-- NIS / NUPTK Detail --}}
                            <div class="col-lg-5">
                                <h6 class="text-gray-800">Kode Peminjaman</h6>
                            </div>
                            <div class="col-lg-7">
                                <h6 class="text-muted">: {{ $borrow->code }}</h6>
                            </div>
                            {{-- END NIS / NUPTK Detail --}}
                            {{-- Full Name Detail --}}
                            <div class="col-lg-5">
                                <h6 class="text-gray-800">Judul Buku</h6>
                            </div>
                            <div class="col-lg-7">
                                <h6 class="text-muted">: {{ $borrow->Book->title }}</h6>
                            </div>
                            <div class="col-lg-5">
                                <h6 class="text-gray-800">Nama Peminjam</h6>
                            </div>
                            <div class="col-lg-7">
                                <h6 class="text-muted">: {{ $borrow->user->name }}</h6>
                            </div>
                            <div class="col-lg-5">
                                <h6 class="text-gray-800">Petugas Peminjam</h6>
                            </div>
                            <div class="col-lg-7">
                                @foreach ($borrowofficers as $borrowofficer)
                                <h6 class="text-muted">: {{ $borrowofficer->name }}</h6>
                                @endforeach
                            </div>
                            {{-- End Full Name Detail --}}
                            {{-- Email Detail --}}
                            <div class="col-lg-5">
                                <h6 class="text-gray-800">Tanggal Pinjam</h6>
                            </div>
                            <div class="col-lg-7">
                                <h6 class="text-muted">: {{ date('d F Y', strtotime($borrow->borrow_date)) }}</h6>
                            </div>
                            <div class="col-lg-5">
                                <h6 class="text-gray-800">Estimasi Dikembalikan</h6>
                            </div>
                            <div class="col-lg-7">
                                <h6 class="text-muted">: {{ date('d F Y', strtotime($borrow->estimated_return)) }}</h6>
                            </div>
                            <div class="col-lg-5">
                                <h6 class="text-gray-800">Nama Pengembali</h6>
                            </div>
                            <div class="col-lg-7">
                                @foreach ($returners as $returner)
                                <h6 class="text-muted">: {{ $returner->name }}</h6>
                                @endforeach
                            </div>
                            <div class="col-lg-5">
                                <h6 class="text-gray-800">Petugas Pengembalian</h6>
                            </div>
                            <div class="col-lg-7">
                                @foreach ($returnofficers as $returnofficer)
                                <h6 class="text-muted">: {{ $returnofficer->name }}</h6>
                                @endforeach
                            </div>
                            <div class="col-lg-5">
                                <h6 class="text-gray-800">Tanggal Kembali</h6>
                            </div>
                            <div class="col-lg-7">
                                <h6 class="text-muted">: {{ date('d F Y', strtotime($borrow->return_date)) }}</h6>
                            </div>
                            {{-- End No Telepon Detail --}}
                            {{-- No Telepon Detail --}}
                            <div class="col-lg-5">
                                <h6 class="text-gray-800">Status Peminjaman</h6>
                            </div>
                            <div class="col-lg-7 mb-3">
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
                            <div class="col-lg-12 mt-2 mb-1">
                                <div class="float-right">
                                    @if ($borrow->status_borrow == 1)
                                    <a href="/borrows" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/borrows{{ $borrow->id }}/return" class="btn btn-sm btn-outline-success">Pengembalian</a>
                                    @else
                                    <a href="/borrows" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Nonaktif-->
<div class="modal fade" id="modalPengembalian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="col-lg-12 mb-2">
                        <label for="selectPengembali">Nama Pengembali</label>
                        <select name="" id="selectPengembali" class="form-control">
                            <option value="" selected disabled>Nama Pengembali</option>
                            <option value="">Robi Firmansyah</option>
                            <option value="">Dani Fitriani</option>
                            <option value="">Dodi Permana</option>
                            <option value="">Queensha Marsya</option>
                        </select>
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label for="inputDate">Tanggal Kembali</label>
                        <input type="date" id="inputDate" class="form-control" placeholder="Tanggal Kembali">
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label for="selectKondisi">Kondisi</label>
                        <select name="" id="selectKondisi" class="form-control">
                            <option value="" selected disabled>Kondisi Buku</option>
                            <option value="">Baik</option>
                            <option value="">Rusak</option>
                            <option value="">Hilang</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Batal</button>
                <a href="/borrows/id/return" class="btn btn-sm btn-outline-success">Kembalikan</a>
            </div>               
        </div>
    </div>
</div>
@endsection