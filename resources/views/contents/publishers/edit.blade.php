@extends('app.main')
@section('content')
<!-- Container Fluid-->
@foreach ($publishers as $publisher)
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Penerbit</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    <!-- Account page navigation-->
    <form action="/publishers/{{ $publisher->id }}/update" method="POST">
        @csrf
        <div class="card mb-4">
            <div class="card-header">
                <p class="h4 text-gray-800">Data Penerbit</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label class="small mb-1" for="inputName">Nama Penerbit</label>
                            <input type="text" name="name" id="inputName" class="form-control"
                                placeholder="Nama Penerbit" value="{{ $publisher->name }}">
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label class="small mb-1" for="inputAlamat">Alamat Penerbit</label>
                            <input type="text" name="address" id="inputAlamat" class="form-control"
                                placeholder="Alamat Penerbit" value="{{ $publisher->address }}">
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmail">Email Penerbit</label>
                            <input type="email" name="email" id="inputEmail" class="form-control"
                                placeholder="Email Penerbit" value="{{ $publisher->email }}">
                        </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <div class="form-group">
                            <label class="small mb-1" for="inputNoTelp">No Telepon Penerbit</label>
                            <input type="number" name="phone" id="inputNoTelp" class="form-control"
                                placeholder="No Telepon Penerbit" value="{{ $publisher->phone }}">
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="float-right">
                            <a href="/publishers" class="btn btn-sm btn-outline-secondary">Kembali</a>
                            <button type="submit" class="btn btn-sm btn-outline-primary">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endforeach
@endsection
