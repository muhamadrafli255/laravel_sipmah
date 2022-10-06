<?php $__env->startSection('content'); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e($title); ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/books">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e($title); ?></li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header"><p class="h5 text-gray-800">Gambar Buku</p></div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid rounded mb-3" src="https://ebooks.gramedia.com/ebook-covers/42421/image_highres/ID_NUT2018MTH05NUT.jpg" alt="" width="170px" height="170px">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header"><p class="h5 text-gray-800">Detail Peminjaman</p></div>
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kode Peminjaman</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: PMJ - OOO3</h6>
                            </div>
                            
                            
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Judul Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Negeri Diujung Tanduk</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Nama Peminjam</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Dani Fitriani</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Petugas Peminjam</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Rudiansyah Fakhrul</h6>
                            </div>
                            
                            
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Tanggal Pinjam</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: 7/09/2022</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Estimasi Dikembalikan</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: 12/09/2022</h6>
                            </div>
                            
                            
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Status Peminjaman</h6>
                            </div>
                            <div class="col-lg-9 mb-4">
                                <h6 class="text-muted">: <span class="badge badge-warning">Sedang Dipinjam</span></h6>
                            </div>
                            
                            <div class="col-lg-12 mt-3 mb-2">
                                <div class="float-right">
                                    <a href="/report" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                </div>
                            </div>
                        </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/contents/reports/borrowed.blade.php ENDPATH**/ ?>