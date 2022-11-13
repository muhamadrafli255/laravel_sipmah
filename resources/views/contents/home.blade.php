@extends('app.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        @if (session('Berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Berhasil') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if (session('Gagal'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('Gagal') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="float-left mt-2 mb-2 ml-2">
                <h1 class="h3">Buku Tersedia</h1>
            </div>
            <div class="col-12">
                <div class="input-group input-group-xl">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-search"></i></span>
                    </div>
                    <input type="text" id="searchBook" class="form-control form-control-xl dt-search"
                        placeholder="Masukan Kata Kunci" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div id="card" class="row mt-4">
        @foreach ($books as $book)
        <a href="/books/{{ $book->id }}" class="text-decoration-none text-black-50 mx-auto">
        <div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <div class="card mb-5" style="width: 15rem;"">
                <img src="/img/book-images/{{ $book->image }}" class="card-img-top" alt="{{ $book->image }}" height="380" width="180">
                <div class="card-body">
                    <h5 class="card-title">{{ Str::limit($book->title, 15) }}</h5>
                    <p class="card-text">By : {{ Str::limit($book->writer, 12) }}</p>
                    </div>
                </div>
            </div>
        </a>
            @endforeach
        </div>
            {{-- {{ $books->links() }} --}}
    </div>
<!---Container Fluid-->
@include('components.scripts.searchbooks')
@endsection
