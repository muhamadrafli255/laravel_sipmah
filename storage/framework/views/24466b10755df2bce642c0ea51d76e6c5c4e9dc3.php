<?php $__env->startSection('content'); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h2 mb-3 text-gray-800"><?php echo e($title); ?></h1>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="mt-1">Laporan Peminjaman</h5>
                </div>
                <div class="col-lg-6">
                    <div class="float-right">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle my-auto" type="button"
                                data-toggle="dropdown" aria-expanded="false">
                                01/08/2022 - 30/08/2022
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">01/07/2022 - 30/08/2022</a>
                                <a class="dropdown-item" href="#">01/06/2022 - 30/07/2022</a>
                                <a class="dropdown-item" href="#">01/05/2022 - 30/06/2022</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card mb-4 pb-3">
        <div class="p-2 mx-auto mt-4">
            <h5>Sedang Dipinjam</h5>
        </div>
        <hr class="mx-3">
        <div class="table-responsive px-3">
            <table class="table align-items-center table-bordered table-striped table-hover w-100"
                id="dataTableHover">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Nama Peminjam</th>
                        <th>Petugas Peminjam</th>
                        <th>Estimasi Dikembalikan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-right">1</td>
                        <td>Negeri Diujung Tanduk</td>
                        <td>Dani Fitriani</td>
                        <td>Rudiansyah Fakhrul</td>
                        <td>12/09/2022</td>
                        <td class="text-center">
                            <a href="/reports/borrowed" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">2</td>
                        <td>Amba</td>
                        <td>Jujun Saputra</td>
                        <td>Rudiansyah Fakhrul</td>
                        <td>12/09/2022</td>
                        <td class="text-center">
                            <a href="/reports/borrowed" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">3</td>
                        <td>Amba</td>
                        <td>Robi Firmansyah</td>
                        <td>Rudiansyah Fakhrul</td>
                        <td>15/09/2022</td>
                        <td class="text-center">
                            <a href="/reports/borrowed" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">4</td>
                        <td>Orang - Orang Biasa</td>
                        <td>Dodi Permana</td>
                        <td>Rudiansyah Fakhrul</td>
                        <td>18/09/2022</td>
                        <td class="text-center">
                            <a href="/reports/borrowed" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">5</td>
                        <td>Negeri Diujung Tanduk</td>
                        <td>Queensha Marsya</td>
                        <td>Rudiansyah Fakhrul</td>
                        <td>18/09/2022</td>
                        <td class="text-center">
                            <a href="/reports/borrowed" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Detail">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/contents/reports/index.blade.php ENDPATH**/ ?>