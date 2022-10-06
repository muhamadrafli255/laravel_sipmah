@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h4 text-gray-800">Data Kategori</p></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputKode">Kode</label>
                                    <input type="text" id="inputKode" class="form-control" value="CTG - 01" disabled>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="selectRak">Rak</label>
                                    <select class="form-control" name="" id="selectRak">
                                        <option value="" selected disabled>Rak</option>
                                        <option value="">RCK - 01</option>
                                        <option value="">RCK - 02</option>
                                        <option value="">RCK - 03</option>
                                        <option value="">RCK - 04</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputName">Nama Kategori</label>
                                    <input type="text" class="form-control" placeholder="Nama Kategori" value="Novel">
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <div class="float-right">
                                    <a href="/categories" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/categories/id/update" class="btn btn-sm btn-outline-primary">Ubah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection