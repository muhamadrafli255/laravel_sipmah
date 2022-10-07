@extends('app.main')

@section('script')
    @include('components.scripts.preview')
@endsection

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 ml-4 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/members">Anggota</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <form action="/members/store" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
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
                <div class="card mb-4">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Anggota</p>
                    </div>
                    <div class="card-body">
                            <div class="mb-3">
                                <label class="small mb-1" for="inputIdentifierNumber">NIS / NUPTK</label>
                                <input class="form-control @error('identifier_number')
                                    is-invalid
                                @enderror" id="inputIdentifierNumber" name="identifier_number" type="number"
                                    placeholder="NIS / NUPTK Anggota" required>
                                @error('identifier_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="inputFullName">Nama Lengkap</label>
                                    <input class="form-control @error('name')
                                        is-invalid
                                    @enderror" id="inputFullName" name="name" type="text"
                                        placeholder="Nama Lengkap Anggota" value="" required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="selectGender">Jenis Kelamin</label>
                                    <select name="gender" id="selectGender" class="form-control @error('gender')
                                        is-invalid
                                    @enderror" required>
                                    @error('gender')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                        <option selected disabled>Jenis Kelamin</option>
                                        <option value="1">Laki - Laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="inputEmail">Alamat Email</label>
                                    <input class="form-control @error('email')
                                        is-invalid
                                    @enderror" id="inputEmail" name="email" type="email"
                                        placeholder="Alamat Email" value="" required> 
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="inputPhone">No Telepon</label>
                                    <input class="form-control @error('phone')
                                        is-invalid
                                    @enderror" id="inputPhone" name="phone" type="number"
                                        placeholder="No Telepon Anggota" value="" required>
                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label class="small mb-1" for="inputAddress">Alamat</label>
                                    <textarea name="address" id="inputAddress" cols="30" rows="10" placeholder="Alamat Lengkap Anggota"
                                        class="form-control @error('address')
                                            is-invalid
                                        @enderror" required></textarea>
                                        @error('address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="selectProvince">Provinsi</label>
                                    <select class="form-control" name="" id="selectProvince" required>
                                        <option value="" selected disabled>Provinsi</option>
                                        <option value="1">Jawa Barat</option>
                                        <option value="2">Jawa Tengah</option>
                                        <option value="3">Jawa Timur</option>
                                        <option value="4">Sumatera Barat</option>
                                        <option value="5">Sumatera Utara</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="selectCity">Kabupaten / Kota</label>
                                    <select class="form-control" name="" id="selectCity" required>
                                        <option value="" selected disabled>Kabupaten / Kota</option>
                                        <option value="1">Bandung</option>
                                        <option value="2">Kota Bandung</option>
                                        <option value="3">Purwakarta</option>
                                        <option value="4">Bogor</option>
                                        <option value="5">Cianjur</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="selectDistrict">Kecamatan</label>
                                    <select class="form-control" id="selectDistrict" required>
                                        <option value="" selected disabled>Kecamatan</option>
                                        <option value="1">Katapang</option>
                                        <option value="2">Arjasari</option>
                                        <option value="3">Baleendah</option>
                                        <option value="4">Kutawaringin</option>
                                        <option value="5">Cangkuang </option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="selectSubDistrict">Desa</label>
                                    <select class="form-control" id="selectSubDistrict" name="sub_district_id" required>
                                        <option value="" selected disabled>Desa</option>
                                        <option value="3204180010">Sangkanhurip</option>
                                        <option value="">Sukamukti</option>
                                        <option value="">Cilampeni</option>
                                        <option value="">Gandasari</option>
                                        <option value="">Katapang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-right">
                                    <a href="/members" class="btn btn-outline-secondary" type="button">Kembali</a>
                                    <button type="submit" class="btn btn-outline-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
