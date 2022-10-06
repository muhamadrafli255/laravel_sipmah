<?php $__env->startSection('content'); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e($title); ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/books">Buku</a></li>
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
                        <img class="img-fluid rounded mb-2" src="https://ebooks.gramedia.com/ebook-covers/42421/image_highres/ID_NUT2018MTH05NUT.jpg" alt="" width="170px" height="170px">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header"><p class="h5 text-gray-800">Detail Buku</p></div>
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kode Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: BKS - OOO1</h6>
                            </div>
                            
                            
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Judul Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Negeri Diujung Tanduk</h6>
                            </div>
                            
                            
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Deskripsi Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Novel ini adalah naskah awal (asli) dari penulis; tanpa sentuhan editing, layout serta cover dari penerbit, dengan demikian, naskah ini berbeda dengan versi cetak, pun memiliki kelebihan dan kelemahan masing-masing.</h6>
                            </div>
                            
                            
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kategori Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Novel</h6>
                            </div>
                            
                            
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Penulis</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Tere Liye</h6>
                            </div>
                            
                            
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Tahun Terbit</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: 2013</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kondisi Buku</h6>
                            </div>
                            <div class="col-lg-9 mb-5">
                                <h6 class="text-muted">: <span class="badge badge-success">Baik</span></h6>
                            </div>
                            
                            <?php if(Request::is('dashboard3*')): ?>
                            <div class="col-lg-12 mt-2 mb-1">
                                <div class="float-right">
                                    <a href="/dashboard3/home" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <button data-toggle="modal" data-target="#modalPinjam" class="btn btn-sm btn-outline-primary">Pinjam</button>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="col-lg-12 mt-2 mb-1">
                                <div class="float-right">
                                    <a href="/books" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/books/id/edit" class="btn btn-sm btn-outline-primary">Ubah</a>
                                    <button data-toggle="modal" data-target="#nonaktifModal" class="btn btn-sm btn-outline-danger">Hapus</button>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
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
                Apakah anda yakin akan menghapus buku ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                <a href="/books/id/destroy" class="btn btn-outline-danger">Yakin</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal Nonaktif-->
<div class="modal fade" id="modalPinjam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Peminjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="inputDate">Estimasi Dikembalikan</label>
                    <input type="date" id="inputDate" class="form-control" required>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                <a href="/books/id/borrow" class="btn btn-outline-success">Pinjam</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/contents/books/detail.blade.php ENDPATH**/ ?>