@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        @if (Request::is('dashboard3/books/id'))
        <h1 class="h3 mb-0 text-gray-800">{{ $title1 }}</h1>
        @else
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
        @endif
    </div>
    <!-- Account page navigation-->
    @if (Request::is('dashboard3/books/id'))
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-2 mb-4">
            <a href="/dashboard3/books/id" class="text-decoration-none">
                <div class="card mx-auto" style="width: 15rem;">
                    <img src="https://ebooks.gramedia.com/ebook-covers/42421/image_highres/ID_NUT2018MTH05NUT.jpg"
                        height="364px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-muted mb-2">Tere Liye</p>
                        <h5 class="text-gray-800 mb-2">Negeri Diujung Tanduk</h5>
                        <span class="badge badge-pill badge-primary">120X Dipinjam</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mb-2 mb-4">
            <a href="{{ Request::is('dashboard3*') ? '/dashboard3/books/id' : '/books/id' }}" class="text-decoration-none">
                <div class="card mx-auto" style="width: 15rem;">
                    <img src="https://ebooks.gramedia.com/ebook-covers/37335/big_covers/
                    @if (Request::is('dashboard3*'))
                        
                    @endifID_GPU2017MTH05AMBAlsepg"
                        height="364px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-muted mb-2">Laksmi Pamuntjak</p>
                        <h5 class="text-gray-800 mb-2">Amba</h5>
                        <span class="badge badge-pill badge-primary">70X Dipinjam</span>
                    </div>
                </div>
            </a>
                @endif</
        div>


        <div class="col-lg-6 col-md-6 col-sm-12 mb-2 mb-4">
            <a href="dashboard3/books/id" class="text-decoration-none">
                <div class="card mx-auto" style="width: 15rem;">
                    <img src="https://www.gramedia.com/blog/content/images/2019/05/orang-orang-biasa-4.jpg"
                        height="364px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-muted mb-2">Andrea Hirata</p>
                        <h5 class="text-gray-800 mb-2">Orang - Orang Biasa</h5>
                        <span class="badge badge-pill badge-primary">130X Dipinjam</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="col-lg-12 mt-3">
                    <div class="float-left">
                        <h5 class="m-2">Buku Dalam Kategori</h5>
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
                                <th>Judul Buku</th>
                                <th class="px-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right">1</td>
                                <td class="text-center"><img src="https://ebooks.gramedia.com/ebook-covers/42421/image_highres/ID_NUT2018MTH05NUT.jpg" height="122px" alt="..."></td>
                                <td>Negeri Diujung Tanduk</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('dashboard3*') ? '/dashboard3/books/id' : '/books/id' }}" class="btn btn-sm btn-outline-success"
                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                            class="fa-solid fa-eye"></i></a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                    <a href="/books/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                        data-placement="top" title="Ubah"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">2</td>
                                <td class="text-center"><img src="https://ebooks.gramedia.com/ebook-covers/37335/big_covers/ID_GPU2017MTH05AMBA_B.jpg" height="122px" alt=""></td>
                                <td>Amba</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('dashboard3*') ? '/dashboard3/books/id' : '/books/id' }}" class="btn btn-sm btn-outline-success"
                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                            class="fa-solid fa-eye"></i></a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                    <a href="/books/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                        data-placement="top" title="Ubah"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">3</td>
                                <td class="text-center"><img src="https://www.gramedia.com/blog/content/images/2019/05/orang-orang-biasa-4.jpg" height="122px" alt="..."></td>
                                <td>Orang - Orang Biasa</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('dashboard3*') ? '/dashboard3/books/id' : '/books/id' }}" class="btn btn-sm btn-outline-success"
                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                            class="fa-solid fa-eye"></i></a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                    <a href="/books/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                        data-placement="top" title="Ubah"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
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
