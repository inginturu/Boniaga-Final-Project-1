<!DOCTYPE html> 
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="{{url('assets/img/BoniagaLogo.jpg')}}">
  <title>Semua Produk</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/material-kit.css?v=3.1.0') }}" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Inter', sans-serif;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .search-container {
      margin-top: 100px;
      margin-bottom: 30px;
    }

    /* Combined search form styling */
    .combined-search-form {
      position: relative;
      max-width: 800px;
      margin: 0 auto;
      display: flex;
      flex-wrap: nowrap;
      border-radius: 24px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      border: 1px solid #ddd;
      overflow: hidden;
    }

    .category-select {
      width: 160px;
      border: none;
      border-right: 1px solid #ddd;
      padding: 12px 15px;
      font-size: 15px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23333' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: calc(100% - 10px) center;
      background-size: 10px;
      appearance: none;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .category-select:focus {
      outline: none;
    }

    .search-input {
      flex: 1;
      border: none;
      padding: 12px 50px 12px 15px;
      font-size: 15px;
      transition: all 0.2s ease;
    }

    .search-input:focus {
      outline: none;
    }

    .search-button {
      position: absolute;
      right: 5px;
      top: 5px;
      background: #333;
      color: white;
      border: none;
      border-radius: 50%;
      width: 38px;
      height: 38px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .search-button:hover {
      background: #555;
    }

    .combined-search-form:focus-within {
      box-shadow: 0 4px 15px rgba(0,0,0,0.12);
      border-color: #aaa;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 25px;
      margin-bottom: 40px;
    }

    .product-card {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
      background: white;
      height: 100%;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .product-img-container {
      height: 220px;
      position: relative;
      overflow: hidden;
    }

    .product-img {
      height: 100%;
      width: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .product-card:hover .product-img {
      transform: scale(1.05);
    }

    .product-body {
      padding: 16px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .product-title {
      font-weight: 600;
      margin-bottom: 10px;
      font-size: 18px;
      color: #333;
      line-height: 1.3;
    }

    .product-description {
      color: #666;
      font-size: 14px;
      line-height: 1.5;
      margin-bottom: 15px;
      flex-grow: 1;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .product-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: auto;
    }

    .product-price {
      font-weight: 700;
      color: #333;
      font-size: 17px;
    }

    .btn-view {
      padding: 8px 15px;
      border-radius: 4px;
      background-color: white;
      color: #333;
      border: 1px solid #ddd;
      font-size: 14px;
      font-weight: 600;
      transition: all 0.2s ease;
      text-decoration: none;
    }

    .btn-view:hover {
      background-color: #333;
      color: white;
      border-color: #333;
    }

    .pagination-container {
      margin: 40px 0;
      display: flex;
      justify-content: center;
    }

    .pagination {
      display: flex;
      list-style: none;
      padding: 0;
      margin: 0;
      border-radius: 4px;
      overflow: hidden;
    }

    .page-item {
      margin: 0 3px;
    }

    .page-link {
      min-width: 38px;
      height: 38px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #555;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
      font-weight: 500;
      border: 1px solid #ddd;
      transition: all 0.2s ease;
    }

    .page-item.active .page-link {
      background-color: #333;
      color: white;
      border-color: #333;
    }

    .page-item.disabled .page-link {
      color: #aaa;
      pointer-events: none;
      background-color: #f9f9f9;
    }

    .page-link:hover:not(.disabled) {
      background-color: #f1f1f1;
      border-color: #ccc;
    }

    .no-products {
      text-align: center;
      padding: 50px 0;
      color: #666;
      font-size: 18px;
    }

    .active-filters {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin: 20px auto;
      max-width: 800px;
    }

    .filter-tag {
      display: inline-flex;
      align-items: center;
      background: #f0f0f0;
      border-radius: 20px;
      padding: 6px 12px;
      font-size: 14px;
      color: #555;
    }

    .filter-tag .remove-filter {
      margin-left: 6px;
      cursor: pointer;
      color: #888;
      font-size: 16px;
      line-height: 1;
    }

    .filter-tag .remove-filter:hover {
      color: #333;
    }

    @media (max-width: 768px) {
      .product-grid {
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 15px;
      }

      .product-img-container {
        height: 180px;
      }

      .search-container {
        margin-top: 80px;
      }

      .product-title {
        font-size: 16px;
      }
      
      .combined-search-form {
        flex-direction: column;
        border-radius: 12px;
      }
      
      .category-select {
        width: 100%;
        border-right: none;
        border-bottom: 1px solid #ddd;
      }
    }

    @media (max-width: 576px) {
      .product-grid {
        grid-template-columns: 1fr 1fr;
        gap: 12px;
      }

      .product-body {
        padding: 12px;
      }

      .product-img-container {
        height: 160px;
      }

      .product-description {
        display: none;
      }

      .product-footer {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }

      .btn-view {
        width: 100%;
        text-align: center;
      }
    }
  </style>
</head>

<body>
  @include('Home.navbar')

  <div class="container search-container">
    <form action="{{ route('products') }}" method="GET" class="combined-search-form" id="searchForm">
      <select name="category" class="category-select" id="categorySelect">
        <option value="">Semua Kategori</option>
        @foreach($categories as $category)
          <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
      </select>
      
      <input type="text" name="search" class="search-input" placeholder="Cari di Boniaga" value="{{ request('search') }}">
      
      <button type="submit" class="search-button" aria-label="Search">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>
    </form>

    @if(request('search') || request('category'))
      <div class="active-filters">
        @if(request('search'))
          <div class="filter-tag">
            Pencarian: {{ request('search') }}
            <a href="{{ route('products', array_merge(request()->except('search'), ['page' => 1])) }}" class="remove-filter" title="Hapus filter">×</a>
          </div>
        @endif
        
        @if(request('category'))
          <div class="filter-tag">
            Kategori: {{ $categories->find(request('category'))->name }}
            <a href="{{ route('products', array_merge(request()->except('category'), ['page' => 1])) }}" class="remove-filter" title="Hapus filter">×</a>
          </div>
        @endif
      </div>
    @endif
  </div>

  <section class="container">
    @if(count($products) > 0)
      <div class="product-grid">
        @foreach ($products as $product)
          <div class="product-card">
            <div class="product-img-container">
              @if ($product->images->isNotEmpty())
                <img src="{{ asset('storage/product_images/' . basename($product->images->first()->image_path)) }}" class="product-img" alt="{{ $product->name }}">
              @else
                <img src="{{ asset('assets/img/default-product.jpg') }}" class="product-img" alt="Gambar tidak tersedia">
              @endif
            </div>
            <div class="product-body">
              <h5 class="product-title">{{ $product->name }}</h5>
              <p class="product-description">{{ $product->description }}</p>
              <div class="product-footer">
                <span class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                <a href="{{ route('products.show', $product->id) }}" class="btn-view">Lihat Detail</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Pagination Section -->
      <div class="pagination-container">
        {{ $products->withQueryString()->links('pagination::bootstrap-4') }}
      </div>
    @else
      <div class="no-products">
        <p>Tidak ada produk yang ditemukan.</p>
      </div>
    @endif
  </section>

  @include('home.footer')

  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>

  <script>
    // Script untuk melakukan submit form ketika kategori berubah
    document.getElementById('categorySelect').addEventListener('change', function() {
      document.getElementById('searchForm').submit();
    });

    // Script untuk melakukan submit form ketika user menekan Enter pada input pencarian
    document.querySelector('.search-input').addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        document.getElementById('searchForm').submit();
      }
    });
  </script>

</body>

</html>