@extends('layouts.main')

@section('container')

<div class="container"> 
    <div class="hero-content">
        <br>
        <h3 class="pxp-section-h2">Perusahaan Apa Yang Sedang Kamu Cari?</h3>
        <br>
    </div>
</div>
{{-- 
|--------------------------------------------------------------------------
| Konten Utama Halaman (Layout Dua Kolom)
|--------------------------------------------------------------------------
| Berisi sidebar filter di kiri dan daftar lowongan di kanan.
--}}
<section id="layanan-kami" class="faq section line">
<div class="job-listing-body">
    <div class="container">
        <div class="row g-4 job-content-row">

            {{-- ============================================= --}}
            {{-- KOLOM KIRI: SIDEBAR FILTER                    --}}
            {{-- ============================================= --}}
            <div class="col-lg-4">
                <aside class="filter-sidebar-dark">
                    <form action="#">
                        {{-- Filter Kata Kunci --}}
                        <div class="filter-group">
                            <label for="keywords" class="form-label fw-bold">Kata Kunci</label>
                            <input type="text" id="keywords" class="form-control" placeholder="Cari Jenis Pekerjaan..">
                        </div>

                        {{-- Filter Lokasi --}}
                        <div class="filter-group">
                            <label for="location" class="form-label fw-bold">Lokasi</label>
                            <select id="location" class="form-select">
                                <option selected>Semua Lokasi</option>
                                <option>Kota Yogyakarta</option>
                                <option>Kabupaten Sleman</option>
                                <option>Kabupaten Bantul</option>
                                <option>Kabupaten Kulon Progo</option>
                                <option>Kabupaten Gunungkidul</option>
                            </select>
                        </div>

                        {{-- Filter Bidang Pekerjaan --}}
                        <div class="filter-group">
                            <label for="location" class="form-label fw-bold">Bidang Usaha</label>
                            <select id="location" class="form-select">
                                <option selected>Semua Bidang</option>
                                <option>Teknologi Informasi</option>
                                <option>Pemasaran</option>
                                <option>Keuangan</option>
                                <option>Manufaktur</option>
                                <option>Logistik</option>
                            </select>
                        </div>

                        {{-- Filter Bidang Pekerjaan --}}
                        <div class="filter-group">
                            <label for="location" class="form-label fw-bold">Jenis Perusahaan</label>
                            <select id="location" class="form-select">
                                <option selected>Semua Jenis</option>
                                <option>Startup</option>
                                <option>Perusahaan Besar</option>
                                <option>Perusahaan Kecil</option>
                                <option>Perusahaan Multinasional</option>
                                <option>Perusahaan Lokal</option>
                                <option>Perusahaan Swasta</option>
                                <option>Perusahaan Pemerintah</option>
                                <option>Perusahaan BUMN</option>
                            </select>
                        </div>

                        {{-- Filter Tipe Pekerjaan --}}
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-100">Terapkan Filter</button>
                        </div>
                    </form>
                </aside>
            </div>

            {{-- ============================================= --}}
            {{-- KOLOM KANAN: DAFTAR LOWONGAN                   --}}
            {{-- ============================================= --}}
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="mb-0">Menampilkan 12 Lowongan</h5>
                    <div class="sort-by-dark">
                        <label for="sort" class="me-2">Urutkan</label>
                        <select class="form-select form-select-sm" id="sort">
                            <option selected>Terbaru</option>
                            <option value="1">Paling Relevan</option>
                        </select>
                    </div>
                </div>

                <div class="row gy-4">
                    {{-- Ulangi blok ini untuk setiap lowongan --}}
                    <div class="col-md-6">
                        <div class="job-card-dark">
                            <div class="card-header">
                                <img src="https://kerjaku.id/assets/images/company/1649911910-logo-cv-segitiga-sarna-sisi.png" alt="Company Logo" class="company-logo-dark">
                                <div>
                                    <h6 class="job-title-dark">Staff Pajak</h6>
                                    <span class="company-name-dark">CV. Segitiga Sama Sisi</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="job-meta-dark">
                                    <span><i class="bi bi-geo-alt"></i> Kab. Sleman</span>
                                    <span><i class="bi bi-cash-stack"></i> 2jt - 3jt</span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span class="badge status-badge-dark"><i class="bi bi-briefcase"></i> Karyawan Kontrak</span>
                                <a href="#" class="details-link">Lihat Detail <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                    </div>
                    {{-- Akhir blok perulangan --}}

                    {{-- Contoh Lain 1 --}}
                    <div class="col-md-6">
                        <div class="job-card-dark">
                            <div class="card-header">
                                <img src="https://kerjaku.id/assets/images/company/1649902517-logo-pt-anakbangsa-cerdas-digital.png" alt="Company Logo" class="company-logo-dark">
                                <div>
                                    <h6 class="job-title-dark">Web Programmer</h6>
                                    <span class="company-name-dark">PT ANAKBANGSA CERDAS DIGITAL</span>
                                </div>
                            </div>
                            <div class="card-body">
                               <div class="job-meta-dark">
                                    <span><i class="bi bi-geo-alt"></i> Kab. Bantul</span>
                                    <span><i class="bi bi-cash-stack"></i> 2jt - 3jt</span>
                                </div>
                            </div>
                            <div class="card-footer">
                               <span class="badge status-badge-dark"><i class="bi bi-briefcase"></i> Karyawan Tetap</span>
                               <a href="#" class="details-link">Lihat Detail <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                    </div>
                     {{-- Contoh Lain 2 --}}
                    <div class="col-md-6">
                        <div class="job-card-dark">
                             <div class="card-header">
                                <img src="https://companieslogo.com/img/orig/OZAMI.JK-b6c43924.png?t=1699933390" alt="Company Logo" class="company-logo-dark">
                                <div>
                                    <h6 class="job-title-dark">Management Trainee</h6>
                                    <span class="company-name-dark">PT Ozami Inti Sinergi</span>
                                </div>
                            </div>
                            <div class="card-body">
                               <div class="job-meta-dark">
                                    <span><i class="bi bi-geo-alt"></i> Kab. Sleman</span>
                                    <span><i class="bi bi-cash-stack"></i> 2jt - 3jt</span>
                                </div>
                            </div>
                            <div class="card-footer">
                               <span class="badge status-badge-dark"><i class="bi bi-briefcase"></i> Karyawan Kontrak</span>
                               <a href="#" class="details-link">Lihat Detail <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<br>
<br>
<br>
@endsection