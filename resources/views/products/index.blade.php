<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{url('assets/img/BoniagaLogo.jpg')}}">
  <title>Semua Produk</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.1.0" rel="stylesheet" />
  <style>
    /* Custom styles */
    .search-container {
      margin-top: 100px;
      /* Tambahkan margin-top untuk menghindari navbar */
      margin-bottom: 30px;
      position: relative;
    }

    .search-input {
      width: 100%;
      padding: 12px 20px;
      border: 1px solid #ddd;
      border-radius: 24px;
      font-size: 16px;
    }

    .search-icon {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #6c757d;
    }

    /* Custom pagination styles */
    .pagination {
      display: flex;
      justify-content: center;
      margin: 30px 0;
    }

    .pagination li {
      margin: 0 5px;
      list-style: none;
    }

    .pagination li a {
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #000;
      text-decoration: none;
      border-radius: 5px;
      font-size: 14px;
    }

    .pagination li.active a {
      background-color: #333;
      color: white;
    }

    .pagination .page-prev a,
    .pagination .page-next a {
      background-color: transparent;
      width: auto;
    }

    .product-card {
      margin-bottom: 30px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      height: 100%;
      /* Memastikan semua kartu memiliki tinggi yang sama */
    }

    .product-img {
      height: 200px;
      object-fit: cover;
      width: 100%;
      /* Memastikan gambar mengisi lebar penuh */
    }

    .product-title {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .product-price {
      font-weight: bold;
      color: #333;
    }

    .product-wrapper {
      height: 100%;
      /* Memastikan wrapper memiliki tinggi yang sama */
      display: flex;
      flex-direction: column;
    }

    .row-eq-height {
      display: flex;
      flex-wrap: wrap;
    }

    .row-eq-height>[class*='col-'] {
      display: flex;
      flex-direction: column;
      margin-bottom: 30px;
      /* Memberikan jarak antar baris */
    }
  </style>
</head>

<body class="blog-author bg-gray-100">
  @include('home.navbar')

  <!-- Input Pencarian -->
  <div class="container search-container">
    <div class="position-relative">
      <input type="text" id="searchInput" class="search-input" placeholder="Cari produk...">
      <span class="search-icon"><i class="fa fa-search"></i></span>
    </div>
  </div>

  <section class="container">
    <div class="row row-eq-height" id="productContainer">
      <!-- Product 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Ulos Batak">
            <div class="card-body">
              <h5 class="product-title">Ulos Batak Ragidup</h5>
              <p class="card-text">Ulos tradisional berkualitas tinggi yang ditenun dengan teknik warisan turun-temurun.</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp 850.000</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Tas Anyaman">
            <div class="card-body">
              <h5 class="product-title">Tas Anyaman Batak</h5>
              <p class="card-text">Tas tangan dengan motif khas Batak yang dibuat dengan teknik anyaman tradisional.</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp 450.000</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Jas Khas Batak">
            <div class="card-body">
              <h5 class="product-title">Jas Modern Motif Batak</h5>
              <p class="card-text">Jas dengan sentuhan modern yang mengintegrasikan motif khas Batak yang elegan.</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp 1.250.000</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Songket Batak">
            <div class="card-body">
              <h5 class="product-title">Songket Batak Premium</h5>
              <p class="card-text">Songket mewah dengan benang emas yang menampilkan keanggunan motif tradisional Batak.</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp 1.750.000</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Product 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Dompet Ulos">
            <div class="card-body">
              <h5 class="product-title">Dompet Kombinasi Ulos</h5>
              <p class="card-text">Dompet dengan desain modern yang dipadukan dengan motif ulos yang otentik.</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp 350.000</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Product 6 -->
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Aksesori Batak">
            <div class="card-body">
              <h5 class="product-title">Set Aksesori Batak</h5>
              <p class="card-text">Kombinasi aksesori tradisional Batak dengan sentuhan modern untuk berbagai kesempatan.</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp 275.000</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Product 7 - Halaman 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Kalung Batak">
            <div class="card-body">
              <h5 class="product-title">Kalung Tradisional Batak</h5>
              <p class="card-text">Kalung dengan desain khas suku Batak yang dibuat dengan material berkualitas.</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp 320.000</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Product 8 - Halaman 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Gelang Batak">
            <div class="card-body">
              <h5 class="product-title">Gelang Batak Klasik</h5>
              <p class="card-text">Gelang dengan motif tradisional Batak yang cocok untuk berbagai acara.</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp 150.000</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Product 9 - Halaman 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Syal Batak">
            <div class="card-body">
              <h5 class="product-title">Syal Batak Elegan</h5>
              <p class="card-text">Syal dengan desain elegan yang terinspirasi dari motif Batak.</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp 200.000</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Product 10 - Halaman 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Kain Batak">
            <div class="card-body">
              <h5 class="product-title">Kain Batak Tradisional</h5>
              <p class="card-text">Kain dengan motif khas Batak yang cocok untuk berbagai acara.</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp 600.000</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Pagination -->
    <div class="container my-4 d-flex justify-content-center">
      <nav>
        <ul class="pagination" id="pagination">
          <!-- Pagination akan diisi oleh JavaScript -->
        </ul>
      </nav>
    </div>
  </section>

  @include('home.footer')

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const productContainer = document.getElementById('productContainer');
      const allProducts = Array.from(productContainer.querySelectorAll('.col-md-4.col-sm-6'));
      const pagination = document.getElementById('pagination');
      const productsPerPage = 6;
      let currentPage = 1;
      let filteredProducts = [...allProducts];

      // Tampilkan produk berdasarkan halaman
      function showPage(products, page) {
        // Sembunyikan semua produk
        allProducts.forEach(card => card.style.display = 'none');

        const start = (page - 1) * productsPerPage;
        const end = start + productsPerPage;

        // Tampilkan produk di halaman aktif
        products.slice(start, end).forEach(card => {
          card.style.display = '';
        });
      }

      // Update tombol pagination aktif
      function updateActivePageButton() {
        const buttons = pagination.querySelectorAll('li.page-item');
        buttons.forEach(btn => btn.classList.remove('active'));
        const activeBtn = pagination.querySelector(`li.page-item[data-page="${currentPage}"]`);
        if (activeBtn) activeBtn.classList.add('active');
      }

      // Setup pagination tombol
      function setupPagination(products) {
        pagination.innerHTML = '';
        const totalPages = Math.ceil(products.length / productsPerPage);
        if (totalPages <= 1) {
          pagination.parentElement.parentElement.style.display = 'none';
          return;
        } else {
          pagination.parentElement.parentElement.style.display = 'flex';
        }

        // Previous
        const prevLi = document.createElement('li');
        prevLi.className = 'page-prev';
        prevLi.innerHTML = `<a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>`;
        prevLi.addEventListener('click', function(e) {
          e.preventDefault();
          if (currentPage > 1) {
            currentPage--;
            showPage(filteredProducts, currentPage);
            updateActivePageButton();
          }
        });
        pagination.appendChild(prevLi);

        // Nomor halaman
        for (let i = 1; i <= totalPages; i++) {
          const li = document.createElement('li');
          li.className = 'page-item';
          li.dataset.page = i;
          if (i === currentPage) li.classList.add('active');
          li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
          li.addEventListener('click', function(e) {
            e.preventDefault();
            currentPage = parseInt(this.dataset.page);
            showPage(filteredProducts, currentPage);
            updateActivePageButton();
          });
          pagination.appendChild(li);
        }

        // Next
        const nextLi = document.createElement('li');
        nextLi.className = 'page-next';
        nextLi.innerHTML = `<a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>`;
        nextLi.addEventListener('click', function(e) {
          e.preventDefault();
          if (currentPage < totalPages) {
            currentPage++;
            showPage(filteredProducts, currentPage);
            updateActivePageButton();
          }
        });
        pagination.appendChild(nextLi);
      }

      // Filter produk
      searchInput.addEventListener('input', function() {
        const keyword = this.value.toLowerCase();
        filteredProducts = allProducts.filter(card => {
          const title = card.querySelector('.product-title').textContent.toLowerCase();
          const desc = card.querySelector('.card-text').textContent.toLowerCase();
          return title.includes(keyword) || desc.includes(keyword);
        });

        currentPage = 1;
        showPage(filteredProducts, currentPage);
        setupPagination(filteredProducts);
      });

      // Inisialisasi
      showPage(filteredProducts, currentPage);
      setupPagination(filteredProducts);
    });
  </script>

</body>

</html>