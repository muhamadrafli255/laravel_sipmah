@extends('app.main')

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/accounts">Akun</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kata Sandi</li>
            <li class="breadcrumb-item active" aria-current="page">Ubah</li>
        </ol>
    </div>

    @if (session('Berhasil'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('Berhasil') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if (session('Gagal'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('Gagal') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form action="/accounts/{{ auth()->user()->id }}/password" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header"><p class="h5 text-gray-800">Data Kata Sandi</p></div>
                <div class="card-body">
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPassword">Kata Sandi Lama</label>
                            <input class="form-control @error('password')
                                is-invalid
                            @enderror" id="inputPassword" type="password" name="password" placeholder="Kata sandi lama">
                            @error('password')
                                <div class="invalida-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputNewPassword">Kata Sandi Baru</label>
                            <input class="form-control @error('new_password')
                                is-invalid
                            @enderror" id="inputNewPassword" type="password" name="new_password" placeholder="Kata sandi baru">
                            @error('new_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputConfirmNewPassword">Konfirmasi Kata Sandi Baru</label>
                            <input class="form-control @error('confirm_password')
                                is-invalid
                            @enderror" id="inputConfirmNewPassword" type="password" name="confirm_password" placeholder="Konfirmasi kata sandi baru">
                            @error('confirm_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Form Group (email address)-->
                        <!-- Save changes button-->
                        <div class="col-lg-12">
                            <div class="text-right">
                                <a href="/members" class="btn btn-outline-secondary" type="button">Kembali</a>
                                <button type="submit" class="btn btn-outline-primary" type="button">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection