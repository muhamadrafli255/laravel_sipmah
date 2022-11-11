@extends('app.main')

@section('script')
    <script src="/plugins/chartjs/js/chart.min.js"></script>
    @include('components.scripts.borrowchart')
    @include('components.scripts.bookschart')
@endsection

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
        @if (session('Berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Berhasil') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>

    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Buku</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $books->count() }}</div>
                        </div>
                        <div class="col-auto mt-3">
                            <i class="fas fa-book fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Anggota</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users->count() }}</div>
                        </div>
                        <div class="col-auto mt-3">
                            <i class="fas fa-users fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User Card Example -->
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Peminjaman Berlangsung</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $borrows->count() }}</div>
                        </div>
                        <div class="col-auto mt-3">
                            <i class="fas fa-arrow-up-from-bracket fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 align="center">Statistik Peminjaman</h4>
                    <canvas id="borrowChart" class="chartjs mb-3"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 align="center">Buku Berdasarkan Kondisi</h4>
                    <canvas id="booksChart" class="chartjs mb-5"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->

</div>
<!---Container Fluid-->
@endsection
