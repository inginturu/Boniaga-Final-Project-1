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
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
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
        <!-- Product 1 -->
        <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card product-card">
            <div style="height: 250px; overflow: hidden;">
              <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98v-lqzqh2jiph5z3c" class="card-img-top product-img" alt="Ulos Batak">
            </div>
            <div class="card-body">
              <h5 class="product-title">Ulos Batak Ragidup</h5>
              <p class="card-text">Ulos tradisional berkualitas tinggi yang ditenun dengan teknik warisan turun-temurun.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="product-price">Rp 850.000</span>
                <!-- <a href="#" class="btn btn-sm btn-outline-red">Lihat Detail</a> -->
              </div>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card product-card">
            <div style="height: 250px; overflow: hidden;">
              <img src="https://i.pinimg.com/736x/d8/cc/c4/d8ccc481e2ac30973e0853f9f76e334c.jpg" class="card-img-top product-img" alt="Tas Anyaman">
            </div>
            <div class="card-body">
              <h5 class="product-title">Tas Anyaman Batak</h5>
              <p class="card-text">Tas tangan dengan motif khas Batak yang dibuat dengan teknik anyaman tradisional.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="product-price">Rp 450.000</span>
                <!-- <a href="#" class="btn btn-sm btn-outline-red">Lihat Detail</a> -->
              </div>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card product-card">
            <div style="height: 250px; overflow: hidden;">
              <img src="https://i.pinimg.com/736x/ad/a2/ee/ada2ee69b5519118fbef19efe669d96c.jpg" class="card-img-top product-img" alt="Jas Khas Batak">
            </div>
            <div class="card-body">
              <h5 class="product-title">Jas Modern Motif Batak</h5>
              <p class="card-text">Jas dengan sentuhan modern yang mengintegrasikan motif khas Batak yang elegan.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="product-price">Rp 1.250.000</span>
                <!-- <a href="#" class="btn btn-sm btn-outline-red">Lihat Detail</a> -->
              </div>
            </div>
          </div>
        </div>
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
