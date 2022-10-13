@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Petugas</a></li>
            @foreach ($users as $user)
            <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
        </ol>
    </div>
    <!-- Account page navigation-->
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">
                    <p class="h5 text-gray-800">Foto Profil</p>
                </div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    @if ($user->image == null)
                    <img class="img-account-profile img-thumbnail rounded-circle mb-4" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                        width="170px" height="170px">
                    @else
                    <img class="img-account-profile rounded-circle mb-4"
                        src="{{ asset('img/profile-images/' . $user->image) }}" alt="{{ $user->image }}" width="170px"
                        height="170px">
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4 py-2">
                <div class="card-header">
                    <p class="h5 text-gray-800">Detail Petugas</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- NIS / NUPTK Detail --}}
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">NIS / NUPTK</h6>
                        </div>
                        <div class="col-lg-9">
                            <h6 class="text-muted">: {{ $user->identifier_number }}</h6>
                        </div>
                        {{-- END NIS / NUPTK Detail --}}
                        {{-- Full Name Detail --}}
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">Nama Lengkap</h6>
                        </div>
                        <div class="col-lg-9">
                            <h6 class="text-muted">: {{ $user->name }}</h6>
                        </div>
                        {{-- End Full Name Detail --}}
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">Jenis Kelamin</h6>
                        </div>
                        <div class="col-lg-9">
                            @if ($user->gender == 1)
                            <h6 class="text-muted">: Laki - Laki</h6>
                            @else
                            <h6 class="text-muted">: Perempuan</h6>
                            @endif
                        </div>
                        {{-- Email Detail --}}
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">Alamat Email</h6>
                        </div>
                        <div class="col-lg-9">
                            <h6 class="text-muted">: {{ $user->email }}</h6>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">No Telepon</h6>
                        </div>
                        <div class="col-lg-9">
                            <h6 class="text-muted">: {{ $user->phone }}</h6>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">Alamat</h6>
                        </div>
                        <div class="col-lg-9">
                            <h6 class="text-muted">: {{ $user->address }}</h6>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">Desa</h6>
                        </div>
                        <div class="col-lg-9">
                            <h6 class="text-muted">: {{ $user->SubDistrict->name }}</h6>
                        </div>
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">Kecamatan</h6>
                        </div>
                        <div class="col-lg-9">
                            @foreach ($districts as $district)
                            <h6 class="text-muted">: {{ $district->name }}</h6>
                            @endforeach
                        </div>
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">Kabupaten / Kota</h6>
                        </div>
                        <div class="col-lg-9">
                            @foreach ($cities as $city)
                            <h6 class="text-muted">: {{ $city->name }}</h6>
                            @endforeach
                        </div>
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">Provinsi</h6>
                        </div>
                        <div class="col-lg-9">
                            @foreach ($provinces as $province)
                            <h6 class="text-muted">: {{ $province->name }}</h6>
                            @endforeach
                        </div>
                        {{-- End No Telepon Detail --}}
                        <div class="col-lg-3">
                            <h6 class="text-gray-800">Status</h6>
                        </div>
                        <div class="col-lg-9">
                            :
                            @if ($user->status == 1)
                            <span class="badge badge-success">
                                Aktif
                            </span>
                            @else
                            <span class="badge badge-danger">
                                Non Aktif
                            </span>
                            @endif
                        </div>
                        <div class="col-lg-12 mt-2 mb-1">
                            <div class="float-right">
                                <a href="/officers" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                <a href="/officers/{{ $user->id }}/reset" class="btn btn-sm btn-outline-success">Kirim
                                    Atur Ulang Kata Sandi</a>
                                <a href="/officers/{{ $user->id }}/edit" class="btn btn-sm btn-outline-primary">Ubah</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
