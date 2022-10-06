@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 ml-4 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/books">Buku</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Gambar Buku</p>
                    </div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid rounded mb-4"
                            src="https://ebooks.gramedia.com/ebook-covers/42421/image_highres/ID_NUT2018MTH05NUT.jpg"
                            alt="" width="170px" height="170px">
                        <div class="small font-italic text-muted mb-4">JPG atau PNG ukuran kurang dari 5 MB</div>
                        <!-- Profile picture upload button-->
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" value="Pilih" id="customFile">
                                <label class="custom-file-label text-left" for="customFile">Unggah Foto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">
                        <p class="h5 text-gray-800">Data Buku</p>
                    </div>
                    <div class="card-body">
                        <form action="/books/id/update">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputTitle">Judul</label>
                                <input class="form-control" id="inputTitle" type="text" placeholder="Judul Buku"
                                    value="Negeri Diujung Tanduk" required>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputCategory">Kategori</label>
                                    <select name="" id="inputCategory" class="form-control">
                                        <option value="">Novel</option>
                                        <option value="">Filosofi</option>
                                        <option value="">Matematika</option>
                                        <option value="">Biologi</option>
                                        <option value="">Filsafat</option>
                                        <option value="">Teknologi</option>
                                        <option value="">Agama</option>
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputWriter">Penulis</label>
                                    <input class="form-control" id="inputWriter" type="text" placeholder="Penulis Buku"
                                        value="Tere Liye" required>
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="inputStatus">Kondisi</label>
                                    <select name="" id="inputStatus" class="form-control">
                                        <option value="">Baik</option>
                                        <option value="">Rusak</option>
                                        <option value="">Hilang</option>
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPublisher">Penerbit</label>
                                    <select name="" id="inputPublisher" class="form-control">
                                        <option value="">Gramedia</option>
                                        <option value="">Bentang Pustaka</option>
                                        <option value="">Erlangga</option>
                                        <option value="">Mizan Pustaka</option>
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputYear">Tahun Terbit</label>
                                    <input class="form-control" id="inputYear" type="number" min="1900" max="2022"
                                        placeholder="Tahun Terbit Buku" value="2013" required>
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputDescription">Deskripsi</label>
                                <textarea name="" id="inputDescription" cols="30" rows="10" placeholder="Deskripsi Buku"
                                    class="form-control" required>
Novel ini adalah naskah awal (asli) dari penulis; tanpa sentuhan editing, layout serta cover dari penerbit, dengan demikian, naskah ini berbeda dengan versi cetak, pun memiliki kelebihan dan kelemahan masing-masing.
                                </textarea>
                            </div>
                            <!-- Save changes button-->
                            <div class="col-lg-12">
                                <div class="text-right">
                                    <a href="/books" class="btn btn-outline-secondary" type="button">Kembali</a>
                                    <button type="submit" class="btn btn-outline-primary">Ubah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
