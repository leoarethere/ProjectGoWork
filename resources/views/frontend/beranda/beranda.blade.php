@extends('layouts.main')

{{-- Section khusus untuk hero, agar bisa dipanggil di layout utama --}}
@section('hero')
<section class="hero">
  <div class="container"> 
    <div class="hero-content">
      <h1>Temukan Karier Impianmu</h1>
      <p>Ayo, Carilah Pekerjaan Impianmu Bersama GoWork</p>
      <br>
      <div class="hero-buttons">
        {{-- Tombol untuk mencari pekerjaan dan menemukan perusahaan --}}
        <a href="/lowongan" class="btn btn-primary">Cari Pekerjaan</a>
        <a href="/perusahaan" class="btn btn-secondary">Temukan Perusahaan</a>
      </div>
    </div>
  </div>
</section>
@endsection

@section('container')

<section class="py-5" data-aos="fade-up">
  <div class="container">
    <h2 class="text-center h5 fw-semibold text-white" data-aos="fade-up">
      Dipercaya oleh tim paling inovatif di dunia, seperti :
    </h2>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-5 gy-5 gx-4 align-items-center justify-content-center mt-1" data-aos="fade-up" data-aos-delay="100">
      <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
        <img class="logo-img" src="https://tailwindcss.com/plus-assets/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
      </div>
      <div class="col text-center" data-aos="fade-up" data-aos-delay="300">
        <img class="logo-img" src="https://tailwindcss.com/plus-assets/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
      </div>
      <div class="col text-center" data-aos="fade-up" data-aos-delay="400">
        <img class="logo-img" src="https://tailwindcss.com/plus-assets/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
      </div>
      <div class="col text-center" data-aos="fade-up" data-aos-delay="500">
        <img class="logo-img" src="https://tailwindcss.com/plus-assets/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
      </div>
      <div class="col text-center" data-aos="fade-up" data-aos-delay="600">
        <img class="logo-img" src="https://tailwindcss.com/plus-assets/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
      </div>
    </div>
  </div>
</section>

<section id="about" class="about section" data-aos="fade-up">
  <section id="layanan-kami" class="faq section line" data-aos="fade-up">
  <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-up">
      <div class="content col-xl-5 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
        <h3>Ayo, Carilah Pekerjaan Impianmu Sekarang!</h3>
        <p>
          Temukan ribuan lowongan kerja terbaru dari perusahaan ternama 
          dan raih karier impian Anda. Mulai pencarian sekarang dengan GoWork 
          dan wujudkan masa depan yang lebih cerah
        </p>
        <button class="btn btn-primary" type="button" data-aos="fade-up" data-aos-delay="200">Bergabung Sekarang ></button>
      </div>
      <div class="col-xl-7" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4"> 
          <div class="col-md-6 icon-box position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-briefcase"></i>
            <h4><a>Efisien</a></h4>
            <p>Memberikan solusi praktis dengan hasil maksimal, memungkinkan pekerjaan selesai dengan lebih cepat dan efektif</p>
          </div>
          <div class="col-md-6 icon-box position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-gem"></i>
            <h4><a>Aman</a></h4>
            <p>Menjamin perlindungan optimal dengan sistem terpercaya, sehingga risiko dapat diminimalkan dalam setiap proses</p>
          </div>
          <div class="col-md-6 icon-box position-relative" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-broadcast"></i>
            <h4><a>Mudah</a></h4>
            <p>Didesain untuk memberikan pengalaman yang intuitif dan tanpa hambatan, membuat setiap langkah lebih sederhana dan nyaman</p>
          </div>
          <div class="col-md-6 icon-box position-relative" data-aos="fade-up" data-aos-delay="600">
            <i class="bi bi-easel"></i>
            <h4><a>Terpercaya</a></h4>
            <p>Didukung oleh kualitas dan reputasi yang teruji, memastikan keandalan serta kepuasan pengguna dalam jangka panjang</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
</section>

<section data-aos="fade-up">
  <section id="layanan-kami" class="faq section line" data-aos="fade-up">

  <div class="text-center mb-5" data-aos="fade-up">
  <h2 class="pxp-section-h2">Layanan Unggulan Kami</h2>
  <p class="pxp-text-light">Temukan berbagai layanan yang kami tawarkan untuk membantu karier Anda.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" data-aos="fade-up">
  <div class="col" data-aos="fade-up" data-aos-delay="200">
    <div class="card h-100">
    <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Tim Bekerja">
    <div class="card-body">
      <h5 class="card-title">Pengembangan Karier</h5>
      <p class="card-text">Sesi konsultasi personal untuk membantu Anda merancang jalur karier yang tepat dan mencapai potensi maksimal Anda.</p>
      <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
    </div>
    </div>
  </div>
  <div class="col" data-aos="fade-up" data-aos-delay="300">
    <div class="card h-100">
    <img src="https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Analisis Data">
    <div class="card-body">
      <h5 class="card-title">Review CV Profesional</h5>
      <p class="card-text">Tim ahli kami akan mereview dan memberikan masukan untuk membuat CV Anda menonjol di mata perekrut.</p>
      <a href="#" class="btn btn-primary">Mulai Sekarang</a>
    </div>
    </div>
  </div>
  <div class="col" data-aos="fade-up" data-aos-delay="400">
    <div class="card h-100">
    <img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Diskusi Tim">
    <div class="card-body">
      <h5 class="card-title">Simulasi Wawancara</h5>
      <p class="card-text">Latih kemampuan wawancara Anda dengan para profesional HR untuk meningkatkan kepercayaan diri Anda.</p>
      <a href="#" class="btn btn-primary">Jadwalkan Sesi</a>
    </div>
    </div>
  </div>
  </div>
</section>

  <br>
  <br>

<section id="faq" class="faq section line" data-aos="fade-up">
  <div class="container" data-aos="fade-up">
    @include('partials.faq')
  </div>
</section>
<br>
<br>
<br>
<br>
@endsection
