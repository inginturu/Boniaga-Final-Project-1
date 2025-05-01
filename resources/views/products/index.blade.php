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

    .search-form {
      position: relative;
      max-width: 600px;
      margin: 0 auto;
    }

    .search-input {
      width: 100%;
      padding: 14px 50px 14px 20px;
      border: 1px solid #ddd;
      border-radius: 24px;
      font-size: 16px;
      transition: all 0.3s ease;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .search-input:focus {
      border-color: #aaa;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
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
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .search-button:hover {
      background: #555;
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

    /* NEW PAGINATION STYLES */
    .pagination-container {
      text-align: center;
      margin: 40px 0;
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
  @include('home.navbar')

  <div class="container search-container">

    <form action="{{ route('products') }}" method="GET" class="search-form">
      <input type="text" name="search" class="search-input" placeholder="Cari produk..." value="{{ request('search') }}">
      <button type="submit" class="search-button" aria-label="Search">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>
    </form>

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
    @endif

  </section>

  @include('home.footer')

  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>

</body>

</html>
