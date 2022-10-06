@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Petugas</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header"><p class="h5 text-gray-800">Foto Profil</p></div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-4" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="170px" height="170px">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4 py-2">
                    <div class="card-header"><p class="h5 text-gray-800">Detail Petugas</p></div>
                    <div class="card-body">
                        <div class="row">
                            {{-- NIS / NUPTK Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">NIS / NUPTK</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: 20221056</h6>
                            </div>
                            {{-- END NIS / NUPTK Detail --}}
                            {{-- Full Name Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Nama Lengkap</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Rudiansyah Fakhrul</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Jenis Kelamin</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Laki - Laki</h6>
                            </div>
                            {{-- End Full Name Detail --}}
                            {{-- Email Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Email</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: rudiansyah@example.com</h6>
                            </div>
                            {{-- End Email Detail --}}
                            {{-- Jenis Kelamin Detail --}}
                            {{-- End Jenis Kelamin Detail --}}
                            {{-- No Telepon Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">No Telepon</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: 083844752389</h6>
                            </div>
                            {{-- End No Telepon Detail --}}
                            {{-- No Telepon Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Alamat</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: JL Junti Hilir</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Desa</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Sangkanhurip</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kecamatan</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Katapang</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kabupaten / Kota</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Bandung</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Provinsi</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Jawa Barat</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kode Pos</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: 40921</h6>
                            </div>
                            {{-- End No Telepon Detail --}}
                            <div class="col-lg-12 mt-2 mb-1">
                                <div class="float-right">
                                    <a href="/officers" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/officers/id/reset" class="btn btn-sm btn-outline-success">Kirim Atur Ulang Kata Sandi</a>
                                    <a href="/officers/id/edit" class="btn btn-sm btn-outline-primary">Ubah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection