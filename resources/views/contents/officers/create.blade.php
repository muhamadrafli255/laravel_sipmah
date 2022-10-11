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
        <form action="/officers/store" method="POST" enctype="multipart/form-data">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-xl-0">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Foto Profil</p>
                    </div>
                    <div class="card-body text-center">
                            @csrf
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-4 img-thumbnail img-preview"
                            src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="240px" height="520px">
                        <div class="small font-italic text-muted mb-4">JPG atau PNG ukuran kurang dari 5 MB</div>
                        <!-- Profile picture upload button-->
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="form-control-file" name="image" id="image" onchange="previewImage()">
                                <label class="custom-file-label text-left" for="image">Unggah Foto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-5">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Petugas</p>
                    </div>
                    <div class="card-body">
                            <!-- Form Group (username)-->
                            <div class="col-lg-12 mb-3">
                                <label class="small mb-1" for="user">Nama Anggota</label>
                                <select name="user_id" id="user" class="form-control">
                                    <option>Pilih anggota</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name." | ".$user->identifier_number }}</option>
                                    @endforeach
                                </select>
                            </div>
                                <!-- Form Group (first name)-->
                                <div class="col-lg-12">
                                    <label class="small mb-1" for="email">Alamat Email</label>
                                    <input type="email" class="form-control" id="email" value="" disabled>
                                </div>
                            <!-- Save changes button-->
                            <div class="col-lg-12 mt-5">
                                <div class="float-right">
                                    <a href="/officers" class="btn btn-outline-secondary mt-5" type="button">Kembali</a>
                                    <button type="submit" class="btn btn-outline-primary mt-5" type="button">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.scripts.getuser')
@include('components.scripts.preview')
@endsection
