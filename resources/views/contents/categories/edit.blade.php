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
        @foreach ($categories as $category)
        <form action="/categories/{{ $category->id }}/update" method="POST">
            @csrf
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
                                    <input type="text" id="inputKode" class="form-control" value="{{ $category->code }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="category">Nama Kategori</label>
                                    <input type="text" class="form-control" id="category" name="name" placeholder="Nama Kategori" value="{{ $category->name }}" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <div class="float-right">
                                    <a href="/categories" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection