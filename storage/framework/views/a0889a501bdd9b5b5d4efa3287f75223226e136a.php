<?php $__env->startSection('content'); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 ml-4 text-gray-800"><?php echo e($title); ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/books">Peminjaman</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e($title); ?></li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Buku</p>
                    </div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid rounded mb-4"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUfytN3doVZit6vSK5E3BngqpmSwoSADfK5Q&usqp=CAU"
                            alt="" width="170px" height="170px">
                        <!-- Profile picture upload button-->
                        <div class="form-group">
                            <label for="ubahBuku">Pilih Buku</label>
                            <select name="" id="ubahBuku" class="form-control">
                                <option value="" selected disabled>Judul Buku</option>
                                <option value="">Amba</option>
                                <option value="">Negeri Diujung Tanduk</option>
                                <option value="">Orang - Orang Biasa</option>
                                <option value="">Matematika Kelas 11</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4 py-2">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Peminjaman</p>
                    </div>
                    <div class="card-body">
                        <form action="/borrows/store">
                            <!-- Form Group (username)-->
                            <div class="col-lg-12 mb-3">
                                <label class="small mb-1" for="selectPeminjam">Nama Peminjam</label>
                                <select name="" id="selectPeminjam" class="form-control">
                                    <option value="" selected disabled>Nama | NIS/NUPTK</option>
                                    <option value="">Rudiansyah Fakhrul | 20221056</option>
                                    <option value="">Jujun Saputra | 20221057</option>
                                    <option value="">Dani Fitriani | 20221058</option>
                                    <option value="">Andara Amanda | 20221059</option>
                                    <option value="">Queensha Marsya | 20221060</option>
                                    <option value="">Raina Aqila | 20221061</option>
                                    <option value="">Sadiya Marshanda | 20221062</option>
                                    <option value="">Robi Firmansyah | 20221063</option>
                                    <option value="">Dodi Permana | 20221064</option>
                                </select>
                            </div>
                            <!-- Form Row-->
                                <!-- Form Group (first name)-->
                                <div class="col-lg-12 mb-3">
                                    <label class="small mb-1" for="inputTanggal">Tanggal Pinjam</label>
                                    <input type="date" class="form-control" required>
                                </div>

                                <div class="col-lg-12 mb-4">
                                    <label class="small mb-1" for="inputTanggal">Estimasi Dikembalikan</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <!-- Form Group (last name)-->
                            <!-- Save changes button-->
                            <div class="col-lg-12">
                                <div class="text-right">
                                    <a href="/borrows" class="btn btn-sm btn-outline-secondary" type="button">Kembali</a>
                                    <button type="submit" class="btn btn-sm btn-outline-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/contents/borrows/create.blade.php ENDPATH**/ ?>