@extends('app.main')

@section('style')
    @include('components.styles.datatable')
@endsection

@section('script')
    @include('components.scripts.momentjs')
    @include('components.scripts.datatable')
    @include('components.scripts.categoriesid')
    <script src="/app/booksoncategories/index.js"></script>
@endsection

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/categories">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="col-lg-12 mt-3">
                    <div class="float-left">
                        <h5 class="m-2">Buku Dalam Kategori</h5>
                        @foreach ($categories as $category)
                        <h6 class="m-2">Nama Kategori : {{ $category->name }}</h6>
                        <h6 class="m-2">Jumlah Buku : {{ $category->Book->count() }}</h6>
                        @endforeach
                    </div>
                    <div class="float-right ml-2">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-search"></i></span>
                            </div>
                            <input type="text" id="SearchBox" class="form-control form-control-sm dt-search"
                                placeholder="Masukan Kata Kunci" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="float-right">
                        <select name="lengthMenu" id="lengthMenu" class="form-control form-control-sm dt-length">
                            <option value="10">10</option>
                            <option value="19">20</option>
                            <option value="49">50</option>
                            <option value="99">100</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-bordered table-striped table-hover w-100"
                        id="dtBookOnCategory">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Judul Buku</th>
                                <th class="px-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Nonaktif-->
<div class="modal fade" id="nonaktifModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin akan menghapus buku ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tidak</button>
                <a href="/books/id/destroy" class="btn btn-outline-danger">Ya</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Kategori < 0 -->
<div class="modal fade" id="nonaktifModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Masih ada buku di dalam kategori ini, silahkan pindahkan terlebih dahulu
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
    @endsection
