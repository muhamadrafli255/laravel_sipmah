<?php $__env->startSection('content'); ?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e($title); ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/members">Anggota</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e($title); ?></li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header"><p class="h5 text-gray-800">Foto Profil</p></div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-4" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="170px" height="170px">
                        <div class="small font-italic text-muted mb-4">JPG atau PNG ukuran kurang dari 5 MB</div>
                    <!-- Profile picture upload button-->
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" value="Pilih" id="customFile">
                            <label class="custom-file-label text-left" for="customFile">Unggah Foto Baru</label>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h5 text-gray-800">Data Anggota</p></div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">NIS / NUPTK</label>
                                <input class="form-control" id="inputUsername" type="number" placeholder="NIS / NUPTK Anggota" value="20221056">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Nama Lengkap</label>
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Nama Lengkap Anggota" value="Rudiansyah Fakhrul">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="selectJenisKelamin">Jenis Kelamin</label>
                                    <select name="" id="selectJenisKelamin" class="form-control">
                                        <option value="">Laki - Laki</option>
                                        <option value="">Perempuan</option>
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Alamat Email</label>
                                    <input class="form-control" id="inputLastName" type="email" placeholder="Alamat Email Anggota" value="rudiansyah@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">No Telepon</label>
                                    <input class="form-control" id="inputOrgName" type="number" placeholder="No Telepon Anggota" value="083844752389">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <!-- Form Group (location)-->
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Alamat</label>
                                    <textarea name="" id="" cols="20" rows="10" placeholder="Alamat Anggota" class="form-control">JL Junti Hilir, Sangkanhurip, Katapang, Bandung, Jawa Barat, 40921</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="selectProvinsi">Provinsi</label>
                                    <select class="form-control" name="" id="selectProvinsi" required>
                                        <option value="">Jawa Barat</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Timur</option>
                                        <option value="">Sumatera Barat</option>
                                        <option value="">Sumatera Utara</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="selectKota">Kabupaten / Kota</label>
                                    <select class="form-control" name="" id="selectKota" required>
                                        <option value="">Bandung</option>
                                        <option value="">Kota Bandung</option>
                                        <option value="">Purwakarta</option>
                                        <option value="">Bogor</option>
                                        <option value="">Cianjur</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="selectKecamatan">Kecamatan</label>
                                    <select class="form-control" id="selectKecamatan" required>
                                        <option value="">Katapang</option>
                                        <option value="">Arjasari</option>
                                        <option value="">Baleendah</option>
                                        <option value="">Kutawaringin</option>
                                        <option value="">Cangkuang </option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="selectDesa">Desa</label>
                                    <select class="form-control" id="selectDesa" required>
                                        <option value="">Sangkanhurip</option>
                                        <option value="">Sukamukti</option>
                                        <option value="">Cilampeni</option>
                                        <option value="">Gandasari</option>
                                        <option value="">Katapang</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="small mb-1" for="selectKodePos">Kode Pos</label>
                                    <select class="form-control" id="selectKodePos" required>
                                        <option value="">40921</option>
                                        <option value="">40961</option>
                                        <option value="">54553</option>
                                        <option value="">12456</option>
                                        <option value="">321321</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <!-- Save changes button-->
                            <div class="col-lg-12">
                                <div class="text-right">
                                    <a href="/members" class="btn btn-outline-secondary" type="button">Kembali</a>
                                    <a href="/members/id/update" class="btn btn-outline-primary" type="button">Simpan</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/contents/members/edit.blade.php ENDPATH**/ ?>