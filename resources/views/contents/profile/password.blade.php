@extends('layouts.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/members">Profil</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-lg-12">
                @if (session('Berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('Berhasil') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            </div>
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h5 text-gray-800">Kata Sandi</p></div>
                    <div class="card-body">
                        <form>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (last name)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="inputLastName">Kata Sandi Saat Ini</label>
                                    <input class="form-control" id="inputLastName" type="password" placeholder="Kata Sandi Saat Ini">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="inputOrgName">Kata Sandi Baru</label>
                                    <input class="form-control" id="inputOrgName" type="password" placeholder="Kata Sandi Baru">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-12">
                                    <label class="small mb-1" for="dd">Konfirmasi Kata Sandi Baru</label>
                                    <input class="form-control" id="dd" type="password" placeholder="Konfirmasi Kata Sandi Baru">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <div class="col-lg-12 mt-4">
                                <div class="text-right">
                                    <a href="/dashboard" class="btn btn-outline-secondary" type="button">Kembali</a>
                                    <a href="/accounts/update" class="btn btn-outline-primary" type="button">Simpan</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection