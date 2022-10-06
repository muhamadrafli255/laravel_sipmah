@extends('app.auth')

@include('components.scripts.select2')
<link rel="stylesheet" href="/plugins/css/select2.min.css">
<script src="/app/address/index.js"></script>

@section('content')
<!-- Login Content -->
<div class="container-login mt-5">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Registrasi</h1>
                                </div>
                                <form class="user" action="/register" method="POST">
                                    @method('post')
                                    @csrf
                                    <div class="form-group">
                                        <input type="number" class="form-control @error('identifier_number') is-invalid
                                            @enderror" name="identifier_number" placeholder="NIS / NUPTK">
                                            @error('identifier_number')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('name') is-invalid
                                        @enderror" name="name" placeholder="Nama">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid
                                        @enderror" name="email" placeholder="Email">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control @error('gender') is-invalid
                                        @enderror" name="gender">
                                            <option value="" selected disabled>Jenis Kelamin</option>
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control @error('phone') is-invalid
                                        @enderror" name="phone" placeholder="No Telepon">
                                        @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                    <label class="mt-2" for="exampleFormControlSelect1">Alamat</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control" id="iProvince">
                                                    <option value="" selected disabled>Provinsi</option>
                                                    <option value="">Jawa Barat</option>
                                                    <option value="">Jawa Timur</option>
                                                    <option value="">Jawa Tengah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control" id="iCity2">
                                                    <option value="" selected disabled>Kabupaten / Kota</option>
                                                    <option value="">Bandung</option>
                                                    <option value="">Kota Bandung</option>
                                                    <option value="">Purwakarta</option>
                                                    <option value="">Bogor</option>
                                                    <option value="">Cianjur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option value="" selected disabled>Kecamatan</option>
                                                    <option value="">Katapang</option>
                                                    <option value="">Arjasari</option>
                                                    <option value="">Baleendah</option>
                                                    <option value="">Kutawaringin</option>
                                                    <option value="">Cangkuang </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control @error('subDistrict') is-invalid
                                                @enderror" name="subDistrict">
                                                    <option value="" selected disabled>Desa</option>
                                                    <option value="3204180009">Sangkanhurip</option>
                                                    <option value="3204180010">Sukamukti</option>
                                                    <option value="3204180006">Cilampeni</option>
                                                    <option value="3204180004">Gandasari</option>
                                                    <option value="3204180005">Katapang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control @error('address') is-invalid
                                                @enderror" name="address" rows="3"
                                                    placeholder="Alamat Lengkap"></textarea>
                                                    @error('address')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Registrasi</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p>Sudah punya akun? <a class="font-weight-bold" href="/">Masuk!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Content -->
@endsection
