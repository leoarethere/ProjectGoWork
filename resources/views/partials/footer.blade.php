<!-- Footer -->
<footer id="footer" class="footer bg-dark text-white py-4">
  <div class="container">
    <br>
    <div class="row gy-4">

      <!-- Bagian informasi utama dan kontak -->
      <div class="col-lg-4 col-md-6 mb-4">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center mb-2 text-white text-decoration-none">
          <span class="fw-bold fs-3">GoWork LaB/></span>
        </a>
        <div class="footer-contact">
          <p>Jl. Ringroad Barat, Ambarketawang, Gamping, Sleman, Daerah Istimewa Yogyakarta</p>

          <!-- Link WhatsApp untuk kontak langsung -->
          <a href="https://wa.me/6285641663056" class="text-white text-decoration-none">
            <strong>Kontak:</strong><span>+62 812 3456 7890</span>
          </a>
          <br>

          <!-- Informasi email -->
          <p><strong>Email:</strong> <span>info@gowork.com</span></p>
        </div>

        <!-- Sosial media -->
        <div class="social-links d-flex mt-3">
          <a href="#" class="me-2 text-white"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="me-2 text-white"><i class="bi bi-facebook"></i></a>
          <a href="#" class="me-2 text-white"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Bagian tautan berguna -->
      <div class="col-lg-2 col-md-3 mb-4">
        <h5>Useful Links</h5>
        <ul class="list-unstyled">
          <li><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
          <li><a href="#" class="text-white text-decoration-none">About us</a></li>
          <li><a href="#" class="text-white text-decoration-none">Services</a></li>
          <li><a href="#" class="text-white text-decoration-none">Terms of service</a></li>
          <li><a href="#" class="text-white text-decoration-none">Privacy policy</a></li>
        </ul>
      </div>

      <!-- Bagian layanan perusahaan -->
      <div class="col-lg-2 col-md-3 mb-4">
        <h5>Our Services</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none">Web Design</a></li>
          <li><a href="#" class="text-white text-decoration-none">Web Development</a></li>
          <li><a href="#" class="text-white text-decoration-none">Product Management</a></li>
          <li><a href="#" class="text-white text-decoration-none">Marketing</a></li>
          <li><a href="#" class="text-white text-decoration-none">Graphic Design</a></li>
        </ul>
      </div>

      <!-- Bagian newsletter -->
      <div class="col-lg-4 col-md-12">
        <h5>Our Newsletter</h5>
        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>

        <!-- Form berlangganan newsletter -->
        <form action="#" method="post" class="d-flex">
          <input type="email" name="email" class="form-control me-2" placeholder="Your email" required>
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
      </div>
    </div>

    <!-- Garis pemisah sebelum hak cipta -->
    <hr class="bg-secondary my-4">

    <!-- Hak cipta dan desain oleh tim -->
    <div class="text-center">
      <h6 class="mb-1">&copy; {{ date('Y') }} <strong>GoWork</strong>. All Rights Reserved.</h6>
      <small>Designed by <a href="/" class="text-white text-decoration-underline">GoWork & The Crew</a></small>
    </div>
  </div>
</footer>
<!-- End of Footer -->