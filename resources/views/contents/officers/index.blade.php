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
                    <a href="/officers/create" class="btn btn-sm btn-outline-primary rounded mb-2"><i
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
                                <th>NIS / NUPTK</th>
                                <th>Nama</th>
                                <th>Alamat Email</th>
                                <th class="px-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right">1</td>
                                <td class="text-right">20221056</td>
                                <td>Rudiansyah Fakhrul</td>
                                <td>rudiansyah@example.com</td>
                                <td>
                                    <div class="">
                                        <a href="/officers/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="/officers/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">2</td>
                                <td class="text-right">20221057</td>
                                <td>Jujun Saputra</td>
                                <td>jujun12@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">3</td>
                                <td class="text-right">20221058</td>
                                <td>Dani Fitriani</td>
                                <td>dani.fitriani@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">4</td>
                                <td class="text-right">20221059</td>
                                <td>Andara Amanda</td>
                                <td>andara.a.a@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">5</td>
                                <td class="text-right">20221060</td>
                                <td>Queensha Marsya</td>
                                <td>queensha.marsya@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">6</td>
                                <td class="text-right">20221061</td>
                                <td>Raina Aqila</td>
                                <td>raina.aqila33@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">7</td>
                                <td class="text-right">20221062</td>
                                <td>Sadiya Marshanda</td>
                                <td>sadiyamarshanda12@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">8</td>
                                <td class="text-right">20221063</td>
                                <td>Robi Firmansyah</td>
                                <td>robifirmansyah@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">9</td>
                                <td class="text-right">20221064</td>
                                <td>Dodi Permana</td>
                                <td>dodipermana@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">10</td>
                                <td class="text-right">20221065</td>
                                <td>Jajang Sukmara</td>
                                <td>jajangsukmara@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">11</td>
                                <td class="text-right">20221066</td>
                                <td>Sinta Andini</td>
                                <td>sintaandini89@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">12</td>
                                <td class="text-right">20221067</td>
                                <td>Rendi Permana</td>
                                <td>rendipermana.pwut@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">13</td>
                                <td class="text-right">20221068</td>
                                <td>Syakila Azzahara</td>
                                <td>syakila.azzahara@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">14</td>
                                <td class="text-right">20221069</td>
                                <td>Perdinand Simatupang</td>
                                <td>perdinand.simatupang@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">15</td>
                                <td class="text-right">20221070</td>
                                <td>Akbar Rizkiana</td>
                                <td>akbar.rizkiana@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">16</td>
                                <td class="text-right">20221071</td>
                                <td>Refan Purnama</td>
                                <td>refan.fur@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">17</td>
                                <td class="text-right">20221072</td>
                                <td>Raditya Suganda</td>
                                <td>radityaklkl@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">19</td>
                                <td class="text-right">20221073</td>
                                <td>Rahmat Adiwidia</td>
                                <td>rahmatadiwidia@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">20</td>
                                <td class="text-right">20221074</td>
                                <td>Jefri Sinaga</td>
                                <td>jefrisinaga@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">21</td>
                                <td class="text-right">20221075</td>
                                <td>Alfred Nastazio</td>
                                <td>Alfred45@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">22</td>
                                <td class="text-right">20221076</td>
                                <td>Muhammad Devin</td>
                                <td>muhamaddevin@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">23</td>
                                <td class="text-right">20221077</td>
                                <td>Muhammad Kemal</td>
                                <td>muhamadkemal@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">24</td>
                                <td class="text-right">20221078</td>
                                <td>Muhammad Akbar</td>
                                <td>muhamadakbar@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">25</td>
                                <td class="text-right">20221079</td>
                                <td>Muhammad Januar Arifin</td>
                                <td>muhjanuarifin@example.com</td>
                                <td>
                                    <div class="mx-auto">
                                        <a href="/members/id" class="btn btn-sm btn-outline-success"
                                            data-toggle="tooltip" data-placement="top" title="Detail"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                            data-placement="top" title="Ubah"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <td class="text-right">26</td>
                            <td class="text-right">20221080</td>
                            <td>Fajar Sanjaya</td>
                            <td>fajarsanjaya@example.com</td>
                            <td>
                                <div class="mx-auto">
                                    <a href="/members/id" class="btn btn-sm btn-outline-success" data-toggle="tooltip"
                                        data-placement="top" title="Detail"><i class="fa-solid fa-eye"></i></a>
                                    <a href="" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                        data-placement="top" title="Ubah"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                        data-placement="top" title="Hapus"><i class="fa-solid fa-trash"></i></a>
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
                Apakah anda yakin akan menghapus petugas ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                <a href="/officers/id/disable" class="btn btn-outline-danger">Yakin</a>
            </div>
        </div>
    </div>
</div>
<!---Container Fluid-->
@endsection
