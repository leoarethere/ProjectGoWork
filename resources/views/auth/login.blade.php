<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('icon/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/google-font-poppins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <title>{{ $title }}</title>
  </head>
  <body class="login-page">

    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-7">
          
          {{-- PERBAIKAN: Hanya ada satu 'login-card' sebagai pembungkus utama --}}
          <div class="login-card">

            {{-- Notifikasi dipindahkan ke dalam kartu --}}
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if (session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            
            <img src="{{ asset('icon/icon.png') }}" alt="Logo" class="login-logo">
            <div class="login-title">Login dulu</div>
            
            <form action="/login" method="POST">
              @csrf

              <div class="mb-3">
                <label for="email" class="form-label">Alamat email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="emailkamu@example.com" required value="{{ old('email') }}" autofocus>
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Kata sandi</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="kata sandi kamu.." required>
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                <label class="form-check-label" for="remember">Ingat saya</label>
              </div>

              <button type="submit" class="btn btn-primary w-100">Masuk</button>
            </form>

            <div class="text-center mt-3">
              <span style="color:#d1d1e0;">Belum punya akun?</span>
              <a href="/register" class="text-primary text-decoration-underline fw-bold">Daftar</a>
              <br>
            </div>
          </div>

        </div>
      </div>
    </div>

    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/dist/sienna.min.js') }}" defer></script>

    <div class="floating-help">
      <a href="https://wa.me/6285641663056" target="_blank">
        <img src="{{ asset('img/question.png') }}" alt="Butuh Bantuan?">
      </a>
    </div>
  </body>
</html>