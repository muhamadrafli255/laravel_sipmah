@extends('app.auth')
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
                                            @enderror" name="identifier_number" placeholder="NIS / NUPTK" required>
                                            @error('identifier_number')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('name') is-invalid
                                        @enderror" name="name" placeholder="Nama" required>
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid
                                        @enderror" name="email" placeholder="Email" required>
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control @error('gender') is-invalid
                                        @enderror" name="gender" required>
                                            <option value="" selected disabled>Jenis Kelamin</option>
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control @error('phone') is-invalid
                                        @enderror" name="phone" placeholder="No Telepon" required>
                                        @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control" id="province" name="province" required>
                                                    <option value="">Provinsi</option>
                                                    @foreach ($provinces as $province)
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control" id="cities" name="cities" required>
                                                    <option value="">Kabupaten / Kota</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control" id="districts" name="districts" required>
                                                    <option value="">Kecamatan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control @error('subDistrict') is-invalid
                                                @enderror" name="subDistrict" id="sub_districts" required>
                                                    <option value="">Desa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control @error('address') is-invalid
                                                @enderror" name="address" rows="3"
                                                    placeholder="Alamat Lengkap" required></textarea>
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
@include('components.scripts.selectchange')
<!-- Login Content -->
@endsection
