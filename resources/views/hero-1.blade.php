<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Produk Unggulan</title>

  <!-- Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- AOS Library -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .product-card {
      transition: transform 0.3s;
      margin-bottom: 20px;
      height: 100%;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .product-img {
      height: 250px;
      object-fit: cover;
      width: 100%;
    }

    .product-title {
      font-weight: 600;
      margin-bottom: 10px;
      min-height: 24px;
    }

    .product-price {
      font-weight: 700;
      color: #e63946;
    }

    .section-title {
      margin-bottom: 40px;
      text-align: center;
    }

    .section-title h2 {
      position: relative;
      display: inline-block;
      padding-bottom: 10px;
    }

    .section-title h2::after {
      content: '';
      position: absolute;
      display: block;
      width: 50px;
      height: 3px;
      background-color: #e63946;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
    }

    /* Red buttons */
    .btn-outline-red {
      color: #dc3545;
      border-color: #dc3545;
    }

    .btn-outline-red:hover {
      color: #fff;
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-red {
      color: #fff;
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-red:hover {
      color: #fff;
      background-color: #c82333;
      border-color: #bd2130;
    }
  </style>
</head>

<body>
  <!-- Produk Unggulan -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <section class="featured-products" id="produk" style="color: black;">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Produk Unggulan</h2>
        </div>

        <div class="row">
          @foreach($featuredProducts as $index => $product)
        <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
        
        <div class="card product-card">
          <div style="height: 250px; overflow: hidden;">
          <img src="{{ asset('storage/' . $product->images->first()?->image_path) }}"
            class="card-img-top product-img" alt="{{ $product->name }}">
          </div>
          <div class="card-body">
          <h5 class="product-title">{{ $product->name }}</h5>
          <p class="card-text">{{ $product->description }}</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-red">Lihat
            Detail</a>
          </div>
          </div>
        </div>
        </div>
      @endforeach
        </div>

        <div class="text-center mt-4" data-aos="zoom-in" data-aos-delay="400">
          <a href="/products" class="btn btn-red">Lihat Semua Produk</a>
        </div>
      </div>
    </section>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true,
      duration: 1000,
    });
  </script>

</body>

</html>