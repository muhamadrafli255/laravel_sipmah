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
        <div class="p-2 mx-auto mt-4">
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

    <div class="card mb-4 pb-3">
        <div class="p-2 mx-auto mt-4">
            <h5>Kategori buku yang banyak dipinjam</h5>
        </div>
        <hr class="mx-3">
        <div class="table-responsive px-2">
            <table class="table align-items-center table-bordered table-striped table-hover w-100"
                id="dataTableHover1">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Judul Buku</th>
                        <th>Jumlah Peminjaman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-right">1</td>
                        <td>Novel</td>
                        <td>Amba</td>
                        <td class="text-right">90</td>
                        <td class="text-center">
                            <a href="/reports/books" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">2</td>
                        <td>Novel</td>
                        <td>Negeri Diujung Tanduk</td>
                        <td class="text-right">67</td>
                        <td class="text-center">
                            <a href="/reports/books" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">3</td>
                        <td>Novel</td>
                        <td>Orang - Orang Biasa</td>
                        <td class="text-right">42</td>
                        <td class="text-center">
                            <a href="/reports/books" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">4</td>
                        <td>Novel</td>
                        <td>Matematika Kelas 11</td>
                        <td class="text-right">34</td>
                        <td class="text-center">
                            <a href="/reports/books" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card mb-4 pb-3">
        <div class="p-2 mx-auto mt-4">
            <h5>Peminjaman Peranggota</h5>
        </div>
        <hr class="mx-3">
        <div class="table-responsive px-2">
            <table class="table align-items-center table-bordered table-striped table-hover w-100"
                id="dataTableHover2">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jumlah Peminjaman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-right">1</td>
                        <td>Dani Fitriani</td>
                        <td>220</td>
                        <td class="text-center">
                            <a href="/reports/members" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">2</td>
                        <td>Raina Aqila</td>
                        <td>187</td>
                        <td class="text-center">
                            <a href="/reports/members" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">3</td>
                        <td>Andara Amanda</td>
                        <td>120</td>
                        <td class="text-center">
                            <a href="/reports/members" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">4</td>
                        <td>Robi Firmansyah</td>
                        <td>97</td>
                        <td class="text-center">
                            <a href="/reports/members" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!---Container Fluid-->
@endsection
