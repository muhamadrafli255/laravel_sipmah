@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Penerbit</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <div class="card mb-4">
            <div class="card-header"><p class="h4 text-gray-800">Data Penerbit</p></div>
            <div class="card-body">
        <div class="row">
            <div class="col-lg-12 mb-2">
                <div class="form-group">
                    <label class="small mb-1" for="inputName">Kode Penerbit</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Kode Penerbit" value="PNB - 01" disabled>
                </div>
            </div>
            <div class="col-lg-12 mb-2">
                <div class="form-group">
                    <label class="small mb-1" for="inputName">Nama Penerbit</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Nama Penerbit" value="Gramedia">
                </div>
            </div>
            <div class="col-lg-12 mb-2">
                <div class="form-group">
                    <label class="small mb-1" for="inputAlamat">Alamat Penerbit</label>
                    <input type="text" id="inputAlamat" class="form-control" placeholder="Alamat Penerbit" value="Bandung">
                </div>
            </div>
            <div class="col-lg-12 mb-2">
                <div class="form-group">
                    <label class="small mb-1" for="inputEmail">Email Penerbit</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email Penerbit" value="customercare@gramedia.com">
                </div>
            </div>
            <div class="col-lg-12 mb-2">
                <div class="form-group">
                    <label class="small mb-1" for="inputNoTelp">No Telepon Penerbit</label>
                    <input type="number" id="inputNoTelp" class="form-control" placeholder="No Telepon Penerbit" value="0225405765">
                </div>
            </div>
            <div class="col-lg-12 mt-2">
                <div class="float-right">
                    <a href="/publishers" class="btn btn-sm btn-outline-secondary">Kembali</a>
                    <a href="/publishers/id/update" class="btn btn-sm btn-outline-primary">Ubah</a>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
@endsection