<!-- AOS CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<section class="pb-5 position-relative bg-gradient-dark mx-n3">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-start mb-5 mt-5" data-aos="fade-right">
        <h3 class="text-white z-index-1 position-relative">Kategori Produk Boniaga</h3>
        <p class="text-white opacity-8 mb-0">Temukan berbagai produk khas budaya Batak yang kami tawarkan.</p>
      </div>
    </div>

    <div id="kategoriCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach ($categories->chunk(2) as $chunkIndex => $chunk)
          <div class="carousel-item @if ($chunkIndex === 0) active @endif">
            <div class="row">
              @foreach ($chunk as $kategori)
                <div class="col-md-6 col-12" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                  <div class="card card-profile mt-4 kategori-card shadow-sm">
                    <div class="row">
                      <div class="col-4 mt-n5">
                        <div class="p-3 pe-md-0">
                          @if ($kategori->image)
                            <img class="w-100 border-radius-md shadow-lg"
                              src="{{ asset('storage/' . $kategori->image) }}"
                              alt="{{ $kategori->name }}">
                          @endif
                        </div>
                      </div>
                      <div class="col-8 my-auto">
                        <div class="card-body ps-lg-0">
                          <h5 class="mb-0 text-dark">{{ $kategori->name }}</h5>
                          <p class="mb-0">{{ $kategori->description ?? 'Kategori produk etnik khas dari UMKM Boniaga.' }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>

      <!-- Tombol navigasi -->
      <button class="carousel-control-prev" type="button" data-bs-target="#kategoriCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#kategoriCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>

<style>
.kategori-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.kategori-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
}
</style>
