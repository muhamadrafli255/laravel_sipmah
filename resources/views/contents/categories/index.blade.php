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
                    @if (Request::is('categories', 'dashboard2/categories'))
                    <div class="btn-group dropright">
                        <button type="button" class="btn btn-sm btn-outline-secondary rounded mb-2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-download"></i>
                        </button>
                        <div class="dropdown-menu w-100 text-center">
                            <button class="btn btn-sm btn-success col w-75 mb-2"><i class="fa-solid fa-file-excel"></i> Excel</button>
                            <button class="btn btn-sm btn-danger col w-75 mb-2"><i class="fa-solid fa-file-pdf"></i> PDF</button>
                            <button class="btn btn-sm btn-secondary col w-75 mb-2"><i class="fa-solid fa-print"></i> Print</button>
                        </div>
                    </div>
                    <a href="/categories/create" class="btn btn-sm btn-outline-primary rounded mb-2"><i
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
                                <th>Kode Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Rak</th>
                                <th>Jumlah Buku</th>
                                <th class="px-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right">1</td>
                                <td>CTG - 01</td>
                                <td>Novel</td>
                                <td>RCK - 01</td>
                                <td class="text-right">16</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id/books' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
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
                                <td>CTG - 02</td>
                                <td>Komik</td>
                                <td>RCK - 02</td>
                                <td class="text-right">0</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
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
                                <td>CTG - 03</td>
                                <td>Dongeng</td>
                                <td>RCK - 03</td>
                                <td class="text-right">5</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">4</td>
                                <td>CTG - 04</td>
                                <td>Filosofi</td>
                                <td>RCK - 02</td>
                                <td class="text-right">20</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">5</td>
                                <td>CTG - 05</td>
                                <td>Biologi</td>
                                <td>RCK - 02</td>
                                <td class="text-right">32</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">6</td>
                                <td>CTG - 06</td>
                                <td>Biografi</td>
                                <td>RCK - 02</td>
                                <td class="text-right">10</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">7</td>
                                <td>CTG - 07</td>
                                <td>Karya Ilmiah</td>
                                <td>RCK - 03</td>
                                <td class="text-right">18</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">8</td>
                                <td>CTG - 08</td>
                                <td>Matematika</td>
                                <td>RCK - 03</td>
                                <td class="text-right">50</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">9</td>
                                <td>CTG - 09</td>
                                <td>Agama</td>
                                <td>RCK - 03</td>
                                <td class="text-right">28</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">10</td>
                                <td>CTG - 10</td>
                                <td>Teknologi</td>
                                <td>RCK - 05</td>
                                <td class="text-right">13</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">11</td>
                                <td>CTG - 11</td>
                                <td>Budaya</td>
                                <td>RCK - 05</td>
                                <td class="text-right">18</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                            @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">12</td>
                                <td>CTG - 12</td>
                                <td>Bahasa</td>
                                <td>RCK - 05</td>
                                <td class="text-right">22</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="{{ Request::is('/dashboard3*') ? '/dashboard3/categories/id' : 'categories/id' }}" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                            @if (Request::is('dashboard3*'))
                                                
                                            @else
                                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                                data-placement="top" title="Ubah"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
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
