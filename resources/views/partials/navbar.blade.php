<!-- Menghubungkan file CSS utama untuk styling -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- =========================
     Navigation Bar
========================= -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #4A276B;">
  <div class="container">
    
    <!-- Logo dan nama brand -->
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="{{ asset('icon/icon.png') }}" alt="GoWork Logo" style="height: 50px; margin-right: 12px;">
      <span class="fw-bold fs-2"> GoWork </span>
    </a>

    <!-- Tombol Toggle untuk navigasi di tampilan mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu navigasi utama -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <!-- Link menuju Beranda -->
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Beranda') ? 'active' : '' }}" href="/">Beranda</a>
        </li>

        <!-- Link menuju halaman Lowongan -->
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Daftar Lowongan') ? 'active' : '' }}" href="/lowongan">Lowongan</a>
        </li>

        <!-- Link menuju halaman Jelajahi Perusahaan -->
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Jelajahi Perusahaan') ? 'active' : '' }}" href="/perusahaan">Jelajahi Perusahaan</a>
        </li>

        <!-- Link menuju halaman Tips & Trik -->
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Tips & Trik') ? 'active' : '' }}" href="/tips-&-trik">Tips & Trik</a>
        </li>

        <!-- Link menuju halaman Blog -->
        <li class="nav-item">
          <a class="nav-link {{ request()->is('berita*') ? 'active' : '' }}" href="/berita">Berita</a>
        </li>

        <!-- Link menuju halaman Tentang -->
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Tentang') ? 'active' : '' }}" href="/tentang">Tentang</a>
        </li>

        <!-- Link menuju halaman Kategori Berita -->
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($title === 'Kategori Berita') ? 'active' : '' }}" href="/berita/categories">Kategori Berita</a>
        </li> --}}

      </ul>

      <!-- Grup tombol masuk/daftar -->
      <div class="d-flex">
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Masuk
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="/login">Masuk</a></li>
            <li><a class="dropdown-item" href="/register"></i>Daftar</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</nav>
<!-- End of Navigation Bar -->
