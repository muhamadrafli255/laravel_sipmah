@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/books">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="col-lg-12 mt-3">
                        <div class="float-left">
                            <h5 class="m-2">Anggota Peminjam</h5>
                        </div>
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
                                    <th>Foto</th>
                                    <th>Nama Peminjam</th>
                                    <th class="px-5">Jumlah Pinjaman</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-right">1</td>
                                    <td class="text-center"><img src="/img/boy.png" height="122px" alt="..."></td>
                                    <td>Rudiansyah Fakhrul</td>
                                    <td class="text-right">30</td>
                                </tr>
                                <tr>
                                    <td class="text-right">2</td>
                                    <td class="text-center"><img src="/img/girl.png" height="122px" alt="..."></td>
                                    <td>Queensha Marsya</td>
                                    <td class="text-right">30</td>
                                </tr>
                                <tr>
                                    <td class="text-right">3</td>
                                    <td class="text-center"><img src="/img/man.png" height="122px" alt="..."></td>
                                    <td>Robi Firmansyah</td>
                                    <td class="text-right">30</td>
                                </tr>
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
                <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
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
                <a href="/loans/id/return" class="btn btn-sm btn-outline-success">Kembalikan</a>
            </div>
        </div>
    </div>
</div>
@endsection