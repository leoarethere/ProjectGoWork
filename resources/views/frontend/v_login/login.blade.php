<!-- filepath: c:\laragon\www\GoWork\resources\views\frontend\v_login\login.blade.php -->
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
    <div class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">
      <div class="login-card">
        <img src="{{ asset('icon/icon.png') }}" alt="Logo" class="login-logo">
        <div class="login-title">Login dulu</div>
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="emailkamu@example.com">
            <div id="emailHelp" class="form-text">Kami tidak akan membagikan email Anda.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kata sandi</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="kata sandi kamu..">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
          </div>
          <button type="submit" class="btn btn-primary w-100">Masuk</button>
        </form>
        <div class="text-center mt-3">
          <a href="#" class="text-light text-decoration-underline" style="font-size:0.95rem;">Lupa password?</a>
        </div>
        <div class="text-center mt-2">
          <span style="color:#d1d1e0;">Belum punya akun?</span>
          <a href="#" class="text-primary text-decoration-underline" style="font-weight:600;">Daftar</a>
        </div>
      </div>
    </div>

    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/dist/sienna.min.js') }}" defer></script>

    <!-- ChatBot -->
    <div class="floating-help">
        <a href="https://wa.me/6285641663056" target="_blank">
            <img src="{{ asset('img/question.png') }}" alt="Butuh Bantuan?">
        </a>
    </div>
  </body>
</html>