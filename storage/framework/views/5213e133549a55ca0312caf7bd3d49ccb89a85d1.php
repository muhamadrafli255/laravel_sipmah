<?php $__env->startSection('content'); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e($title); ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php if(session('Berhasil')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('Berhasil')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
            <div class="card mb-4">
                <div class="col-lg-12 mt-3">
                    <?php if(Request::is('racks*', 'dashboard2*')): ?>
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
                    <a href="/racks/create" class="btn btn-sm btn-outline-primary rounded mb-2"><i
                            class="fa-solid fa-plus"></i> Tambah</a>
                    <?php else: ?>

                    <?php endif; ?>
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
                                <th>Kode Rak</th>
                                <th>Nomor Rak</th>
                                <th>Jumlah Kategori</th>
                                <th class="px-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right">1</td>
                                <td>RCK - 01</td>
                                <td class="text-right">1</td>
                                <td class="text-right">3</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="<?php echo e(Request::is('dashboard3*') ? '/dashboard3/racks/id' : '/racks/id/categories'); ?>" class="btn btn-sm btn-outline-success"
                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                            class="fa-solid fa-eye"></i></a>
                                            <?php if(Request::is('dashboard3*')): ?>
                                                
                                            <?php else: ?>
                                    <a href="/racks/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                        data-placement="top" title="Ubah"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">2</td>
                                <td>RCK - 02</td>
                                <td class="text-right">1</td>
                                <td class="text-right">3</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="<?php echo e(Request::is('dashboard3*') ? '/dashboard3/racks/id' : '/racks/id'); ?>" class="btn btn-sm btn-outline-success"
                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                            class="fa-solid fa-eye"></i></a>
                                            <?php if(Request::is('dashboard3*')): ?>
                                                
                                            <?php else: ?>
                                    <a href="/racks/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                        data-placement="top" title="Ubah"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">3</td>
                                <td>RCK - 03</td>
                                <td class="text-right">1</td>
                                <td class="text-right">3</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="<?php echo e(Request::is('dashboard3*') ? '/dashboard3/racks/id' : '/racks/id'); ?>" class="btn btn-sm btn-outline-success"
                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                            class="fa-solid fa-eye"></i></a>
                                            <?php if(Request::is('dashboard3*')): ?>
                                                
                                            <?php else: ?>
                                    <a href="/racks/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                        data-placement="top" title="Ubah"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">4</td>
                                <td>RCK - 04</td>
                                <td class="text-right">2</td>
                                <td class="text-right">0</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="<?php echo e(Request::is('dashboard3*') ? '/dashboard3/racks/id' : '/racks/id'); ?>" class="btn btn-sm btn-outline-success"
                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                            class="fa-solid fa-eye"></i></a>
                                            <?php if(Request::is('dashboard3*')): ?>
                                                
                                            <?php else: ?>
                                    <a href="/racks/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                        data-placement="top" title="Ubah"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">5</td>
                                <td>RCK - 05</td>
                                <td class="text-right">2</td>
                                <td class="text-right">3</td>
                                <td class="text-center">
                                    <div class="">
                                        <a href="<?php echo e(Request::is('dashboard3*') ? '/dashboard3/racks/id' : '/racks/id'); ?>" class="btn btn-sm btn-outline-success"
                                        data-toggle="tooltip" data-placement="top" title="Detail"><i
                                            class="fa-solid fa-eye"></i></a>
                                            <?php if(Request::is('dashboard3*')): ?>
                                                
                                            <?php else: ?>
                                    <a href="/racks/id/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip"
                                        data-placement="top" title="Ubah"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                        <?php endif; ?>
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
                Apakah anda yakin akan menghapus rak ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                <a href="/racks/id/destroy" class="btn btn-outline-danger">Yakin</a>
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
                Masih ada kategori di dalam rak ini, silahkan pindahkan terlebih dahulu
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!---Container Fluid-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/contents/racks/index.blade.php ENDPATH**/ ?>