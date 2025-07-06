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
    <title>Registrasi Akun Baru</title>
  </head>
  <body class="login-page">
    <div class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-7">
          <div class="login-card">
            <img src="{{ asset('icon/icon.png') }}" alt="Logo" class="login-logo">
            <div class="login-title">Buat Akun Baru</div>
            <form action="/register" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama lengkap kamu" required value="{{ old('name') }}">
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username unik kamu" required value="{{ old('username') }}">
                @error('username')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Alamat email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="emailkamu@example.com" required value="{{ old('email') }}">
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Kata sandi</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Buat kata sandi" required>
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" placeholder="Ketik ulang kata sandi" required>
              </div>

              {{-- Checkbox "Ingat saya" telah dihapus dari sini --}}

              <button type="submit" class="btn btn-primary w-100 mt-4">Daftar</button>
            </form>

            <div class="text-center mt-3">
              <span style="color:#d1d1e0;">Sudah punya akun?</span>
              <a href="/login" class="text-primary text-decoration-underline" style="font-weight:600;">Masuk</a>
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