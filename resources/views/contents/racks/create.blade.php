@extends('app.main')

@section('style')
    <link rel="stylesheet" href="/css/chosen.min.css">
@endsection

@section('script')
    @include('components.scripts.choosen')
    <script src="/js/chosen.jquery.min.js"></script>
@endsection

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Rak</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <form action="/racks/store" method="POST">
                @csrf
                <div class="card mb-4">
                    <div class="card-header"><p class="h4 text-gray-800">Data Rak</p></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputNumber">Nomor Rak</label>
                                    <input type="number" name="number" id="inputNumber" class="form-control" placeholder="Nomor">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="small mb-1" for="selectKategori">Kategori</label>
                                <select class="form-control" name="categories[]" id="selectKategori" multiple="" data-placeholder="Pilih Kategori">
                                    @foreach ($categories as $category)ß
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                            <div class="col-lg-12 mt-2">
                                <div class="float-right">
                                    <a href="/racks" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection