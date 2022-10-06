<?php echo $__env->make('components.scripts.choosen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e($title); ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Rak</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e($title); ?></li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h4 text-gray-800">Data Rak</p></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputNumber">Nomor Rak</label>
                                    <input type="number" id="inputNumber" class="form-control" placeholder="Nomor" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="small mb-1" for="selectKategori">Kategori</label>
                                <select class="form-control" name="" id="selectKategori" multiple="" data-placeholder="Pilih Kategori">
                                    <option value="1">Novel</option>
                                    <option value="2">Biologi</option>
                                    <option value="3">Filosofi</option>
                                    <option value="4">Agama</option>
                                    <option value="5">Komik</option>
                                </select>
                                </div>
                            <div class="col-lg-12 mt-2">
                                <div class="float-right">
                                    <a href="/racks" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/racks/store" class="btn btn-sm btn-outline-primary">Tambah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/contents/racks/create.blade.php ENDPATH**/ ?>