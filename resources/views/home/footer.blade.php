<footer class="bg-black text-white pt-5 mt-5" style="background-color: #000;">
  <div class="container">
    <div class="row align-items-start text-center text-md-start">
      
      <!-- Logo -->
      @if ($informationStore)
      <div class="col-md-3 mb-4" data-aos="fade-up">
        <!-- <img src="{{ url('assets/img/logo.png') }}" alt="Boniaga Logo" style="max-width: 100px;"> -->
        <img src="{{ asset('storage/' . $informationStore->logo) }}" alt="Boniaga Logo" style="max-width: 100px;">
      </div>

      <!-- Panel Navigasi -->
      <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
        <h6 class="fw-bold text-white">Panel Navigasi</h6>
        <ul class="list-unstyled">
          <li><a href="/" class="text-white text-decoration-none hover-footer">Beranda</a></li>
          <li><a href="/tentangkami" class="text-white text-decoration-none hover-footer">Tentang Boniaga</a></li>
          <li><a href="/products" class="text-white text-decoration-none hover-footer">Jelajah Produk</a></li>
        </ul>
      </div>

      <!-- Kontak -->
      <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
        <h6 class="fw-bold text-white">Kontak</h6>
        <p class="mb-1">{{$informationStore->whatsapp_number}}</p>
        <p class="mb-1">{{$informationStore->email}}</p>
      </div>

      <!-- Lokasi / Google Maps -->
      <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
        <h6 class="fw-bold text-white">Lokasi Kami</h6>
        <p class="mb-1 text-white">{{$informationStore->address}}</p>
        <div class="ratio ratio-4x3">
          @endif
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.315503180652!2d99.16079947501596!3d2.401052097578161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00436a6916f5%3A0x88528d02afd6bceb!2sBoniaga!5e0!3m2!1sid!2sid!4v1746104673762!5m2!1sid!2sid"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

    </div>

    <!-- Garis Horizontal -->
    <hr class="border-top border-light">

    <!-- Copyright -->
    <div class="row">
      <div class="col-12 text-center">
        <p class="mb-0 small">&copy; 2025 <strong>BONIAGA</strong> – Semua Hak Dilindungi</p>
      </div>
    </div>
  </div>
</footer>

<style>
.hover-footer:hover {
  text-decoration: underline;
  color: #ffcc00;
  transition: color 0.3s ease;
}
</style>

