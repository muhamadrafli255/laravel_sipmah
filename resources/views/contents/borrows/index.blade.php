@extends('app.main')
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
            <div class="card mb-4">
                <div class="col-lg-12 mt-3">
                    @if (Request::is('dashboard2*', 'borrows*'))
                    <div class="btn-group dropright">
                        <button type="button" class="btn btn-sm btn-outline-secondary rounded mb-2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-download"></i>
                        </button>
                        <div class="dropdown-menu w-100 text-center">
                            <button class="btn btn-sm btn-success col w-75 mb-2"><i class="fa-solid fa-file-excel"></i>
                                Excel</button>
                            <button class="btn btn-sm btn-danger col w-75 mb-2"><i class="fa-solid fa-file-pdf"></i>
                                PDF</button>
                            <button class="btn btn-sm btn-secondary col w-75 mb-2"><i class="fa-solid fa-print"></i>
                                Print</button>
                        </div>
                    </div>
                    <a href="/borrows/create" class="btn btn-sm btn-outline-primary rounded mb-2"><i
                            class="fa-solid fa-plus"></i> Tambah</a>
                    @else

                    @endif
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
                        <select name="lengthMenu" id="lengthMenu" class="form-control form-control-sm">
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
                        id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Nama Peminjam</th>
                                <th>Petugas Peminjam</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th class="px-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (Request::is('dashboard3*'))
                            <tr>
                                <td class="text-right">1</td>
                                <td>Negeri Diujung Tanduk</td>
                                <td>Dani Fitriani</td>
                                <td>Rudiansyah Fakhrul</td>
                                <td>12/09/2022</td>
                                <td>15/09/2022</td>
                                <td>
                                    <h6><span class="badge badge-success">Sudah Dikembalikan</span></h6>
                                </td>
                                <td class="text-center">
                                    <div>
                                        <a href="/dashboard3/borrows/id" class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                            data-placement="top" title="Detail"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td class="text-right">1</td>
                                <td>Negeri Diujung Tanduk</td>
                                <td>Dani Fitriani</td>
                                <td>Rudiansyah Fakhrul</td>
                                <td>12/09/2022</td>
                                <td>15/09/2022</td>
                                <td>
                                    <h6><span class="badge badge-success">Sudah Dikembalikan</span></h6>
                                </td>
                                <td class="text-center">
                                    <div>
                                        <a href="/borrows/id" class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                            data-placement="top" title="Detail"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">2</td>
                                <td>Amba</td>
                                <td>Jujun Saputra</td>
                                <td>Rudiansyah Fakhrul</td>
                                <td>12/09/2022</td>
                                <td>18/09/2022</td>
                                <td>
                                    <h6><span class="badge badge-success">Sudah Dikembalikan</span></h6>
                                </td>
                                <td class="text-center">
                                    <div>
                                        <a href="/borrows/id" class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                        data-placement="top" title="Detail"><i class="fa-solid fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">3</td>
                                <td>Amba</td>
                                <td>Robi Firmansyah</td>
                                <td>Rudiansyah Fakhrul</td>
                                <td>15/09/2022</td>
                                <td>20/09/2022</td>
                                <td>
                                    <h6><span class="badge badge-warning">Sedang Dipinjam</span></h6>
                                </td>
                                <td class="text-center">
                                    <div class="mx-auto">
                                        <a href="/borrows/id2" class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                            data-placement="top" title="Detail"><i class="fa-solid fa-eye"></i></a>
                                        <a href="/borrows/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                            <span data-toggle="modal" data-target="#modalPengembalian">
                                        <button class="btn btn-sm btn-outline-info" data-toggle="tooltip"
                                            data-placement="top" title="Pengembalian"><i
                                                class="fa-solid fa-reply"></i></button>
                                            </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">4</td>
                                <td>Orang - Orang Biasa</td>
                                <td>Dodi Permana</td>
                                <td>Rudiansyah Fakhrul</td>
                                <td>18/09/2022</td>
                                <td>23/09/2022</td>
                                <td>
                                    <h6><span class="badge badge-warning">Sedang Dipinjam</span></h6>
                                </td>
                                <td class="text-center">
                                    <div class="mx-auto">
                                        <a href="/borrows/id2" class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                            data-placement="top" title="Detail"><i class="fa-solid fa-eye"></i></a>
                                        <a href="/borrows/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                            <span data-toggle="modal" data-target="#modalPengembalian">
                                        <button class="btn btn-sm btn-outline-info" data-toggle="tooltip"
                                            data-placement="top" title="Pengembalian"><i
                                                class="fa-solid fa-reply"></i></button>
                                            </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">5</td>
                                <td>Negeri Diujung Tanduk</td>
                                <td>Queensha Marsya</td>
                                <td>Rudiansyah Fakhrul</td>
                                <td>18/09/2022</td>
                                <td>23/09/2022</td>
                                <td>
                                    <h6><span class="badge badge-danger">Belum Diverifikasi</span></h6>
                                </td>
                                <td class="text-center">
                                    <div class="mx-auto">
                                        <a href="/borrows/id2" class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                            data-placement="top" title="Detail"><i class="fa-solid fa-eye"></i></a>
                                        <a href="/borrows/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                            <span data-toggle="modal" data-target="#modalVerifikasi">
                                        <button class="btn btn-sm btn-outline-info" data-toggle="tooltip"
                                            data-placement="top" title="Verifikasi"><i
                                                class="fa-solid fa-check"></i></button>
                                            </span>
                                    </div>
                                </td>
                            </tr>                              
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nonaktif-->
<div class="modal fade" id="modalPengembalian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pengembalian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="col-lg-12 mb-2">
                        <label for="selectPengembali">Nama Pengembali</label>
                        <select name="" id="selectPengembali" class="form-control">
                            <option value="" selected disabled>Nama Pengembali</option>
                            <option value="">Robi Firmansyah</option>
                            <option value="">Dani Fitriani</option>
                            <option value="">Dodi Permana</option>
                            <option value="">Queensha Marsya</option>
                        </select>
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label for="inputDate">Tanggal Kembali</label>
                        <input type="date" id="inputDate" class="form-control" placeholder="Tanggal Kembali">
                    </div>

                    <div class="col-lg-12 mb-2">
                        <label for="selectKondisi">Kondisi</label>
                        <select name="" id="selectKondisi" class="form-control">
                            <option value="" selected disabled>Kondisi Buku</option>
                            <option value="">Baik</option>
                            <option value="">Rusak</option>
                            <option value="">Hilang</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Batal</button>
                <a href="/borrows/id/return" class="btn btn-sm btn-outline-success">Kembalikan</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Nonaktif-->
<div class="modal fade" id="modalVerifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin akan memverifikasi peminjaman ini?</p>
            <div class="col-lg-12 mb-2">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Tidak</button>
                <a href="/borrows/id/verification" class="btn btn-sm btn-outline-success">Ya</a>
            </div>
        </div>
    </div>
</div>

<!---Container Fluid-->
@endsection
