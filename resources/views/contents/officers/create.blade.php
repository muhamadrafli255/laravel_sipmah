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
                    <div class="card-header">
                        <p class="h5 text-gray-800">Foto Profil</p>
                    </div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-4"
                            src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="170px" height="170px">
                        <div class="small font-italic text-muted mb-4">JPG atau PNG ukuran kurang dari 5 MB</div>
                        <!-- Profile picture upload button-->
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" value="Pilih" id="customFile">
                                <label class="custom-file-label text-left" for="customFile">Unggah Foto</label>
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
                        <form>
                            <!-- Form Group (username)-->
                            <div class="col-lg-12 mb-3">
                                <label class="small mb-1" for="selectName">Nama Anggota</label>
                                <select name="" id="selectName" class="form-control">
                                    <option value="" selected disabled>Pilih anggota</option>
                                    <option value="">Rudiansyah Fakhrul | 20221056</option>
                                    <option value="">Jujun Saputra| 20221057</option>
                                    <option value="">Dani Fitriani | 20221058</option>
                                    <option value="">Andara Amanda | 20221059</option>
                                    <option value="">Queensha Marsya | 20221060</option>
                                    <option value="">Raina Aqila | 20221061</option>
                                </select>
                            </div>
                                <!-- Form Group (first name)-->
                                <div class="col-lg-12">
                                    <label class="small mb-1" for="inputFirstName">Alamat Email</label>
                                    <input class="form-control" id="inputEmail" type="email"
                                        placeholder="Email Petugas" value="rudiansyah@example.com" disabled>
                                </div>
                            <!-- Save changes button-->
                            <div class="col-lg-12 mt-5">
                                <div class="float-right">
                                    <a href="/officers" class="btn btn-outline-secondary mt-5" type="button">Kembali</a>
                                    <a href="/officers/store" class="btn btn-outline-primary mt-5" type="button">Tambah</a>
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
