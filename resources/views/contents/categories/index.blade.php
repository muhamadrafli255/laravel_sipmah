@extends('app.main')

@section('style')
    @include('components.styles.datatable')
@endsection

@section('script')
    @include('components.scripts.momentjs')
    @include('components.scripts.datatable')
    <script src="/app/categories/index.js"></script>
@endsection

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @if (session('Berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('Berhasil') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="card mb-4 dt-container">
                <div class="col-lg-12 mt-3">
                    <div class="btn-group dropright">
                        <button type="button" class="btn btn-sm btn-outline-secondary rounded mb-2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-download"></i>
                        </button>
                        <div class="dropdown-menu w-100 text-center">
                            <button class="btn btn-sm btn-success col w-75 mb-2 dt-excel"><i class="fa-solid fa-file-excel"></i> Excel</button>
                            <button class="btn btn-sm btn-danger col w-75 mb-2 dt-pdf"><i class="fa-solid fa-file-pdf"></i> PDF</button>
                            <button class="btn btn-sm btn-secondary col w-75 mb-2 dt-print"><i class="fa-solid fa-print"></i> Print</button>
                        </div>
                    </div>
                    <a href="/categories/create" class="btn btn-sm btn-outline-primary rounded mb-2"><i
                            class="fa-solid fa-plus"></i> Tambah</a>

                    <div class="float-right ml-2">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-search"></i></span>
                            </div>
                            <input type="text" id="SearchBox" class="form-control form-control-sm"
                                placeholder="Masukan Kata Kunci" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="float-right">
                        <select name="lengthMenu" id="lengthMenu" class="form-control form-control-sm dt-length">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="20">50</option>
                            <option value="100">100</option>
                            <option value="-1">Semua</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-bordered table-striped table-hover w-100"
                        id="dtCategories">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Jumlah Buku</th>
                                <th class="px-5">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
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
                Apakah anda yakin akan menghapus kategori ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                <a href="/categories/id/destroy" class="btn btn-outline-danger">Yakin</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Kategori < 0 -->
<div class="modal fade" id="modalGagal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<!---Container Fluid-->
@endsection
