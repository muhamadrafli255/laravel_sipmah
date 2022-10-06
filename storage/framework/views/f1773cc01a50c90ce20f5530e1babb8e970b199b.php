<?php $__env->startSection('content'); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e($title); ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Penerbit</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e($title); ?></li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h4 text-gray-800">Data Penerbit</p></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputName">Nama Penerbit</label>
                                    <input type="text" id="inputName" class="form-control" placeholder="Nama Penerbit" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputAlamat">Alamat Penerbit</label>
                                    <input type="text" id="inputAlamat" class="form-control" placeholder="Alamat Penerbit" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmail">Email Penerbit</label>
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email Penerbit" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputNoTelp">No Telepon Penerbit</label>
                                    <input type="number" id="inputNoTelp" class="form-control" placeholder="No Telepon Penerbit" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <div class="float-right">
                                    <a href="/publishers" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/publishers/store" class="btn btn-sm btn-outline-primary">Tambah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/contents/publishers/create.blade.php ENDPATH**/ ?>