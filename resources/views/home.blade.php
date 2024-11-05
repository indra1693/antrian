@extends('layout-antrian.main')
@section('content')
<div class="container pt-5">
    <!-- tampilkan pesan selamat datang -->
    {{-- <div class="alert alert-light d-flex align-items-center mb-5 justify-content-center"  role="alert" style="opacity: 0.6;"> --}}
        {{-- <i class="bi-info-circle text-success me-3 fs-3"></i> --}}
        <div class="text-center mb-5" style="color: white;">
           <h2><strong>Sistem Antrean Klinik Utama ITB</strong></h2>
        </div>
    {{-- </div> --}}

    <div class="row gx-5">
        <!-- link halaman nomor antrian -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex flex-column align-items-center justify-content-center p-5">
                    <div class="feature-icon-1 bg-success bg-gradient mb-4">
                        <i class="bi-people"></i>
                    </div>
                    <h4>Nomor Antrian</h4>
                    <p class="mb-5 text-center">Halaman Nomor Antrian digunakan pengunjung untuk mengambil nomor antrian.</p>
                    <a href="pages/nomor" class="btn btn-success rounded-pill px-5 py-2">
                        Tampilkan <i class="bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- link halaman panggilan antrian -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex flex-column align-items-center justify-content-center p-5">
                    <div class="feature-icon-1 bg-success bg-gradient mb-4">
                        <i class="bi-mic"></i>
                    </div>
                    <h4>Panggilan Antrian</h4>
                    <p class="mb-5 text-center">Halaman Panggilan Antrian digunakan petugas loket untuk memanggil antrian pengunjung.</p>
                    <a href="pages/panggilan" class="btn btn-success rounded-pill px-5 py-2">
                        Tampilkan <i class="bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- link halaman Setting antrian -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex flex-column align-items-center justify-content-center p-5">
                    <div class="feature-icon-1 bg-success bg-gradient mb-4">
                        <i class="bi-sliders"></i>
                    </div>
                    <h4>Halaman Pengaturan</h4>
                    <p class="mb-5 text-center">Halaman Pengaturan digunakan petugas untuk pengaturan sistem antrian.</p>
                    <a href="pages/panggilan" class="btn btn-success rounded-pill px-5 py-2">
                        Tampilkan <i class="bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection