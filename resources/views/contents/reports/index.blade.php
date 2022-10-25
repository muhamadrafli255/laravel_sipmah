@extends('app.main')

@section('style')
    @include('components.styles.datatable')
@endsection

@section('script')
@include('components.scripts.momentjs')
@include('components.scripts.daterange')
<script>
    startDate   = "{{ $start }}"
    endDate     = "{{ $end }}"
</script>
@include('components.scripts.datatable')
<script src="/app/reports/index.js"></script>
@endsection

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h2 mb-3 text-gray-800">{{ $title }}</h1>
    </div>

    <div class="card mb-4 h-25">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="pt-2 mt-2">Laporan Peminjaman</h5>
                </div>
                <div class="col-lg-6">
                    <div class="form-group float-right">
                        <form action="/reports" method="get">
                            <div class="input-group mt-2">
                            <input type="text" id="createdAt" name="date" class="form-control" placeholder="Filter Berdasarkan Tanggal Peminjaman">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-primary">Filter</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card mb-4 pb-3 dt-container">
        <div class="col mt-2">
        <div class="btn-group dropright">
            <button type="button" class="btn btn-sm btn-outline-secondary rounded"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-download"></i>
            </button>
            <div class="dropdown-menu w-100 text-center">
                <button class="btn btn-sm btn-success col w-75 mb-2 dt-excel"><i class="fa-solid fa-file-excel"></i>
                    Excel</button>
                <button class="btn btn-sm btn-danger col w-75 mb-2 dt-pdf"><i class="fa-solid fa-file-pdf"></i>
                    PDF</button>
                <button class="btn btn-sm btn-secondary col w-75 mb-2 dt-print"><i class="fa-solid fa-print"></i>
                    Print</button>
            </div>
        </div>
        </div>
        <div class="p-2 mx-auto mt-2">
            <h5>Sedang Dipinjam</h5>
        </div>
        <hr class="mx-3">
        <div class="table-responsive px-3">
            <table class="table align-items-center table-bordered table-striped table-hover w-100"
                id="dtReportBorrows">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>Estimasi Dikembalikan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="card mb-4 pb-3 dt-container">
        <div class="col mt-2">
            <div class="btn-group dropright">
                <button type="button" class="btn btn-sm btn-outline-secondary rounded"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-download"></i>
                </button>
                <div class="dropdown-menu w-100 text-center">
                    <button class="btn btn-sm btn-success col w-75 mb-2 dt-excel"><i class="fa-solid fa-file-excel"></i>
                        Excel</button>
                    <button class="btn btn-sm btn-danger col w-75 mb-2 dt-pdf"><i class="fa-solid fa-file-pdf"></i>
                        PDF</button>
                    <button class="btn btn-sm btn-secondary col w-75 mb-2 dt-print"><i class="fa-solid fa-print"></i>
                        Print</button>
                </div>
            </div>
            </div>
        <div class="p-2 mx-auto mt-4">
            <h5>Dikembalikan Rusak</h5>
        </div>
        <hr class="mx-3">
        <div class="table-responsive px-2">
            <table class="table align-items-center table-bordered table-striped table-hover w-100"
                id="dtReportDamaged">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="card mb-4 pb-3">
        <div class="col mt-2">
            <div class="btn-group dropright">
                <button type="button" class="btn btn-sm btn-outline-secondary rounded"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-download"></i>
                </button>
                <div class="dropdown-menu w-100 text-center">
                    <button class="btn btn-sm btn-success col w-75 mb-2 dt-excel"><i class="fa-solid fa-file-excel"></i>
                        Excel</button>
                    <button class="btn btn-sm btn-danger col w-75 mb-2 dt-pdf"><i class="fa-solid fa-file-pdf"></i>
                        PDF</button>
                    <button class="btn btn-sm btn-secondary col w-75 mb-2 dt-print"><i class="fa-solid fa-print"></i>
                        Print</button>
                </div>
            </div>
            </div>
        <div class="p-2 mx-auto mt-4">
            <h5>Dikembalikan Hilang</h5>
        </div>
        <hr class="mx-3">
        <div class="table-responsive px-2">
            <table class="table align-items-center table-bordered table-striped table-hover w-100"
                id="dtReportLost">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<!---Container Fluid-->
@endsection
