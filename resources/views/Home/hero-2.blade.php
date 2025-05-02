<!-- AOS CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<!-- Font Awesome for the navigation icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="py-5 position-relative bg-dark mx-n3">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-start mb-4 mt-4" data-aos="fade-right">
        <h3 class="text-white z-index-1 position-relative">Kategori Produk Boniaga</h3>
        <p class="text-white opacity-8 mb-0">Temukan berbagai produk khas budaya Batak yang kami tawarkan.</p>
      </div>
    </div>

    <div class="position-relative">
      <!-- Navigation buttons positioned outside of the carousel -->
      <button class="carousel-nav-btn prev-btn" type="button" data-bs-target="#kategoriCarousel" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
      </button>
      
      <button class="carousel-nav-btn next-btn" type="button" data-bs-target="#kategoriCarousel" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
      </button>
      
      <div id="kategoriCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner px-4">
          @foreach ($categories->chunk(4) as $chunkIndex => $chunk)
            <div class="carousel-item @if ($chunkIndex === 0) active @endif">
              <div class="row">
                @foreach ($chunk as $kategori)
                  <div class="col-lg-3 col-md-6 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="card kategori-card h-100 shadow">
                      <div class="product-image-container">
                        @if ($kategori->image)
                          <img class="img-fluid kategori-image"
                            src="{{ asset('storage/' . $kategori->image) }}"
                            alt="{{ $kategori->name }}">
                        @endif
                      </div>
                      <div class="card-body text-center">
                        <h5 class="card-title mb-2">{{ $kategori->name }}</h5>
                        <p class="card-text small">{{ $kategori->description ?? '' }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* Product Categories Styling */
.kategori-card {
  border-radius: 10px;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  background-color: #fff;
  border: none;
}

.kategori-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
}

.product-image-container {
  height: 200px;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #f8f9fa;
}

.kategori-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.kategori-image:hover {
  transform: scale(1.05);
}

/* Custom navigation buttons */
.carousel-nav-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #fff;
  border: none;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
}

.carousel-nav-btn:hover {
  background-color: #f8f9fa;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.prev-btn {
  left: -5px;
}

.next-btn {
  right: -5px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .product-image-container {
    height: 160px;
  }
  
  .carousel-nav-btn {
    width: 35px;
    height: 35px;
  }
}

@media (max-width: 576px) {
  .product-image-container {
    height: 140px;
  }
}
</style>

<!-- AOS JS (Add at the end of your body) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
    });
  });
</script>