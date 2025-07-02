<!doctype html>
<html lang="en">
  <head>
    <!-- Deklarasi tipe dokumen dan bahasa halaman -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon untuk browser -->
    <link rel="icon" type="image/png" href="{{ asset('icon/icon.png') }}">

    <!-- Menambahkan Google Fonts untuk tampilan teks yang lebih menarik -->
    <link rel="stylesheet" href="{{ asset('css/google-font-poppins.css') }}">
    
    <!-- Menghubungkan file CSS utama -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap CSS untuk styling bawaan yang responsif -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
          crossorigin="anonymous">

    <!-- AOS untuk animasi scrolling -->
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <!-- Judul halaman di browser -->
    <title> {{ $title }} </title>
  </head>
  <body style="background-color: #272262" class="text-white">
    
    <!-- Bagian Navigasi -->
    @include('partials.navbar')
    <!-- Akhir dari Navigasi -->

    <!-- Memanggil section hero jika ada -->
    @yield('hero')
    <!-- Bagian utama konten -->
    <br>
    <br>
    <div class="container mt-5">
        @yield('container')
    </div>
    <!-- Akhir dari bagian konten utama -->

    <!-- Footer -->
    @include('partials.footer')
    <!-- Akhir dari Footer -->

    <!-- JavaScript untuk animasi AOS -->
    <script src="{{ asset('js/aos.js') }}"></script>
    
    <!-- Script inisialisasi AOS dengan durasi dan konfigurasi animasi -->
    <script>
        AOS.init({
            duration: 1000, // Durasi animasi dalam milidetik
            once: true,     // Animasi hanya dijalankan sekali
        });
    </script>
    
    <!-- Bootstrap Bundle dengan Popper untuk fungsionalitas -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" 
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/dist/sienna.min.js') }}"
            defer></script>

    <!-- ChatBot -->
    <div class="floating-help">
        <a href="https://wa.me/6285641663056" target="_blank">
            <!-- 
              GANTI GAMBAR DI SINI:
              Pastikan path ini benar sesuai dengan lokasi gambar di server Anda.
              Jika folder 'public' adalah root web Anda, maka path '/img/question.png' sudah benar.
            -->
            <img src="{{ asset('img/question.png') }}" alt="Butuh Bantuan?">
        </a>
    </div>
  </body>
</html>
