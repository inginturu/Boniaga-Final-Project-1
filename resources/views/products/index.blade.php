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
    /* CSS tidak diubah */
    .search-container {
      margin-top: 100px;
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

    .product-card {
      margin-bottom: 30px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      height: 100%;
    }

    .product-img {
      height: 200px;
      object-fit: cover;
      width: 100%;
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
    }

    /* NEW PAGINATION STYLES */
    .pagination-container {
      text-align: center;
      margin: 40px 0;
    }

    .pagination {
      display: inline-flex;
      align-items: center;
    }

    .pagination .page-item {
      margin: 0 5px;
    }

    .pagination .page-link {
      width: 36px;
      height: 36px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
      border-radius: 50%;
      font-size: 14px;
      color: #000;
      border: none;
      background-color: transparent;
    }

    .pagination .page-item.active .page-link {
      background-color: #000;
      color: #fff;
    }

    .pagination .page-item.disabled .page-link {
      color: #999;
      pointer-events: none;
    }

    /* Media query for smaller screens */
    @media (max-width: 576px) {
      .pagination .page-link {
        width: 32px;
        height: 32px;
        font-size: 13px;
      }
    }
  </style>
</head>

<body class="blog-author bg-gray-100">
  @include('home.navbar')

  <!-- Input Pencarian -->
  <div class="container search-container">
    <div class="position-relative"> 
      <!-- <input type="text" id="searchInput" class="search-input" placeholder="Cari produk...">
      <span class="search-icon"><i class="fa fa-search"></i></span> -->
      <form action="{{ route('products') }}" method="GET" class="position-relative">
        <input type="text" name="search" class="search-input" placeholder="Cari produk..." value="{{ request('search') }}">
        <span class="search-icon"><i class="fa fa-search"></i></span>
      </form>
    </div>
  </div>



  <section class="container">
    <div class="row row-eq-height" id="productContainer">
      @foreach ($products as $product)
      <div class="col-md-4 col-sm-6">
        <div class="product-wrapper">
          <div class="card product-card">
            @if ($product->images->isNotEmpty())
            <img src="{{ asset('storage/product_images/' . basename($product->images->first()->image_path)) }}"
              class="card-img-top product-img"
              alt="{{ $product->name }}">
            @else
            <img src="{{ asset('assets/img/default-product.jpg') }}" class="card-img-top product-img" alt="Gambar tidak tersedia">
            @endif
            <div class="card-body">
              <h5 class="product-title">{{ $product->name }}</h5>
              <p class="card-text">{{ $product->description }}</p>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <span class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- NEW PAGINATION CODE -->
    <div class="pagination-container text-center my-5">
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
          <!-- Previous button -->
          <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>

          <!-- Page numbers -->
          @php
          $currentPage = $products->currentPage();
          $lastPage = $products->lastPage();
          @endphp

          <!-- First page -->
          <li class="page-item {{ $currentPage == 1 ? 'active' : '' }}">
            <a class="page-link" href="{{ $products->url(1) }}">1</a>
          </li>

          <!-- Handle page 2 & 3 -->
          @if($currentPage <= 4)
            @for($i=2; $i <=min(5, $lastPage); $i++)
            <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
            <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            @else
            <!-- Show ellipsis for skipped pages at the start -->
            <li class="page-item disabled">
              <span class="page-link">...</span>
            </li>

            <!-- Show pages around current page -->
            @for($i = $currentPage - 1; $i <= min($currentPage + 1, $lastPage); $i++)
              <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
              <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
              </li>
              @endfor
              @endif

              <!-- Handle ending pages -->
              @if($currentPage < $lastPage - 3)
                <!-- Show ellipsis for skipped pages at the end -->
                <li class="page-item disabled">
                  <span class="page-link">...</span>
                </li>

                @if($lastPage > 1)
                <li class="page-item {{ $currentPage == $lastPage ? 'active' : '' }}">
                  <a class="page-link" href="{{ $products->url($lastPage) }}">{{ $lastPage }}</a>
                </li>
                @endif
                @elseif($currentPage < $lastPage - 1)
                  @for($i=$currentPage + 2; $i <=$lastPage; $i++)
                  <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                  <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                  </li>
                  @endfor
                  @endif

                  <!-- Next button -->
                  <li class="page-item {{ !$products->hasMorePages() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
        </ul>
      </nav>
    </div>
  </section>

  @include('home.footer')

  <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const cards = document.querySelectorAll('.product-wrapper');

      searchInput.addEventListener('input', function() {
        const keyword = this.value.toLowerCase();
        cards.forEach(card => {
          const title = card.querySelector('.product-title').textContent.toLowerCase();
          const visible = title.includes(keyword);
          card.style.display = visible ? 'block' : 'none';
        });
      });
    });
  </script> -->
</body>

</html>